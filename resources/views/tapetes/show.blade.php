@extends('layouts.app')
@section('title', 'Detalhes')

@section('content')

<div class="container">
    <h1>Detalhes do tapete</h1>
    <br>

    <div class="card">
        <div class="card-body">
            <div style="display: flex; flex-direction:row;">
                <div style="margin-right: 20px;">
                    <img src="{{asset('img/estampas/'.$tapete->img)}}" alt="">
                </div>
                <div>
                    <h5 class="card-title">{{ $tapete->estampa }}</h5>
                    <p class="card-text">
                        <strong>Características:</strong>
                        @if($tapete->limpo)
                            Limpo, 
                        @endif
                        @if($tapete->novo)
                            Novo, 
                        @endif
                        @if($tapete->voador)
                            Voador, 
                        @endif
                        @if($tapete->magico)
                            Mágico
                        @endif
                    </p>
                    <p class="card-text"><strong>Tamanho:</strong> {{ $tapete->tamanho }}</p>
                    <p class="card-text"><strong>Quantidade:</strong> {{ $tapete->quantidade }}</p>   
                    <p class="card-text"><strong>Observação:</strong> {{ $tapete->observacao }}</p> 
                </div>
            </div>
            <div style="display: flex; flex-direction:row; justify-content:end;">
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#editarTapete">
                    Editar
                </button>
                @include('components.tapete.editarModal')
                
                <form action="{{ route('tapetes.delete', $tapete->id) }}" method="post"
                    style="display: inline;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger m-1"
                        onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                </form>
            </div>



@endsection