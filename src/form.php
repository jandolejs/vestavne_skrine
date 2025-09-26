<?php
header('Content-Type: application/json; charset=UTF-8');

$botToken = "5683006293:AAHIoRepm_uhfKfAYW9piJCKYAyDEM_FfAM";
$chatId   = "358369613";

function sendTelegramMessage(array $data, string $botToken, string $chatId): bool {
    $text  = "📩 Lead pro skříň na míru:\n\n";
    $text .= "👤 Jméno: " . htmlspecialchars($data['name']) . "\n";
    $text .= "✉️ Email: " . htmlspecialchars($data['email']) . "\n";
    $text .= "💬 Zpráva:\n" . htmlspecialchars($data['message']) . "\n";

    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

    $postData = [
        'chat_id' => $chatId,
        'text'    => $text,
        'parse_mode' => 'HTML'
    ];

    $options = [
        "http" => [
            "header"  => "Content-type: application/x-www-form-urlencoded\r\n",
            "method"  => "POST",
            "content" => http_build_query($postData),
            "timeout" => 10
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    return $result !== false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (sendTelegramMessage($_POST, $botToken, $chatId)) {
        echo json_encode(['status' => 'success', 'message' => 'Zpráva byla odeslána ✅']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Nepodařilo se odeslat ❌, prosím napište mi email. Děkuji.']);
    }
    exit;
}
