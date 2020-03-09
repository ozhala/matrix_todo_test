<?php

class Token {

    private $token;

    public function __construct($token_name)
    {
        if(isset($_SESSION[$token_name]))
        {
          throw new Error('This session name "'.$token_name.'" is already exist please choose another name');
        }

        $this->token = sha1( rand(1, 1000) . '$$' . date('H.i.s') . 'matrix_todo_test' );
        $_SESSION[$token_name] = $this->token;
    }

    public function csrf_token()
    {
        return $this->token;
    }
}
