<?php

namespace Michal\PortaPigLatin\Helpers;

use Michal\PortaPigLatin\Exceptions\InvalidInput;

class AlphaCharacters
{
    public static array $vowels = ['a', 'e', 'i', 'o', 'u'];

    /**
     * @throws InvalidInput
     */
    public static function isVowel(string $letter): bool
    {
        if (strlen($letter) > 1) {
            throw new InvalidInput("Passed letter '$letter' is not a single character.");
        }

        return in_array(strtolower($letter), self::$vowels);
    }

    /**
     * @throws InvalidInput
     */
    public static function isConsonant(string $letter): bool
    {
        if (strlen($letter) > 1) {
            throw new InvalidInput("Passed letter '$letter' is not a single character.");
        }

        return !self::isVowel($letter);
    }
}