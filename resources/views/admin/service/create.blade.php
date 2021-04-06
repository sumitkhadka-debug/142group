@extends('admin.layouts.app');
@section('title') Create New @endsection


@section('body')

<!--create tab content-->    
    <div class="card bg-white">
    @include('admin.includes.message')
        <div class="card-header text-right bg-white">
            <a href="{{ url('admin/service')}}" class="btn-link">Back</a>
        </div>
        <div class="card-body">
            <form class="well form-horizontal" action="{{ url('/addService') }}" method="POST" enctype="multipart/form-data" id="addmovie">
                @csrf
                    <!--Category-->    
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Choose Category&nbsp;<span class="text-danger font-weight-bold">*</span></label>
                                <select class="form-control" name="cat_id" required>
                                <option selected disabled>--Choose Category--</option>
                                @foreach($all_cat as $cat)
                                    <option value="{{ $cat->id }}">{{$cat->name}}</option>
                                @endforeach
                                </select>
                    </div>
                    <!--title-->
                        <div class="form-group mb-3">
                            <label for="email">Service Name&nbsp;<span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    <!--description-->    
                        <div class="form-group mb-3">
                            <label for="email">Description&nbsp;<span class="text-danger font-weight-bold" >*</span></label>
                                <textarea name="description" id="editor" rows="30" cols="80" value="{{ old ('description') }}"></textarea>
                                    @error('description')
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