<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <h4><u>Family Background</u></h4>
      </div>
  </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="spouse_surname" class="col-sm-2 col-form-label text-right">Spouse's Surname In Gov't</label>
           <div class="col-sm-10"><input class="form-control" type="text" placeholder="Spouse's Surname In Gov't" id="spouse_surname" name="spouse_surname" value="{{ isset($data->spouse_surname) ? $data->spouse_surname : '' }}"></div>
        </div>
    </div>
</div>  
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="spouse_middlename" class="col-sm-2 col-form-label text-right">Middle Name</label>
           <div class="col-sm-10"><input class="form-control" type="text" placeholder="Middle Name" id="spouse_middlename" name="spouse_middlename" value="{{ isset($data->spouse_middlename) ? $data->spouse_middlename : '' }}"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="spouse_occupation" class="col-sm-2 col-form-label text-right">Occupation</label>
           <div class="col-sm-10"><input class="form-control" type="text"  id="spouse_occupation" name="spouse_occupation" value="{{ isset($data->spouse_occupation) ? $data->spouse_occupation : ''}}"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="employer_bus_name" class="col-sm-2 col-form-label text-right">Employer/Bus. Name</label>
           <div class="col-sm-10"><input class="form-control" type="text" placeholder="Employer/Bus. Name" id="employer_bus_name" name="employer_bus_name" value="{{ isset($data->employer_bus_name) ? $data->employer_bus_name : ''}}"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="business_address" class="col-sm-2 col-form-label text-right">Business Address</label>
           <div class="col-sm-10"><input class="form-control" type="text"  id="business_address" name="business_address" value="{{ isset($data->business_address) ? $data->business_address : ''}}"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="bus_telephone" class="col-sm-2 col-form-label text-right">Telephone</label>
           <div class="col-sm-10"><input class="form-control" type="text"  id="bus_telephone" name="bus_telephone" value="{{ isset($data->bus_telephone) ? $data->bus_telephone : ''}}"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="example-text-input" class="col-sm-3 col-form-label text-right"><i><small>** Father's Information **</small></i></label>
           <div class="col-sm-9"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="father_surname" class="col-sm-2 col-form-label text-right">Father's Surname</label>
           <div class="col-sm-10"><input class="form-control" type="text"  id="father_surname" name="father_surname" value="{{ isset($data->father_surname) ? $data->father_surname : ''}}"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="father_firstname" class="col-sm-2 col-form-label text-right">First Name</label>
           <div class="col-sm-10"><input class="form-control" type="text"  id="father_firstname" name="father_firstname" value="{{ isset($data->father_firstname) ? $data->father_firstname : ''}}"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="father_middlename" class="col-sm-2 col-form-label text-right">Middle name</label>
           <div class="col-sm-10"><input class="form-control" type="text"  id="father_middlename" name="father_middlename" value="{{ isset($data->father_middlename) ? $data->father_middlename : ''}}"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="example-text-input" class="col-sm-3 col-form-label text-right"><i><small>** Mother's Information **</small></i></label>
           <div class="col-sm-9"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="example-text-input" class="col-sm-2 col-form-label text-right">Mother's Surname</label>
           <div class="col-sm-10"><input class="form-control" type="text"  id="mother_surname" name="mother_surname" value="{{ isset($data->mother_surname) ? $data->mother_surname : ''}}"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="example-text-input" class="col-sm-2 col-form-label text-right">First Name</label>
           <div class="col-sm-10"><input class="form-control" type="text"  id="mother_firstname" name="mother_firstname" value="{{ isset($data->mother_firstname) ? $data->mother_firstname : ''}}"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group row">
           <label for="example-text-input" class="col-sm-2 col-form-label text-right">Middle name</label>
           <div class="col-sm-10"><input class="form-control" type="text"  id="mother_middlename" name="mother_middlename" value="{{ isset($data->mother_middlename) ? $data->mother_middlename : ''}}"></div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
      <div class="form-group row">
         <label for="example-text-input" class="col-sm-2 col-form-label text-right">Children</label>
         <div class="col-sm-10">
            <table id="myTable" class=" table children-list">
              <thead>
                  <tr>
                      <td>Name</td>
                      <td>Birthdate</td>
                      <td>Age</td>
                      <td>Action</td>
                  </tr>
              </thead>
              <tbody>
                <?php if (isset($data->children)): ?>
                  <?php foreach ($data->children as $key => $value): ?>
                    <tr>
                        <td><input type="text" class="form-control children_name" value="{{$value->name}}" /></td>
                        <td><input type="date" class="form-control children_birthdate" value="{{$value->dob}}"/></td>
                        <td><input type="number" class="form-control children_age" value="{{$value->age}}"/></td>
                        <td><input type="button" class="ibtnDelChildren btn btn-md btn-danger btn-xs"  value="Delete"></td>
                    </tr>
                  <?php endforeach ?>
                <?php endif ?>
              </tbody>
              <tfoot>
                  <tr>
                      <td colspan="5" style="text-align: left;">
                          <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs" id="addChildren" value="Add Children" />
                      </td>
                  </tr>
              </tfoot>
          </table>
         </div>
      </div>
    </div>
</div> 