<!-- Change Password Modal -->
 <link rel="stylesheet" href="../static/css/admincss/changepasswordmodal.css">
    <div id="changePasswordModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Change Password</h2>
            <form id="changePasswordForm">
                <div class="input-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" id="current_password" name="current_password" required>
                </div>
                <div class="input-group">
                    <label for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password" required>
                </div>
                <div class="input-group">
                    <label for="confirm_password">Confirm New Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Password</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../static/adminjs/changepassword.js"></script>

  
    <script src="../static/adminjs/openchangemodal.js"></script>