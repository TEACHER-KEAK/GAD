@extends('admin.app')

@section('content_header')
<h1>SETTINGS<small>INFORMATION</small></h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> HOME</a></li>
    <li class="active">SETTING INFORMATION</li>
</ol>
@endsection
@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="row">   
      <div class="col-sm-12">
        <div class="box box-solid box-success">
          <div class="box-header with-border">
            <h3 class="box-title">SETTING INFORMATION </h3>
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
            <form class="form-horizontal" action="{{ url('admin/settings/'.$setting->id) }}" method="post" style="padding:10px;">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
              {!! method_field('PUT') !!}
              
              <div class="form-group  " >
                <label for="ipt" class=" control-label col-md-2 text-right">Company Name(Khmer)</label>
                <div class="col-md-10">
                  <input type="text" name="company_name_kh" id="company_name_kh" value="{{$setting->company_name_kh}}" class="form-control" placeholder="Enter your company name" required/> 
                </div> 
              </div>   
              <div class="form-group  " >
                <label for="ipt" class=" control-label col-md-2 text-right">Company Name(English)</label>
                <div class="col-md-10">
                  <input type="text" name="company_name" id="company_name" value="{{$setting->company_name}}" class="form-control" placeholder="Enter your company name" required/> 
                </div> 
              </div> 
              <div class="form-group  " >
                <label for="ipt" class=" control-label col-md-2 text-right">Company Name(Chinese)</label>
                <div class="col-md-10">
                  <input type="text" name="company_name_ch" id="company_name_ch" value="{{$setting->company_name_ch}}" class="form-control" placeholder="Enter your company name" required/> 
                </div> 
              </div> 
              <div class="form-group">
                <label class="col-sm-2 text-right">Company Logo</label>
                  <div class="col-sm-10">  
                    <input type="hidden" readonly="readonly" value="{{$setting->company_logo}}"class="form-control" id="txtImage" name="company_logo" onchange="changeImage()">
                    <a type="button" class="btn btn-default btn-file" data-target="#myModal" href="javascript:;" data-toggle="modal">Choose Logo </a>
                    <img src="{{$setting->company_logo}}" style="width:116px; height:80px;" class="thumbnail" id="sample_image"/>
                  </div>    
              </div>
              <div class="form-group">
                <label class="col-sm-2 text-right">Company Information(Khmer)</label>
                  <div class="col-sm-10">  
                    <textarea id="company_information_kh" name="company_information_kh">{!! $setting->company_information_kh!!}</textarea>
                  </div>    
              </div>
              <div class="form-group">
                <label class="col-sm-2 text-right">Company Information(English)</label>
                  <div class="col-sm-10">  
                    <textarea id="company_information" name="company_information">{!! $setting->company_information!!}</textarea>
                  </div>    
              </div>
              <div class="form-group">
                <label class="col-sm-2 text-right">Company Information(Chinese)</label>
                  <div class="col-sm-10">  
                    <textarea id="company_information_ch" name="company_information_ch">{!! $setting->company_information_ch!!}</textarea>
                  </div>    
              </div>
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Copyright(Khmer)</label> 
                <div class="col-md-10">
                  <input type="text" name="copyright_kh" id="copyright_kh" value="{{$setting->copyright_kh}}" class="form-control" placeholder="Enter your copyright..." required/>    
                </div> 
              </div>
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Copyright(English)</label> 
                <div class="col-md-10">
                  <input type="text" name="copyright" id="copyright" value="{{$setting->copyright}}" class="form-control" placeholder="Enter your copyright..." required/>    
                </div> 
              </div>
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Copyright(Chinese)</label> 
                <div class="col-md-10">
                  <input type="text" name="copyright_ch" id="copyright_ch" value="{{$setting->copyright_ch}}" class="form-control" placeholder="Enter your copyright..." required/>    
                </div> 
              </div>
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Meta Title</label> 
                <div class="col-md-10">
                  <input type="text" name="meta_title" id="meta_title" value="{{$setting->meta_title}}" class="form-control" placeholder="Enter your copyright..." required/>    
                </div> 
              </div>
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Meta Content</label> 
                <div class="col-md-10">
                  <input type="text" name="meta_content" id="meta_content" value="{{$setting->meta_content}}" class="form-control" placeholder="Enter your copyright..." required/>    
                </div> 
              </div>
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Meta Description</label> 
                <div class="col-md-10">
                  <input type="text" name="meta_description" id="meta_description" value="{{$setting->meta_description}}" class="form-control" placeholder="Enter your copyright..." required/>    
                </div> 
              </div>
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Meta Keyword</label> 
                <div class="col-md-10">
                  <input type="text" name="meta_keyword" id="meta_keyword" value="{{$setting->meta_keyword}}" class="form-control" placeholder="Enter your copyright..." required/>    
                </div> 
              </div>
              <div class="form-group" style="display:none">
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
	      <iframe width="100%" height="500" src="/filemanager/dialog.php?type=2&field_id=txtImage'&fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
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
    selector: "textarea",theme: "modern", width: "99.5%",height: 200,
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
  function changeImage(){
    $("#sample_image").show();
    $("#sample_image").attr('src',$("#txtImage").val());
  }
</script>
@endsection