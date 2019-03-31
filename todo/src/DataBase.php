<?php 

    namespace Tasker;
    use PDO;

    class DataBase{

        public static function connect($config)
        {
         try {
             
             return new PDO(
                $config['connection'].';dbname='.$config['dbname'].';charset='.$config['charset'],$config['username'],$config['password'],$config['options']);
             
         }
                catch(PDOExeption $e){
                    echo "Nepavyko prisijungti";
                    die($e-getMessage());
                }
            }
        }
    




?>