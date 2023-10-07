<?php

class Author{
    private $id;
    private $tenTacGia;


    public function __construct($id, $tenTacGia){
        $this->id = $id;
        $this->tenTacGia = $tenTacGia;
    }

    public function getId(){
        return $this->id;
    }
    public function gettenTacGia(){
        return $this->tenTacGia;
    }   
    public function setFulltenTacGia($tenTacGia){
        $this->tenTacGia = $tenTacGia;
    }
}