<?php

//bikin class parent
class PostRepository{
    public function get_latestpost(){
        $data = 'Belajar overridding & overloading php';
        return $data;
    }
}


//class child

class Turunan extends PostRepository{
    public function get_latestpost(){
        //overridding
        $data = parent::get_latestpost();
        $data2 = 'McDonell Douglas';
        //overloading
        $uppercase = strtoupper($data);
        $tanggal = date('d F Y');
        return $uppercase . '</br>' . strtoupper($data2) . '</br>' . ($tanggal);
    }
}

$parentClass = new PostRepository();
echo $parentClass->get_latestpost();

echo '</br>';

$childClass = new Turunan();
echo $childClass->get_latestpost();