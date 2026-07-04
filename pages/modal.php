<?php
/**
 * modal.php
 *
 * Provides a generic, reusable modal structure.
 * This can be included in a page and then populated with content (like a form)
 * and controlled via JavaScript.
 */
?>
<link rel="stylesheet" href="./static/css/admincss/formmodal.css">
<!-- Generic Reusable Modal -->
<div id="formModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <div class="contact-form-panel">
                <h3 class="form-title">Enquiry Form</h3>
                <form id="enquiryForm" method="POST">

                    <div class="form-grid">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" required>
                        </div>

                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company">
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email">
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone">
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="country">
                    </div>

                    <div class="form-group">
                        <label>Product Requirement</label>
                        <input type="text" name="requirement">
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" rows="5" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="submit-btn">

                            <span class="btn-text">Send Message</span>

                            <i class="fa-solid fa-paper-plane"></i>

                        </button>
                    </div>

                </form>
            </div>
    </div>
</div>
<script src="./static/js/modal.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./static/adminjs/formajax.js"></script>