<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/20/17
 * Time: 4:41 PM
 */
    class person {
        var $name;
        function __construct($persons_name){
            $this->name = $persons_name;
        }
        function set_name($new_name) {
            $this->name = $new_name;
        }

        function get_name() {
            return $this->name;
        }
    }
?>