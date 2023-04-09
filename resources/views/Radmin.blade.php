@include('header')

<div class="p-2">
    @if(!empty($productId))
    {{dd($productId)}}
    @endif

    <!--Mensagem de sucesso se o post for cadastrado-->
    @if (session()->has('msg-cadastro-post'))
    <div class="alert alert-success mb-5 text-center">
        {{ session('msg-cadastro-post') }}
    </div>
    @endif

    <!--Mensagem de erro caso a extensão não seja a desejada-->
    @if (session()->has('msg-extensao'))
    <div class="alert alert-danger mb-5 text-center">
        {{ session('msg-extensao') }}
    </div>
    @endif



    <p class="text-end container"><a href="" class="btn btn-warning">Ver post</a></p>
    <form action="pegar-dados-post" enctype="multipart/form-data" method="POST" class="col-lg-6 m-auto">
        @csrf
        <h1 class="display-4">Adicione Seu Post</h1>
        <p>
            <input type="file" class="form-control" name="post_image" required>
        </p>
        <p>
            <input type="text" class="form-control" placeholder="titulo" name="post_title" required>
        </p>
        <p>
            <input type="text" class="form-control" placeholder="descricao" name="post_description" required>
        </p>
        <p>
            <textarea class="w-100 form-control" id="" rows="5" placeholder="Alguma ideia sua pode mudar sua vida..." name="post_message" required></textarea>
        </p>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<br>




@include('footer')