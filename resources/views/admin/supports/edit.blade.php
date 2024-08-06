@extends('admin/supports/layout')
@section('index')
    <h1>Duvida {{ $support->id }}</h1>

    <form action="{{ route('supports.update', $support->id) }}" method="post">
        @csrf()
        @method('put')
        <input type="text" name="subject" placeholder="Assunto" value="{{ $support->object }}">
        <textarea name="body" cols="30" rows="5" placeholder="Descricao">{{ $support->body }}</textarea>
        <button type="submit">Enviar</button>
    </form>
@stop
