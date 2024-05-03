<?php

namespace Michal\PortaPigLatin\Tokens;

use Michal\PortaPigLatin\Tokens\Contracts\TokenInterface;

readonly class Tokenizer
{
    public function __construct(private TokenParser $tokenParser) {}

    /**
     * @param string $text
     * @return TokenInterface[]
     */
    public function __invoke(string $text): array
    {
        $tokens = explode(' ', $text);

        foreach ($tokens as $token) {
            $this->tokenParser->parse($token);
        }

        return $this->tokenParser->getTokens();
    }
}