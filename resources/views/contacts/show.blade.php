@extends('contacts.layout')
@section('content')

<h5 class="card-title">Name : {{ $contacts->name }}</h5>
<p class="card-text">Address : {{ $contacts->address }}</p>
<p class="card-text">Phone : {{ $contacts->phone }}</p>

@stop