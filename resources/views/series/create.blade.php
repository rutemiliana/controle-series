<x-layout title="Nova serie">
    <form action="{{route('store.serie')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Nome</label>
            <input type="text" id="nome" class="form-control" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        
    </form>
    
</x-layout>