<x-layout title="Nova Série">
    <x-series.form :action="route('series.store')" button="Adicionar" :name="old('name')" />
</x-layout>
