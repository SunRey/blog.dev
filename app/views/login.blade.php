@extends('layouts.master')

@section('content')
    <main class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        {{ Form::open(array('action' => 'HomeController@postLogin')) }}
                            <div class="input-field">
                                {{ Form::label('email', 'Enter e-mail') }}
                                {{ Form::email('email', null, ['class' => 'validate']) }}
                            </div>
                            <div class="input-field">
                                {{ Form::label('password', 'Enter password') }}
                                {{ Form::password('password', ['class' => 'validate']) }}
                            </div>
                            <button type="submit" class="btn waves-effect waves-light">Submit <i class="material-icons right">send</i></button>
                            <button type="reset" class="btn waves-effect waves-light" value="Reset">Reset <i class="material-icons right">delete</i></button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop

@section('bottom-script')
    @if(Session::has('loginFailed'))
        <script type="text/javascript">
            var $toastLoginFailed = $("<span>{{{ Session::get('loginFailed') }}}</span>");
            Materialize.toast($toastLoginFailed, 5000, 'red-text rounded blue-grey darken-3');
        </script>
    @endif
@stop