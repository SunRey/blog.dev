@extends('layouts.angular')

@section('content')
    <div flex layout="row">
        
        <md-sidenav md-is-locked-open="true" class="md-whiteframe-z2"></md-sidenav>
        
        <md-content flex id="content">
            <h3>Hello, {{{ $name }}}!</h3 >
        </md-content>
        
    </div>
@stop