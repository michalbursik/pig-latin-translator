<?php

namespace Michal\PortaPigLatin\Tokens;

use Michal\PortaPigLatin\Tokens\Contracts\TokenInterface;
use Michal\PortaPigLatin\Tokens\Contracts\TranslatableTokenInterface;
use Michal\PortaPigLatin\Tokens\Translators\Contracts\TranslatorInterface;
use Michal\PortaPigLatin\Tokens\Translators\DefaultTranslator;
use Michal\PortaPigLatin\Tokens\Translators\TranslatorRegistry;

readonly class TerminalToken implements TokenInterface, TranslatableTokenInterface
{
    private TranslatorInterface $translator;

    public function __construct(private string $token)
    {
        $this->translator = $this->getTranslator($this);
    }

    public function getValue(): string
    {
        return $this->token;
    }

    public function translate(): TranslatedToken
    {
        return new TranslatedToken(
            $this->translator->translate($this)
        );
    }

    private function getTranslator(TokenInterface $token): TranslatorInterface
    {
        $translators = TranslatorRegistry::translators();

        foreach ($translators as $translator) {
            /** @var TranslatorInterface $translator */
            $translator = new $translator();

            if ($translator->isApplicable($token)) {
                return $translator;
            }
        }

        return new DefaultTranslator();
    }
}