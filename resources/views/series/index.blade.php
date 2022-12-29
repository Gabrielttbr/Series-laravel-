<x-layout title="series">
    <a href="/series/create">Adicionar série</a>
    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>
</x-layout>
