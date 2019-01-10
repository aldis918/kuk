<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Valodu pārbaude');
$I->amOnPage( '/web/en');//Uz sākumlapu
$I->see( 'KUK');

$I->amOnPage( '/web/en');
$I->see( 'Welcome!');
$I->dontSee( 'Sveiki!');
$I->see( '/web/lv', 'a');

$I->amOnPage( '/web/lv');
$I->see( 'Sveiki!');
$I->dontSee( 'Welcome!');
$I->see( '/web/en', 'a');