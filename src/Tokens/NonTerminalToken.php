<?php

namespace Michal\PortaPigLatin\Tokens;

use Michal\PortaPigLatin\Tokens\Contracts\TranslatableTokenInterface;

class NonTerminalToken implements TranslatableTokenInterface
{
    protected string $separator = '';

    /**
     * @param TerminalToken[] $terminalTokens
     */
    public function __construct(private readonly array $terminalTokens)
    {
    }

    public function translate(): TranslatedToken
    {
        $translatedText = array_reduce(
            $this->terminalTokens,
            function (string $carry, TerminalToken $terminalToken) {
                return $carry . $this->separator . $terminalToken->translate()->value;
            },
            ''
        );

        return new TranslatedToken(
            $translatedText
        );
    }
}