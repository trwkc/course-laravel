@extends('default')
@section('content')

  @include('components.reminder',['tasks'=>$tasks])

  @include('components.task')

@stop