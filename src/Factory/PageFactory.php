<?php

namespace App\Factory;

use App\Entity\Page;
use App\Repository\PageRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Page|Proxy findOrCreate(array $attributes)
 * @method static Page|Proxy random()
 * @method static Page[]|Proxy[] randomSet(int $number)
 * @method static Page[]|Proxy[] randomRange(int $min, int $max)
 * @method static PageRepository|RepositoryProxy repository()
 * @method Page|Proxy create($attributes = [])
 * @method Page[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class PageFactory extends ModelFactory
{
    protected function getDefaults(): array
    {
        return [
            'title' => self::faker()->sentence,
        ];
    }

    protected function initialize(): self
    {
        // see https://github.com/zenstruck/foundry#initialization
        return $this
            // ->beforeInstantiate(function(Page $page) {})
        ;
    }

    protected static function getClass(): string
    {
        return Page::class;
    }
}
