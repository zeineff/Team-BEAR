<?php
    function get_field_set($field) {
        $a = filter_input(INPUT_GET, $field);
        
        return $a !== null && isset($a) && !empty($a);
    }

    function check_get_fields($fields){
        foreach ($fields as $field){
            if (!get_field_set($field)) {
                return false;
            }
        }
        
        return true;
    }
    
    
    
    function post_field_set($field) {
        $a = filter_input(INPUT_POST, $field);
        
        return $a !== null && isset($a) && !empty($a);
        
    }

    function check_post_fields($fields){
        foreach ($fields as $field){
            if (!post_field_set($field)) {
                return false;
            }
        }
        
        return true;
    }
