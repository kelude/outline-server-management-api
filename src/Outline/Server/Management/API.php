<?php

namespace Daqimei\Outline\Server\Management;

class API
{
    protected $apiUrl;

    protected $httpClient;

    public function __construct($apiUrl)
    {
        $this->apiUrl = $apiUrl;

        $this->httpClient = new \GuzzleHttp\Client();
    }

    public function getServer()
    {
        return $this->httpClient->get($this->apiUrl . "/server", [
            'verify' => false
        ]);
    }

    public function putName($name)
    {
        return $this->httpClient->put($this->apiUrl . "/name", [
            'verify' => false,
            'json' => [
                'name' => $name
            ]
        ]);
    }

    public function getMetricsEnabled()
    {
        return $this->httpClient->get($this->apiUrl . "/metrics/enabled", [
            'verify' => false
        ]);
    }

    public function putMetricsEnabled($metricsEnabled)
    {
        return $this->httpClient->put($this->apiUrl . "/metrics/enabled", [
            'verify' => false,
            'json' => [
                'metricsEnabled' => $metricsEnabled
            ]
        ]);
    }

    public function putServerPortForNewAccessKeys($port)
    {
        return $this->httpClient->put($this->apiUrl . "/server/port-for-new-access-keys", [
            'verify' => false,
            'json' => [
                'port' => $port
            ]
        ]);
    }

    public function postAccessKeys()
    {
        return $this->httpClient->post($this->apiUrl . "/access-keys", [
            'verify' => false
        ]);
    }

    public function getAccessKeys()
    {
        return $this->httpClient->get($this->apiUrl . "/access-keys", [
            'verify' => false
        ]);
    }

    public function deleteAccessKeys($id)
    {
        return $this->httpClient->delete($this->apiUrl . "/access-keys/{$id}", [
            'verify' => false
        ]);
    }

    public function putAccessKeysName($id, $name)
    {
        return $this->httpClient->put($this->apiUrl . "/access-keys/{$id}/name", [
            'verify' => false,
            'json' => [
                'name' => $name
            ]
        ]);
    }

    public function putAccessKeysDataLimit($id, $bytes)
    {
        return $this->httpClient->put($this->apiUrl . "/access-keys/{$id}/data-limit", [
            'verify' => false,
            'json' => [
                'bytes' => $bytes
            ]
        ]);
    }

    public function deleteAccessKeysDataLimit($id)
    {
        return $this->httpClient->delete($this->apiUrl . "/access-keys/{$id}/data-limit", [
            'verify' => false
        ]);
    }

    public function getMetricsTransfer()
    {
        return $this->httpClient->get($this->apiUrl . "/metrics/transfer", [
            'verify' => false
        ]);
    }
}
