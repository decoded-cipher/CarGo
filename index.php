<?php
if (!headers_sent()) {
        header('location:login.php');
    } else {
        echo '<script>location.href="login.php"</script>';
    }
    ?>