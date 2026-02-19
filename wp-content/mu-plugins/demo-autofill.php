<?php
/**
 * Auto-fill login credentials for demo site.
 */
add_action('login_enqueue_scripts', function () {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var user = document.getElementById('user_login');
        var pass = document.getElementById('user_pass');
        if (user) user.value = 'admin';
        if (pass) pass.value = 'password';
    });
    </script>
    <?php
});
