<?php

namespace Michal\PortaPigLatin;

use Michal\PortaPigLatin\Tokens\Contracts\TokenInterface;
use Michal\PortaPigLatin\Tokens\NonTerminalToken;
use Michal\PortaPigLatin\Tokens\Tokenizer;
use Michal\PortaPigLatin\Tokens\TokenParser;
use Michal\PortaPigLatin\Tokens\TranslatedToken;

class PigLatinTranslator
{
    public function translate(string $text): string
    {
        $tokenParser = new TokenParser();
        $tokenizer = new Tokenizer($tokenParser);
        $tokens = $tokenizer($text);

        $translatedText = '';
        foreach ($this->translateTokens($tokens) as $translatedToken) {
            $translatedText .= $translatedToken->value . PHP_EOL;
        }

        return $translatedText;
    }

    /**
     * @param TokenInterface[] $tokens
     * @return TranslatedToken[]
     */
    private function translateTokens(array $tokens): array
    {
        $translatedTokens = [];

        /** @var NonTerminalToken $token */
        foreach ($tokens as $token) {
            $translatedTokens[] = $token->translate();
        }

        return $translatedTokens;
    }
}