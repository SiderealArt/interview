@extends('contacts.layout')
@section('content')
<h1 style="padding:1.5rem;">Contact List</h1>
<hr>
<div class="card-list">
@if(count($contacts) < 1)
    <div class="error-container">
    <i class='bx bx-message-alt-error error-icon'></i>
    <p>Click the button below to add some contacts.</p>
    </div>
    @endif
    @foreach($contacts as $item)
    <div class="card">
        <img alt="" src="{{$item->avatar}}" onerror="this.src='https://picsum.photos/200/300'" />
        <div class="content">
            <p id="name">{{ $item->name }}</p>
            <p id="address">{{ $item->address }}</p>
            <p id="phone">{{ $item->phone }}</p>
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
<div class="bt-add-new">
    <a href="{{ url('/contact/create') }}" class="bt-add-new-link">Add New +</a>
</div>
@endsection