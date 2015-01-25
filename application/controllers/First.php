<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of first
 *
 * @author Marc
 */
class first extends Application {
    
    function __construct()
    {
        // invoke parent constructor
        parent::__construct();
    }
    
    /*
     * Returns Bob's quote
     */
    function index()
    {
        $this->data['pagebody'] = 'justone';    // page displays only one quote
        $source = $this->quotes->first();       
        $this->data = array_merge( $this->data, $source );
        $this->render();
    }
    
    function zzz()
    {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get('1');
        $this->data = array_merge( $this->data, $source );
        $this->render();
    }
}
