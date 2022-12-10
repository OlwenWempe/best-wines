<?php

namespace App\partials;

require_once 'src/partials/_start_session.php';

if (isset($_SESSION['user']['auth']) && $_SESSION['user']['auth']) {
    header('Location: to-do.php');
    exit;
}