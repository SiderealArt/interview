@extends('contacts.layout')
@section('content')


<form action="{{ url('contact/' .$contacts->id) }}" method="post">
  {!! csrf_field() !!}
  @method("PATCH")
  <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
  <label>Name</label></br>
  <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
  <label>Address</label></br>
  <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control"></br>
  <label>phone</label></br>
  <input type="text" name="phone" id="phone" value="{{$contacts->phone}}" class="form-control"></br>
  <label>Profile Picture</label></br>
  <input type="url" name="avatar" id="avatar" value="{{$contacts->avatar}}" class="form-control" required></br>
  <input type="submit" value="Update" class="btn btn-success"></br>
</form>
@stop