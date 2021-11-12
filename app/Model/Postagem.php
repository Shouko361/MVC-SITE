<?php

    Class Postagem{
        
        public static function selecionarTodos(){

            $con = Connection::getConn();
            $sql = "SELECT * FROM postagem ORDER BY id_post DESC";
            $sql = $con->prepare($sql);
            $sql->execute();

            $result = array();

            while($row = $sql->fetchObject('Postagem')){
                $result[] = $row;
            }

            if(!$result){
                throw new Exception("Não foi encontrado nenhum registro no banco de dados");
            }
            return $result;
        }
    }

?>