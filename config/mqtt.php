<?php
return [
    'use_tls' => true,
    'host'     => env('MQTT_HOST', 'maket-353effde.a03.euc1.aws.hivemq.cloud'),
    'port'     => env('MQTT_PORT', 8883),
    'username' => env('MQTT_USERNAME', 'esp32client'),
    'password' => env('MQTT_PASSWORD', 'Esp32pass123'),
    'topics'   => [
        'command' => env('MQTT_TOPIC_COMMAND', 'rfid/command'),
        'status'  => env('MQTT_TOPIC_STATUS',  'rfid/status'),
    ],
    // Jika diperlukan, tambahkan opsi SSL/TLS di sini
];
