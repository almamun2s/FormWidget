<?php

class Form extends HtmlElement{
    protected string $action;
    protected string $method;

    public function __construct($action = '#', $method = 'get')
    {
        $this->action = $action;
        $this->method = $method;
    }

    protected array $elements = [];


    public function addElement(HtmlElement $htmlElement){
        $this->elements[] = $htmlElement;
    }

    public function render():string{
        // return "
        // <form action='$this->action' method='$this->method'>
        // </form>
        // ";

        /**
         * This makes an array. 
         * The second parameter use as argument of first parameter function.   
         */
        $arrayOfElements = array_map(fn($element) => $element->render(), $this->elements ); 
        
        /**
         * This makes a string of $arrayOfElements array 
         */
        $content = implode(PHP_EOL, $arrayOfElements);
        return sprintf('<form action="%s" method="%s"> %s </form>', $this->action, $this->method, $content);
    }
}