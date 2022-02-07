@extends('contacts.layout')
@section('content')

<a href="{{ url('/contact/create') }}" class="" title="Add New Contact"><i class=""></i>Add New</a>
<div class="table-responsive">
    @foreach($contacts as $item)
    <div class="card">
    <p>{{ $loop->iteration }}</p>
    <p>{{ $item->name }}</p>
    <p>{{ $item->address }}</p>
    <p>{{ $item->phone }}</p>
    <a href="{{ url('/contact/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
    <a href="{{ url('/contact/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
    <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return "><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
    </form>
    </div>
    @endforeach
</div>

@endsection