<x-layout title="Nova Série">
    <x-series.form :action="route('series.store')" botao="Adicionar" :nome="old('nome')" />
</x-layout>
