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
      <div class="col-sm-12">
        <div class="box box-solid box-success">
          <div class="box-header with-border">
            <h3 class="box-title">CONTENT REGISTRATION FORM</h3>
            <div class="box-tools pull-right">
              <!-- Buttons, labels, and many other things can be placed here! -->
              <!-- Here is a label for example -->
              <!-- <span class="label label-primary">Label</span> -->
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class="box-body">
            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form class="form-horizontal" action="{{ route('admin.contents.store') }}" method="post" style="padding:10px;">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
              <div class="form-group  " >
                <label for="ipt" class=" control-label col-md-2 text-right">Title</label>
                <div class="col-md-10">
                  <input type="text" name="title" id="title" value="" class="form-control" placeholder="Enter your category title" required/> 
                </div> 
              </div>   
              <div class="form-group">
                <label for="ipt" class=" control-label col-md-2 text-right">Category</label>
                <div class="col-md-10">
                  <select name='category_id' rows='5' id='module'  class='form-control fontawesome-select' required>
                    <option value="">-- Select Category --</option>
                     @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                          @for($i=0;$i<$category->level;$i++)
                            &#xf054;&#xf054;
                          @endfor
                          {{ $category->title}}
                        </option>
                      @endforeach
                  </select>     
                </div> 
              </div>
              <div class="form-group">
                <label class="col-sm-2 text-right">Content</label>
                  <div class="col-sm-10">  
                    <textarea id="content" name="content"></textarea>
                  </div>    
              </div>
              <div class="form-group">
                <label class="col-sm-2 text-right">Images</label>
                  <div class="col-sm-10">  
                    <!--<input type='file' id="images" name="images" />-->
                    <input type="hidden" name="images" id="txtImages"/>
                    <input type="hidden" readonly="readonly"   class="form-control" id="images" name="txtImages" onchange="addMoreImage()">
                    <a type="button" class="btn btn-default btn-file" data-target="#myModal" href="javascript:;" data-toggle="modal">Add Images </a>
                    <!--<a href="/filemanager/dialog.php?type=2&field_id=txtfile'&fldr=" class="btn iframe-btn" type="button">Open Filemanager</a>-->
                    <table class="table">
										<tbody>
										</tbody>
									</table>
                  </div>    
              </div>
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Show Home Page</label> 
                <div class="col-md-10">
                  <label class="radio-inline  ">             
                    <input type="radio" name="show_home_page" value="1"/> Yes
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="show_home_page" value="0" checked="checked"/> No
                  </label>    
                </div> 
              </div>  
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Status</label> 
                <div class="col-md-10 menutype">
                  <label class="radio-inline  ">             
                    <input type="radio" name="status" class="status"value="1" checked="checked"/>Active
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="status" class="status" value="0"/> Inactive
                  </label>    
                </div> 
              </div>        
              <div class="form-group">
                <label class="col-sm-2 text-right"> </label>
                  <div class="col-sm-10">  
                    <button type="submit" class="btn btn-success ">Save</button>
                    <button type="button" class="btn">Cancel</button>
                  </div>    
              </div>    
            </form>
          </div><!-- /.box-body -->
          <div class="box-footer">
            <!-- The footer of the box -->
          </div><!-- box-footer -->
        </div><!-- /.box -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
 <!-- code for popup file manager -->		
<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      <h4 class="modal-title">File Manager</h4>
	    </div>
	    <div class="modal-body">
	      <iframe width="100%" height="500" src="/filemanager/dialog.php?type=2&field_id=images'&fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
	    </div>
	  </div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('script')
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce_editor.js"></script>
<script type="text/javascript">
  $(document).ajaxStart(function() { Pace.restart(); }); 
  tinymce.init({
    selector: "textarea",theme: "modern", width: "99.5%",height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak code",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   toolbar3: "| fontselect | fontsizeselect ",
   image_advtab: true ,
   
   external_filemanager_path:"/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
 });
</script>
<script>
  function addMoreImage(){
    //images.push($('#images').val());
    $('tbody').append('<tr>'+
											'<td>'+
												'<div class="form-group">'+
						    						'<img src="'+$("#images").val()+'" class="img-responsive" id="myimagedemo" style="width:30%;height:30%;"/>'+
												'</div>'+
											'</td>'+
											'<td>'+
												'<div class="form-group">'+
						    						'<a type="button" class="btn btn-danger btn-file" href="javascript:;" id="btnRemove" class="1">Remove</a>'+	
												'</div>'+
											'</td>'+
										'</tr>');
		var images = [];
		$("tbody tr").each(function(){
				images.push($(this).find("img").attr("src"));
		});
		$("#txtImages").val(JSON.stringify(images));
  }
  $(document).on('click','#btnRemove',function(){
		$(this).parents("tr").remove();
		var images = [];
		$("tbody tr").each(function(){
				images.push($(this).find("img").attr("src"));
		});
		$("#txtImages").val(JSON.stringify(images));
	});
</script>
@endsection