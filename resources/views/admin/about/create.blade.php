@extends('admin.layouts.app');
@section('title') Create New @endsection


@section('body')

<!--create tab content-->    
    <div class="card bg-white">
        <div class="card-header text-right bg-white">
            <a href="{{ url('admin/about')}}" class="btn-link">Back</a>
        </div>
        <div class="card-body">
            <!-- error messages -->
                @include('admin.includes.message')

                <form class="well form-horizontal" action="{{ url('/addAbout') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <!--about title-->
                            <div class="form-group mb-3">
                                <label for="email">Title *</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        <!--description-->    
                            <div class="form-group mb-3">
                                <label for="email">Description *</label>
                                    <textarea name="description" id="editor" value="{{ old ('description') }}"></textarea>
                            </div>
                        <!--status-->    
                            <div class="form-group">
                                <label for="status">Status</label>
                                    <select class="form-control" name="status" required>
                                        <option selected value="0">Active</option>
                                        <option value="1">Inactive</option>
                                    </select>
                            </div>
                        <!--button-->   
                            <div class="form-group"> 
                                <button type="submit" class="btn btn-default submit">Create</button>
                            </div>
                </form>

                @endsection