<?php
namespace DrdPlus\Tests;

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
        return ['nekrakosa'];
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