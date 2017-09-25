<?php
declare(strict_types=1); // on PHP 7+ are standard PHP methods strict to types of given parameters

namespace DrdPlus\Tests\Wizard\Codes;

use DrdPlus\Tests\Codes\Partials\TranslatableCodeTest;

class SpellCodeTest extends TranslatableCodeTest
{
    protected function setUp()
    {
        self::assertContains(__NAMESPACE__, static::class, 'Code test has to be in "Tests" namespace');
    }
}