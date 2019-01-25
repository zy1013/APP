@extends('mainLayout')
@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Request</h1>
                    <a href="newrequest"><button type="button" class="btn btn-primary" style="margin-bottom: 10px;">New Request</button></a>
                </div>             
                <!-- /.col-lg-12 -->
            </div>
				<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">Type</th>
                                        <th class="text-center">Time</th>
                                        <th class="text-center">Status</th>                          
                                        <th class="text-center">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <tr class="gradeA">
                                    <td class="text-center">123</td>
                                    <td class="text-center">456</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-info-circle fa-fw"></i></a></td>                                      
                                        <td class="text-center"> <button id="select" type="button" class="btn btn-primary" target="_blank" data-toggle="modal" data-target="#exampleModal">view details</button></td>
                                         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                               <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                     <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                                        <h4 class="modal-title" id="exampleModalLabel">Request Details</h4>
                                     </div>
                                     <div class="modal-body">
                                        <form>
                                           <div class="form-group">
                                                <label for="disabledSelect">Type:</label>
                                             <input class="form-control" id="disabledInput" type="text" placeholder="" disabled="">
                                            </div>
                                              <div class="form-group">
                                              <label for="theme-text" class="control-label">Status:</label>
                                             <input class="form-control" id="disabledInput" type="text" placeholder="" disabled="">
                                           </div>
                                            <div class="form-group">
                                            <label>Content:</label>
                                            <input class="form-control" id="disabledInput" type="text" placeholder="" disabled="">
                                        </div>                                        
                                        </form>
                                     </div>
                                     <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send</button>
                                     </div>
                                  </div>
                               </div>
                            </div>      
                                    </tr>                                                     
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
@endsection