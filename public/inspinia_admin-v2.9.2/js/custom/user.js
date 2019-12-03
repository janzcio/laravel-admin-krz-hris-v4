/*Children*/
var counterChildren = 0;
$("#addChildren").on("click", function () {
    var newRow = $("<tr>");
    var cols = "";

    cols += '<td><input type="text" class="form-control children_name" /></td>';
    cols += '<td><input type="date" class="form-control children_birthdate" /></td>';
    cols += '<td><input type="number" class="form-control children_age" /></td>';

    cols += '<td><input type="button" class="ibtnDelChildren btn btn-md btn-danger btn-xs"  value="Delete"></td>';
    newRow.append(cols);
    $("table.children-list").append(newRow);
    counterChildren++;
});
$("table.children-list").on("click", ".ibtnDelChildren", function (event) {
    $(this).closest("tr").remove();       
    counterChildren -= 1
});
/*Children*/

/*Educational*/
var counterEducational = 0;
$("#addEducational").on("click", function () {
    var newRow = $("<tr>");
    var cols = "";

    cols += '<td><input style="width: 100px;"  type="text" class="form-control level"/></td>';
    cols += '<td><input style="width: 300px;"  type="text" class="form-control name_of_school"/></td>';
    cols += '<td><input style="width: 100px;"  type="text" class="form-control degree_course"/></td>';
    cols += '<td><input style="width: 100px;"  type="text" class="form-control year_graduated"/></td>';
    cols += '<td><input style="width: 500px;"  type="text" class="form-control highest_grade_level_units_earned"/></td>';
    cols += '<td><input style="width: 100%;"  type="date" class="form-control date_from"/></td>';
    cols += '<td><input style="width: 100%;"  type="date" class="form-control date_to"/></td>';
    cols += '<td><textarea style="width: auto;"  type="text" class="form-control scholarship_academic_honors_recieved"></textarea></td>';
    
    cols += '<td><input type="button" class="ibtnDelEducational btn btn-md btn-danger btn-xs"  value="Delete"></td>';
    newRow.append(cols);
    $("table.educational-list").append(newRow);
    counterEducational++;
});
$("table.educational-list").on("click", ".ibtnDelEducational", function (event) {
    $(this).closest("tr").remove();       
    counterEducational -= 1
});
/*Educational*/

/*Civil Service Eligibility*/
var counterCSE = 0;
$("#addCSE").on("click", function () {
    var newRow = $("<tr>");
    var cols = "";

    
    cols += '<td><input type="button" class="ibtnDelCSE btn btn-md btn-danger btn-xs"  value="Delete"></td>';
    cols += '<td><input style="width: 100px;"  type="text" class="form-control type_of_eligibility"/></td>';
    cols += '<td><input style="width: 389px;"  type="text" class="form-control career_service_under_special_laws_ces_csee"/></td>';
    cols += '<td><input style="width: 100px;"  type="text" class="form-control rating"/></td>';
    cols += '<td><input style="width: 160px;"  type="date" class="form-control date_of_examination_conferment"/></td>';
    cols += '<td><input style="width: 500px;"  type="text" class="form-control place_of_examination_conferment"/></td>';
    cols += '<td><input style="width: 100%;"  type="text" class="form-control highest_grade_level_units_earned"/></td>';
    cols += '<td><input style="width: auto;"  type="text" class="form-control licince_no"/></td>';
    cols += '<td><input style="width: 160px;"  type="date" class="form-control date_of_release"/></td>';

    
    newRow.append(cols);
    $("table.CSE-list").append(newRow);
    counterCSE++;
});
$("table.CSE-list").on("click", ".ibtnDelCSE", function (event) {
    $(this).closest("tr").remove();       
    counterCSE -= 1
});
/*Civil Service Eligibility*/


/*Work Experience*/
var counterWE = 0;
$("#addWE").on("click", function () {
    var newRow = $("<tr>");
    var cols = "";
    cols += '<td><input type="button" class="ibtnDelWE btn btn-md btn-danger btn-xs"  value="Delete"></td>';
    cols += '<td><input style="width: aut;"  type="date" class="form-control include_date_from" /></td>';
    cols += '<td><input style="width: 150px;"  type="date" class="form-control include_date_to" /></td>';
    cols += '<td><input style="width: 200px;"  type="text" class="form-control position_title" /></td>';
    cols += '<td><input style="width: 200px;"  type="text" class="form-control department_agency_office_company" /></td>';
    cols += '<td><input style="width: 200px;"  type="number" class="form-control monthly_salary" /></td>';
    cols += '<td><input style="width: 200px;"  type="text" class="form-control salary_grade_step_increment" /></td>';
    cols += '<td><input style="width: 100%;"  type="text" class="form-control status_of_appointment" /></td>';
    cols += '<td><input style="width: 200px;"  type="text" class="form-control govt_service" /></td>';

    
    newRow.append(cols);
    $("table.WE-list").append(newRow);
    counterWE++;
});
$("table.WE-list").on("click", ".ibtnDelWE", function (event) {
    $(this).closest("tr").remove();       
    counterWE -= 1
});
/*Work Experience*/

