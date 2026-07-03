$(document).on("keydown", function (e) {

    if (e.ctrlKey && e.key.toLowerCase() === "l") {
        e.preventDefault(); // Prevent default browser action (may not work in all browsers)
        window.location.href = "./admin/login.php";
    }

});