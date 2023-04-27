@include('header')


@if(!empty( session('messageGallery') ))
<p class="alert alert-success text-center">{{session('messageGallery')}}</p>
@endif


<form action="salvarImage" enctype="multipart/form-data" method="POST" class="col-lg-6 m-auto my-5 py-5">
    @csrf
    <h1 class="display-4">Adicione Sua Foto</h1>
    <p>
        <input type="file" class="form-control" name="imageGallery" required>
    </p>

    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>

@include('footer')