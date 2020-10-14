<?php

\Zenstruck\Foundry\Test\TestState::addGlobalState(function () {
    \App\Factory\PageFactory::new()->create();
});