/*Voluntary Work*/
var counterVW = 0;
$("#addVW").on("click", function () {
    var newRow = $("<tr>");
    var cols = "";

    cols += '<td><input type="button" class="ibtnDelVW btn btn-md btn-danger btn-xs"  value="Delete"></td>';
    cols += '<td><textarea style="width: 230px;"  type="text" class="form-control name_address_of_organization" /></td>';
    cols += '<td><input style="width: 150px;"  type="date" class="form-control include_date_from" /></td>';
    cols += '<td><input style="width: 150px;"  type="date" class="form-control include_date_to" /></td>';
    cols += '<td><input style="width: 100px;"  type="number" class="form-control number_of_hours" /></td>';
    cols += '<td><input style="width: 200px;"  type="text" class="form-control position_nature_of_work" /></td>';
    
    newRow.append(cols);
    $("table.VW-list").append(newRow);
    counterVW++;
});
$("table.VW-list").on("click", ".ibtnDelVW", function (event) {
    $(this).closest("tr").remove();       
    counterVW -= 1
});
/*Voluntary Work*/

/*Training Programs*/
var counterTP = 0;
$("#addTP").on("click", function () {
    var newRow = $("<tr>");
    var cols = "";

    cols += '<td><input type="button" class="ibtnDelTP btn btn-md btn-danger btn-xs"  value="Delete"></td>';

    cols += '<td><textarea style="width: 210px;"  type="text" class="form-control title_of_learning_and_dev_inventions_tp" /></td>';
    cols += '<td><input style="width: 150px;"  type="date" class="form-control include_date_from" /></td>';
    cols += '<td><input style="width: 150px;"  type="date" class="form-control include_date_to" /></td>';
    cols += '<td><input style="width: 100px;"  type="number" class="form-control number_of_hours" /></td>';
    cols += '<td><input style="width: 150px;"  type="text" class="form-control tpy_of_ld" /></td>';
    cols += '<td><input style="width: 150px%;"  type="text" class="form-control conducted_sponsored_by" /></td>';

    
    newRow.append(cols);
    $("table.TP-list").append(newRow);
    counterTP++;
});
$("table.TP-list").on("click", ".ibtnDelTP", function (event) {
    $(this).closest("tr").remove();       
    counterTP -= 1
});
/*Training Programs*/

/*Other Information*/
var counterOI = 0;
$("#addOI").on("click", function () {
    var newRow = $("<tr>");
    var cols = "";

    cols += '<td><textarea style="width: 250px;"  type="text" class="form-control special_skills_hobbies"/></td>';
    cols += '<td><textarea style="width: 250px;"  type="text" class="form-control non_academic_distinctions_recognitions"/></td>';
    cols += '<td><textarea style="width: 250px;"  type="text" class="form-control membership_in_assoc_org"/></td>';

    cols += '<td><input type="button" class="ibtnDelOI btn btn-md btn-danger btn-xs"  value="Delete"></td>';
    newRow.append(cols);
    $("table.OI-list").append(newRow);
    counterOI++;
});
$("table.OI-list").on("click", ".ibtnDelOI", function (event) {
    $(this).closest("tr").remove();       
    counterOI -= 1
});
/*Other Information*/

/*Refenrences*/
var counterReferences = 0;
$("#addReferences").on("click", function () {
    var newRow = $("<tr>");
    var cols = "";

    cols += '<td><input style="width: 250px;"  type="text" class="form-control name"/></td>';
    cols += '<td><textarea style="width: 389px;"  type="text" class="form-control address"/></td>';
    cols += '<td><input style="width: 150px;"  type="text" class="form-control tel_no"/></td>';

    cols += '<td><input type="button" class="btnRef btn btn-md btn-danger btn-xs"  value="Delete"></td>';
    newRow.append(cols);
    $("table.References-list").append(newRow);
    counterReferences++;
});
$("table.References-list").on("click", ".btnRef", function (event) {
    $(this).closest("tr").remove();       
    counterReferences -= 1
});
/*Refenrences*/


/*For File upload */
$('.custom-file-input').on('change', function() {
   let fileName = $(this).val().split('\\').pop();
   $(this).next('.custom-file-label').addClass("selected").html(fileName);
}); 
/*For File upload */


