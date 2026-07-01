<?php
/**
 * sitemap.php
 *
 * Dynamically generates a sitemap.xml for SEO purposes.
 * It scans the project directory for public-facing PHP files and can include
 * dynamic URLs from a database.
 *
 * To be used with an .htaccess rewrite rule:
 * RewriteRule ^sitemap\.xml$ sitemap.php [L]
 */

require_once './db/config.php'; // For database-driven URLs

// --- CONFIGURATION ---

// Set the base URL of your website.
// It's recommended to set this manually for consistency.
// Example: 'https://www.yourdomain.com'
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$domainName = $_SERVER['HTTP_HOST'];
$baseUrl = $protocol . "://" . $domainName;

// Directories to exclude from the sitemap scan.
$excludedDirs = ['admin', 'ajax', 'config', 'db', 'includes', 'vendor', 'uploads', 'assets', 'node_modules', '.git', 'static'];

// Specific files to exclude from the sitemap.
$excludedFiles = ['sitemap.php', 'database.php', 'connection.php', 'header.php', 'footer.php', 'functions.php', 'createpass.php', 'contactform.php', 'phplogin.php', 'logout.php', 'enquiry.php'];

// --- SITEMAP GENERATION ---

header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

/**
 * Function to add a URL to the sitemap.
 *
 * @param string $loc URL of the page.
 * @param string $lastmod Last modification date (YYYY-MM-DD).
 * @param string $changefreq How frequently the page is likely to change.
 * @param string $priority The priority of this URL relative to other URLs on your site.
 */
function addUrl($loc, $lastmod, $changefreq = 'monthly', $priority = '0.8') {
    echo '  <url>' . PHP_EOL;
    echo '    <loc>' . htmlspecialchars($loc) . '</loc>' . PHP_EOL;
    echo '    <lastmod>' . $lastmod . '</lastmod>' . PHP_EOL;
    echo '    <changefreq>' . $changefreq . '</changefreq>' . PHP_EOL;
    echo '    <priority>' . $priority . '</priority>' . PHP_EOL;
    echo '  </url>' . PHP_EOL;
}

// 1. Add the homepage (index.php) with top priority.
addUrl($baseUrl . '/', date('Y-m-d', filemtime('index.php')), 'daily', '1.0');

// 2. Scan the directory for other PHP files.
$rootDir = new RecursiveDirectoryIterator(
    __DIR__,
    FilesystemIterator::SKIP_DOTS
);

$iterator = new RecursiveIteratorIterator($rootDir);

foreach ($iterator as $file) {
    // --- Skip conditions ---
    if ($file->isDir()) continue;
    if ($file->getExtension() !== 'php') continue;

    $pathname = $file->getPathname();
    $filename = $file->getFilename();

    // Skip if the file starts with an underscore.
    if (strpos($filename, '_') === 0) continue;

    // Skip if the file is in an excluded directory.
    $inExcludedDir = false;
    foreach ($excludedDirs as $dir) {
        if (strpos(str_replace('\\', '/', $pathname), '/' . $dir . '/') !== false) {
            $inExcludedDir = true;
            break;
        }
    }
    if ($inExcludedDir) continue;

    // Skip if the file is in the excluded files list.
    if (in_array($filename, $excludedFiles)) continue;

    // --- Add URL to sitemap ---
    // Create a clean URL (e.g., /about from /about.php)
    $pageUrl = str_replace('.php', '', $filename);

    // Don't add index again.
    if ($pageUrl === 'index') continue;

    $loc = $baseUrl . '/' . $pageUrl;
    $lastmod = date('Y-m-d', $file->getMTime());
    addUrl($loc, $lastmod, 'monthly', '0.8');
}

/*
// 3. (Optional) Add dynamic URLs from the database (e.g., products, blog posts).
// This is a placeholder example. You would need a 'products' table with a 'slug' and 'updated_at' column.

$sql = "SELECT slug, updated_at FROM products WHERE status = 'published' ORDER BY updated_at DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $loc = $baseUrl . '/products/' . htmlspecialchars($row['slug']);
        $lastmod = date('Y-m-d', strtotime($row['updated_at']));
        addUrl($loc, $lastmod, 'weekly', '0.9');
    }
}

$result->close();
*/

echo '</urlset>';

$conn->close();
?>