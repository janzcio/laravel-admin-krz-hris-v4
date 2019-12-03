<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <h4><u>Voluntary Work</u></h4>
      </div>
  </div>
</div>
<div class="row">
    <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addVW" value="Add Work Experience" />
    <div class="table-responsive" style="overflow: auto;width: 829px;">
      <table class="table table-striped mb-0 VW-list">
         <thead>
            <tr>
               <th style="width: 30% !important;">Name and address of organization</th>
               <th style="width: 30% !important;">Include Date from</th>
               <th style="width: 30% !important;">Include Date To</th>
               <th style="width: 30% !important;">Number of hours</th>
               <th style="width: 30% !important;">Position/Nature of work</th>
               <th style="width: 30% !important;">Actions</th>
            </tr>
         </thead>
         <tbody>
            <?php if (isset($data->vw)): ?>
              <?php foreach ($data->vw as $key => $value): ?>
                <tr>
                  <td><textarea style="width: 230px;"  type="text" class="form-control-sm name_address_of_organization" >{{ $value->name_address_of_organization }} </textarea></td>
                  <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_from" value="{{ $value->include_date_from }}" /></td>
                  <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_to" value="{{ $value->include_date_to }}" /></td>
                  <td><input style="width: 100px;"  type="number" class="form-control-sm number_of_hours" value="{{ $value->number_of_hours }}" /></td>
                  <td><input style="width: 200px;"  type="text" class="form-control-sm position_nature_of_work" value="{{ $value->position_nature_of_work }}" /></td>
                  <td><input type="button" class="ibtnDelVW btn btn-md btn-danger btn-xs"  value="Delete"></td>
                </tr>
              <?php endforeach ?>
            <?php endif ?>
         </tbody>
      </table>
    </div>
</div>