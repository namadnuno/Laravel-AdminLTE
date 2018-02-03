<?php

namespace Namadnuno\LaravelAdminLte\Menu\Filters;

use Namadnuno\LaravelAdminLte\Menu\Builder;
use Namadnuno\LaravelAdminLte\Menu\ActiveChecker;

class ActiveFilter implements FilterInterface
{
    private $activeChecker;

    public function __construct(ActiveChecker $activeChecker)
    {
        $this->activeChecker = $activeChecker;
    }

    public function transform($item, Builder $builder)
    {
        if (! isset($item['header'])) {
            $item['active'] = $this->activeChecker->isActive($item);
        }

        return $item;
    }
}
