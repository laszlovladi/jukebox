@extends('admin.layout', [
  'title' => 'Create a new author'
])

@section('headline')

  Create a new author

@endsection

@section('content')
  @if ($author->id !== null)
    <form action="{{action('AuthorController@update', ['id' => $author->id])}}" method="post">
      @method('put')
  @else
    <form action="{{action('AuthorController@store')}}" method="post"></form>
  @endif

  {{-- <form action="{{ action('AuthorController@store') }}" method="post">                                 don't need it anymore --}}     
    @csrf
    <div class="form-group">
      @csrf
      <label for="">Author's name:</label>
      <input type="text" name="name" value="{{ $author->name }}">
    </div>
    <div class="form-group">
      <button type="submit">Save</button>
    </div>
  </form>

@endsection