<?php namespace App\Tests;
use App\Factory\PageFactory;
use App\Story\PageStory;
use App\Tests\FunctionalTester;

class FirstCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function test0(FunctionalTester $I)
    {
        PageStory::load();
        PageFactory::new()->createMany(5);

        PageFactory::repository()->assertCount(11); // 5 created above, 5 from story, 1 from global state
    }

    // tests
    public function test1(FunctionalTester $I)
    {
        PageFactory::new()->createMany(5);

        PageFactory::repository()->assertCount(6); // 5 created above, 1 from global state
    }

    public function test2(FunctionalTester $I)
    {
        PageFactory::new()->createMany(3);

        PageFactory::repository()->assertCount(4); // 3 created above, 1 from global state
    }
}
