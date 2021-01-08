@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm">
        Домен
    </div>
    <div class="col-sm">

    </div>
    <div class="col-sm">

    </div>
    <div class="col-sm">

    </div>
</div>
<div class="row">
    <div class="col-sm">
        {{$domain->name}}
    </div>
    <div class="col-sm">
        {{$domain->id}}
    </div>
    <div class="col-sm">
        {{$domain->id}}
    </div>
    <div class="col-sm">
        {{$domain->id}}
    </div>
</div>

@endsection