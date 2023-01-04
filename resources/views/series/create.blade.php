<x-layout title="Nova serie">
    <form action="/series/salvar" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="nome">Nome</label>
            <input type="text" id="nome" class="form-control" name="nome">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        
    </form>
    
</x-layout>