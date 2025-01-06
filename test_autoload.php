<?php
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

if (class_exists(PHPMailer::class)) {
    echo "PHPMailer loaded successfully!";
} else {
    echo "PHPMailer not found!";
}