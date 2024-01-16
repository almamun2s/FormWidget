<?php 

use BaseInput;

class PasswordInput extends BaseInput{

    public function render():string{
        return sprintf('
        <div class="lf-input">
            <i class="%s"></i>
            <input type="password" name="%s" placeholder="%s" value="%s" autocomplete="off">
        </div>
        ',
            $this->icon, $this->name, $this->placeholder, $this->value
        );
    }
}