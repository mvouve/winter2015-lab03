<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bingo
 *
 * @author Marc
 */
class Bingo extends Application{
    function __construct()
    {
        // invoke parent constructor
        parent::__construct();
    }
    
    /*
     * Return 5th quote
     */
    function index()
    {
        $this->data['pagebody'] = 'justone';    // page displays only one quote
        $source = $this->quotes->get(5);       
        $this->data = array_merge( $this->data, $source );
        $this->render();
    }
    
    // Display wise quote
    function wisdom()
    {
        $this->data['pagebody'] = 'justone';    // page displays only one quote
        $source = $this->quotes->get(6);       
        $this->data = array_merge( $this->data, $source );
        $this->render();
    }
}
