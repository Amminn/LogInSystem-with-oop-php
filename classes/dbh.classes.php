<?php 
// connection
class Dbh {

    protected function connect() {
        try {
            $userName = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $userName, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die(); // kill the connection 
        }
    }

}