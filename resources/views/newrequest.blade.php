@extends('mainLayout')
@section('content')
 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New Request</h1>                  
                </div>             
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->  
<div class="row">           
                <!-- /.col-lg-12 -->
            </div>          
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                                            
                        <div class="panel-body">                           
                              <div class="alert" >
                                  <div class="form-group">
                                            <label>Type:</label>
                                            <select class="form-control">
                                                <option>device request</option>
                                                <option>account request</option>
                                                <option>login request</option>
                                                <option>other</option>                                           
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sender</label>
                                            <input class="form-control" placeholder="12345@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                              </div>
                              <button type="button" class="btn btn-outline btn-warning" style="margin-left: 250px;width: 100px; height: 40px;">Send
                              </button>
                               <a href="Request.html"><button type="button" class="btn btn-outline btn-warning" style="margin-left: 200px;width: 100px; height: 40px;">Cancel
                              </button></a>
                          </div>
                      </div>
                  </div>
          </div>
               </div>
@endsection