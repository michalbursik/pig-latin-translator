<?php

namespace Michal\PortaPigLatin\Tokens\Translators;

use Michal\PortaPigLatin\Helpers\AlphaCharacters;
use Michal\PortaPigLatin\Tokens\Contracts\TokenInterface;
use Michal\PortaPigLatin\Tokens\Translators\Contracts\TranslatorInterface;

class ConsonantTranslator implements TranslatorInterface
{
    public function isApplicable(TokenInterface $token): bool
    {
        $firstLetter = $token->getValue()[0];

        return AlphaCharacters::isConsonant($firstLetter);
    }

    public function translate(TokenInterface $token): string
    {
        $value = $token->getValue();

        return substr($value, 1) . $value[0] . 'ay';
    }
}