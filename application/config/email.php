<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $this->load->library('email');
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com'; // e.g., 'smtp.example.com'
$config['smtp_port'] = '587'; // You might need to change this based on your email service provider
$config['smtp_user'] = 'anilbmdu@gmail.com'; // Your SMTP username
$config['smtp_pass'] = 'Anil@7379'; // Your SMTP password
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['newline'] = "\r\n";

