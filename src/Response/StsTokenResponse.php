<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Wlfpanda1012\CommonSts\Response;

use DateTimeInterface;

class StsTokenResponse
{
    // accessKeyId
    public string $accessKeyId;

    // accessKeySecret
    public string $accessKeySecret;

    // expiration
    public DateTimeInterface $expireTime;

    // sessionToken
    public string $sessionToken;

    public function __construct(
        string $accessKeyId,
        string $accessKeySecret,
        DateTimeInterface $expireTime,
        string $sessionToken
    ) {
        $this->setAccessKeyId($accessKeyId);
        $this->setAccessKeySecret($accessKeySecret);
        $this->setExpireTime($expireTime);
        $this->setSessionToken($sessionToken);
    }

    public function getAccessKeyId(): string
    {
        return $this->accessKeyId;
    }

    public function setAccessKeyId(string $accessKeyId): void
    {
        $this->accessKeyId = $accessKeyId;
    }

    public function getAccessKeySecret(): string
    {
        return $this->accessKeySecret;
    }

    public function setAccessKeySecret(string $accessKeySecret): void
    {
        $this->accessKeySecret = $accessKeySecret;
    }

    public function getExpireTime(): DateTimeInterface
    {
        return $this->expireTime;
    }

    public function setExpireTime(DateTimeInterface $expireTime): void
    {
        $this->expireTime = $expireTime;
    }

    public function getSessionToken(): string
    {
        return $this->sessionToken;
    }

    public function setSessionToken(string $sessionToken): void
    {
        $this->sessionToken = $sessionToken;
    }

    public function toMap(): array
    {
        return [
            'accessKeyId' => $this->getAccessKeyId(),
            'accessKeySecret' => $this->getAccessKeySecret(),
            'expireTime' => $this->getExpireTime()->format('Y-m-d H:i:s'),
            'sessionToken' => $this->getSessionToken(),
        ];
    }
}
