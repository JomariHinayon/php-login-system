<?php 
// Connection for database
class Dbh {
    
    protected function connect() {
        try {
            $username = 'root';
            $password = '';
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin');
            return $dbh;
        }catch (PDOException $error){
            print('Error: ' . $error->getMessage() . '<br/>');
            die();
        }
    }
    
}
?>