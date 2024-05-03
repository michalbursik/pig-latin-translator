<?php

namespace Michal\PortaPigLatin\Tokens\Translators;

use Michal\PortaPigLatin\Tokens\Contracts\TokenInterface;
use Michal\PortaPigLatin\Tokens\Translators\Contracts\TranslatorInterface;

class DefaultTranslator implements TranslatorInterface
{
    public function isApplicable(TokenInterface $token): bool
    {
        return true;
    }

    public function translate(TokenInterface $token): string
    {
        return $token->getValue();
    }
}