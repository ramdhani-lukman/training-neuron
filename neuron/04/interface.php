<?php
interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class crudBarang implements Crud{
    public function create(){
        echo "create barang";
    }
    public function read(){
        echo "read barang";
    }
    public function update(){
        echo "update barang";
    }
    public function delete(){
        echo "delete barang";
    }
}

