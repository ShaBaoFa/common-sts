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

namespace Wlfpanda1012\CommonSts;

use Wlfpanda1012\CommonSts\Contract\StsAdapter;
use Wlfpanda1012\CommonSts\Response\StsTokenResponse;

class Sts
{
    private array $config = [];

    private StsAdapter $adapter;

    public function __construct(
        StsAdapter $adapter,
        array $config = [],
    ) {
        $this->adapter = $adapter;
        $this->config = $config;
    }

    public function getToken(mixed $data): StsTokenResponse
    {
        return $this->adapter->getToken($data, $this->config);
    }
}
