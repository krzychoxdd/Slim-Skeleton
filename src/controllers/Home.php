<?php

class Home extends Controller {
 
    public function index() 
    {
        $this->view('home');
    }
    
    public function firstAction($word, $name) 
    {
        $this->view('test', array(
            'word' => $word,
            'name' => $name
        ));
    }
}
