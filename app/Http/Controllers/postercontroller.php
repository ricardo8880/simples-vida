<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

session_start();

class postercontroller extends Controller
{
    public function pegarDadosPost(Request $request)
    {
        $post_image = $request->post_image; //A imagem está vindo como array igual vem com $_FILES

        $post_image = $post_image->getClientOriginalName(); //Essa função pega apenas o nome da imagem do array
        $post_title = $request->post_title;
        $post_description = $request->post_description;
        $post_message = $request->post_message;

        $this->validarImage($post_image);

        $this->inserirDadosBanco(NULL, $post_title, $post_description, $post_message);
    }

    public function validarImage($post_image)
    {
        //Separa a imagem da extensão
        $ImageExtensao = explode(".", $post_image);
        $nomeImage = $ImageExtensao[0];
        $extensaoImage = $ImageExtensao[1];

        //Verifica se as estenssões são as requeridas
        if ($extensaoImage == 'jpg' || $extensaoImage == 'png') {
            $post_image = $nomeImage . '.' . $extensaoImage;
            $this->upload($post_image);
        } else {
            $_SESSION['msg-extensao'] = "[ERROR]Ricardo é nescessarío que as imagens sejam 'JPG' ou 'PNG'";
            echo "<script>location.href='radmin'</script>";
        }
    }

    public function upload($post_image)
    {
        $tmp_name = $_FILES['post_image'];
        $tmp_name = $tmp_name['tmp_name'];
        move_uploaded_file($tmp_name, 'img_post/' . $post_image);


        $this->inserirDadosBanco($post_image, NULL, NULL, NULL);
    }



    public function inserirDadosBanco($post_image, $post_title, $post_description, $post_message)
    {
        // echo '<pre>';

        // $results = DB::select('select * from users');
        // print_r($results);

        // $_SESSION['msg-cadastro-post'] = "Ricardo Seu post foi feito com sucesso!";

        // echo "<script>location.href='radmin'</script>";
    }
}