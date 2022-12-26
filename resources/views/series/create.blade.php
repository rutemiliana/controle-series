<x-layout title="Nova serie">
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="">Nome</label>
            <input type="text" class="form-control" name="serie">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        
    </form>
    
</x-layout>