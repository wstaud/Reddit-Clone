@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="small-12 large-expand columns">
            <h1>Original Word: {{$word}}</h1>
        </div>
        <div class="small-12 large-expand columns">
            <h1>Uppercase Word: {{$newWord}}</h1>
        </div>
    </div>

@stop
