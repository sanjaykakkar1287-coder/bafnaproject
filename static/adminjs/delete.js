$(document).ready(function () {

    // Use event delegation for the delete button
    // This ensures it works even if the table is updated via AJAX in the future
    $(document).on('click', '.btn-delete', function (e) {
        e.preventDefault();

        const $button = $(this);
        const $row = $button.closest('tr');
        const enquiryId = $row.find('td:first').text().trim();

        if (!enquiryId) {
            console.error("Could not find enquiry ID.");
            return;
        }

        // Confirmation dialog using SweetAlert2
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Proceed with deletion
                $.ajax({
                    url: 'delete.php', // The PHP script to handle the deletion
                    type: 'POST',
                    data: {
                        id: enquiryId,
                        action: 'delete_enquiry'
                    },
                    success: function (response) {
                        response = $.trim(response);
                        if (response === 'success') {
                            Swal.fire('Deleted!', 'The enquiry has been deleted.', 'success');
                            // Animate and remove the row from the table
                            $row.fadeOut(500, function () {
                                $(this).remove();
                            });
                        } else {
                            Swal.fire('Error!', 'Could not delete the enquiry. Please try again.', 'error');
                        }
                    },
                    error: function () {
                        Swal.fire('Server Error!', 'Could not connect to the server.', 'error');
                    }
                });
            }
        });
    });

});