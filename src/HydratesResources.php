<?php

declare(strict_types=1);

namespace Changelog\Hydrator;

use Illuminate\Support\Collection;

trait HydratesResources
{
    protected function hydrate(array $resources, string $class): Collection
    {
        return (new Collection($resources))->map(fn (array $resource) => new $class(
            ...$resource,
            data: $resource,
        ));
    }
}