$( "#user-form" ).submit(function( event ) {
  event.preventDefault();
  var id = $('input[name="id"]').val();
  var formData = $('#user-form').serializeArray().reduce(function(obj, item) {
      obj[item.name] = item.value;
      return obj;
  }, {});

  formData.children = GetChildren();
  formData.educational = GetEducational();
  formData.cse = GetCSE();
  formData.we = GetWE();
  formData.vw = GetVW();
  formData.tp = GetTP();
  formData.oi = GetOI();
  formData.reference = GetReference();
  formData.status_type = GetStatusType();

  formData.is_employed = $('input[name="is_employed"]').prop('checked') ? 1 : 0;
  formData.is_department_head = $('input[name="is_department_head"]').prop('checked') ? 1 : 0;
  formData.name = formData.surname + ", " + formData.firstname;

  var file_data = $('input[name="file"]')[0].files[0];
  var form_data = new FormData();
  form_data.append('formData', JSON.stringify(formData));
  form_data.append('file', file_data);
  console.log(form_data, "form_dataform_data");

  $.ajax({
      url: '/admin/users',
      type: 'post',
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,
      headers: {
       'X-CSRF-TOKEN': $('input[name="_token"]').val()
       },
      success: function (res) {
          if (res.success) {
              toastr.success('New User Added!', 'Successfully added.');
          }
      },
      error: function(res){
        toastr.error('Error Adding User', 'Error!');
      }
  });
});

function GetChildren(){
    var data = [], name, dob, age, count = 1;
    $('.children-list tbody tr').each(function(){
        name = $(this).find('.children_name').val()
        dob = $(this).find('.children_birthdate').val()
        age = $(this).find('.children_age').val()

        data.push({'name' : name,'dob' : dob,'age' : age});
        count++;
    });


    return JSON.stringify(data);

    
}

function GetEducational(){
    var data = [], 
        level, 
        name_of_school, 
        degree_course, 
        year_graduated, 
        highest_grade_level_units_earned, 
        date_from, 
        date_to, 
        scholarship_academic_honors_recieved,
        count = 1;
    $('.educational-list tbody tr').each(function(){
        level = $(this).find('.level').val()
        name_of_school = $(this).find('.name_of_school').val()
        degree_course = $(this).find('.degree_course').val()
        year_graduated = $(this).find('.year_graduated').val()
        highest_grade_level_units_earned = $(this).find('.highest_grade_level_units_earned').val()
        date_from = $(this).find('.date_from').val()
        date_to = $(this).find('.date_to').val()
        scholarship_academic_honors_recieved = $(this).find('.scholarship_academic_honors_recieved').val()
        data.push({
                    'level' : level,
                    'name_of_school' : name_of_school,
                    'degree_course' : degree_course,
                    'year_graduated' : year_graduated,
                    'highest_grade_level_units_earned' : highest_grade_level_units_earned,
                    'date_from' : date_from,
                    'date_to' : date_to,
                    'scholarship_academic_honors_recieved' : scholarship_academic_honors_recieved
                });
        count++;
    });


    return JSON.stringify(data);
}

function GetCSE(){
    var data = [], 
        type_of_eligibility, 
        career_service_under_special_laws_ces_csee, 
        rating, 
        date_of_examination_conferment, 
        place_of_examination_conferment, 
        highest_grade_level_units_earned, 
        licince_no, 
        date_of_release,
        count = 1;
    $('.CSE-list tbody tr').each(function(){
        type_of_eligibility = $(this).find('.type_of_eligibility').val()
        career_service_under_special_laws_ces_csee = $(this).find('.career_service_under_special_laws_ces_csee').val()
        rating = $(this).find('.rating').val()
        date_of_examination_conferment = $(this).find('.date_of_examination_conferment').val()
        place_of_examination_conferment = $(this).find('.place_of_examination_conferment').val()
        highest_grade_level_units_earned = $(this).find('.highest_grade_level_units_earned').val()
        licince_no = $(this).find('.licince_no').val()
        date_of_release = $(this).find('.date_of_release').val()
        data.push({
                    'type_of_eligibility' : type_of_eligibility,
                    'career_service_under_special_laws_ces_csee' : career_service_under_special_laws_ces_csee,
                    'rating' : rating,
                    'date_of_examination_conferment' : date_of_examination_conferment,
                    'place_of_examination_conferment' : place_of_examination_conferment,
                    'highest_grade_level_units_earned' : highest_grade_level_units_earned,
                    'licince_no' : licince_no,
                    'date_of_release' : date_of_release
                });
        count++;
    });


    return JSON.stringify(data);
}

