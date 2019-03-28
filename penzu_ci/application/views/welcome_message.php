<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Write In Private: Free Online Diary And Personal Journal | Penzu</title>
</head>

<body>
    <div class=container>
        <img src="assets/img/pz-logo__red.png" alt="">
    </div>
    <div id="container">
        <h1>Welcome to CodeIgniter!</h1>

        <div id="body">
            <p>coba coba</p>

            <p>If you would like to edit this page you'll find it located at:</p>
            <code>application/views/welcome_message.php</code>

            <p>The corresponding controller for this page is found at:</p>
            <code>application/controllers/Welcome.php</code>

            <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a
                    href="user_guide/">User Guide</a>.</p>
        </div>

        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
            <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
        </p>
    </div>

</body>

</html>