@extends('admin.master')

@section('title', 'Categories | ' . env('APP_NAME'))

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All Categories</h1>

<div id="bou">


</div>

@if (session('msg'))
<div class="alert alert-{{ session('type') }}">
    {{ session('msg') }}
</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name Major</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            {{-- <th>Parent</th> --}}
          {{-- <th>Created At</th>--}}
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($categories as $category)
        {{-- @dump(json_decode($category->name, true)[app()->currentLocale()]) --}}
        <tr>
            <td>{{ $category->id}}</td>
            <td>{{ $category->name_major}}</td>
            <td><img width="80" src="{{ asset('uploads/categories/'.$category->image) }}" alt=""></td>
            <td>{{ $category->title}}</td>
            <td>{{ $category->description}}</td>
            {{-- <td>{{ $category->teacher}}</td> --}}
            {{--<td>{{ $category->created_at ? $category->created_at->diffForHumans() : '' }}</td>--}}
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.categories.edit', $category->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
  {{ $categories->links() }}
@stop
