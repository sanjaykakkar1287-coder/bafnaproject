$(document).on("keydown", function (e) {
    console.log(e);
    const key = e.key.toLowerCase();

    if ((e.ctrlKey || e.metaKey) && key === "l") {
        e.preventDefault();
        window.location.href = "./admin/login.php";
    }
});