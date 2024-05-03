<?php

namespace Michal\PortaPigLatin\Dictionaries\en;

final readonly class CompoundWords
{
    public static function list(): array
    {
        return [
            'backpack' => ['back', 'pack'],
            'boyfriend' => ['boy', 'friend'],
            'breakfast' => ['break', 'fast'],
            'bypass' => ['by', 'pass'],
            'checkout' => ['check', 'out'],
            'cheesecake' => ['cheese', 'cake'],
            'highway' => ['high', 'way'],
            'login' => ['log', 'in'],
            'newborn' => ['new', 'born'],
            'payout' => ['pay', 'out'],
            'peanut' => ['pea', 'nut'],
            'smartphone' => ['smart', 'phone'],
            'weekend' => ['week', 'end'],
            'wherewithal' => ['where', 'withal'],
            'anyone' => ['any', 'one'],
            'everything' => ['every', 'thing'],
            'nobody' => ['no', 'body'],
            'oneself' => ['one', 'self'],
            'themselves' => ['them', 'selves'],
            'babysit' => ['baby', 'sit'],
            'cannot' => ['can', 'not'],
            'snowball' => ['snow', 'ball'],
            'commonsense' => ['common', 'sense'],
            'everyday' => ['every', 'day'],
            'heartbreaking' => ['heart', 'breaking'],
            'nearby' => ['near', 'by'],
            'shamefaced' => ['shame', 'faced'],
            'spellbinding' => ['spell', 'binding'],
            'anymore' => ['any', 'more'],
            'anyway' => ['any', 'way'],
            'awhile' => ['a', 'while'],
            'elsewhere' => ['else', 'where'],
            'hereby' => ['here', 'by'],
            'however' => ['how', 'ever'],
            'maybe' => ['may', 'be'],
            'moreover' => ['more', 'over'],
            'nevertheless' => ['never', 'the', 'less'],
            'nowadays' => ['now', 'days'],
            'spellbindingly' => ['spell', 'bindingly'],
            'insofar' => ['in', 'so', 'far'],
            'into' => ['in', 'to'],
            'throughout' => ['through', 'out'],
            'upon' => ['up', 'on'],
            'within' => ['with', 'in'],
            'whenever' => ['when', 'ever'],
            'whereas' => ['where', 'as'],
            'another' => ['an', 'other'],
            'whatever' => ['what', 'ever'],
            'whichever' => ['which', 'ever'],
        ];
    }

    public static function getSeparatedValues(string $compoundWord): array
    {
        $compoundWords = self::list();

        if (in_array($compoundWord, array_keys($compoundWords))) {
            return $compoundWords[$compoundWord];
        }

        return [];
    }
}