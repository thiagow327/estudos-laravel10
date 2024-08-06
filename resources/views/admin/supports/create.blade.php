@extends('admin/supports/layout')
@section('index')
    <h1>Nova Duvida</h1>

    <form action="{{ route('supports.store') }}" method="post">
        {{-- <input type="hidden" value="{{ csrf_token() }}"> --}}
        @csrf()
        <input type="text" name="subject" placeholder="Assunto">
        <textarea name="body" cols="30" rows="5" placeholder="Descricao"></textarea>
        <button type="submit">Enviar</button>
    </form>
@stop
