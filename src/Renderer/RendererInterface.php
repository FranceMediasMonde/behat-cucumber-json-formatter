<?php

namespace FranceMediasMonde\BehatCucumberJsonFormatter\Renderer;

interface RendererInterface
{
    public function render();

    public function getResult();
}
