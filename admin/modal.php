<?php
/**
 * modal.php
 *
 * Provides a generic, reusable modal structure.
 * This can be included in a page and then populated with content (like a form)
 * and controlled via JavaScript.
 */
?>
<!-- Generic Reusable Modal -->
<div id="formModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h2 id="modalTitle"></h2>
        <div id="modalBody"></div>
    </div>
</div>