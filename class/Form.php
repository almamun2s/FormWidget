<?php

class Form extends HtmlElement{
    protected array $elements = [];

    public function addElement(HtmlElement $htmlElement){
        $this->elements[] = $htmlElement;
    }

    public function render():string{
        return "<form></form>";
    }
}