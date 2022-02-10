@extends('contacts.layout')
@section('content')
<h1 style="padding:1.5rem;">Edit Contact</h1>
<hr>
<form action="{{ url('contact/' .$contacts->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")
    <div class="input-container">
        <input type="text" name="name" placeholder="&nbsp;" id="name" value="{{$contacts->name}}" class="input-field" required></br>
        <label>Name</label></br>
    </div>
    <div class="input-container">
        <input type="text" name="address" placeholder="&nbsp;" id="address" value="{{$contacts->address}}" class="input-field"></br>
        <label>Address</label></br>
    </div>
    <div class="input-container">
        <input type="email" name="email" placeholder="&nbsp;" value="{{$contacts->phone}}" id="email" class="input-field">
        <label>Email</label>
    </div>
    <div class="input-container">
        <input type="url" name="website" placeholder="&nbsp;" value="{{$contacts->email}}" id="website" class="input-field">
        <label>Website</label>
    </div>
    <div class="input-container">
        <input type="text" name="notes" placeholder="&nbsp;" value="{{$contacts->website}}" id="notes" class="input-field">
        <label>Notes</label>
    </div>
    <div class="input-container">
        <input type="text" name="phone" placeholder="&nbsp;" id="phone" value="{{$contacts->notes}}" class="input-field"></br>
        <label>Phone</label></br>
    </div>
    <div class="input-container">
        <input type="url" name="avatar" id="avatar" placeholder="&nbsp;" value="{{$contacts->avatar}}" class="input-field" required></br>
        <label>Profile Picture</label></br>
    </div>
    <input type="submit" value="Update" class="btn btn-success"></br>
</form>

@stop