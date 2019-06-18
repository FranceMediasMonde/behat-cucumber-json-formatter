<?php

namespace FranceMediasMonde\BehatCucumberJsonFormatter\Formatter;

use Behat\Testwork\Output\Formatter as FormatterOutputInterface;
use FranceMediasMonde\BehatCucumberJsonFormatter\Node\Suite;

interface FormatterInterface extends FormatterOutputInterface
{
    /**
     * @return Suite[]
     */
    public function getSuites();
}
