@extends('layouts.app')
@section('title', 'Listagem')

@section('content')
    <div class="container">
        <h1>Listagem de tapetes</h1>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Estampa</th>
                        <th>Características</th>
                        <th>Tamanho</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($tapetes as $tapete)
                        <tr>
                            <td>{{ $tapete->estampa }}</td>
                            <td>
                                @if ($tapete->limpo)
                                    Limpo,
                                @endif
                                @if ($tapete->novo)
                                    Novo,
                                @endif
                                @if ($tapete->voador)
                                    Voador,
                                @endif
                                @if ($tapete->magico)
                                    Mágico
                                @endif
                            </td>
                            <td>{{ $tapete->tamanho }}</td>
                            <td>{{ $tapete->quantidade }}</td>
                            <td>
                                <a href="{{ route('tapetes.show', $tapete->id) }}" class="btn btn-primary">Ver mais</a>

                                <form action="{{ route('tapetes.delete', $tapete->id) }}" method="post"
                                    style="display: inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Nenhum tapete cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


@endsection
