<html>
<head>
    <title>admin_page</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    {!! Html::style('css/stylesheet.css') !!}
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs">
                    <li> {!! HTML::link('home', 'FELS') !!}
                    </li>
                    <li>{!! HTML::link('categories', 'Category') !!}
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Accounts <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!! HTML::link('#', 'Current') !!}
                            </li>
                            <li>{!! HTML::link('#', 'Disabled') !!}
                            </li>
                            <li>{!! HTML::link('#', 'Account') !!}
                            </li>
                        </ul>
                    </li>
                    <li>{!! HTML::link('words', 'Words') !!}
                    </li>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            {!! Form::open(['route'=>'admins.index','method'=>'GET','class'=>'form-horizen']) !!}
                            {!! Form::text('name') !!}
                            {!! Form::submit() !!}
                            {!! Form::close() !!}
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>{!! HTML::link('auth/logout', 'Sign Out') !!}
                                </li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10">
        </div>
    </div>
    <div class="container">
        <div class="panel-primary">
            <div class="panel-heading"> {{ count($users) }} ACTIVE ACCOUNTS</div>
        </div>
        <div class="row">
            <div class="col-xs-10">
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joined Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        {!! Form::open(['route'=>['admins.destroy', $user->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete') !!}
                        {!! Form:: close() !!}
                        {!! Form::open(['route'=>['admins.edit', $user->id], 'method' => 'GET']) !!}
                            {!! Form::submit('Edit') !!}
                        {!! Form:: close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>