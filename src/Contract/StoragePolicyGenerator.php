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

interface StoragePolicyGenerator
{
    public function storagePolicy(string $effect, array $actions, array|string $path, array $config = []): array;
}
