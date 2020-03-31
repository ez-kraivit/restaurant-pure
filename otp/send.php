<?php
    require 'vendor/autoload.php';
    use Maythiwat\WalletAPI;
    $tw = new WalletAPI();
    // Login with Email & Password
    $tw->GetToken('christkraivit2541@gmail.com', 'kraivit2502@');
    print_r($tw);
