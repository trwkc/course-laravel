@extends('default')
@section('content')

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