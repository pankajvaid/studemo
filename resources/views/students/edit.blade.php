
<section class="content">
   <div class="row">
      <div class="col-lg-12">
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h3 class="panel-title">
                  <i class="livicon" data-name="wrench" data-size="16" data-loop="true" data-c="#fff"
                     data-hc="white"></i>
                  Edit Student
               </h3>
            </div>
            <div class="panel-body">

              <form method="post" action="{{ route('students.edit.post',$data->id) }}" id="example-form" enctype="multipart/form-data">
                   @csrf

              <div class="form-group col-sm-6">
                 <label for="validate-text">Student NAme</label>
                 <div class="input-group col-xs-12">
                    <input type="text" class="form-control" name="studentName" 
                       placeholder="Enter " value="<?php echo $data->studentName; ?>">
                     {!! $errors->first('studentName', '<span class="help-block">:message</span>') !!}
                 </div>
              </div>   

             <!-- Description Name -->
                  <div class="form-group col-sm-6">
                   <label for="text">Grade</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control"  name="grade" placeholder="Enter Grade " value="<?php echo $data->grade; ?>">
                         {!! $errors->first('grade', '<span class="help-block">:message</span>') !!}
                     </div>
                   </div>   

                   <div class="form-group col-sm-6">
                   <label for="text">Address</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control" name="address" placeholder="Enter address " value="<?php echo $data->address; ?>">
                         {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                     </div>
                   </div> 

                   <div class="form-group col-sm-6">
                   <label for="text">City</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control" name="city" placeholder="Enter city " value="<?php echo $data->city; ?>">
                         {!! $errors->first('city', '<span class="help-block">:message</span>') !!}
                     </div>
                   </div> 

                   <div class="form-group col-sm-6">
                   <label for="text">Country</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control" name="country" placeholder="Enter country " value="<?php echo $data->country; ?>">
                         {!! $errors->first('country', '<span class="help-block">:message</span>') !!}
                     </div>
                   </div> 

                   <div class="form-group col-sm-6">
                   <label for="text">DOB</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control" name="dob" placeholder="Enter dob (YYYY-MM-DD)" value="<?php echo $data->dob; ?>">
                         {!! $errors->first('country', '<span class="help-block">:message</span>') !!}
                     </div>
                   </div>             

                  <!-- Description Name -->
                  <div class="form-group">
                   <label for="text">Image</label>
                    <div class="input-group col-xs-12">
                      <input type="file" class="form-control"  name="photo" value="<?php echo $data->photo; ?>" >
                         {!! $errors->first('photo','<span class="help-block">:message</span>') !!}

                     </div>
                   </div>

                  
                  <div class="col-md-12 mar-10">
                     <div class="col-xs-4 col-md-4"></div>
                     <div class="col-xs-4 col-md-2">
                        <button type="submit"  class="btn btn-primary btn-block btn-md btn-responsive">
                       Update
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