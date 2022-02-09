@extends('contacts.layout')
@section('content')
<h1 style="padding:1.5rem;">Contact List</h1>
<hr>
<div class="card-list">
    @if(count($contacts) < 1) <div class="error-container">
        <i class='bx bx-message-alt-error error-icon'></i>
        <p>Click the button below to add some contacts.</p>
</div>
@endif
@foreach($contacts as $item)
<div class="card">
    <img alt="" src="{{$item->avatar}}" onerror="this.src='https://picsum.photos/200/300'" />
    <div class="content">
        <p id="card-name">{{ $item->name }}</p>
        @if($item->address)
        <p id="address">{{ $item->address }}</p>
        @else
        <p id="address">Not Provided</p>
        @endif
        @if($item->phone)
        <p id="phone">{{ $item->phone }}</p>
        @else
        <p id="address">Not Provided</p>
        @endif
    </div>
    <div class="action">
        <a href="{{ url('/contact/' . $item->id) }}">
            <button class="view">View</button></a>
        <a href="{{ url('/contact/' . $item->id . '/edit') }}">
            <button class="edit">Edit</button></a>
        <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="delete" title="Delete Contact" onclick="return ">Delete</button>
        </form>
    </div>
</div>
@endforeach
</div>
<div class="popup-container">
    <div class="popup">
        <form action="{{ url('contact') }}" method="post">
            {!! csrf_field() !!}
            <div class="input-container">
                <input type="text" name="name" id="name" class="input-field" required>
                <label>Name</label>
            </div>
            <div class="input-container">
                <input type="text" name="address" id="address" class="input-field">
                <label>Address</label>
            </div>
            <div class="input-container">
                <label>Mobile</label>
                <input type="text" name="phone" id="phone" class="input-field">
            </div>
            <div class="input-container">
                <label>Email</label>
                <input type="email" name="email" id="email" class="input-field">
            </div>
            <div class="input-container">
                <label>Website</label>
                <input type="url" name="website" id="website" class="input-field">
            </div>
            <div class="input-container">
                <label>Notes</label>
                <input type="text" name="notes" id="notes" class="input-field">
            </div>
            <div class="input-container">
                <label>Profile Picture</label>
                <input type="url" name="avatar" id="avatar" class="input-field" required>
            </div>
            <button onclick="document.getElementsByClassName('popup-container')[0].style.display='none';">Cancel</button>
            <input type="submit" value="Save">
        </form>
    </div>
</div>
<div onclick="document.getElementsByClassName('popup-container')[0].style.display='flex';" class="bt-add-new">
    <a class="bt-add-new-link">Add New +</a>
</div>
@endsection