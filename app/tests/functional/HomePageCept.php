<?php
$I = new TestGuy($scenario);
$I->wantTo('see my home page');
$I->amOnPage('test');
$I->see('...', 'p');
