@extends('layouts.app')
@section('title', 'Tapetes')

@section('content')
    <header>
        <h2>Monte seu tapete</h2>
    </header>
    <div class="container">
        <form action="{{ route('tapetes.store') }}" method="post">
            {{ csrf_field() }}
            <h3>Estampas</h3>
            <hr>
            <div class="row">
                <div class="col">
                    <img src="{{ asset('img/estampas/estampa1.jpg') }}" alt="estampa1.jpg">
                    <h4>Fractal 1</h4>
                    <p class="text-secondary">Estampa gerada a partir de quaternions com coloração "GrayTones".</p>
                    <div>
                        <input type="radio" id="estampa1" name="estampa" value="Fractal 1" {{ old('estampa') == 'Fractal 1' ? 'checked' : '' }}required>
                        <label for="estampa1">Selecione</label>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('img/estampas/estampa2.jpg') }}" alt="estampa2.jpg">
                    <h4>Fractal 2</h4>
                    <p class="text-secondary">Estampa gerada a partir de quaternions com coloração "LightTemperatureMap".
                    </p>
                    <div>
                        <input type="radio" id="estampa2" name="estampa" value="Fractal 2" required {{ old('estampa') == 'Fractal 2' ? 'checked' : '' }}>
                        <label for="estampa2">Selecione</label>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('img/estampas/estampa3.jpg') }}" alt="estampa3.jpg">
                    <h4>Fractal 3</h4>
                    <p class="text-secondary">Estampa gerada a partir de quaternions com coloração "GrayTones".</p>
                    <div>
                        <input type="radio" id="estampa3" name="estampa" value="Fractal 3" required {{ old('estampa') == 'Fractal 1' ? 'checked' : '' }}>
                        <label for="estampa3">Selecione</label>
                    </div>
                </div>
                @error('estampa')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <h3>Características</h3>
            <hr>
            <div class="row">
                <div class="col">
                    <input type="checkbox" name="limpo" id="limpo" value="1" {{old('limpo') ? 'checked' : ''}}>
                    <label for="limpo">Limpo</label>
                    @error('limpo')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <input type="checkbox" name="novo" id="novo" value="1" {{old('novo') ? 'checked' : ''}}>
                    <label for="novo">Novo</label>
                    @error('novo')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <input type="checkbox" name="voador" id="voador" value="1" {{old('voador') ? 'checked' : ''}}>
                    <label for="voador">Voador</label>
                    @error('voador')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <input type="checkbox" name="magico" id="magico" value="1" {{old('magico') ? 'checked' : ''}}>
                    <label for="magico">Mágico</label>
                    @error('magico')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <br>
            <h3>Outros</h3>
            <hr>
            <div class="form-control">
                <label for="tamanho">Tamanho</label>
                <select class="my-input" name="tamanho" id="tamanho" required>
                    <option value="" selected disabled>Selecione...</option>
                    <option value="0,90 x 0,60 m">0,90 x 0,60 m</option>
                    <option value="1,00 x 1,50 m">1,00 x 1,50 m</option>
                    <option value="1,50 x 2,00 m">1,50 x 2,00 m</option>
                    <option value="2,00 x 2,50 m">2,00 x 2,50 m</option>
                    <option value="2,00 x 3,00 m">2,00 x 3,00 m</option>
                </select>
                @error('tamanho')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-control">
                <label for="quantidade">Quantidade</label>
                <div style="max-width: 97%;">
                    <input class="my-input" type="number" name="quantidade" id="quantidade" min="1" required value="{{old('quantidade')}}">
                </div>
                @error('quantidade')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-control">
                <label for="obs">Observação na entrega</label>
                <div style="max-width: 97%;">
                    <input class="my-input" type="text" name="obs" id="obs" placeholder="Opcional" value="{{old('obs')}}">
                </div>
                @error('obs')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div style="text-align: end; margin-top: 50px;">
                <button class="my-button" type="submit">Submeter</button>
            </div>
        </form>
    </div>
@endsection
