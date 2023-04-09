@include('header')

<div class="card-post" style="margin:auto">



    <div class="reacoes-post-unic">



        <div class="img-post img-post-unic">
            <a href="" style="text-decoration: none; color:white;">
                <img src="img/banner-home-01.jpg" class="card-img-top" alt="...">
            </a>
        </div>
        <div class="icons-post mt-3" style="width:500px;">
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
    <h1 class="p-3 h4">titulo</h1>

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


        <h5 class="card-title"><a style="color:black; text-decoration:none;" href="">Ir para o Post
                <ion-icon name="arrow-redo-circle-outline"></ion-icon>
            </a></h5>
    </div>



</div>

<br>



@include('footer')