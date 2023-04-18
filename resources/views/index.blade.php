@include('header')
<div>
    <div style="background-image:
linear-gradient(to bottom, rgba(255,255,255, 1), rgba(255,255,255, 0.3)),
url('/img/banner-home-01.jpg'); height: 600px; background-size:cover; background-attachment: fixed;">
        <div style="padding-top:200px;" class="container">
            <p class="text-center"><i class="fa-solid fa-leaf"></i></p>
            <hr style="border-top: solid; width:7%;" class="m-auto">
            <h1 class="text-center">SimplesVida</h1>
            <p><strong>Esse site tem a intenção apenas de compartilhar momentos da minha vida, seja experiências fazendo
                    algo que eu gosto, descobrindo novas coisas, novos lugares ou até mesmo novos estilos de vida.
                    <br> Podemos dizer que esse é um blog ou site mais como um hobby para passar o tempo, e nunca se
                    sabe podemos até ganhar uma grana também, afinal eu mesmo quem criei ele, pois sou
                    programador.</strong></p>
        </div>
    </div>

    <div style="background-image:
linear-gradient(to bottom, rgba(255,255,255, 1), rgba(255,255,255, 0.3)),
url('/img/banner-home-02.jpg'); height: 600px; background-size:cover; background-attachment: fixed;">
        <div style="padding-top:200px;" class="container">
            <hr style="border-top: solid; width:7%;">
            <h1>SimplesVida</h1>
            <p><strong>O que temos a perder se apenas tentarmos? <br>
                    Apenas sei que ficarei no mesmo lugar se eu não tentar andar para frente!</strong></p>
        </div>
    </div>
    <br>
    <hr style="border-top: solid black; width:7%;" class="m-auto">
    <br>
    <p class="text-center alert alert-warning"><strong>Postagens Mais recentes</strong> <i
            class="fa-solid fa-comment"></i></p>


    <div class="card-home container">
        @foreach($postsHome as $post)
        <div class="m-2" style="background-image: url('/img/card-home.jpg'); width: 250px; height: 250px;">
            <a href="">
                <p>dddddd</p>
            </a>
        </div>
        @endforeach

    </div>


    @include('footer')