<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: /dashboard/');
    exit;
} else {
    header('Location: /dashboard/');
    exit;
}
