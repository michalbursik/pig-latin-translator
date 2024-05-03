<?php

namespace Michal\PortaPigLatin\Tokens\Translators;

class TranslatorRegistry
{
    public static function translators(): array
    {
        return [
            VowelTranslator::class,
            ConsonantTranslator::class,
            DefaultTranslator::class,
        ];
    }
}