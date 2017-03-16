@extends('default')
@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="type/new">
  <fieldset>
    <legend>New Reminder Type:</legend>
    <div class="form-group">
      <label id="textReminder">Type</label>
      <input type="text" id="typeReminder" name="tag" class="form-control">
    </div>
    <div class="form-group">
      {{csrf_field()}}
      <button type="submit" class="btn btn-success">Create</button>
    </div>
  </fieldset>
</form>

@stop