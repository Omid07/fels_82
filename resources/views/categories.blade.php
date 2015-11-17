@extends('master')
@section('title', 'Page Title')
@section('content')
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}
                    </td>
                    <td>{{ $category->category_name }}
                    </td>
                    <td>
                        {!! Form::open(['route'=>['admins.destroy', $category->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete') !!}
                        {!! Form:: close() !!}
                        {!! Form::open(['route' =>['admins.edit', $category->id], 'method' => 'GET']) !!}
                            {!! Form::submit('Edit') !!}
                        {!! Form:: close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection