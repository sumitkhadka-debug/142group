@extends('admin.layouts.app');
@section('title') Create New Category @endsection


@section('body')

<!--create tab content-->    
    <div class="card bg-white">
    @include('admin.includes.message')
        <div class="card-header text-right bg-white">
            <a href="{{ url('admin/service')}}" class="btn-link">Back</a>
        </div>
        <div class="card-body">
            <form class="well form-horizontal" action="{{ url('/addCat') }}" method="POST" enctype="multipart/form-data" id="addmovie">
                @csrf
                
                    <!--title-->
                        <div class="form-group mb-3">
                            <label for="email">Category Name&nbsp;<span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control" name="name"">
                                    @error('cat_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                        </div>
                    <!--status-->    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" name="status">
                                <option selected value="0">Active</option>
                                <option value="1">Inactive</option>
                            </select>
                                @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                    </div>
                    <!--button-->   
                    <div class="form-group"> 
                        <button type="submit" class="btn btn-default submit">Create</button>
                        </div>
                </form>

                @endsection