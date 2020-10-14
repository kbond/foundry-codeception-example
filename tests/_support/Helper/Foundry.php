<?php
namespace App\Tests\Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\TestInterface;
use Zenstruck\Foundry\Test\DatabaseResetter;
use Zenstruck\Foundry\Test\TestState;

class Foundry extends \Codeception\Module
{
    public function _beforeSuite($settings = [])
    {
        $this->debugSection('Foundry', 'Resetting database.');
        DatabaseResetter::resetDatabase($this->getModule('Symfony')->kernel);
    }

    public function _before(TestInterface $test)
    {
        if (!$this->getModule('Doctrine2')->_getConfig('cleanup')) {
            $this->debugSection('Foundry', 'Resetting schema.');
            DatabaseResetter::resetSchema($this->getModule('Symfony')->kernel);
        }

        $this->debugSection('Foundry', 'Booting foundry.');
        TestState::bootFromContainer($this->getModule('Symfony')->_getContainer());
    }
}
