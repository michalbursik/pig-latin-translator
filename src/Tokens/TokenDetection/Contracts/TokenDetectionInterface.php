<?php

namespace Michal\PortaPigLatin\Tokens\TokenDetection\Contracts;

use Michal\PortaPigLatin\Tokens\Contracts\TranslatableTokenInterface;

interface TokenDetectionInterface
{
    public function detectToken(string $word): ?TranslatableTokenInterface;
}