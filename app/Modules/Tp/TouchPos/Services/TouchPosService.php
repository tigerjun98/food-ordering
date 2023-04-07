<?php

namespace App\Modules\Tp\TouchPos\Services;

use App\Entity\Enums\StateEnum;
use App\Models\Admin;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;
use function PHPUnit\Framework\throwException;

class TouchPosService
{
    private Client $client;
    private string $url;

    public const TOUCHPOS = 101;
    public const DYNAMOD = 102;

    public function __construct(int $type)
    {
        $this->type = $type;
        $this->url = config('services.touch_pos.url').':'.config('services.touch_pos.port');
        $this->client = $this->build();
    }

    public function build(): Client
    {
        $token = $this->type == self::DYNAMOD
            ? config('services.touch_pos.dynamod.token')
            : config('services.touch_pos.token');

        return new Client([
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer ".$token
            ]
        ]);
    }

    public function getUrl(String $path): string
    {
        $port = $this->type == self::DYNAMOD
            ? config('services.touch_pos.dynamod.port')
            : config('services.touch_pos.port');

        return config('services.touch_pos.url').':'.$port.'/'.$path.'?format=json';
    }

    public function post(string $path, array $data)
    {
        try {
            $url = $this->getUrl($path);
            $res = $this->client->post($url, [
                'json' => $data
            ]);
            return json_decode($res->getBody());

        } catch (ClientException $e) {

            $msg = sprintf('Error while request, response code: %s, message: %s', $e->getCode(), $e->getMessage());
            \Log::channel('touch-pos')->error($msg, $data);
            return false;
        }


    }

    public function get($path)
    {
        try {
            $url = $this->getUrl($path);
            $res = $this->client->get($url);
            return json_decode($res->getBody());

        } catch (ClientException $e) {

            $msg = sprintf('Error while request, response code: %s, message: %s', $e->getCode(), $e->getMessage());
            $ref = is_array(json_encode($e));
            \Log::channel('touch-pos')->error($msg, $ref ? json_encode($e) : []);
            return false;
        }
    }
}
