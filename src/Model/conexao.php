<?php

namespace FITCHEF\Model;
class Conexao{

    private function __construct(){
        
    }
    public static function getInstance(){
        try {
            //$conexao = new \PDO("mysql:host=mysql17-farm70.uni5.net; dbname=fitchef", "fitchef", "senac10058");
            $conexao = new \PDO("mysql:host=localhost; dbname=fitchef", "root", "");
            $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $conexao->exec("set names utf8");
            
            return $conexao;
        } catch (\PDOException $erro) {
            
            return null;
        }
    }
}
?>