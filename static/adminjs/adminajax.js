$(document).ready(function () {

    $(".loginbtn").on("click", function (e) {
        e.preventDefault();
     
        const $form = $("#loginForm");
        const $loginBtn = $(".loginbtn");
        const originalBtnText = $loginBtn.text();
        let formData = $form.serialize();

        // Disable button and show loading text
        $loginBtn
            .prop("disabled", true)
            .text("Please Wait...");

       $.ajax({
    url: "login.php",
    type: "POST",
    data: formData + "&action=login",

    success: function(response) {

        response = $.trim(response);

        if (response == "success") {

            Swal.fire({
                icon: "success",
                title: "Login Successful!",
                timer: 1500,
                showConfirmButton: false
            }).then(() => {
                window.location.href = "dashboard.php";
            });

        } else {
            $loginBtn.prop("disabled", false)
             .text(originalBtnText);


            Swal.fire({
                icon: "error",
                title: "Login Failed",
                text: "Invalid Username or Password"
                
            })
        }

    },

    error: function(xhr) {
        console.log(xhr.responseText);
    }

});
    });

});


