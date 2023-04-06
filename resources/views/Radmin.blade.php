@include('header')

<form class="col-6 m-auto">
    <h1 class="display-4">Adicione Seu Post</h1>
    <p>
        <input type="file" class="form-control">
    </p>
    <p>
        <input type="text" class="form-control" placeholder="titulo">
    </p>
    <p>
        <input type="text" class="form-control" placeholder="descricao">
    </p>
    <p>
        <textarea class="w-100 form-control" name="" id="" rows="5" placeholder="Alguma ideia sua pode mudar sua vida..."></textarea>
    </p>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>




@include('footer')
