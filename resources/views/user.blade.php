@extends('layouts.master')

@section('content')
<h2>this is from user blade</h2>


@endsection

@section('conditions')

@if (1==1)
    1st if is working
@endif


@if(1==2)
    yes its working
@else
    else is working
@endif

@endsection




