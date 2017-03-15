<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/13/2017
 * Time: 2:50 PM
 */

require_once('smarty/Smarty.class.php');
require_once('smtemplate_config.php');

class SMTemplate
{

    private $_smarty;

    function __construct()
    {
        $this->_smarty = new Smarty();

        global $smtemplate_config;
        $this->_smarty->template_dir = $smtemplate_config['template_dir'];
        $this->_smarty->compile_dir = $smtemplate_config['compile_dir'];
        $this->_smarty->cache_dir = $smtemplate_config['cache_dir'];
        $this->_smarty->config_dir = $smtemplate_config['config_dir'];
    }

    function render($template,$data)
    {
        foreach($data as $key=>$value){
            echo $key;
            $this->_smarty->assign($key,$value);
        }
        //logic loop on data and generate assign calls
        $this->_smarty->display($template . '.tpl');
    }

    function get_smarty()
    {
        return $this->_smarty;
    }
}