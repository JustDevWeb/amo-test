<?php

use AmoCRM\Client\AmoCRMApiClient;
use Symfony\Component\Dotenv\Dotenv;

include_once __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env.dist');

$clientId = $_ENV['CLIENT_ID'];
$clientSecret = $_ENV['CLIENT_SECRET'];
$redirectUri = $_ENV['CLIENT_REDIRECT_URI'];
$subdomain = $_ENV['SUBDOMAIN'];
$account_subdomain = $_ENV['ACCOUNT_SUBDOMAIN_LINK'];

$apiClient = new AmoCRMApiClient($clientId, $clientSecret, $redirectUri);
$apiClient->setAccessToken(new \League\OAuth2\Client\Token\AccessToken(['access_token'=>$_ENV['ACCESS_TOKEN'],'expires_in'=>strtotime('+1 year')]));
$apiClient->setAccountBaseDomain($account_subdomain);

//include_once __DIR__ . '/token_actions.php';
include_once __DIR__ . '/error_printer.php';
