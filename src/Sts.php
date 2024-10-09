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

use Wlfpanda1012\CommonSts\Contract\StoragePolicyGenerator;
use Wlfpanda1012\CommonSts\Contract\StsAdapter;
use Wlfpanda1012\CommonSts\Exception\UnableToGenerateStoragePolicy;
use Wlfpanda1012\CommonSts\Response\StsTokenResponse;

class Sts
{
    private array $config = [];

    private StsAdapter $adapter;

    public function __construct(
        StsAdapter $adapter,
        array $config = [],
        private ?StoragePolicyGenerator $storagePolicyGenerator = null,
    ) {
        $this->adapter = $adapter;
        $this->config = $config;
    }

    public function getToken(mixed $data): StsTokenResponse
    {
        return $this->adapter->getToken($data, $this->config);
    }

    public function storagePolicy(string $effect, array $actions, array|string $path, array $config = []): array
    {
        $generator = $this->storagePolicyGenerator ?? $this->adapter;

        if ($generator instanceof StoragePolicyGenerator) {
            return $generator->storagePolicy(
                $effect,
                $actions,
                $path,
                $config
            );
        }
        throw new UnableToGenerateStoragePolicy();
    }
}
