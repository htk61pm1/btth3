<?php
require_once APP_ROOT.'/app/models/Author.php';
class AuthorService{
    public function getAllAuthors(){
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if($conn != null){
                $sql = "SELECT * FROM TacGia ORDER BY id DESC";
                $stmt = $conn->query($sql);
    
                $authors = [];
                while($row = $stmt->fetch()){
                    $author = new Author($row ['id'],$row ['tenTacGia']);
                    $authors[] = $author;
                }   
                return $authors;

            }

           
    }
}