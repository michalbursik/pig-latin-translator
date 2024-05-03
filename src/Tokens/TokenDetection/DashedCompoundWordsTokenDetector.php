<?php

namespace Michal\PortaPigLatin\Tokens\TokenDetection;

use Michal\PortaPigLatin\Tokens\Contracts\TranslatableTokenInterface;
use Michal\PortaPigLatin\Tokens\NonTerminalDashToken;
use Michal\PortaPigLatin\Tokens\TerminalToken;
use Michal\PortaPigLatin\Tokens\TokenDetection\Contracts\TokenDetectionInterface;

class DashedCompoundWordsTokenDetector implements TokenDetectionInterface
{
    public function detectToken(string $word): ?TranslatableTokenInterface
    {
        // Example: father-in-law
        if (str_contains($word, '-')) {
            $tokens = explode('-', $word);

            $terminalTokens = [];
            foreach ($tokens as $token) {
                $terminalTokens[] = new TerminalToken($token);
            }

            return new NonTerminalDashToken($terminalTokens);
        }

        return null;
    }
}