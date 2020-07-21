<?php

require "connection.php";

class User
{
    static public function ShowUsers($table, $item, $value)
    {
        //Mở kết nối
        $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
        $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();
        $stmt->close();
        $stmt = null;
    }

    /*=============================================
	ADD USER 
    =============================================*/	
    
    static public function create($table, $data)
    {
        //$stmt = Connection::connect()->prepare("INSERT INTO $table(name, user, password, profile) VALUES (:name, :user, :password, :profile)");
        $stmt = Connection::connect()->prepare('INSERT INTO users (name, user, password, profile) VALUES (?,?,?,?)');

        //Gán biến
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["user"]);
        $stmt->bindParam(3, $data["password"]);
        $stmt->bindParam(4, $data["profile"]);

        if ($stmt->execute()) {
			
			return 'ok';
		
		} else {
			
			return 'error';
		}
		
		$stmt -> close();

		$stmt = null;
    }

    /*=============================================
	Update USER 
    =============================================*/	


    /*=============================================
	Delete USER 
    =============================================*/	
    
}