<x-layout title="Nova Série">
    <!-- <x-series.form :action="route('series.store')" button="Adicionar" :name="old('name')" /> -->

    <form action="{{ route('series.store') }}" method="POST">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" autofocus>
            </div>

            <div class="col-2">
                <label for="season-qty" class="form-label">Nº Temporadas:</label>
                <input type="text" class="form-control" id="season-qty" name="seasonQty" value="{{ old('seasonQty') }}">
            </div>

            <div class="col-2">
                <label for="episode-per-season" class="form-label">Eps. por Temporada:</label>
                <input type="text" class="form-control" id="episode-per-season" name="episodePerSeason" value="{{ old('episodePerSeason') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>
