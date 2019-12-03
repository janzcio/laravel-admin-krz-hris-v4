<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <h4><u>Civil Service Eligibility</u></h4>
      </div>
  </div>
</div>
<div class="row">
  <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-3" id="addCSE" value="Add Civil Service Eligibility"  style="margin-bottom: 5px;" />
    <div class="table-responsive" style="overflow: auto;width: 829px;">
      <table class="table table-striped mb-0 CSE-list">
         <thead>
            <tr>
               <th style="width: 30% !important;">Type of Eligibility</th>
               <th style="width: 30% !important;">Career Service / RA 1080 (Board/Bar) Under Special LAWS/CES/CSEE</th>
               <th style="width: 30% !important;">Rating</th>
               <th style="width: 30% !important;">Date of Examination/Conferment</th>
               <th style="width: 30% !important;">Place of Examination/Conferment</th>
               <th style="width: 30% !important;">Highest Grade/Level/Units Earned</th>
               <th style="width: 30% !important;">Licince No.</th>
               <th style="width: 30% !important;">Date of Release</th>
               <th style="width: 30% !important;">Action</th>
            </tr>
         </thead>
         <tbody>
            <?php if (isset($data->cse)): ?>
              <?php foreach ($data->cse as $key => $value): ?>
                <tr>
                  <td><input style="width: 100px;"  type="text" class="form-control-sm type_of_eligibility" value="{{$value->type_of_eligibility}}" /></td>
                  <td><input style="width: 389px;"  type="text" class="form-control-sm career_service_under_special_laws_ces_csee" value="{{$value->career_service_under_special_laws_ces_csee}}" /></td>
                  <td><input style="width: 100px;"  type="text" class="form-control-sm rating" value="{{$value->rating}}" /></td>
                  <td><input style="width: 100px;"  type="text" class="form-control-sm date_of_examination_conferment" value="{{$value->date_of_examination_conferment}}" /></td>
                  <td><input style="width: 500px;"  type="text" class="form-control-sm place_of_examination_conferment" value="{{$value->place_of_examination_conferment}}" /></td>
                  <td><input style="width: 100%;"  type="date" class="form-control-sm highest_grade_level_units_earned" value="{{$value->highest_grade_level_units_earned}}" /></td>
                  <td><input style="width: 100%;"  type="date" class="form-control-sm licince_no" value="{{$value->licince_no}}" /></td>
                  <td><input style="width: 100px;"  type="text" class="form-control-sm date_of_release" value="{{$value->date_of_release}}" /></td>

                  <td><input type="button" class="ibtnDelCSE btn btn-md btn-danger btn-xs"  value="Delete"></td>
                </tr>
              <?php endforeach ?>
            <?php endif ?>
         </tbody>
         <tfoot>
            <tr>
                <td colspan="9" style="text-align: left;">
                    
                </td>
            </tr>
        </tfoot>
      </table>
    </div>
</div>