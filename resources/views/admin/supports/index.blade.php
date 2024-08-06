@extends('admin/supports/layout')
@section('index')
    <a href="{{ route('supports.create') }}">Criar Duvida</a>
    <h2>Duvidas</h2>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
        layout.</p>

    <table>
        <thead>
            <th>assunto</th>
            <th>stauts</th>
            <th>descricao</th>
        </thead>
        <tbody>
            @foreach ($supports as $support)
                <tr>
                    <td>{{ $support->subject }}</td>
                    <td>{{ $support->status }}</td>
                    <td>{{ $support->body }}</td>
                    <td>
                        <a href="{{ route('supports.show', $support->id) }}"> Ir</a>
                        <a href="{{ route('supports.edit', $support->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
