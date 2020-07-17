<?php

namespace App\CommonServer;

class ToolServer
{

    private $header = [
        'alg' => 'HS256',
        'typ' => 'JWT',
    ];

    private $key = 'c671d24bcd500e26ebae812846a831b1';

    private $iss = 'minicw';

    public function verifyToken(string $Token)
    {
        $tokens = explode('.', $Token);
        if (count($tokens) != 3) {
            return false;
        }

        list($base64header, $base64payload, $sign) = $tokens;

        $base64decodeheader = json_decode($this->base64UrlDecode($base64header), JSON_OBJECT_AS_ARRAY);

        if (empty($base64decodeheader['alg'])) {
            return false;
        }

        if ($this->signature($base64header . '.' . $base64payload, $this->key, $base64decodeheader['alg']) !== $sign) {
            return false;
        }

        $payload = json_decode($this->base64UrlDecode($base64payload), JSON_OBJECT_AS_ARRAY);

        //		if (is_int($payload['uid']) && $payload['uid'] > 0) {
        //			return false;
        //		}

        if (isset($payload['iat']) && $payload['iat'] > time()) {
            return false;
        }

        if (isset($payload['exp']) && $payload['exp'] < time()) {
            return false;
        }

        if (isset($payload['nbf']) && $payload['nbf'] > time()) {
            return false;
        }

        if (isset($payload['iss']) && $payload['iss'] != $this->iss) {
            return false;
        }
        return $payload;
    }

    public function base64UrlEncode($input)
    {
        return str_replace('=', '', strtr(base64_encode($input), '+/', '-_'));
    }

    public function base64UrlDecode(string $input)
    {
        $remainder = strlen($input) % 4;
        if ($remainder) {
            $addlen = 4 - $remainder;
            $input .= str_repeat('=', $addlen);
        }
        return base64_decode(strtr($input, '-_', '+/'));
    }

    public function signature(string $input)
    {
        $alg_config = [
            'HS256' => 'sha256',
        ];
        return $this->base64UrlEncode(hash_hmac($alg_config[$this->header['alg']], $input, $this->key, true));
    }
}