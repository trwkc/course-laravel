@extends('default')
@section('content')
  <form method="post" action="reminder/new">
    <fieldset>
      <legend>New Reminder:</legend>
      <div class="form-group">
        <label id="textReminder">Reminder</label>
        <textarea type="text" id="textReminder" rows="8" class="form-control"></textarea>
      </div>
      <div class="form-group">
        {{csrf_field()}}
        <button type="button" class="btn btn-success">Create</button>
      </div>
    </fieldset>
  </form>
@stop