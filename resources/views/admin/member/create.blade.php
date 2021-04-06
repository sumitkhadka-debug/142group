@extends('admin.layouts.app');
@section('title') Create New @endsection


@section('body')

<!--create tab content-->    
    <div class="card bg-white">
        <div class="card-header text-right bg-white">
            <a href="{{ url('admin/member')}}" class="btn-link">Back</a>
        </div>
        <div class="card-body">
            <form class="well form-horizontal" action="{{ url('/addMember') }}" method="POST" enctype="multipart/form-data" id="addmovie">
                @csrf
                    
                    <!--name-->
                        <div class="form-group mb-3">
                            <label for="email">Name&nbsp;<span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                        </div>
                        <!--Department--> 
                        <div class="row">
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Department&nbsp;<span class="text-danger font-weight-bold">*</span></label>
                                <select class="form-control" name="dept">
                                    <option selected disabled>--Department--</option>
                                    @foreach($allDept as $dept)
                                    <option value="{{ $dept->id}}">{{ $dept->name}}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                    </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Position&nbsp;<span class="text-danger font-weight-bold">*</span></label>
                                <select class="form-control" name="position">
                                    <option selected disabled>--Position--</option>
                                    <option value="Director">{{ $dept->name}}</option>
                                </select>
                                @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                    </div>
                        </div>
                        </div>   
                       
                        <input id="input-b1" name="input-b1" type="file" class="file" data-browse-on-zone-click="true">
                    <!--status-->    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" name="status">
                                <option selected value="1">Active</option>
                                <option value="0">Inactive</option>
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