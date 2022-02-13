<?php
namespace Controller;

class Error{
    public function home($data){
        switch($data["code"]){
            case "400":
                self::e400();
                break;
            case "404":
                self::e404();
                break;
            case "500":
                self::e500();
                break;
            default:
                var_dump($data);
                break;
        }
    }

    private static function e400(){
        echo "400";
    }

    private static function e404(){
        echo "404";
    }

    private static function e500(){
        echo "500";
    }
}