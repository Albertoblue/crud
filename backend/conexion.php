<?php

    class Conexion{
        public static function Conectar(){
            define('servidor', 'localhost');
            define('nombre_bd', 'llamadas');
            define('usuario', 'root');
            define('password', '');	
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
            try{
                $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
                return $conexion;                    
            }catch (Exception $e){
                die("El error de Conexión parece que es: ". $e->getMessage());
            }
        }
    }

/*
    class Conexion{
        public static function Conectar(){
                define('servername',"localhost");
                define('database',"databasename");
                define('username',"username");
                define('password',"password");
                // Create connection
                $conn = mysqli_connect(servername, username, password, database);
                // Check connection
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }
                echo "Connected successfully";
                return $conn;
                echo "Conexion exitosa";
                mysqli_close($conn);
            }

            
    }*/
    
?>