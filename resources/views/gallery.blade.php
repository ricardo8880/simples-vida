@include('header')

<div id="body-gallery">


    <h1 style="font-size: 25px;" class="text-center pt-5">MINHA GALERIA</h1>


    <div class="gallery contain">
        @foreach($dadosGallery as $img)
        <div class="gallery-item">
            <a href="gallery/{{$img->nomeImage}}" data-lightbox="roadtrip">
                <img src="gallery/{{$img->nomeImage}}" class="card-img-top" alt="...">
            </a>
        </div>
        @endforeach
    </div>

    <!--Lightbox-->
</div>
@include('footer')