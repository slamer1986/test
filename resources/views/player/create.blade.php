@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add player</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('player.store') }}">
                        {{ csrf_field() }}

                        @component('forms.text', ['name' => 'Name', 'field' => 'name', 'errors' => $errors])
                        @endcomponent
                        @component('forms.text', ['name' => 'Age', 'field' => 'age', 'errors' => $errors])
                        @endcomponent
                        @component('forms.text', ['name' => 'Skills summ', 'field' => 'skills', 'errors' => $errors])
                        @endcomponent


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add player
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
