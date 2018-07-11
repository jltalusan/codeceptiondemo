<?php


class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/qaengineers/');
        $I->click('JLST');
        $I->seeCurrentURLEquals('/qaengineers/');
        $I->click('About');
        $I->seeCurrentURLEquals('/qaengineers/about');
        $I->click('Posts');
        $I->seeCurrentURLEquals('/qaengineers/');
        $I->click('About');
        $I->seeCurrentURLEquals('/qaengineers/about');
        $I->see('About');
        $I->see('Written by Limuel');
        $I->see('on June 05, 2018');
        $I->see('Hi! My name is Limuel. I like coffee, music, games and technology. I’m currently a Lead Software Quality Assurance Engineer based here in the Philippines and I’m very passionate about DevOps, Automation, Software Testing and Web Development.');
    }
}