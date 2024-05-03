<?php

namespace Michal\PortaPigLatin\Tokens;

use Michal\PortaPigLatin\Tokens\Contracts\TokenInterface;
use Michal\PortaPigLatin\Tokens\Contracts\TranslatableTokenInterface;
use Michal\PortaPigLatin\Tokens\TokenDetection\Contracts\TokenDetectionInterface;
use Michal\PortaPigLatin\Tokens\TokenDetection\TokenDetectorsRegistry;

final class TokenParser
{
    private array $tokens = [];

    /**
     * @return TokenInterface[]
     */
    public function getTokens(): array
    {
        return $this->tokens;
    }

    public function parse(string $word): void
    {
        $parsedToken = $this->parseTokens($word);

        $this->tokens[] = $parsedToken;
    }

    /**
     * @param string $word
     * @return TranslatableTokenInterface
     */
    private function parseTokens(string $word): TranslatableTokenInterface
    {
        $tokenDetectors = TokenDetectorsRegistry::list();

        // Match some of the detection strategies
        foreach ($tokenDetectors as $tokenDetector) {
            /** @var TokenDetectionInterface $detector */
            $detector = new $tokenDetector();

            $detectedToken = $detector->detectToken($word);

            if (empty($detectedToken)) {
                continue;
            }

            return $detectedToken;
        }

        return new TerminalToken($word);
    }
}