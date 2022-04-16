<?php

require '../vendor/autoload.php';

use Discord\Interaction;
use Discord\InteractionResponseFlags;
use Discord\InteractionResponseType;
use Discord\InteractionType;

$CLIENT_PUBLIC_KEY = getenv('CLIENT_PUBLIC_KEY');

$signature = $_SERVER['HTTP_X_SIGNATURE_ED25519'];
$timestamp = $_SERVER['HTTP_X_SIGNATURE_TIMESTAMP'];
$postData = file_get_contents('php://input');

if (Interaction::verifyKey($postData, $signature, $timestamp, $CLIENT_PUBLIC_KEY)) {
    $request = json_decode($postData);
    if ($request->type == InteractionType::PING) {
        echo json_encode([
            'type' => InteractionResponseType::PONG
        ]);
    } elseif ($request->type == InteractionType::APPLICATION_COMMAND) {
        header('Content-type: application/json');
        echo json_encode([
            'type' => InteractionResponseType::CHANNEL_MESSAGE_WITH_SOURCE,
            'data' => [
                'content' => 'Pong!',
                'flags' => InteractionResponseFlags::EPHEMERAL
            ]
        ]);
    }
} else {
    http_response_code(401);
    echo "Not verified";
}
