@extends('master')
@section('title', 'Page Title')
@section('content')
<h1>Home Page, ya' all </h1>
<div class="row">
    <div class="col-md-4">
        <img src="b.jpg" alt="avatar" class="img-thumbnail">
        </div>
        <div class="col-md-4">
            <strong>
                <mark>
                    <h2>
                        <a href="{{ URL::to('word_list') }}">Words</a>
                    </h2>
                </mark>
            </strong>
        </div>
        <div class="col-md-4">
            <strong>
                <mark>
                    <h2>
                        <a href="{{ URL::to('lesson') }}">Lessons</a>
                    </h2>
                </mark>
            </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3>
                <?php
                    if (Auth::check()){
                    echo Auth::user()->name;
                    }
                ?>
            </h3>
        </div>
@endsection