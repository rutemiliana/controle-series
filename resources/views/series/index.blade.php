<x-layout title="Series">
    <a class="btn btn-dark mb-2 " href="{{route('create.serie')}}">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{$serie->name}}</li>
        @endforeach
    </ul>
</x-layout>