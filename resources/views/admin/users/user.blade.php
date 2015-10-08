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
              <div class="input-group">
                <input type="text" style="width: 50%;" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
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
                <div class="dataTables_info">Showing {{ $users->from() }} to {{ $users->to() }} of {{ $users->total()}} entries</div>
              </div>
              <div class="col-sm-7">
                {!! $users->render()!!}
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

  