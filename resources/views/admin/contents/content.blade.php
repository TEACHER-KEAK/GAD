@extends('admin.app')

@section('content_header')
<h1>CONTENT MANAGEMENT <small>LIST ALL CONTENTS</small></h1>
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
                <input type="text" style="width: 50%;" name="search" id="txtSearch" class="form-control input-sm pull-right" placeholder="Search" >
                <div class="input-group-btn">
                  <button class="btn btn-sm btn-default" id="btnSearch"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div><!-- /.box-header -->
          <div id="CONTENT">
          <div class="box-body table-responsive">
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th width="20%">Title</th>
                  <th width="20%">Content</th>
                  <th>Status</th>
                  <th>Author</th>
                  <th>Created Date</th>
                  <th>Updated By</th>
                  <th>Updated Date</th>
                  <!--<th>Views</th>-->
                  <th width="10%" style="text-align:center;">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contents as $content)
                <tr>
                  <td>{{ $content->id }}</td>
                  <td>{{ str_limit($content->title, $limit = 50, $end = '...') }}</td>
                  <td>{!! str_limit($content->content, $limit = 70, $end = '...') !!}</td>
                  <td>
                    @if ($content->status=='1') 
                      <span class="label label-success">Active</span>
                    @elseif($content->status=='0')
                      <span class="label label-danger">Inactive</span>
                    @endif
                    
                  </td>
                  <td>{{ $content->createdBy->email }}</td>
                  <td>{{ $content->created_at }}</td>
                  <td>{{ $content->updatedBy->email }}</td>
                  <td>{{ $content->updated_at }}</td>
                  <!--<td>{{ $content->visitor_count }}</td>-->
                  <td style="text-align:center;">
                    <a href="javascript:;" id="btnEdit">
                      <i class="fa fa-edit"></i> &nbsp;| &nbsp;
                    </a>
                    <a href="javascript:;" id="btnRemove">
                      <i class="fa fa-trash-o"></i> &nbsp;| &nbsp;
                    </a>
                    <a href="javascript:;" id="btnTranslate">
                      <!--<i class="fa fa-spinner fa-pulse"></i>-->
                      <i class="fa fa-language"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
            </tbody>
            </table>
          </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-5">
                <div class="dataTables_info">Showing 1 to {{ $contents->perPage() * $contents->currentPage()}} of {{ $contents->total()}} entries</div>
              </div>
              <div class="col-sm-7">
                  <?php echo $contents->appends(['sorts'=>'title'])->render(); ?>
              </div>
            </div>
          </div><!-- box-footer -->
          </div>
          <select class="form-control" style="width:100px;" id="perPage">
            <option value="15">15</option>
            <option value="50">50</option>
            <option value="100">100</option>
          </select>
        </div><!-- /.box -->
      </div>
    </div>
    <!-- /.row -->
  </section>
  <!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Edit Content
</button>-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Content</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script>
  $(document).on('click','.pagination a', function(e){
      e.preventDefault();
      var pageId = $(this).attr('href').split('page=')[1];
      var data = {
            page: pageId,
            limit: $("#perPage").val(),
            search : $('#txtSearch').val()
    };
    contents.getAllContents(data);
  });
  
  $("#txtSearch, #btnSearch").keyup(function(){
    var data = {
            limit: $("#perPage").val(),
            search : $('#txtSearch').val()
    };
    contents.getAllContents(data);
  });
  $("#perPage").change(function(){
    var data = {
            limit: $("#perPage").val(),
            search : $('#txtSearch').val()
    };
    contents.getAllContents(data);
  });
  
  $(document).on('click', '#btnEdit', function(){
    alert("EDIT");
  });
  
  $(document).on('click', '#btnRemove', function(){ 
    alert("REMOVE");
  });
  
  $(document).on('click', '#btnTranslate', function(){ 
    alert("TRANSLATE");
  });
  
  var contents = {};
  contents.getAllContents = function(data){
    var options = {
    	bg: '#e74c3c',
    
    	// leave target blank for global nanobar
    	target: document.getElementById('myDivId'),
    
    	// id for new nanobar
    	id: 'mynano'
    };
    
    var nanobar = new Nanobar( options );
    $.ajax({
          url: "{{URL::to('rest/admin/contents')}}",
          data: data,
          dataType: "JSON",
          type: "POST",
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          beforeSend: function(){
            // move bar
            nanobar.go( 30 ); // size bar 30%
          
          },
          success: function(data){
            $('#CONTENT').html(data);
            // Finish progress bar
            nanobar.go(100);
          }
      });
  }
</script>
@endsection