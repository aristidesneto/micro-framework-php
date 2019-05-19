<?php

namespace Aristides\Renderer;

interface PHPRendererInterface
{
    public function setData($data);
    public function run();
}
