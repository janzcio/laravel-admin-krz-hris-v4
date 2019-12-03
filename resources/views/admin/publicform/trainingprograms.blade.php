<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <h4><u>Training Programs</u></h4>
      </div>
  </div>
</div>
<div class="row">
    <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addTP" value="Add Training Programs" />
    <div class="table-responsive" style="overflow: auto;width: 829px;">
      <table class="table table-striped mb-0 TP-list">
         <thead>
            <tr>
               <th style="width: 30% !important;">Title of learning and Development Inventions/Training program</th>
               <th style="width: 30% !important;">Include Date From</th>
               <th style="width: 30% !important;">Include Date to</th>
               <th style="width: 30% !important;">Number of hours</th>
               <th style="width: 30% !important;">Type of LD</th>
               <th style="width: 30% !important;">Conducted/Sponsored by</th>
               <th style="width: 30% !important;">Actions</th>
            </tr>
         </thead>
         <tbody>
            <?php if (isset($data->tp)): ?>
              <?php foreach ($data->tp as $key => $value): ?>
                <tr>
                  <td><textarea style="width: 210px;"  type="text" class="form-control-sm title_of_learning_and_dev_inventions_tp">{{ $value->title_of_learning_and_dev_inventions_tp }}</textarea></td>
                  <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_from" value="{{ $value->include_date_from }}" /></td>
                  <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_to" value="{{ $value->include_date_to }}" /></td>
                  <td><input style="width: 100px;"  type="number" class="form-control-sm number_of_hours" value="{{ $value->number_of_hours }}" /></td>
                  <td><input style="width: 150px;"  type="text" class="form-control-sm tpy_of_ld" value="{{ $value->tpy_of_ld }}" /></td>
                  <td><input style="width: 150px%;"  type="text" class="form-control-sm conducted_sponsored_by" value="{{ $value->conducted_sponsored_by }}" /></td>
                  <td><input type="button" class="ibtnDelTP btn btn-md btn-danger btn-xs"  value="Delete" /></td>
                </tr>
              <?php endforeach ?>
            <?php endif ?>
         </tbody>
      </table>
    </div>
</div>