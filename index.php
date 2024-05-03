<?php
declare(strict_types=1);
require __DIR__.'/src/PigLatinTranslator.php';
require __DIR__.'/vendor/autoload.php';

use Michal\PortaPigLatin\Exceptions\InvalidInput;
use Michal\PortaPigLatin\PigLatinTranslator;
use Michal\PortaPigLatin\Terminal\InputReader;

try {
    $inputReader = new InputReader();
    $text = $inputReader($argv);
} catch (InvalidInput $exception) {
    echo $exception->getMessage();
    die();
}

// Pass the data to translator
$translator = new PigLatinTranslator();

// Generate translated text
$translatedText = $translator->translate($text);
echo $translatedText;
