<?php

/**
 * Taco Wednessday Bot
 */

require_once 'loader.php';

$bot = new \TelegramBot\Api\BotApi(getenv('REBELS_JAR_JAR_BINKS_TOKEN'));

$bot->sendMessage(getenv('REBELS_GROUP_ID'), "isa taco wednesday!don t forget to br tortilla onda way toda office!has a bombad day,team!");
