<?php

class Form extends HtmlElement{
    protected string $action;
    protected string $method;
    protected string $title;
    protected string $submitValue;

    public function __construct(string $action = '#', string $method = 'get', string $title = 'Form Title', string $submitValue = 'Submit')
    {
        $this->action = $action;
        $this->method = $method;
        $this->title = $title;
        $this->submitValue = $submitValue;
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
                <div class="lf-input">
                    <input class="lf-submit_btn" type="submit" value="%s">
                </div>
                <div class="lf-form_text">Not a member? <a href="./signup.html">Sign Up</a></div>
            </form>
        </div>
        ',
        $this->title, $this->action, $this->method, $content, $this->submitValue
        );
    }
}