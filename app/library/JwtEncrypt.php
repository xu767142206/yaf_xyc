<?php

use Firebase\JWT\JWT;
class JwtEncrypt
{
    /**
     * key 按理要写入config
     */
    const KEY = 'dasjdkashdwqe1213dsfsn;p';

    /**
     * 加密jwt
     * @param array $data
     * @param int $hour
     * @return string
     */
    public static function encode(array $data, int $hour): string
    {
        $time = time();
        $token = [
            'iss' => 'xyc',//签发者
            'iat' => $time,
            'exp' => $time + 3600 * $hour, //超时时间
            'data' => $data
        ];
        return JWT::encode($token, static::KEY);
    }


    /**
     * 判断jwt是否有效
     * @param string $authorization
     * @return array
     */
    public static function decode(string $authorization): array
    {
        $jwt = str_replace('Bearer ', '', $authorization);
        if ($jwt) {
            try {
                $token = (array)JWT::decode($jwt, static::KEY, ['HS256']);
                if ($token['exp'] > time()) { //验证是否过期
                    return (array)($token['data']);
                }
            } catch (\Exception $E) {
            }
        }
        return [];
    }
}