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
    <p class="show-text-title">Address </p>
    @if($contacts->address)
    <p class="show-text">{{ $contacts->address }}</p>
    @else
    <p class="show-text">Not Provided</p>
    @endif
    <p class="show-text-title">Phone </p>
    @if($contacts->phone)
    <p class="show-text">{{ $contacts->phone }}</p>
    @else
    <p class="show-text">Not Provided</p>
    @endif
    <p class="show-text-title">Email </p>
    @if($contacts->email)
    <a class="show-text" href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
    @else
    <p class="show-text">Not Provided</p>
    @endif
    <p class="show-text-title">Website </p>
    @if($contacts->website)
    <a class="show-text" href="{{ $contacts->website }}">{{ $contacts->website }}</a>
    @else
    <p class="show-text">Not Provided</p>
    @endif
    <p class="show-text-title">Notes </p>
    @if($contacts->notes)
    <p class="show-text">{{ $contacts->notes }}</p>
    @else
    <p class="show-text">Not Provided</p>
    @endif
</div>
@if($previous!=null)
<a href="{{ url('/contact/' . $previous) }}" class="show-btn previous"><i class='bx bx-chevron-left'></i>Previous</a>
@endif
@if($next!=null)
<a href="{{ url('/contact/' . $next) }}" class="show-btn next">Next<i class='bx bx-chevron-right'></i></a>
@endif
@stop