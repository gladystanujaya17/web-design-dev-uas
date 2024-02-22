<?php
//melakukan start session karena sebelumnya sudah login
session_start();

//clear variabel session seperti uname & pass
session_unset();

//menghapuskan session
session_destroy();

header('Location: ../index.php');
?>