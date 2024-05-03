<?php

namespace Michal\PortaPigLatin\Tokens\Translators\Contracts;

use Michal\PortaPigLatin\Tokens\Contracts\TokenInterface;

interface TranslatorInterface
{
    public function translate(TokenInterface $token): string;

    public function isApplicable(TokenInterface $token): bool;
}