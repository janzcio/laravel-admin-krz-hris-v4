<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <h4><u>Other Information</u></h4>
      </div>
  </div>
</div>
<div class="row">
    <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addOI" value="Add Other Informtion" />
    <div class="table-responsive" style="overflow: auto;width: 829px;">
      <table class="table table-striped mb-0 OI-list">
         <thead>
            <tr>
               <th style="width: 30% !important;">Special Skills / Hobbies</th>
               <th style="width: 30% !important;">Non-Academ Distinctions / Recognition</th>
               <th style="width: 30% !important;">Membership in Association/Organization</th>
               <th style="width: 30% !important;">Actions</th>
            </tr>
         </thead>
         <tbody>
            <?php if (isset($data->oi)): ?>
              <?php foreach ($data->oi as $key => $value): ?>
                <tr>
                  <td><textarea style="width: 250px;"  type="text" class="form-control-sm special_skills_hobbies">{{ $value->special_skills_hobbies }}</textarea></td>
                  <td><textarea style="width: 250px;"  type="text" class="form-control-sm non_academic_distinctions_recognitions">{{ $value->non_academic_distinctions_recognitions }}</textarea></td>
                  <td><textarea style="width: 250px;"  type="text" class="form-control-sm membership_in_assoc_org">{{ $value->membership_in_assoc_org }}</textarea></td>

                  <td><input type="button" class="ibtnDelOI btn btn-md btn-danger btn-xs"  value="Delete"></td>
                </tr>
              <?php endforeach ?>
            <?php endif ?>
         </tbody>
      </table>
    </div>
</div> <br> <br> <br> 
<div class="row">
  <small><i>References (Person not related by consanguinity or affinity to applicant / appointee)</i></small>
</div>
<div class="row">
    <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addReferences" value="Add References" />
    <div class="table-responsive" style="overflow: auto;width: 829px;">
      <table class="table table-striped mb-0 References-list">
         <thead>
            <tr>
               <th style="width: 30% !important;">Name</th>
               <th style="width: 30% !important;">Address</th>
               <th style="width: 30% !important;">Tel No</th>
               <th style="width: 30% !important;">Actions</th>
            </tr>
         </thead>
              <?php if (isset($data->reference)): ?>
                <?php foreach ($data->reference as $key => $value): ?>
                  <tr>
                    <td>
                      <textarea style="width: 250px;"  type="text" class="form-control-sm name">{{ $value->name }}</textarea></td>
                    <td><textarea style="width: 250px;"  type="text" class="form-control-sm address">{{ $value->address }}</textarea></td>
                    <td><textarea style="width: 250px;"  type="text" class="form-control-sm tel_no">{{ $value->tel_no }}</textarea></td>

                    <td><input type="button" class="btnRef btn btn-md btn-danger btn-xs"  value="Delete"></td>
                  </tr>
                <?php endforeach ?>
              <?php endif ?>
         <tbody>
         </tbody>
      </table>
    </div>
</div>