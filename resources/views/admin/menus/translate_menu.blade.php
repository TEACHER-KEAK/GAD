@extends('admin.app')

@section('content_header')
<h1>Dashboard<small>Control panel</small></h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">MENU TRANSLATION</li>
</ol>
@endsection
@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="row">   
      <div class="col-sm-12">
        <div class="box box-solid box-success">
          <div class="box-header with-border">
            <h3 class="box-title">MENU TRANSLATION FORM</h3>
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
            <form class="form-horizontal" action="{{ url('admin/menus/translation') }}" method="post" style="padding:10px;">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
              <div class="form-group  " >
                <label for="ipt" class=" control-label col-md-2 text-right">Translation from</label>
                <div class="col-md-10">
                  <input type="hidden" name="menu_id" id="menu_id" value="{{ $menu->id }}"/> 
                  <input type="text" name="title" id="title" value="{{ $menu->title }}" disabled class="form-control" placeholder="Enter your menu title"/> 
                </div> 
              </div>   
              <div class="form-group">
                <label for="ipt" class=" control-label col-md-2 text-right">Language</label>
                <div class="col-md-10">
                  <select name='language_id' rows='5' id='module'  class='form-control '    >
                    <option value="">-- Select Language --</option>
                    @foreach($languages as $language)
                      <option value="{{ $language->id }}">{{ $language->full_word}}</option>
                    @endforeach
                  </select>     
                </div> 
              </div>
              <div class="form-group  " >
                <label for="ipt" class=" control-label col-md-2 text-right">Title</label>
                <div class="col-md-10">
                  <input type="text" name="title" id="title" value="" class="form-control" placeholder="Enter your menu title"/> 
                </div> 
              </div>   
              <div class="form-group">
                <label class="col-sm-2 text-right">Content</label>
                  <div class="col-sm-10">  
                    <textarea id="content" name="content"></textarea>
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
@endsection
@section('script')
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce_editor.js"></script>
<script type="text/javascript">
  editor_config.selector = "textarea";
  editor_config.path_absolute = "http://green-architecture-design-darapenhchet.c9.io/";
  tinymce.init(editor_config);
</script>
@endsection