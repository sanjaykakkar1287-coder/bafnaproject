<!-- Link to the new stylesheet for this page -->


<div class="contact-page-container">
    <div class="contact-shell">
        <!-- Page Header -->
        <div class="contact-hero-header">
            <span class="contact-pre-title">GET IN TOUCH</span>
            <h1 class="contact-main-title">Let's Build Long-Term Partnerships</h1>
            <p class="contact-subtitle">
                Whether you're looking for a manufacturing partner, sourcing products for domestic markets, or exploring international opportunities, we would be delighted to hear from you.
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="contact-grid">

            <!-- Left Column: Contact Information -->
            <div class="contact-info-panel">
                <div class="info-block">
                    <h3 class="info-title">CORPORATE OFFICE</h3>
                    <p class="info-text">
                        <i class="fa-solid fa-building"></i>
                        <span>P P Bafna Ventures Pvt. Ltd.<br>World Trade Center, Kharadi, Pune, Maharashtra, India</span>
                    </p>
                </div>

                <div class="info-block">
                    <h3 class="info-title">MANUFACTURING FACILITIES</h3>
                    <ul class="facility-list">
                        <li><i class="fa-solid fa-industry"></i><span><b>Pune, Maharashtra</b><br>Corporate HQ & Primary Unit</span></li>
                        <li><i class="fa-solid fa-industry"></i><span><b>Guwahati, Assam</b><br>Regional Facility</span></li>
                        <li><i class="fa-solid fa-industry"></i><span><b>Noida, Uttar Pradesh</b><br>Advanced Production Facility</span></li>
                        <li><i class="fa-solid fa-industry"></i><span><b>Gujarat</b><br>Joint Venture Facility</span></li>
                    </ul>
                </div>

                <div class="info-block">
                    <h3 class="info-title">EMAIL</h3>
                    <p class="info-text">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:info@ppbafna.com">info@ppbafna.com</a>
                    </p>
                </div>

                <div class="info-block">
                    <h3 class="info-title">PHONE</h3>
                    <p class="info-text">
                        <i class="fa-solid fa-phone"></i>
                        <span>(Official number)</span>
                    </p>
                </div>
            </div>

            <!-- Right Column: Enquiry Form -->
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
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./static/adminjs/formajax.js"></script>