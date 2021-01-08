@extends('layouts.app')

@section('content')
{!! Form::open(['url' => route('domains.store')]) !!}
<div class="row">
    <div class="col-sm-10">
        {!! Form::text('domain[name]', null, ['placeholder' => 'https://ru.hexlet.io', 'size'=>"40", 'autofocus', 'class' => "form-control"]) !!}
    </div>
    <div class="col-sm-2">
        {!! Form::submit('CHECK', ['class' => "btn btn-primary"]) !!}
    </div>
</div>
{!! Form::close() !!}
@endsection
