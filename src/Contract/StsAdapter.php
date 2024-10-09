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

namespace Wlfpanda1012\CommonSts\Contract;

use Wlfpanda1012\CommonSts\Response\StsTokenResponse;

interface StsAdapter
{
    public function getToken(array $policy, array $config = []): StsTokenResponse;
}
