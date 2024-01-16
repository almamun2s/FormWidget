<?php

class Form extends HtmlElement{
    protected string $action;
    protected string $method;
    protected $title;

    public function __construct($action = '#', $method = 'get', $title = 'Form Title')
    {
        $this->action = $action;
        $this->method = $method;
        $this->title = $title;
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
        // return sprintf('<form action="%s" method="%s"> %s </form>', $this->action, $this->method, $content);
        return sprintf('
        <div class="lf-loginForm">
            <div class="lf-title"><span>%s</span></div>
            <form action="%s" method="%s">
                %s
                <div class="lf-form_text">Not a member? <a href="./signup.html">Sign Up</a></div>
            </form>
        </div>
        ',
        $this->title, $this->action, $this->method, $content
        );
    }
}