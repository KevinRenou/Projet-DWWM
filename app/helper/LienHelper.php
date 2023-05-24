<?php 

class LienHelper {
    public static $url = '/index.php';
    

    public static function getLien(string $_control, string $_action, string $_id) {
        return self::$url . '?controller=' . $_control . '&action=' .$_action .'&id='.$_id;
    }
}