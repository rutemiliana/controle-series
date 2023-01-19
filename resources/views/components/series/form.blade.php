<form action="{{$action}}" method="POST">
    @csrf

    @if($update)
        @method('PUT')
    @endif
    <div class="mb-3">
        <label class="form-label" for="name">Nome</label>
        <input type="text"
            id="nome"
            name="name" 
            class="form-control" 
            @isset($name) value="{{$name}}" @endisset>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
    
</form>