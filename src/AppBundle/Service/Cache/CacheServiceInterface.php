<?php

/**
 * CacheServiceInterface
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */

namespace AppBundle\Service\Cache;

use Psr\Cache\CacheItemInterface;

/**
 * Interface CacheServiceInterface
 * @package AppBundle\Service\Cache
 */
interface CacheServiceInterface
{
    public function getItem(string $key): CacheItemInterface;

    public function getItems(array $keys = []): iterable;

    public function save(CacheItemInterface $item): bool;

    public function invalidateTags(array $tags): bool;

    public function getCacheExpirationTime(): int;
}
