@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @component('components.who')
            @endcomponent
        </div>
    </div>
</div>
@endsection
