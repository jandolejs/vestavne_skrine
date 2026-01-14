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

    // umami report
    $umamiUrl  = 'https://umami.jandolejs.cz';
    $websiteId = '2666c3d1-482f-4a61-ad59-52b153a5bffe';
    
    $headers = [
        'Content-Type: application/json',
    ];
    if (!empty($_SERVER['REMOTE_ADDR'])) {
        $headers[] = 'X-Forwarded-For: ' . $_SERVER['REMOTE_ADDR'];
    }
    
    $payload = [
        'type' => 'event',
        'payload' => [
            'website' => $websiteId,
            'name'    => 'form',
            'url'     => 'https://example.com/checkout',
            'data'    => $data,
        ],
    ];
    
    $ch = curl_init($umamiUrl . '/api/send');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_POSTFIELDS     => json_encode($payload, JSON_THROW_ON_ERROR),
        CURLOPT_USERAGENT      => $_SERVER['HTTP_USER_AGENT'] ?? 'PHP',
        CURLOPT_TIMEOUT_MS     => 300,
    ]);
    $response = curl_exec($ch); // and lets hope it fires

    return $result !== false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (sendTelegramMessage($_POST, $botToken, $chatId)) {
        echo json_encode(['status' => 'success', 'message' => 'Zpráva byla odeslána. Pokud se Vám neozvu do zítra, zavolejte mi prosím ✅']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Nepodařilo se odeslat ❌, prosím napište mi email. Děkuji.']);
    }
    exit;
}
