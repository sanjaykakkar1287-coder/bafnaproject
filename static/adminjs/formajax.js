$(document).on("submit", "#enquiryForm", function(e){

    e.preventDefault();

    let formData = $(this).serialize();

    let btn = $(".submit-btn");
    let oldText = btn.html();

    btn.prop("disabled", true);
    btn.html("Please Wait...");

    $.ajax({

        url:"./admin/enquiry.php",
        type:"POST",
        data: formData + "&action=enquiry",

        success:function(response){

            response = $.trim(response);

            if(response=="success"){

                Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: "Enquiry Submitted Successfully."
                }).then(() => {
                    $('#formModal').hide(); // Hide the modal
                    $("#enquiryForm")[0].reset(); // Reset the form
                });
                

            }else{

                Swal.fire({
                    icon:"error",
                    title:"Error",
                    text:"Something went wrong."
                });

            }

        },

        error:function(){

            Swal.fire({
                icon:"error",
                title:"Server Error",
                text:"Unable to connect."
               
            });
             
        },

        complete:function(){

            btn.prop("disabled",false);
            btn.html(oldText);

        }

    });

});