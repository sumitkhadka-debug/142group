@extends('admin.layouts.app')
@section('title')  Member  @stop


@section('body')     
    <!--member page section-->    
    <div class="row mt-3">
    <div class="col-sm-12">
 @include('admin.includes.message')
 </div>
        <!--staff details-->
            <div class="col-sm-8">
                <!--nav tabs-->
                    <ul class="nav nav-tabs text-right mb-3" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link btn-link" id="create-tab" href="{{ url('/admin/member/create')}}" ><i class="fa fa-plus-circle mr-2"></i>New Member</a>
                        </li>
                    </ul>
                <!--nav tab content-->    
                    <div class="tab-content" id="myTabContent">
                        <!--all list-->
                            <div class="tab-pane fade show active bg-white" id="all_list" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-bordered table-striped table-hover text-center table-sm">
                                    <thead class="bg-dark">
                                        <tr>
                                            <td>S.N</td>
                                            <td>Avatar</td>
                                            <td>Name</td>
                                            <td>Department</td>
                                            <td>Position</td>
                                            <td>Status</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($members as $member)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td><img src="{{ asset('admin_assets/images/user.png') }}" alt="avatar" height="50px" class="iimg-rounded"></td>
                                            <td>{{$member->name}}</td>
                                            <td>{{$member->department}}</td>
                                            <td>{{$member->position}}</td>
                                            <td>{{$member->status}}</td>
                                            <td>
                                                <!-- <a href=""><i class="fa fa-edit action_icon"></i></a>&nbsp;&nbsp; -->
                                                <a href=""><i class="fa fa-fire bg-danger action_icon"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <td colspan="7" class="font-weight-bold">
                                                Total:&nbsp;6&nbsp;/&nbsp;Inactive:&nbsp;3&nbsp;/&nbsp;Active:&nbsp;3&nbsp;
                                            </td>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>
                    </div>
            </div>
        <!--staff category-->    
        <div class="col-sm-4">
                <!--nav tabs-->
                    <ul class="nav nav-tabs text-right mb-3" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link btn-link" id="create-tab" href="{{ url('/admin/member/createDept')}}" ><i class="fa fa-building-o mr-2"></i>New Department</a>
                        </li>
                    </ul>
                <!--nav tab content-->    
                    <div class="tab-content" id="myTabContent">
                        <!--all list-->
                            <div class="tab-pane fade show active bg-white" id="all_list" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-bordered table-striped table-hover text-center table-sm">
                                    <thead class="bg-dark">
                                        <tr>
                                            <td>S.N</td>
                                            <td>Department</td>
                                            <td>Status</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($all_dept as $dept)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$dept->name}}</td>
                                            <td>{{$dept->status}}</td>
                                            <td>
                                            <a href="/deleteDept/{{ $dept->id}}" onclick="return confirmDelete()"><i class="fa fa-fire bg-danger action_icon"></i></a>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <td colspan="7" class="font-weight-bold">
                                                Total:&nbsp;6&nbsp;/&nbsp;Inactive:&nbsp;3&nbsp;/&nbsp;Active:&nbsp;3&nbsp;
                                            </td>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>
                    </div>
            </div>
    </div>
@endsection