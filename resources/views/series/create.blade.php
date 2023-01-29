<x-layout title="Nova serie">
        
    <form action="{{route('series.store')}}" method="POST">
        @csrf

        <div class="row mb-3">
            <div class="mb-3 col-8" >
                <label class="form-label" for="name">Nome</label>
                <input type="text"
                autofocus
                    id="nome"
                    name="name" 
                    class="form-control" 
                    value="{{old('name')}}">
            </div>

            <div class="mb-3 col-2" >
                <label class="form-label" for="seasonsQty">Temporadas</label>
                <input type="text"
                    id="seasonsQty"
                    name="seasonsQty" 
                    class="form-control" 
                    value="{{old('seasonsQty')}}">
            </div>

            <div class="mb-3 col-2" >
                <label class="form-label" for="episodesPerSeason">Eps/Temporada</label>
                <input type="text"
                    id="episodesPerSeason"
                    name="episodesPerSeason" 
                    class="form-control" 
                    value="{{old('episodesPerSeason')}}">
            </div>
    
        </div>
    
        
        <button type="submit" class="btn btn-primary">Adicionar</button>
   
    </form>
</x-layout>