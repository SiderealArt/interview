@extends('contacts.layout')
@section('content')
<h1 style="padding:1.5rem;">Edit Contact</h1>
<hr>
<form class="edit-container" action="{{ url('contact/' .$contacts->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")
    <div class="input-container">
        <input type="text" name="name" placeholder="&nbsp;" id="name" value="{{$contacts->name}}" class="input-field input-field-edit" required>
        <label>Name</label>
    </div>
    <div class="input-container">
        <input type="text" name="address" placeholder="&nbsp;" id="address" value="{{$contacts->address}}" class="input-field input-field-edit">
        <label>Address</label>
    </div>
    <div class="input-container">
        <input type="email" name="email" placeholder="&nbsp;" value="{{$contacts->email}}" id="email" class="input-field input-field-edit">
        <label>Email</label>
    </div>
    <div class="input-container">
        <input type="url" name="website" placeholder="&nbsp;" value="{{$contacts->website}}" id="website" class="input-field input-field-edit">
        <label>Website</label>
    </div>
    <div class="input-container">
        <input type="text" name="notes" placeholder="&nbsp;" value="{{$contacts->notes}}" id="notes" class="input-field input-field-edit">
        <label>Notes</label>
    </div>
    <div class="input-container">
        <input type="text" name="phone" placeholder="&nbsp;" id="phone" value="{{$contacts->phone}}" class="input-field input-field-edit">
        <label>Phone</label>
    </div>
    <div class="input-container">
        <input type="url" name="avatar" id="avatar" placeholder="&nbsp;" value="{{$contacts->avatar}}" class="input-field input-field-edit" required>
        <label>Profile Picture</label>
    </div>
    <input style="color:white" type="submit" value="Update" class="edit form-create-button">
</form>
@stop