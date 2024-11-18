<x-layout title="Editar Série: {{ $serie->nome }}">
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" botao="Salvar" />
</x-layout>
