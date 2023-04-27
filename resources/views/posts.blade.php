@include('header')
<div class="container-shorts">
    <div class="container">
        <iframe class="shorts" src="https://www.youtube.com/embed/X4VwzaQbdmM"
            title="OS 3 ONIS MAIS FORTES DE DEMON SLAYER! - Kimetsu no Yaiba" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        <iframe class="shorts" src="https://www.youtube.com/embed/X4VwzaQbdmM"
            title="OS 3 ONIS MAIS FORTES DE DEMON SLAYER! - Kimetsu no Yaiba" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        <iframe class="shorts" src="https://www.youtube.com/embed/X4VwzaQbdmM"
            title="OS 3 ONIS MAIS FORTES DE DEMON SLAYER! - Kimetsu no Yaiba" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        <iframe class="shorts" src="https://www.youtube.com/embed/X4VwzaQbdmM"
            title="OS 3 ONIS MAIS FORTES DE DEMON SLAYER! - Kimetsu no Yaiba" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        <iframe class="shorts" src="https://www.youtube.com/embed/X4VwzaQbdmM"
            title="OS 3 ONIS MAIS FORTES DE DEMON SLAYER! - Kimetsu no Yaiba" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

    </div>

</div>
@foreach($Select_postagens as $postagem)
<div class="card-post" style="margin:auto">



    <div class="reacoes-post">



        <div class="img-post">
            <a href="/post/{{$postagem->id}}" style="text-decoration: none; color:white;">
                <img src="img/{{$postagem->post_image}}" class="card-img-top" alt="...">
                <p class="pt-3">{{Str::substr($postagem->post_title, 0, 85)}}... Ler mais</p>
            </a>
        </div>

        <div class="icons-post m-2">
            <p>
                <ion-icon name="heart-outline" title="Gostei"></ion-icon>
            </p>
            <p>
                <ion-icon name="chatbubbles-outline" title="Comentario"></ion-icon>
            </p>
            <p>
                <ion-icon name="notifications-circle-outline" title="Ver mais tarde"></ion-icon>
            </p>
            <p>
                <ion-icon name="server-outline" title="Salvar post"></ion-icon>
            </p>
            <p>
                <ion-icon name="arrow-redo-outline" title="Compartilhar"></ion-icon>
            </p>
        </div>
    </div>

    <div class="card-body">
        <p>Curtido por
            <span>eeliana1</span> e
            <span>outras 4467 pessoas</span>
        </p>

        <p><span>wellington10moura</span>: Como faz tempo que ué não posto nada, vou postar isso! Fique tranquilo!! É só
            uma fase!
            Compartilhe com quem precisa!</p>
        <p style="color:#808080; cursor:pointer;" id="comentarios-posts">Ver todos os 16 comentários</p>
        <p class="card-text" style="cursor:pointer;"><small class="text-muted">Adicione um comentário...</small></p>


        <h5 class="card-title"><a style="color:black; text-decoration:none;" href="/post/{{$postagem->id}}">Ir para o
                Post
                <ion-icon name="arrow-redo-circle-outline"></ion-icon>
            </a></h5>
    </div>
    <hr class="hr-poster">



    <?php
    if (empty($Select_postagens)) {
        echo "<h4 class='alert alert-warning'>Desculpe mas no momento não há postagens!</h4>";
    }
    ?>

</div>
@endforeach
<br>



@include('footer')