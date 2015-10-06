@extends('admin.app')

@section('content_header')
<h1>
  USER MANAGEMENT
  <small>LIST All USERS</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">LIST ALL USERS</li>
</ol>
@endsection
@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="row">   
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">LIST All USERS</h3>
            <div class="box-tools">
              <div class="input-group" style="width: 350px;">
                <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive">
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->lastname }}</td>
                  <td>{{ $user->firstname }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>
                    <span class="label label-success">
                    @if ($user->status=='1') 
                      Active 
                    @elseif($user->status=='0')
                      Inactive
                    @endif
                    </span>
                  </td>
                  <td>{{ $user->email }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
          </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-5">
                <div class="dataTables_info">Showing 1 to 10 of 57 entries</div>
              </div>
              <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                  <ul class="pagination">
                    <li class="paginate_button previous disabled" id="example1_previous">
                      <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="0">Previous</a>
                    </li>
                    <li class="paginate_button active">
                      <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="1">1</a>
                    </li>
                    <li class="paginate_button ">
                      <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="2">2</a>
                    </li>
                    <li class="paginate_button ">
                      <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="3">3</a>
                    </li>
                    <li class="paginate_button ">
                      <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="4">4</a>
                    </li>
                    <li class="paginate_button ">
                      <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="5">5</a>
                    </li>
                    <li class="paginate_button ">
                      <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="6">6</a>
                    </li>
                    <li class="paginate_button next" id="example1_next">
                      <a tabindex="0" aria-controls="example1" href="#" data-dt-idx="7">Next</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- box-footer -->
        </div><!-- /.box -->
      </div>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
@endsection

  