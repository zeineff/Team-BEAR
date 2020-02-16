<?php
    require_once("db.php");
    
    
    
    define("USERS", "users");
    define("USERS_ID", "id");
    define("USERS_USERNAME", "username");
    define("USERS_EMAIL", "email");
    
    define("LOCATIONS", "locations");
    define("LOCATION_NAME", "name");
    
    define("VIEW_LOCATION_IMAGES", "view_location_images");
    define("VIEW_LOCATION_IMAGES_LOCATION_ID", "location_id");
    
    
    function search_table_equal($table, $field, $value, $order = "1", $direction = "DESC") {
        global $db;
        
        $string =
                "SELECT * FROM " . $table .
                " WHERE " . $field .
                " = '" . $value .
                "' ORDER BY " . $order .
                " " . $direction .
                ";";
        
        $query = $db->prepare($string);
        $query->execute();
        $results = $query->fetchAll();
        $query->closeCursor();
        
        return $results;
    }
    
    function search_table_like($table, $field, $value, $order = "1", $direction = "DESC") {
        global $db;
        
        $string =
                "SELECT * FROM " . $table .
                " WHERE " . $field .
                " LIKE '%" . $value .
                "%' ORDER BY " . $order .
                " " . $direction .
                ";";
        
        $query = $db->prepare($string);
        $query->execute();
        $results = $query->fetchAll();
        $query->closeCursor();
        
        return $results;
    }
    
    
    
    function get_unique_field($table, $field, $value) {
        $results = search_table_equal($table, $field, $value);
        
        if (sizeof($results) === 1) {
            return $results[0];
        } else {
            return null;
        }
    }
    
    function get_like_field($table, $field, $value) {
        return search_table_like($table, $field, $value);
    }
    
    
    
    function get_user_by_unique_field($field, $value) {
        return get_unique_field(USERS, $field, $value);
    }
    
    function get_user_by_id($id) {
        return get_user_by_unique_field(USERS_ID, $id);
    }
    
    function get_user_by_email($email) {
        return get_user_by_unique_field(USERS_EMAIL, $email);
    }
    
    function get_user_by_username($username) {
        return get_user_by_unique_field(USERS_USERNAME, $username);
    }
    
    function user_field_taken($field, $value) {
        return get_unique_field(USERS, $field, $value) !== null;
    }
    
    function email_taken($email) {
        return user_field_taken(USERS_EMAIL, $email);
    }
    
    function username_taken($username) {
        return user_field_taken(USERS_USERNAME, $username);
    }
    
    function valid_new_user_details($email, $username) {
        return !(email_taken($email) || username_taken($username));
    }
    
    function create_user($email, $username, $password) {
        global $db;
        
        $string = "INSERT INTO " . USERS . " (email, username, password) VALUES (:email, :username, :password);";
        
        $query = $db->prepare($string);
        $query->bindValue(":email", $email);
        $query->bindValue(":username", $username);
        $query->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
        $query->execute();
        $query->closeCursor();
        
        return get_user_by_username($username);
    }
    
    
    
    function search_locations($query) {
        return search_table_like(LOCATIONS, LOCATION_NAME, $query);
    }
    
    function get_location_images($location_id) {
        return search_table_equal(
            VIEW_LOCATION_IMAGES,
            VIEW_LOCATION_IMAGES_LOCATION_ID,
            $location_id
        );
    }
