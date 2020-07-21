<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;
use App\Entity\BlackJack;

class BlackJackTest extends TestCase
{
    public function bankWins() {
        $blackJack = new BlackJack();

        $this->assertEquals("bank", $blackJack->play());
    }

    public function playerWins() {
        $blackJack = new BlackJack();

        $this->assertEquals("player", $blackJack->play());
    }

    public function par() {
        $blackJack = new BlackJack();

        $this->assertEquals("par", $blackJack->play());
    }
}