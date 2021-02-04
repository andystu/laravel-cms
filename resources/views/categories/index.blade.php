@extends('layouts.app')
@section('title')
    <title>Categories List</title>
@endsection
@section('content')
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">
            Categories List | <a href="/categories/new">Add New</a>
          </div>
          <div class="card-body">
            <table class="table">
              @foreach($categories as $category)
                <tr>
                  <td><a href="/categories/{{$category->id}}">{{ $category->name }}</a></td>
                  <td><a class="btn btn-info" href="/categories/{{$category->id}}/edit">Edit<a></td>
                  <td><a class="btn btn-danger" href="/categories/{{$category->id}}/delete">Delete<a></td>
                </tr>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
@endsection