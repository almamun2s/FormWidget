<?php

use HtmlElement;

/**
 * This class is for making Base Input of all Input Elements
 */
abstract class BaseInput extends HtmlElement{
    protected string $name;
    protected string $label;
    protected string $value;

    public function __construct(string $name, string $label = '', string $value = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }
}