<?php

class Book{
    private $id;
    private $tenSach;
    private $namXuatBan;
    private $idTacGia;


    public function __construct($id, $tenSach, $namXuatBan, $idTacGia){
        $this->id = $id;
        $this->tenSach = $tenSach;
        $this->namXuatBan = $namXuatBan;
        $this->idTacGia = $idTacGia;
    }

    public function getId(){
        return $this->id;
    }
    public function gettenSach(){
        return $this->tenSach;
    }
    public function getnamXuatBan(){
        return $this->namXuatBan;
    }
    public function getidTacGia(){
        return $this->idTacGia;
    }

    public function setFulltenSach($tenSach){
        $this->tenSach = $tenSach;
    }
}