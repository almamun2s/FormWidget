<?php

use HtmlElement;

/**
 * This class is for making Base Input of all Input Elements
 */
abstract class BaseInput extends HtmlElement{
    protected string $name;
    protected string $placeholder;
    protected string $icon;
    protected string $value;


    public function __construct(string $name, string $placeholder = '', string $value = '', string $icon = 'fas fa-user' )
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }
}