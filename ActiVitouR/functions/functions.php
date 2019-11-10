<?php
    function check_fields($fields){
        foreach ($fields as $field){
            $a = filter_input(INPUT_POST, $field);
            
            if ($a === null || !isset($a) || empty($a)){
                return false;
            }
        }
        
        return true;
    }
    