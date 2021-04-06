@extends('admin.layouts.app')
@section('title')  Service  @stop
@section('body')

   
<!--service page section-->    
<div class="row mt-3">
<div class="col-sm-12">
 @include('admin.includes.message')
 </div>
    <!-- category section-->
        <div class="col-sm-4">
       
            <!--nav tabs-->
                <ul class="nav nav-tabs text-right mb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link btn-link" id="create-tab" href="{{ url('/admin/service/createCat')}}" ><i class="fa fa-folder mr-2"></i>New Category</a>
                    </li>
                </ul>
            <!--nav tab content-->    
                <div class="tab-content" id="myTabContent">
                    <!--all list-->
                        <div class="tab-pane fade show active bg-white" id="all_list" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table table-bordered table-striped table-hover text-center table-sm">
                                <thead class="bg-dark">
                                    <tr >
                                        <td>S.N</td>
                                        <td>Category</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
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
                    
   <!--service details-->     
        <div class="col-sm-8">
        
            <!--nav tabs-->
                <ul class="nav nav-tabs text-right mb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link btn-link" id="create-tab" href="{{ url('/admin/service/create')}}" ><i class="fa fa-plus-circle mr-2"></i>Create New</a>
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
                                        <td>Title</td>
                                        <td>Category</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_data as $data)
                                    
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->name}}</td>
                                        <td> no eta</td>
                                        <td> no eta</td>


                                    
                                        <td>
                                            @if($data->status=='0')
                                               <i class="fa fa-check-circle<!-- xzCX VCVBNB --> text-danger"></i>&nbsp;Active
                                            @else
                                                <i class="fa fa-times text-danger"></i>&nbsp;InActive    
                                            @endif    
                                        </td>
                                        <td>
                                            <!-- <a href=""><i class="fa fa-edit action_icon"></i></a>&nbsp;&nbsp; -->
                                            <a href="/deleteService/{{$data->id}}" onclick="return confirmDelete()"><i class="fa fa-fire bg-danger action_icon"></i></a>

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