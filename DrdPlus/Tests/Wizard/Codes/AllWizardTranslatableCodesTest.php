<?php
declare(strict_types = 1); // on PHP 7+ are standard PHP methods strict to types of given parameters

namespace DrdPlus\Tests\Wizard\Codes;

use DrdPlus\Tests\Codes\AllTranslatableCodesTest;
use DrdPlus\Wizard\Codes\SpellCode;
use DrdPlus\Wizard\Codes\WizardCode;

class AllWizardTranslatableCodesTest extends AllTranslatableCodesTest
{

    use GetCodeClassesTrait;

    protected function hasSinglesOnly(string $codeClass): bool
    {
        return $codeClass === SpellCode::class;
    }

    protected function getValuesSameInCzechAndEnglish(): array
    {
        return ['nekrakosa', 'genius_loci', 'berserk', 'delirium'];
    }

    protected function codeToEnglish(string $code): string
    {
        return str_replace('run silently', 'run silently!', parent::codeToEnglish($code));
    }

    /**
     * @test
     */
    public function All_wizard_codes_are_marked_by_interface()
    {
        foreach ($this->getCodeClasses() as $codeClass) {
            self::assertTrue(is_a($codeClass, WizardCode::class, true));
        }
    }
}