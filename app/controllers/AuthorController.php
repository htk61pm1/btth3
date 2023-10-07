<?php
require_once APP_ROOT.'/app/services/AuthorService.php';
class AuthorController{
    public function Index(){
        $authorService = new AuthorService();
        $authors = $authorService->getAllAuthors();
        include APP_ROOT.'/app/views/home/IndexAuthor.php';
    }
}