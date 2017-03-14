<h3>Task</h3>
<div class="panel panel-default">
    <div class="panel-body">
        
        @foreach($tasks as $task)
        <div class="well"> 
            <div class="media">
            <div class="media-body">
                <h4>{{$task->content}}</h4>({{$task->type->tag}})
            </div>
            <div class="media-left media-middle">
                <form action="reminder/delete" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="id" value="{{$task->id}}">
                    <button type="submit" class="btn btn-success pull-right">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    </button>
                </form>
            </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>