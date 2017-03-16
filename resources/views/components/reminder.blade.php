<form method="post" action="reminder/new">
  <fieldset>
    <legend>New Reminder:</legend>
    <div class="form-group">
      <label id="textReminder">Reminder</label>
      <textarea type="text" id="textReminder" name="content" rows="8" class="form-control"></textarea>
    </div>
    <label id="reminder-type">Type</label><a href="type"> [Add]</a>
    <div class="form-group">
    @foreach($types as $type)
      <label class="radio-inline">
        <input type="radio" name="typeReminder" id="types{{$loop->iteration}}" value="{{$type->id}}"> {{$type->tag}}
      </label>
    @endforeach
    </div>
    <div class="form-group">
      {{csrf_field()}}
      <button type="submit" class="btn btn-success">Create</button>
    </div>
  </fieldset>
</form>

@if (session('status'))
    <div class="alert alert-success" role="alert">
      <a href="#" class="alert-link">{{ session('status') }}</a>
    </div>
@endif