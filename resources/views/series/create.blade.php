<x-layout title="Nova Série">

    <form action="{{ route('series.store') }}" method="post">
        @csrf

        <div class="row mb-3">

            <div class="col-8">

                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="" autofocus class="form-control"
                    value="{{ old('nome') }}">

            </div>

            <div class="col-2">

                <label for="seasonsQty" class="form-label">Nº Temporadas:</label>
                <input type="text" name="seasonsQty" id="seasonsQty" placeholder="" class="form-control"
                    value="{{ old('seasonsQty') }}">

            </div>

            <div class="col-2">

                <label for="episodePerSeason" class="form-label">Eps / Temporada:</label>
                <input type="text" name="episodePerSeason" id="episodePerSeason" placeholder="" class="form-control"
                    value="{{ old('episodePerSeason') }}">

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>