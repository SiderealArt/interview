@extends('contacts.layout')
@section('content')
<div class="split image-container">
  <img class="image" alt="" src="{{$contacts->avatar}}" onerror="this.src='https://picsum.photos/1000/1000'" />
</div>
<div class="split details">
  <h1 class="show-title">{{ $contacts->name }}</h5>
    <p>Created at </p>
    <p class="show-text">{{ $contacts->created_at }}</p>
    <p>Last Updated at </p>
    <p class="show-text">{{ $contacts->updated_at }}</p>
    <p class="show-text-title">Address </span>
    <p class="show-text">{{ $contacts->address }}</p>
    <p class="show-text-title">Phone </p>
    <p class="show-text">{{ $contacts->phone }}</p>
    <p class="show-text-title">Email </p>
    <a class="show-text" href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
    <p class="show-text-title">Website </p>
    <a class="show-text" href="{{ $contacts->website }}">{{ $contacts->website }}</a>
    <p class="show-text-title">Notes </p>
    <p class="show-text">{{ $contacts->notes }}</p>
</div>
@if($previous!=null)
<a href="{{ url('/contact/' . $previous) }}" class="show-btn previous"><i class='bx bx-chevron-left'></i>Previous</a>
@endif
@if($next!=null)
<a href="{{ url('/contact/' . $next) }}" class="show-btn next">Next<i class='bx bx-chevron-right'></i></a>
@endif
@stop