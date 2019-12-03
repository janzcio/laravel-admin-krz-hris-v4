<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <h4><u>Educational</u></h4>
      </div>
  </div>
</div>
<div class="row">
  <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addEducational" value="Add Work Experience" />
    <div class="table-responsive" style="overflow: auto;width: 829px;">
      <table class="table table-striped mb-0 educational-list"> 
         <thead class="">
            <tr>
               <th style="width: 30% !important;">Level</th>
               <th style="width: 30% !important;">Name of School</th>
               <th style="width: 30% !important;">Degree Course</th>
               <th style="width: 30% !important;">Year Graduated</th>
               <th style="width: 30% !important;">Highest Grade/Level/Units Earned</th>
               <th style="width: 30% !important;">Date From</th>
               <th style="width: 30% !important;">Date to</th>
               <th style="width: 30% !important;">Scholarship/Academic Honors Recieved</th>
               <th style="width: 30% !important;">Action</th>
            </tr>
         </thead>
         <tbody>
            <?php if (isset($data->educational)): ?>
              <?php foreach ($data->educational as $key => $value): ?>
                <tr>
                  <td><input style="width: 100px;"  type="text" class="form-control-sm level" value="{{$value->level}}" /></td>
                  <td><input style="width: 100px;"  type="text" class="form-control-sm name_of_school" value="{{$value->name_of_school}}" /></td>
                  <td><input style="width: 100px;"  type="text" class="form-control-sm degree_course" value="{{$value->degree_course}}" /></td>
                  <td><input style="width: 100px;"  type="text" class="form-control-sm year_graduated" value="{{$value->year_graduated}}" /></td>
                  <td><input style="width: 500px;"  type="text" class="form-control-sm highest_grade_level_units_earned" value="{{$value->highest_grade_level_units_earned}}" /></td>
                  <td><input style="width: 100%;"  type="date" class="form-control-sm date_from" value="{{$value->date_from}}" /></td>
                  <td><input style="width: 100%;"  type="date" class="form-control-sm date_to" value="{{$value->date_to}}" /></td>
                  <td><input style="width: 100px;"  type="text" class="form-control-sm scholarship_academic_honors_recieved" value="{{$value->scholarship_academic_honors_recieved}}" /></td>

                  <td><input type="button" class="ibtnDelEducational btn btn-md btn-danger btn-xs"  value="Delete"></td>
                </tr>
              <?php endforeach ?>
            <?php endif ?>
            
         </tbody>
         <!-- <tfoot>
            <tr>
                <td colspan="9" style="text-align: left;">
                    
                </td>
            </tr>
        </tfoot> -->
      </table>
    </div>
</div>