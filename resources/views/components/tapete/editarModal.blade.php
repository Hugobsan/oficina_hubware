<div class="modal fade" id="editarTapete" tabindex="-1" aria-labelledby="editarTapeteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarTapeteLabel">Editar tapete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tapetes.update', $tapete->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ csrf_field() }}
                    <h3>Estampas</h3>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('img/estampas/estampa1.jpg') }}" alt="estampa1.jpg">
                            <h4>Fractal 1</h4>
                            <p class="text-secondary">Estampa gerada a partir de quaternions com coloração "GrayTones".
                            </p>
                            <div>
                                <input type="radio" id="estampa1" name="estampa" value="Fractal 1"
                                    {{ $tapete->estampa == 'Fractal 1' ? 'checked' : '' }} required>
                                <label for="estampa1">Selecione</label>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/estampas/estampa2.jpg') }}" alt="estampa2.jpg">
                            <h4>Fractal 2</h4>
                            <p class="text-secondary">Estampa gerada a partir de quaternions com coloração
                                "LightTemperatureMap".
                            </p>
                            <div>
                                <input type="radio" id="estampa2" name="estampa" value="Fractal 2" required
                                    {{ $tapete->estampa == 'Fractal 2' ? 'checked' : '' }}>
                                <label for="estampa2">Selecione</label>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/estampas/estampa3.jpg') }}" alt="estampa3.jpg">
                            <h4>Fractal 3</h4>
                            <p class="text-secondary">Estampa gerada a partir de quaternions com coloração "GrayTones".
                            </p>
                            <div>
                                <input type="radio" id="estampa3" name="estampa" value="Fractal 3" required
                                    {{ $tapete->estampa == 'Fractal 3' ? 'checked' : '' }}>
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
                            <input type="checkbox" name="limpo" id="limpo" value="1"
                                {{ $tapete->limpo ? 'checked' : '' }}>
                            <label for="limpo">Limpo</label>
                            @error('limpo')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="checkbox" name="novo" id="novo" value="1"
                                {{ $tapete->novo ? 'checked' : '' }}>
                            <label for="novo">Novo</label>
                            @error('novo')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="checkbox" name="voador" id="voador" value="1"
                                {{ $tapete->voador ? 'checked' : '' }}>
                            <label for="voador">Voador</label>
                            @error('voador')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="checkbox" name="magico" id="magico" value="1"
                                {{ $tapete->magico ? 'checked' : '' }}>
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
                            <option value="" disabled>Selecione...</option>
                            <option value="0,90 x 0,60 m" 
                            {{$tapete->tamanho =="0,90 x 0,60 m" ? "selected" : ""}}
                            >0,90 x 0,60 m</option>
                            <option value="1,00 x 1,50 m"
                            {{$tapete->tamanho =="1,00 x 1,50 m" ? "selected" : ""}}
                            >1,00 x 1,50 m</option>
                            <option value="1,50 x 2,00 m"
                            {{$tapete->tamanho =="1,50 x 2,00 m" ? "selected" : ""}}
                            >1,50 x 2,00 m</option>
                            <option value="2,00 x 2,50 m"
                            {{$tapete->tamanho =="2,00 x 2,50 m" ? "selected" : ""}}
                            >2,00 x 2,50 m</option>
                            <option value="2,00 x 3,00 m"
                            {{$tapete->tamanho =="2,00 x 3,00 m" ? "selected" : ""}}
                            >2,00 x 3,00 m</option>
                        </select>
                        @error('tamanho')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="quantidade">Quantidade</label>
                        <div style="max-width: 97%;">
                            <input class="my-input" type="number" name="quantidade" id="quantidade" min="1"
                                required value="{{ $tapete->quantidade }}">
                        </div>
                        @error('quantidade')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="obs">Observação na entrega</label>
                        <div style="max-width: 97%;">
                            <input class="my-input" type="text" name="obs" id="obs"
                                placeholder="Opcional" value="{{ $tapete->observacao }}">
                        </div>
                        @error('obs')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>
