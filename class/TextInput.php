<?php 

use BaseInput;

class TextInput extends BaseInput{

    public function render():string{
        return sprintf('
        <div class="lf-input">
            <i class="%s"></i>
            <input type="text" name="%s" placeholder="%s" value="%s" autocomplete="off">
        </div>
        ',
            $this->icon, $this->name, $this->placeholder, $this->value
        );
    }
}