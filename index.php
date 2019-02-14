<?php

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$bot = new \TelegramBot\Api\BotApi(getenv('REBELS_BOT_TOKEN'));

$bot->sendMessage(getenv('REBELS_GROUP_ID'), "Thursday, it is thursday!  To wear our team t-shirts time!  Forget to put it on leaving home, do not!");
