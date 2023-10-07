<?php
require_once APP_ROOT.'/app/services/BookService.php';
class HomeController{
    public function index(){
        $bookService = new BookService();
        $books = $bookService->getAllBooks();
        include APP_ROOT.'/app/views/home/index.php';
    }
}




