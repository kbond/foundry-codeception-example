<?php

namespace App\Story;

use App\Factory\PageFactory;
use Zenstruck\Foundry\Story;

final class PageStory extends Story
{
    public function build(): void
    {
        PageFactory::new()->createMany(5);
    }
}
