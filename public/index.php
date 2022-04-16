<?php

require '../vendor/autoload.php';

use Discord\InteractionResponseFlags;
use Discord\Slash\Client;
use Discord\Slash\Parts\Interaction;
use Discord\Slash\Parts\Choices;

ob_start();

$client = new Client([
    'public_key' => getenv('CLIENT_PUBLIC_KEY'),
    'uri' => null,
]);

$client->registerCommand('ping', function (Interaction $interaction, Choices $choices) {
    $interaction->reply('Pong!', false, null, null, InteractionResponseFlags::EPHEMERAL);
});

$client->runCgi();

throw new RuntimeException(ob_get_flush());