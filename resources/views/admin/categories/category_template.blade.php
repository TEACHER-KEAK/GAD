<div class="box-body table-responsive">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th width="20%">Title</th>
          <th width="20%">Description</th>
          <th>Status</th>
          <th>Author</th>
          <th>Created Date</th>
          <th>Updated By</th>
          <th>Updated Date</th>
          <th width="10%" style="text-align:center;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
          <td>{{ $category->id }}</td>
          <td>{{ str_limit($category->title, $limit = 50, $end = '...') }}</td>
          <td>{!! str_limit($category->description, $limit = 70, $end = '...') !!}</td>
          <!--<td>{!! str_limit($category->translation->first() ? $category->translation->first()->description : $category->description, $limit = 70, $end = '...') !!}</td>-->
          <td>
            <span class="label label-success">
            @if ($category->status=='1') 
              Active 
            @elseif($category->status=='0')
              Inactive
            @endif
            </span>
          </td>
          <td>{{ $category->createdBy->email }}</td>
          <td>{{ $category->created_at }}</td>
          <td>{{ $category->updatedBy->email }}</td>
          <td>{{ $category->updated_at }}</td>
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
        <div class="dataTables_info">Showing 1 to {{ $categories->perPage() * $categories->currentPage()}} of {{ $categories->total()}} entries</div>
      </div>
      <div class="col-sm-7">
         {!! $categories->render()!!}
      </div>
    </div>
    </div><!-- box-footer -->