@if ($errors->any())
<div class="alert alert-danger alert-dismissable margin5">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Error:</strong> Please check the form below for errors
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissable margin5">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Success:</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissable margin5">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Error:</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissable margin5">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Warning:</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissable margin5">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Info:</strong> {{ $message }}
</div>
@endif

<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-lg-12">
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h3 class="panel-title">
                  <i class="livicon" data-name="wrench" data-size="16" data-loop="true" data-c="#fff"
                     data-hc="white"></i>
                  Add New Student
               </h3>
             
            </div>
            <div class="panel-body">
               <form method="post" action="{{ route('students.add.post') }}" id="example-form" enctype="multipart/form-data">
                   @csrf

    
              <div class="form-group col-sm-6">
                 <label for="validate-text">Student NAme</label>
                 <div class="input-group col-xs-12">
                    <input type="text" class="form-control" name="studentName" value="{!! old('studentName') !!}"
                       placeholder="Enter ">
                     {!! $errors->first('studentName', '<span class="help-block">:message</span>') !!}
                 </div>
              </div>   

             <!-- Description Name -->
                  <div class="form-group col-sm-6">
                   <label for="text">Grade</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control" value="{!! old('grade') !!}" name="grade" placeholder="Enter Grade ">
                         {!! $errors->first('grade', '<span class="help-block">:message</span>') !!}
                     </div>
                   </div>   

                   <div class="form-group col-sm-6">
                   <label for="text">Address</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control" value="{!! old('address') !!}" name="address" placeholder="Enter address ">
                         {!! $errors->first('grade', '<span class="help-block">:message</span>') !!}
                     </div>
                   </div> 

                   <div class="form-group col-sm-6">
                   <label for="text">City</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control" value="{!! old('city') !!}" name="city" placeholder="Enter city ">
                         {!! $errors->first('city', '<span class="help-block">:message</span>') !!}
                     </div>
                   </div> 

                   <div class="form-group col-sm-6">
                   <label for="text">Country</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control" value="{!! old('country') !!}" name="country" placeholder="Enter country ">
                         {!! $errors->first('country', '<span class="help-block">:message</span>') !!}
                     </div>
                   </div> 

                   <div class="form-group col-sm-6">
                   <label for="text">DOB</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control" value="{!! old('dob') !!}" name="dob" placeholder="Enter dob (YYYY-MM-DD)">
                         {!! $errors->first('country', '<span class="help-block">:message</span>') !!}
                     </div>
                   </div>             

                  <!-- Description Name -->
                  <div class="form-group">
                   <label for="text">Image</label>
                    <div class="input-group col-xs-12">
                      <input type="file" class="form-control"  name="photo" >
                         {!! $errors->first('photo','<span class="help-block">:message</span>') !!}
                     </div>
                   </div>

                  
                  
                  <div class="col-md-12 mar-10">
                     <div class="col-xs-4 col-md-4"></div>
                     <div class="col-xs-4 col-md-2">
                        <button type="submit"  class="btn btn-primary btn-block btn-md btn-responsive">
                        Save
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- row-->
</section>