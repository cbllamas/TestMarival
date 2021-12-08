@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de Tickets') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('tickets.create') }}">Agregar Nuevo Ticket</a>
                    <br /><br />
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Categoria</th>
                                <th>Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->name }}</td>
                                <td>{{ $ticket->email }}</td>
                                <td>{{ $ticket->category->name }}</td>
                                <td>{{ $ticket->created_at }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">{{ __('No hay Tickets Registrados') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection