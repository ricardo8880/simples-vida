<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function addImage()
    {
        return view('gallery-upload');
    }

    public function salvarImage()
    {
        $image = $_FILES['imageGallery'];
        $tmp_name = $image['tmp_name'];
        $image = $image['name'];
        move_uploaded_file($tmp_name,  $_SERVER["DOCUMENT_ROOT"] . '/gallery/' . $image);

        $this->inserirImageGallery($image);
        session()->flash('messageGallery', 'Ricardo você adicionou com sucesso sua foto!');
        return view('gallery-upload');
    }

    public function inserirImageGallery($image)
    {

        DB::insert("
            insert into gallery (nomeImage) values ('$image')
        ");
    }

    public function enviarDadosGallery()
    {
        $dadosGallery = DB::select("
            select * from gallery   
        ");

        return view('gallery', ['dadosGallery' => $dadosGallery]);
    }
}