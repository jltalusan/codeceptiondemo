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
        $I->click('About');
        $I->seeCurrentURLEquals('/qaengineers/about');
        $I->click('Posts');
        $I->seeCurrentURLEquals('/qaengineers/');
        $I->click('JLST');
        $I->seeCurrentURLEquals('/qaengineers/');
        $I->click('//a[@class="catalogue-item"][1]/div/h1[@class="catalogue-title"]');
        $I->seeCurrentURLEquals('/qaengineers/2018-06-29/How-to-install-Centos7minimal-in-VirtualBox');
        $I->see('Introduction');
        $I->see('What is Centos 7?');
        $I->see('CentOS is a Linux distribution that provides a free, enterprise-class, community-supported computing platform functionally compatible with its upstream source, Red Hat Enterprise Linux');
        $I->see('What is Virtual Machine?');
        $I->see('In computing, a virtual machine is an emulation of a computer system. Virtual machines are based on computer architectures and provide functionality of a physical computer.');
        $I->see('Why should you use Centos 7 and VirtualBox?');
        $I->see('Well, they’re free and beginner friendly (I think lol )');
    }
}