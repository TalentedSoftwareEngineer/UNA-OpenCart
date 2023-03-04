<?php
class VndOCIHelper {
    private static $_instance;
    function __construct() {

    }

    public function get_include_output($file, $once = false)
    {
        ob_start();
        if($once == false)
        {
            include($file);
        } else {
            include_once($file);
        }
        $str = ob_get_contents();
        ob_end_clean();
        
        return $str;
    }

    public static function getInstance() 
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
    
}
?>