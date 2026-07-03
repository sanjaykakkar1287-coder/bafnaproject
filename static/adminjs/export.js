/**
 * export.js
 *
 * Handles the client-side logic for exporting data to a CSV file.
 * It listens for a click on an export button and initiates a download
 * by redirecting to the server-side export script.
 */
$(document).ready(function () {

    
     $('.btn-export-csv').on('click', function(e) {
        e.preventDefault(); // Prevent the default link behavior
         
        const $button = $(this);
        const originalBtnText = $button.html(); // Use .html() to keep icons

        // Disable the button and show a loading state
        $button.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Exporting...');

        // The URL of the PHP script that generates the CSV
        const exportUrl = 'exportcsv.php';

        // We trigger the download by setting the window's location.
        // The browser will handle the file download dialog based on the
        // headers sent by exportcsv.php.
        window.location.href = exportUrl;

        // Since we can't reliably detect when the download has started or finished
        // from a simple redirect, we'll re-enable the button after a short delay.
        // This provides a good user experience by preventing rapid-fire clicks
        // while not leaving the button disabled forever.
        setTimeout(function () {
            $button.prop('disabled', false).html(originalBtnText);
        }, 6000); // Re-enable after 2 seconds
    });

});

/**
 * To make this work, you will need:
 * 1. A button in your HTML:
 *    <a href="exportcsv.php" class="btn btn-primary btn-export-csv"><i class="fas fa-file-csv"></i> Export Enquiries</a>
 *
 * 2. A PHP script `exportcsv.php` that queries the database and sends the correct
 *    headers for a CSV file download, like:
 *    header('Content-Type: text/csv');
 *    header('Content-Disposition: attachment; filename="enquiries.csv"');
 */