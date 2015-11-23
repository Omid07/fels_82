@extends('master')
@section('title', 'Page Title')
@section('content')
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-2">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
            Select category
        </button>
        <ul class="dropdown-menu">
            <li>
                <a href="#">
                    La Merridian
                </a>
            </li>
            <li>
                <a href="#">
                    Celica
                </a>
            </li>
            <li>
                <a href="#">
                    chick a licken
                </a>
            </li>
        </ul>
    </div>
    </div>
    <div class="col-md-1">
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    All
            </label>
        </div>
    </div>
    <div class="col-md-1">
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Learned
            </label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Not Learned
            </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-2">
        <button type="button" class="btn btn-info">
            Filter
        </button>
        <button type="button" class="btn btn-success">
            PDF
        </button>
    </div>
</div>
<div>
    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Words</th>
                    <th>
                    </th>
                    <th>Meanings</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($words as $index=>$word)
            <tr>
                <td>{{ $questionCorrespondingToanswere[$index] }}
                </td>
                <td>
                    {!! Form::open(['route'=>['admins_question.edit', $questionCorrespondingToanswere->id], 'method' => 'GET']) !!}
                        {!! Form::submit('Edit') !!}
                    {!! Form:: close() !!}
                </td>
                <td>{{ $meanings[index] }}</td>
                <td>
                {!! Form::open(['route'=>['admins_answer.edit', $meaning->id], 'method' => 'GET']) !!}
                    {!! Form::submit('Edit') !!}
                {!! Form:: close() !!}
                </td>
            </tr>
                @endforeach
            </tbody>
    </table>
    {!! Form::open(['route'=>['admins_word_create.create'], 'method' => 'GET']) !!}
        {!! Form::submit('Add new word') !!}
    {!! Form:: close() !!}

</div>
@endsection
