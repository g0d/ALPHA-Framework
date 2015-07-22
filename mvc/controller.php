<?php

    /*
    
        localhost Ltd - ALPHA Framework
        
        Version: 10.0
        
        File name: controller.php
        Description: This file contains the MVC CONTROLLER class.
        
        Coded by George Delaportas (G0D)
        
        localhost Ltd
        Copyright (c) 2012
    
    */
    
    
    
    // MVC CONTROLLER class
    class MVC_CONTROLLER
    {
    
        public static function root($option)
        {
        
            $result = ROOT_MODEL::Get_Data($option);
            
            ALPHA::MVC_Store_Content($option, $result);
            
            return true;
        
        }
        
        // Your code from here...
        
        

        // ...to here.
    
    }
    
    
    
    /* ---------- End ---------- */

?>
