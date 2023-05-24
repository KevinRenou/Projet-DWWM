<?php 

Class Controller {

    //attributs
    public static $ROOT_URL = 'http://localhost/blog/';
    public static  $root_path = '../app/';

    //actions

    public function render(string $_vue='', $_data =[]) {
        ob_start();
        extract($_data);
        include self::$root_path.'view/head.php';
        include self::$root_path.'view/topbar.php';

        if ($_vue !='') {
            include self::$root_path.'view/'. $_vue .'.php';
        }
        
        include self::$root_path.'view/footer.php';
        
        $content = ob_get_contents();
        return $content;
    }

    public static function error404() {
        include self::$root_path.'view/head.php';
        include self::$root_path.'view/topbar.php';
        include self::$root_path.'view/404.php';
        include self::$root_path.'view/footer.php';
    }

    public static function redirectIndex() {
       return header('location:index.php');
    }



}