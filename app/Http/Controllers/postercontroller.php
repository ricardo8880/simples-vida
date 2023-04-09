<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class postercontroller extends Controller
{
    public function pegarDadosPost(Request $request)
    {
        $post_image = $request->post_image; //A imagem está vindo como array igual vem com $_FILES

        $post_image = $post_image->getClientOriginalName(); //Essa função pega apenas o nome da imagem do array
        $post_title = $request->post_title;
        $post_description = $request->post_description;
        $post_message = $request->post_message;

        // estou recupernado um dado retornado
        $post_image = $this->validarImage($post_image);

        // estou recupernado um dado retornado
        $productId = NULL;
        $productId = $this->inserirDadosBanco($post_image, $post_title, $post_description, $post_message, $productId);

        return view('radmin', ['productId' => $productId]);
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

            return $post_image;

            $this->upload($post_image);
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



    public function inserirDadosBanco($post_image, $post_title, $post_description, $post_message, $productId)
    {

        // $array1 = [$post_image];
        // $array2 = [$post_title, $post_description, $post_message];
        // Estou juntando os array
        // $resultado = array_merge($array1, $array2);


        DB::insert(
            "
            INSERT INTO postagem (post_image, post_title, post_description, post_message )
            VALUES ('$post_image', '$post_title', '$post_description', '$post_message');
            "
        );
        session()->flash('msg-cadastro-post', "Ricardo Seu post foi feito com sucesso!");

        // insert get id
        return $productId = DB::getPdo()->lastInsertId();
    }




    public function pegarDadosPostBanco()
    {
        $Select_postagens = DB::select("
            select * from postagem
        ");

        return view('posteres', ['Select_postagens' => $Select_postagens]);
    }
}
