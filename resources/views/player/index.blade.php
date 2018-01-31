@extends('layouts.app')

{{ $i = 1 }}

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Игроки</div>

                <div class="panel-body">
                    @include('flash::message')
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Возраст</th>
                            <th>Сумма храктеристик</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($players as $player)
                                @include('templates.players.player', ['player', $player, 'i' => $i++])
                            @empty
                                <tr><td colspan="4">No players yet</td></tr>
                            @endforelse
                            <tr><td colspan="4"><a href="{{ route('player.create') }}">Add Player</a></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
