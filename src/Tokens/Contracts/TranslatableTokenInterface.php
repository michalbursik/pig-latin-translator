<?php

namespace Michal\PortaPigLatin\Tokens\Contracts;

use Michal\PortaPigLatin\Tokens\TranslatedToken;

interface TranslatableTokenInterface
{
    public function translate(): TranslatedToken;
}