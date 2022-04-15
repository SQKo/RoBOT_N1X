<?php

require '../vendor/autoload.php';

use Discord\Slash\Client;
use Discord\Slash\Parts\Interaction;
use Discord\Slash\Parts\Choices;

$client = new Client([
    'public_key' => getenv('CLIENT_PUBLIC_KEY')
]);

$client->registerCommand('ping', function (Interaction $interaction, Choices $choices) {
    $interaction->replyWithSource('Pong!');
});

$client->run();