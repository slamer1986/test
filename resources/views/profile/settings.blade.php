@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Settings</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('settings') }}">
                        {{ csrf_field() }}

                        @component('forms.text', ['name' => 'Name', 'field' => 'name', 'errors' => $errors])
                        @endcomponent
                        @component('forms.text', ['name' => 'E-Mail Address', 'field' => 'email', 'errors' => $errors])
                        @endcomponent

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
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
