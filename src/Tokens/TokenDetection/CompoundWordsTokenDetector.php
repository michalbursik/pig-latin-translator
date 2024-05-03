<?php

namespace Michal\PortaPigLatin\Tokens\TokenDetection;

use Michal\PortaPigLatin\Dictionaries\en\CompoundWords;
use Michal\PortaPigLatin\Tokens\Contracts\TranslatableTokenInterface;
use Michal\PortaPigLatin\Tokens\NonTerminalToken;
use Michal\PortaPigLatin\Tokens\TerminalToken;
use Michal\PortaPigLatin\Tokens\TokenDetection\Contracts\TokenDetectionInterface;

class CompoundWordsTokenDetector implements TokenDetectionInterface
{
    public function detectToken(string $word): ?TranslatableTokenInterface
    {
        // Example: backpack
        $separatedValues = CompoundWords::getSeparatedValues($word);

        if (empty($separatedValues)) {
            return null;
        }

        $terminalTokens = [];
        foreach ($separatedValues as $separatedValue) {
            $terminalTokens[] = new TerminalToken($separatedValue);
        }

        return new NonTerminalToken($terminalTokens);
    }
}