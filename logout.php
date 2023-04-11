<?php

include 'function.php';
session_destroy();
unset($_SESSION['login_maedonor']);
redirect('index.php');
