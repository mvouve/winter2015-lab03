<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * View for the "last" page
 *
 * @author Marc
 */
class Welcome extends Application  {
    
    // Default consturctor for application
    function __construct()
    {
        parent::__construct();
    }
    
    // default view when page loads
    function index()
    {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->last();
        // Merge the page with last quote
        $this->data = array_merge($this->data, $source);
        // render the page
        $this->render();
    }
}
