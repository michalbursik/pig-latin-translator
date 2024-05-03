<?php

namespace Michal\PortaPigLatin\Tokens\Translators;

use Michal\PortaPigLatin\Helpers\AlphaCharacters;
use Michal\PortaPigLatin\Tokens\Contracts\TokenInterface;
use Michal\PortaPigLatin\Tokens\Translators\Contracts\TranslatorInterface;

class VowelTranslator implements TranslatorInterface
{
    public function isApplicable(TokenInterface $token): bool
    {
        $firstLetter = $token->getValue()[0];

        return AlphaCharacters::isVowel($firstLetter);
    }

    public function translate(TokenInterface $token): string
    {
        $value = $token->getValue();

        return $value . 'ay';
    }
}