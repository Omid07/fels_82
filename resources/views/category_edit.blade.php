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
   {!! Form::open(['route'=>['admins_category.update', $cat->id], 'class'=>'form-horizen', 'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('category_name', 'Category Name', array('class' => 'col-xm-3 control-label')) !!}
        {!! Form::text('category_name', $value = $cat->category_name, $attributes = array('class'=>'form-control','id'=>'category_name')) !!}
    </div>
    {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
    </div>
</body>
</html>