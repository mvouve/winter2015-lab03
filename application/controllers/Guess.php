<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guess
 *
 * @author Marc
 */
class Guess extends Application {
    // default view when 'guess' is loaded.
    public function index()
    {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(4);
        // Merge the page with last quote
        $this->data = array_merge($this->data, $source);
        // render the page
        $this->render();
    }
    
    function __construct()
    {
        parent::__construct();
    }
}
