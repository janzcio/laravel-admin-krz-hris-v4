<table class="table">
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
         
      </tr>
   </thead>
   <tbody>
      <?php if (isset($data->we)): ?>
        <?php foreach (json_decode($data->we) as $key => $value): ?>
          <tr>
            <td>{{ isset($value->include_date_from) ? $value->include_date_from : date('Y-m-d', strtotime('0000-00-00')) }}</td>
            <td>{{ isset($value->include_date_to) ? $value->include_date_to : date('Y-m-d', strtotime('0000-00-00')) }}</td>
            <td>{{ $value->position_title }}</td>
            <td>{{ $value->department_agency_office_company }}</td>
            <td>{{ $value->monthly_salary }}</td>
            <td>{{ $value->salary_grade_step_increment }}</td>
            <td>{{ $value->status_of_appointment }}</td>
            <td>{{ $value->govt_service }}</td>
          </tr>
        <?php endforeach ?>
      <?php endif ?>
   </tbody>
</table>