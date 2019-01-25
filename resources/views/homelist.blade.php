 @extends('mainLayout')
@section('content')<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Homelist</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4><i class="fa fa-bar-chart-o fa-fw"></i>Home1</h4>
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Mailbox</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                        <td class="text-center">xxxx</td>
                                        <td class="text-center">123456789@qq.com</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center">yyyy</td>
                                        <td class="text-center">173625487@qq.com </td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeB">
                                        <td class="text-center">zzzzz</td>
                                        <td class="text-center">129835326@qq.com </td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                 <div class="panel panel-default">
                    <div class="panel-body">

                      <button type="button" class="btn btn-outline btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModalB">Add User
                      </button>

                      <div class="modal fade" id="exampleModalB" tabindex="-1" role="dialog" aria-labelledby="exampleModalBLabel">
                          <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                                   <h4 class="modal-title" id="exampleModalBLabel">Add User</h4>
                                </div>
                                <div class="modal-body">
                                   <form>
                                      <div class="form-group">
                                         <label for="Username" class="control-label">Username:</label>
                                         <input type="email" class="form-control" id="Username" placeholder="Username">
                                      </div>
                                      <div class="form-group">
                                         <label for="Mailbox" class="control-label">Mailbox:</label>
                                         <input type="text" class="form-control" id="Mailbox" placeholder="Mailbox">
                                      </div>
                                   </form>
                                </div>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                   <button type="button" class="btn btn-primary">Invite</button>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4><i class="fa fa-bar-chart-o fa-fw"></i>Home2</h4>
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Mailbox</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                        <td class="text-center">aaaaa</td>
                                        <td class="text-center">175556789@qq.com</td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td class="text-center">bbbbb</td>
                                        <td class="text-center">173694367@qq.com </td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a> </td>
                                    </tr>
                                    <tr class="gradeB">
                                        <td class="text-center">ccccc</td>
                                        <td class="text-center">213835326@qq.com </td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o fa-fw"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                 <div class="panel panel-default">
                    <div class="panel-body">

                      <button type="button" class="btn btn-outline btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModalB">Add User
                      </button>

                      <div class="modal fade" id="exampleModalB" tabindex="-1" role="dialog" aria-labelledby="exampleModalBLabel">
                          <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                                   <h4 class="modal-title" id="exampleModalBLabel">Add User</h4>
                                </div>
                                <div class="modal-body">
                                   <form>
                                      <div class="form-group">
                                         <label for="Username" class="control-label">Username:</label>
                                         <input type="email" class="form-control" id="Username" placeholder="Username">
                                      </div>
                                      <div class="form-group">
                                         <label for="Mailbox" class="control-label">Mailbox:</label>
                                         <input type="text" class="form-control" id="Mailbox" placeholder="Mailbox">
                                      </div>
                                   </form>
                                </div>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                   <button type="button" class="btn btn-primary">Invite</button>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
            </div>

        </div>
        @endsection