<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Admin edit field</h2>
  <p>Category information edit:</p>
   {!! Form::open(['route'=>['admins_answer.update', $ans->id], 'class'=>'form-horizen', 'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('bengali_meaning', 'Bengali Meaning', array('class' => 'col-xm-3 control-label')) !!}
        {!! Form::text('bengali_meaning', $value = $ans->bengali_meaning, $attributes = array('class'=>'form-control','id'=>'bengali_meaning')) !!}
    </div>
    {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
    </div>
</body>
</html>