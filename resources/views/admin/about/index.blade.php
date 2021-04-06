@extends('admin.layouts.app')
@section('title')  About  @stop
@section('body')

   
<!--about page section-->    
    <div class="row mt-3">
        <div class="col-sm-12">
            <!--nav tabs-->
                <ul class="nav nav-tabs text-right mb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link btn-link" id="create-tab" href="{{ url('/admin/about/create')}}" ><i class="fa fa-plus-circle mr-2"></i>Create New</a>
                    </li>
                </ul>
            <!--nav tab content-->    
                <div class="tab-content" id="myTabContent">
                    @include('admin.includes.message')
                    <!--all list-->
                        <div class="tab-pane fade show active bg-white" id="all_list" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table table-bordered table-striped table-hover text-center table-sm">
                                <thead class="bg-dark">
                                    <tr>
                                        <td>S.N</td>
                                        <td>Title</td>
                                        <td>Description</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_data as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $data->title}}</td>
                                        <td>{{ $data->description}}</td>
                                        <td>{{ $data->status}}</td>
                                        <td>
                                            <!-- <a href=""><i class="fa fa-edit action_icon"></i></a>&nbsp;&nbsp; -->
                                            <a href="/deleteAbout/{{$data->id}}" onclick="return confirmDelete()"><i class="fa fa-fire bg-danger action_icon"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <td colspan="6" class="font-weight-bold">
                                            Total:&nbsp;6&nbsp;/&nbsp;Inactive:&nbsp;3&nbsp;/&nbsp;Active:&nbsp;3&nbsp;
                                        </td>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                    
                                    </div>
                                </div>
                        </div>
                </div>
        </div>
    </div>


@endsection