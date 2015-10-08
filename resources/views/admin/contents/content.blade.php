@extends('admin.app')

@section('content_header')
<h1>Dashboard<small>Control panel</small></h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
</ol>
@endsection
@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="row">   
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">LIST All CONTENTS</h3>
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
                  <th>Title</th>
                  <th>Content</th>
                  <th>Status</th>
                  <th>Author</th>
                  <th>Created Date</th>
                  <th>Updated By</th>
                  <th>Updated Date</th>
                  <th>Total Views</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contents as $content)
                <tr>
                  <td>{{ $content->id }}</td>
                  <td>{{ $content->title }}</td>
                  <td>{{ $content->content }}</td>
                  <td>
                    <span class="label label-success">
                    @if ($content->status=='1') 
                      Active 
                    @elseif($content->status=='0')
                      Inactive
                    @endif
                    </span>
                  </td>
                  <td>{{ $content->createdBy->email }}</td>
                  <td>{{ $content->created_at }}</td>
                  <td>{{ $content->updatedBy->email }}</td>
                  <td>{{ $content->updated_at }}</td>
                  <td>{{ $content->visitor_count }}</td>
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