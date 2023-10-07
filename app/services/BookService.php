<?php
require_once APP_ROOT.'/app/models/Book.php';
class BookService{
    public function getAllBooks(){
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if($conn != null){
                $sql = "SELECT * FROM Sach ORDER BY id DESC";
                $stmt = $conn->query($sql);
    
                $books = [];
                while($row = $stmt->fetch()){
                    $book = new Book($row ['id'],$row ['tenSach'], $row ['namXuatBan'], $row ['idTacGia']);
                    $books[] = $book;
                }   
                return $books;

            }

           
    }
}