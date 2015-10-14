@extends('admin.app')

@section('content_header')
  <!-- Content Header (Page header) -->
    <h1>
      MENU MANAGEMENT
      <small>UPDATE MENU</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">MENU UPDATING FORM</li>
    </ol>
@endsection

@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="row">   
      <div class="col-sm-12">
        <div class="box box-solid box-success">
          <div class="box-header with-border">
            <h3 class="box-title">MENU UPDATING FORM</h3>
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
            <form class="form-horizontal" action="{{ url('admin/menus/updatemenu/'.$menu->id) }}" method="POST" style="padding:10px;">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
              <input type="hidden" name="menu_id" value="{{ $menu->id}}{{old('menu_id')}}">
              <div class="form-group  " >
                <label for="ipt" class=" control-label col-md-2 text-right">Title</label>
                <div class="col-md-10">
                  <input type="text" name="title" id="title" value="{{ $menu->title }}{{old('title')}}" class="form-control" placeholder="Enter your menu title"/> 
                </div> 
              </div>
              <div class="form-group">
                <label for="ipt" class=" control-label col-md-2 text-right">Parent Menu</label>
                <div class="col-md-10">
                  <select name='parent_id' rows='5' id='module'  class='form-control '    >
                    <option value="">-- Select Parent Menu --</option>
                    @foreach($menus as $m)
                      @if($menu->parent_id==$m->id)
                        <option value="{{ $m->id }}" selected="selected">{{ $m->title}}</option>
                      @else
                        <option value="{{ $m->id }}">{{ $m->title}}</option>
                      @endif
                    @endforeach
                  </select>     
                </div> 
              </div>
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Type</label> 
                <div class="col-md-10 menutype">
                  <label class="radio-inline  ">
                    <input type="radio" name="type" class="type"value="1" @if($menu->type==1) checked="checked" @endif onclick="changeMenuType(this)"/>Internal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="type" class="type" value="0" @if($menu->type==0) checked="checked" @endif onclick="changeMenuType(this)"/> External
                  </label>    
                </div> 
              </div>      
              <div class="form-group  ext-link" id="EXT_LINK" @if($menu->type==1) style="display:none;"  @endif>
                <label for="ipt" class=" control-label col-md-2 text-right" > Url  </label>
                <div class="col-md-10">
                  <input type="text" name="external_url" id="url" value="{{ $menu->external_url }}{{ old('external_url') }}" class="form-control" placeholder="http://www.google.com OR https://www.google.com."/>
                  <p> Example : <span class="label label-info">http://google.com </span>  , OR <span class="label label-info">https://www.google.com  </span> </p>
                </div> 
              </div>  
              <div class="form-group  int-link" id="INT_LINK" @if($menu->type==0) style="display:none;"  @endif>
                <label for="ipt" class=" control-label col-md-2 text-right"></label>
                <div class="col-md-10">
                  <select name='internal_url' rows='5' id='module'  class='form-control '    >
                    <option value=""> -- Select Module -- </option>
                    <optgroup label="Categories ">
                      @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if($menu->internal_url==$category->id) selected @endif >{{ $category->title}}</option>
                      @endforeach
                    </optgroup>      
                  </select>     
                </div> 
              </div>                 
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Position</label> 
                <div class="col-md-10 menutype">
                  <label class="radio-inline  ">             
                    <input type="radio" name="position" @if($menu->position==1) checked="checked" @endif value="1" class=""  checked="checked"/>Top Menu
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="position" @if($menu->position==0) checked="checked" @endif value="0"  class="" /> Side Menu
                  </label>    
                </div> 
              </div>        
              <div class="form-group">
                <label for="ipt" class=" control-label col-md-2 text-right">Icon </label>
                <div class="col-md-10">
                  <input type="text" name="icon" id="icon" value="{{ $menu->icon }}" class="form-control" placeholder="Enter fa fa-desktop"/>
                    <p> Example : <span class="label label-info"> fa fa-desktop </span>  , <span class="label label-info">fa fa-cloud-upload </span> </p>
                    <p>Usage : 
                    <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"> Font Awesome </a> class name</p>
                </div> 
              </div>      
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Ordering</label> 
                <div class="col-md-10">
                  <input type="text" name="ordering" id="ordering" value="{{ $menu->ordering }}" class="form-control" placeholder="1, 2, 3..."/>    
                </div> 
              </div>   
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Active</label> 
                <div class="col-md-10 active">
                  <label class="radio-inline  ">             
                    <input type="radio" name="status" value="1" @if($menu->status==1) checked="checked" @endif class="" />Active
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="status" value="0"  @if($menu->status==0) checked="checked" @endif class="" /> Inactive
                  </label>    
                </div> 
              </div>      
              <div class="form-group">
                <label class="col-sm-2 text-right">Content</label>
                  <div class="col-sm-10">  
                    <textarea id="content" name="content">{!! $menu->content!!}</textarea>
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
<script type="text/javascript">
  function changeMenuType(data){
    if(data.value==1){
      $('#INT_LINK').show();
      $('#EXT_LINK').hide();
    }else if(data.value==0){
      $('#INT_LINK').hide();
      $('#EXT_LINK').show();
    }
  }
</script>
@endsection