function GetWE(){
    var data = [], 
        include_date_from, 
        include_date_to, 
        position_title, 
        department_agency_office_company, 
        monthly_salary, 
        salary_grade_step_increment, 
        status_of_appointment, 
        govt_service,
        count = 1;
    $('.WE-list tbody tr').each(function(){
        include_date_from = $(this).find('.include_date_from').val()
        include_date_to = $(this).find('.include_date_to').val()
        
        
        position_title = $(this).find('.position_title').val()
        department_agency_office_company = $(this).find('.department_agency_office_company').val()
        monthly_salary = $(this).find('.monthly_salary').val()
        salary_grade_step_increment = $(this).find('.salary_grade_step_increment').val()
        status_of_appointment = $(this).find('.status_of_appointment').val()
        govt_service = $(this).find('.govt_service').val()
        data.push({
                    'include_date_from' : include_date_from,
                    'include_date_to' : include_date_to,
                    'position_title' : position_title,
                    'department_agency_office_company' : department_agency_office_company,
                    'monthly_salary' : monthly_salary,
                    'salary_grade_step_increment' : salary_grade_step_increment,
                    'status_of_appointment' : status_of_appointment,
                    'govt_service' : govt_service
                });
        count++;
    });
    


    return JSON.stringify(data);
}

function GetVW(){
    var data = [], 
        name_address_of_organization, 
        include_date_from, 
        include_date_to, 
        number_of_hours, 
        position_nature_of_work,
        count = 1;
    $('.VW-list tbody tr').each(function(){
        name_address_of_organization = $(this).find('.name_address_of_organization').val()
        include_date_from = $(this).find('.include_date_from').val()
        include_date_to = $(this).find('.include_date_to').val()
        number_of_hours = $(this).find('.number_of_hours').val()
        position_nature_of_work = $(this).find('.position_nature_of_work').val()
        data.push({
                    'name_address_of_organization' : name_address_of_organization,
                    'include_date_from' : include_date_from,
                    'include_date_to' : include_date_to,
                    'number_of_hours' : number_of_hours,
                    'position_nature_of_work' : position_nature_of_work
                });
        count++;
    });


    return JSON.stringify(data);
}

function GetTP(){
    var data = [], 
        title_of_learning_and_dev_inventions_tp, 
        include_date_from, 
        include_date_to, 
        number_of_hours, 
        tpy_of_ld,
        conducted_sponsored_by,
        count = 1;
    $('.TP-list tbody tr').each(function(){
        title_of_learning_and_dev_inventions_tp = $(this).find('.title_of_learning_and_dev_inventions_tp').val()
        include_date_from = $(this).find('.include_date_from').val()
        include_date_to = $(this).find('.include_date_to').val()
        number_of_hours = $(this).find('.number_of_hours').val()
        tpy_of_ld = $(this).find('.tpy_of_ld').val()
        conducted_sponsored_by = $(this).find('.conducted_sponsored_by').val()
        data.push({
                    'title_of_learning_and_dev_inventions_tp' : title_of_learning_and_dev_inventions_tp,
                    'include_date_from' : include_date_from,
                    'include_date_to' : include_date_to,
                    'number_of_hours' : number_of_hours,
                    'tpy_of_ld' : tpy_of_ld,
                    'conducted_sponsored_by' : conducted_sponsored_by
                });
        count++;
    });


    return JSON.stringify(data);
}

function GetOI(){
    var data = [], 
        special_skills_hobbies, 
        non_academic_distinctions_recognitions, 
        membership_in_assoc_org, 
        count = 1;
    $('.OI-list tbody tr').each(function(){
        special_skills_hobbies = $(this).find('.special_skills_hobbies').val()
        non_academic_distinctions_recognitions = $(this).find('.non_academic_distinctions_recognitions').val()
        membership_in_assoc_org = $(this).find('.membership_in_assoc_org').val()
        data.push({
                    'special_skills_hobbies' : special_skills_hobbies,
                    'non_academic_distinctions_recognitions' : non_academic_distinctions_recognitions,
                    'membership_in_assoc_org' : membership_in_assoc_org
                });
        count++;
    });


    return JSON.stringify(data);
}


function GetReference(){
    var data = [], 
        name, 
        address, 
        tel_no, 
        count = 1;
    $('.References-list tbody tr').each(function(){
        name = $(this).find('.name').val()
        address = $(this).find('.address').val()
        tel_no = $(this).find('.tel_no').val()
        data.push({
                    'name' : name,
                    'address' : address,
                    'tel_no' : tel_no
                });
        count++;
    });


    return JSON.stringify(data);
}

function GetStatusType(){
    var data = [];
    $('input[name="status_type"]').each(function(){
        if($(this).prop('checked')){
            var key =$(this).val();
            data.push(key);
        }
    });
    return JSON.stringify(data);
}