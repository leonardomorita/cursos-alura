<x-layout title="Editar Série: {{ $series->name }}">
    <x-series.form :action="route('series.update', $series->id)" button="Salvar" :name="$series->name" :update="true" />
</x-layout>
