<?php

namespace Namadnuno\LaravelAdminLte\Menu\Filters;

use Namadnuno\LaravelAdminLte\Menu\Builder;

interface FilterInterface
{
    public function transform($item, Builder $builder);
}
