<?php
session_start();

// Generate random CAPTCHA string
$captchaString = generateCaptchaString();

// Store CAPTCHA string in session
$_SESSION['captcha'] = $captchaString;

// Generate CAPTCHA image
$im = imagecreatetruecolor(100, 50);
$textColor = imagecolorallocate($im, 0, 0, 0);
imagestring($im, 5, 10, 20, $captchaString, $textColor);

// Set the content type header
header('Content-type: image/png');

// Output the image
imagepng($im);
imagedestroy($im);

function generateCaptchaString() {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $captchaString = '';
    $length = 6; // Adjust the length of the CAPTCHA string as needed
    for ($i = 0; $i < $length; $i++) {
        $captchaString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $captchaString;
}
?>
