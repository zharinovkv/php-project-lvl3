@extends('layouts.app')

@section('content')

@if(isset($flash))
<div class="alert {{ $flash['class'] }}" role="alert">{{ $flash['message'] }}</div>
@endif

<div class="row">
    <div class="col-sm-1">
        id
    </div>
    <div class="col-sm-5">
        Домен
    </div>
    <div class="col-sm-3">
        Дата создания
    </div>
    <div class="col-sm-3">
        Дата обновления
    </div>
</div>
@foreach ($domains as $domain)
<div class="row">
    <div class="col-sm-1">
        {{$domain->id}}
    </div>
    <div class="col-sm-5">
        <a href="{{ route('domains.index') }}/{{$domain->id}}">{{$domain->name}} </a>
    </div>
    <div class="col-sm-3">
        {{$domain->created_at}}
    </div>
    <div class="col-sm-3">
        {{$domain->updated_at}}
    </div>
</div>
@endforeach
@endsection