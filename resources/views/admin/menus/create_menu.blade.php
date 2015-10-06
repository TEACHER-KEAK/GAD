@extends('admin.app')

@section('content_header')
  <!-- Content Header (Page header) -->
    <h1>
      MENU MANAGEMENT
      <small>List All Menu</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">MENU REGISTRATION FORM</li>
    </ol>
@endsection

@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="row">   
      <div class="col-sm-12">

        <div class="box box-solid box-success">
          <div class="box-header with-border">
            <h3 class="box-title">MENU REGISTRATION FORM</h3>
            <div class="box-tools pull-right">
              <!-- Buttons, labels, and many other things can be placed here! -->
              <!-- Here is a label for example -->
              <!-- <span class="label label-primary">Label</span> -->
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class="box-body">
            <form class="form-horizontal" action="" method="post" style="padding:10px;">
              <div class="form-group  " >
                <label for="ipt" class=" control-label col-md-2 text-right">Title</label>
                <div class="col-md-10">
                  <input type="text" name="menu_name" id="menu_name" value="" class="form-control" /> 
                </div> 
              </div>                                    
              <div class="form-group  ext-link" >
                <label for="ipt" class=" control-label col-md-2 text-right"> Url  </label>
                <div class="col-md-10">
                  <input type="text" name="url" id="url" value="" class="form-control" />
                </div> 
              </div>  
                              
              <!-- <div class="form-group  int-link" >
                <label for="ipt" class=" control-label col-md-2 text-right"></label>
                <div class="col-md-10">
                  <select name='module' rows='5' id='module'  class='form-control '    >
                    <option value=""> -- Select Page -- </option>
                    <optgroup label="Page ">
                    </optgroup>           
                  </select>     
                </div> 
              </div>    -->                 
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Position</label> 
                <div class="col-md-10 menutype">
                  <label class="radio-inline  ">             
                    <input type="radio" name="menu_type" value="1" class=""  />Top Menu
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="menu_type" value="0"  class="" /> Side Menu
                  </label>    
                </div> 
              </div>        
              <div class="form-group">
                <label for="ipt" class=" control-label col-md-2 text-right">Icon </label>
                <div class="col-md-10">
                  <input type="text" name="menu_icons" id="menu_icons" value="" class="form-control" />
                    <p> Example : <span class="label label-info"> fa fa-desktop </span>  , <span class="label label-info"> fa fa-cloud-upload </span> </p>
                    <p>Usage : 
                    <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"> Font Awesome </a> class name</p>
                </div> 
              </div>          
              <div class="form-group   " >
                <label for="ipt" class=" control-label col-md-2 text-right"> Active</label> 
                <div class="col-md-10 active">
                  <label class="radio-inline  ">             
                    <input type="radio" name="active" value="1" class=""  />Active
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="active" value="0"  class="" /> Inactive
                  </label>    
                </div> 
              </div>           
              <div class="form-group">
                <label class="col-sm-2 text-right"> </label>
                  <div class="col-sm-10">  
                    <button type="submit" class="btn btn-primary ">Save</button>
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