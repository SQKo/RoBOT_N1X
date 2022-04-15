<?php

require '../vendor/autoload.php';

use Discord\InteractionResponseFlags;
use Discord\Slash\Client;
use Discord\Slash\Parts\Interaction;
use Discord\Slash\Parts\Choices;

$client = new Client([
    'public_key' => getenv('CLIENT_PUBLIC_KEY'),
    'uri' => null,
]);

$client->registerCommand('ping', function (Interaction $interaction, Choices $choices) {
    $interaction->replyWithSource('Pong!', false, null, null, InteractionResponseFlags::EPHEMERAL);
});

$client->runCgi();
