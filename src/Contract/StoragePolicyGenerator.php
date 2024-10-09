<?php

namespace Wlfpanda1012\CommonSts\Contract;

interface StoragePolicyGenerator
{
    public function storagePolicy(string $effect, array $actions, array|string $path): array;
}