@extends('admin.layouts.app')
@section('title')Admin-Home @endsection

@section('body')

  <!-- Cards -->
    <div class="row mt-2 dashboard_info">
      <div class="col-sm-3 my-2">
        <div class="card">
                                                <div class="card-body hvr-bounce-to-right">
                                                    <div class="d-flex justify-content-between">
                                                            <div class="text-secondary">
                                                                <h4 class="font-weight-bold text-success">0</h4>
                                                                    <h5>New Enquiry</h5>
                                                            </div>
                                                            <img src="{{ asset('admin_assets/images/inquiry.png')}}" alt="" height="60px">
                                                    </div>
                                                </div>
                                            </div>
                                       </div>

                                       <div class="col-sm-3 my-2">
                                           <div class="card">
                                               <div class="card-body hvr-bounce-to-right">
                                                   <div class="d-flex justify-content-between">
                                                       <div class="text-secondary">
                                                           <h4 class="font-weight-bold text-success">0</h4>
                                                           <h5>Feedbacks</h5>
                                                       </div>
                                                       <img src="{{ asset('admin_assets/images/feedback.png')}}" alt="" height="60px">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>

                                       <div class="col-sm-3 my-2 ">
                                           <div class="card ">
                                               <div class="card-body hvr-bounce-to-right">
                                                   <div class="d-flex justify-content-between">
                                                       <div class="text-secondary">
                                                           <h4 class="font-weight-bold text-success">40&nbsp;GB</h4>
                                                           <h5>DISK SPACE</h5>
                                                       </div>
                                                       <img src="{{ asset('admin_assets/images/database.png')}}" alt="" height="60px">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>


                                       <div class="col-sm-3 my-2 ">
                                           <div class="card ">
                                               <div class="card-body hvr-bounce-to-right">
                                                   <div class="d-flex justify-content-between">
                                                       <div class="text-secondary">
                                                           <h4 class="font-weight-bold text-success">40%</h4>
                                                           <h5>INVESTMENT</h5>
                                                       </div>
                                                       <img src="{{ asset('admin_assets/images/investment.png')}}" alt="" height="60px">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>

                                  

                                   </div>

                                <!-- recent tasks -->

                                <!-- contact inquiry -->
                                <!-- <div class="row inquiry">
                                <div class="col-sm-6 mt-5 text-center">
                                  <h5>Inquiry</h2>
                                  <table class="table table-bordered table-responsive-sm border-dark table-hover table-striped">
                                    <thead class="text-center font-weight-bold">
                                      <tr>
                                        <td>S.N</td>
                                        <td>Name</td>
                                        <td>Contact</td>
                                        <td>Date</td>
                                        <td>Action</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Sabin Khadka</td>
                                        <td>9843811683</td>
                                        <td>26-03-2021</td>
                                        <td><a href=""><i class="fa fa-eye action_icon"></i></a></td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>Sumit Khadka</td>
                                        <td>9823794160</td>
                                        <td>26-03-2021</td>
                                        <td>View</td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>Prajjwal Subedi</td>
                                        <td>9843811683</td>
                                        <td>26-03-2021</td>
                                        <td>View</td>
                                      </tr>
                                    </tbody>
                                    <tfoot>
                                      <tr>
                                        <td colspan="5" class="text-right text-danger">View All</td>
                                      </tr>
                                    </tfoot>
                                  </table>
                                </div>
                                <div class="col-sm-6 mt-5">
                                  <h5 class="text-center">Feedback</h2>
                                  <table class="table table-bordered table-responsive-sm border-dark table-hover table-striped">
                                    <thead class="text-center font-weight-bold">
                                      <tr>
                                        <td>S.N</td>
                                        <td>Score</td>
                                        <td>Message</td>
                                        <td>Date</td>
                                        <td>Action</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>90%</td>
                                        <td>This is test message</td>
                                        <td>26-03-2021</td>
                                        <td>View</td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>300%</td>
                                        <td>Nice Work</td>
                                        <td>26-03-2021</td>
                                        <td>View</td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>360%</td>
                                        <td>Hello Check</td>
                                        <td>26-03-2021</td>
                                        <td>View</td>
                                      </tr>
                                    </tbody>
                                    <tfoot>
                                      <tr>
                                        <td colspan="5" class="text-right text-danger">View All</td>
                                      </tr>
                                    </tfoot>
                                  </table>
                                </div>
                                </div> -->
@endsection
