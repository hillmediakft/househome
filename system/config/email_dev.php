<?php
/**
 * PHPMAILER_DEBUG_MODE
 * 
 * SMTP::DEBUG_OFF (0): Disable debugging (you can also leave this out completely, 0 is the default).
 * SMTP::DEBUG_CLIENT (1): Output messages sent by the client.
 * SMTP::DEBUG_SERVER (2): as 1, plus responses received from the server (this is the most useful setting).
 * SMTP::DEBUG_CONNECTION (3): as 2, plus more information about the initial connection - this level can help diagnose STARTTLS failures.
 * SMTP::DEBUG_LOWLEVEL (4): as 3, plus even lower-level information, very verbose, don't use for debugging SMTP, only low-level problems.
 */
$config = array(
    'from_email' => 'varnagy.zsolt@onlinemarketingguru.hu',
    'from_name' => 'Challenge_dev',
    'server' => array(
        'phpmailer_debug_mode' => 0,
        'use_smtp' => true,
        'smtp_host' => 'mail.onlinemarketingguru.hu',
        'smtp_auth' => true,
        'smtp_username' => 'varnagy.zsolt@onlinemarketingguru.hu',
        'smtp_password' => 's56f2jk9',
        'smtp_port' => 465,
        'smtp_encryption' => 'ssl'
    )
);
?>