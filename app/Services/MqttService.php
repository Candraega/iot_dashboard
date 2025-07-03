<?php
namespace App\Services;

use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\ConnectionSettings;

class MqttService
{
    protected MqttClient $client;

    public function __construct()
    {
        $host = config('mqtt.host');
        $port = config('mqtt.port');
        $this->client = new MqttClient($host, $port, uniqid('laravel_'));
        $settings = (new ConnectionSettings)
            ->setUsername(config('mqtt.username'))
            ->setPassword(config('mqtt.password'))
            ->setUseTls(true);
        $this->client->connect($settings, true);
    }

    public function publishCommand(string $action, string $uid, ?string $name = null): void
    {
        $payload = array_filter([
            'action' => $action,
            'uid' => $uid,
            'name' => $name,
        ]);
        $this->client->publish(
            config('mqtt.topics.command'),
            json_encode($payload),
            MqttClient::QOS_AT_LEAST_ONCE
        );
    }

    public function subscribeStatus(callable $callback): void
    {
        $this->client->subscribe(
            config('mqtt.topics.status'),
            function (string $topic, string $payload) use ($callback) {
                $data = json_decode($payload, true);
                $callback($data);
            },
            MqttClient::QOS_AT_LEAST_ONCE
        );
        // Loop forever (dipanggil di artisan command)
        $this->client->loop(true);
    }

    public function publish(string $topic, string $message): void
    {
        $this->client->publish($topic, $message, MqttClient::QOS_AT_LEAST_ONCE);
    }

}
