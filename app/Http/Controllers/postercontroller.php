<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class postercontroller extends Controller
{

    public function index()
    {

        $postsHome = DB::select("select * from postagem limit 4");
        return view('index', ['postsHome' => $postsHome]);
    }

    public function pegarDadosPost(Request $request)
    {
        $post_image = $request->post_image; //A imagem está vindo como array igual vem com $_FILES

        $post_image = $post_image->getClientOriginalName(); //Essa função pega apenas o nome da imagem do array
        $post_title = $request->post_title;

        $post_message = $request->post_message;

        // estou recupernado um dado retornado
        $post_image = $this->validarImage($post_image);

        // estou recupernado um dado retornado

        $this->inserirDadosBanco($post_image, $post_title, $post_message);

        return view('/radmin');
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
            return $post_image;
        } else {
            session()->flash('msg-extensao', "[ERROR]Ricardo é nescessarío que as imagens sejam 'JPG' ou 'PNG'");
            echo "<script>location.href='radmin'</script>";
        }
    }

    public function upload($post_image)
    {
        $tmp_name = $_FILES['post_image'];
        $tmp_name = $tmp_name['tmp_name'];
        move_uploaded_file($tmp_name, 'img_post/' . $post_image);
    }



    public function inserirDadosBanco($post_image, $post_title, $post_message)
    {

        // $array1 = [$post_image];
        // $array2 = [$post_title, $post_message];
        // Estou juntando os array
        // $resultado = array_merge($array1, $array2);
        $post_data = date("Y-m-d");

        DB::insert(
            "
            INSERT INTO postagem (post_image, post_title, post_message, post_data)
            VALUES ('$post_image', '$post_title', '$post_message', '$post_data');
            "
        );
        session()->flash('msg-cadastro-post', "Ricardo Seu post foi feito com sucesso!");

        // insert get id
        // return $productId = DB::getPdo()->lastInsertId();
    }




    public function pegarDadosPostBanco()
    {
        $Select_postagens = DB::select("
            select * from postagem
        ");

        return view('posts', ['Select_postagens' => $Select_postagens]);
    }

    public function pegarIDpost($id)
    {
        $dadosPost =  DB::select("
            select * from postagem where id = '$id';
        ");


        return view('/post', ['dadosPost' => $dadosPost]);
    }
}
