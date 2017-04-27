@extends('layouts.master')


@section('content')
    <div class="row align-left">
        <h1>Create a Post</h1>
    </div>
    <form action="{{ action('PostsController@store') }}">
        <div class="row">
            <div class="small-12 columns">
                <label>Title
                    <input type="text">
                </label>
            </div>
            <div class="small-12 columns">
                <label>
                    Content
                    <textarea placeholder="None"></textarea>
                </label>
            </div>
            <div class="small-12 columns">
                <label>URL
                    <input type="text">
                </label>
            </div>
        </div>
        <div class="row align-center">
            <button type="button" class="button">Submit</button>
        </div>
    </form>

@stop
