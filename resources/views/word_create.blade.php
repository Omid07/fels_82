<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Word</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Admin edit field</h2>
  <p>Add words:</p>
   {!! Form::open(['route'=>['admins_word_create.store'], 'class'=>'form-horizen', 'method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('category', 'Category', array('class' => 'col-xm-3 control-label')) !!}

        {!! Form::text('id', $value = null, $attributes = array('class'=>'form-control','id'=>'id')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('word', 'Word', array('class' => 'col-xm-3 control-label')) !!}

        {!! Form::text('english_word', $value = null, $attributes = array('class'=>'form-control','id'=>'english_word')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('meaning', 'Meaning', array('class' => 'col-xm-3 control-label')) !!}

        {!! Form::text('bengali_meaning', $value = null, $attributes = array('class'=>'form-control','id'=>'bengali_meaning')) !!}
    </div>
    {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
</div>

</body>
</html>