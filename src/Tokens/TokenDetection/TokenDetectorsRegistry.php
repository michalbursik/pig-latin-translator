<?php

namespace Michal\PortaPigLatin\Tokens\TokenDetection;

class TokenDetectorsRegistry
{
    /**
     * @return string[]
     */
    public static function list(): array
    {
        return [
            CompoundWordsTokenDetector::class,
            DashedCompoundWordsTokenDetector::class,
        ];
    }
}