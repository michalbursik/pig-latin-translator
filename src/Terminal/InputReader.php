<?php

namespace Michal\PortaPigLatin\Terminal;

use Michal\PortaPigLatin\Exceptions\InvalidInput;

class InputReader
{
    public function __invoke(array $input)
    {
        $text = $input[1];

        if (empty($text)) {
            $text = readline('Enter the text you want to translate:' . PHP_EOL);
        }

        if (!(preg_match("/^[a-zA-Z-\W]*/", $text, $matches) && $matches[0] === $text)) {
            throw new InvalidInput("Text passed to the script should contain only alpha numeric characters or '-'.");
        }

        return $text;
    }
}