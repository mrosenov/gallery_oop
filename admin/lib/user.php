<?php

class User {
    public $id;
    public $username;
    public $password;
    public $firstname;
    public $lastname;

    public static function find_all_users() {
        global $database;

        return self::find_this_query("SELECT * FROM users");
    }

    public static function find_user_by_id($user_id) {
        global $database;

        $the_result_array = self::find_this_query("SELECT * FROM users WHERE user_ID = '$user_id'");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
/*        if (!empty($the_result_array)){
            $first_item = array_shift($the_result_array);
            return $first_item;
        }else{
            return false;
        }*/
        return $found_user;
    }

    public static function find_this_query($sql){
        global $database;

        $result_set = $database->Query($sql);
        $the_object_array = array();
        while ($row = mysqli_fetch_array($result_set)){
            $the_object_array[] = self::instantation($row);
        }
        return $the_object_array;
    }

    public static function instantation($the_record){
        $the_object = new self;
//        $the_object->id = $found_user['user_ID'];
//        $the_object->username = $found_user['username'];
//        $the_object->password = $found_user['password'];
//        $the_object->firstname = $found_user['firstname'];
//        $the_object->lastname = $found_user['lastname'];
        foreach ($the_record as $the_attribute => $value){
            if ($the_object->has_the_attribute($the_attribute)){
                $the_object->$the_attribute = $value;
            }
        }
        return $the_object;
    }

    private function has_the_attribute($the_attribute){
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute, $object_properties);
    }

}
$database = new Database;

?>