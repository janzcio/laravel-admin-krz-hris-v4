<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <h4><u>Work Experience</u></h4>
      </div>
  </div>
</div>
<div class="row">
    <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addWE" value="Add Work Experience" />
    <div class="table-responsive" style="overflow: auto;width: 829px;">
      <table class="table table-striped mb-0 WE-list">
         <thead>
            <tr>
               <th style="width: 30% !important;">Include Date From</th>
               <th style="width: 30% !important;">Include Date To</th>
               <th style="width: 30% !important;">Position Title</th>
               <th style="width: 30% !important;">Department/Agency/Office/Company</th>
               <th style="width: 30% !important;">Monthly Salary</th>
               <th style="width: 30% !important;">Salary Grade & Step Increment</th>
               <th style="width: 30% !important;">Status of Appointment</th>
               <th style="width: 30% !important;">Gov't Service</th>
               <th style="width: 30% !important;">Actions</th>
            </tr>
         </thead>
         <tbody>
            <?php if (isset($data->we)): ?>
              <?php foreach ($data->we as $key => $value): ?>
                <tr>
                  <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_from" 
                    value="{{ isset($value->include_date_from) ? $value->include_date_from : date('Y-m-d', strtotime('0000-00-00')) }}" /></td>
                  <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_to" 
                    value="{{ isset($value->include_date_to) ? $value->include_date_to : date('Y-m-d', strtotime('0000-00-00')) }}" /></td>
                  <td><input style="width: 200px;"  type="text" class="form-control-sm position_title" value="{{ $value->position_title }}" /></td>
                  <td><input style="width: 200px;"  type="text" class="form-control-sm department_agency_office_company" value="{{ $value->department_agency_office_company }}" /></td>
                  <td><input style="width: 200px;"  type="number" class="form-control-sm monthly_salary" value="{{ $value->monthly_salary }}" /></td>
                  <td><input style="width: 200px;"  type="text" class="form-control-sm salary_grade_step_increment" value="{{ $value->salary_grade_step_increment }}" /></td>
                  <td><input style="width: 100%;"  type="text" class="form-control-sm status_of_appointment" value="{{ $value->status_of_appointment }}" /></td>
                  <td><input style="width: 200px;"  type="text" class="form-control-sm govt_service" value="{{ $value->govt_service }}" /></td>

                  <td><input type="button" class="ibtnDelWE btn btn-md btn-danger btn-xs"  value="Delete"></td>
                </tr>
              <?php endforeach ?>
            <?php endif ?>
         </tbody>
      </table>
    </div>
</div>