@extends('default')
@section('content')

  @include('components.reminder',['tasks'=>$tasks,'types'=>$types])

  @include('components.task')

@stop