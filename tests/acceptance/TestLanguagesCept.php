<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Valodu pārbaude');
$I->amOnPage( '/');//Uz sākumlapu
$I->see( 'KUK');

$I->amOnPage( '/en');
$I->see( 'Welcome!');
$I->dontSee( 'Sveiki!');
$I->see( 'Lv', 'a');

$I->amOnPage( '/lv');
$I->see( 'Sveiki!');
$I->dontSee( 'Welcome!');
$I->see( 'En', 'a');