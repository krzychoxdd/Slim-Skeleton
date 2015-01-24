<?php

class Controller {

    /**
     * Default data to custom render
     * 
     * @var array 
     */
    private $defaulViewData = array();
    
    public function __construct() 
    {
        $this->defaulViewData = array(
        );
    }
    
    /**
     * Slim instance
     * 
     * @return object
     */
    protected function app() 
    {
        return \Slim\Slim::getInstance();
    }
    
    /**
     * Custom template render
     * 
     * @param string $tpl
     * @param array $data
     */
    protected function view($tpl, $data=array()) 
    {
        $tplFile =  $tpl . $this->app()->config('templates.ext');
        
        $allData = array_merge($data,$this->defaulViewData);
        
        $this->app()->render($tplFile, $allData);
    }
}