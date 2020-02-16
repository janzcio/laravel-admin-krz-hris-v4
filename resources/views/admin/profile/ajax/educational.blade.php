<table class="table"> 
 <thead>
    <tr>
       <th style="width: 30% !important;">Level</th>
       <th style="width: 30% !important;">Name of School</th>
       <th style="width: 30% !important;">Degree Course</th>
       <th style="width: 30% !important;">Year Graduated</th>
       <th style="width: 30% !important;">Highest Grade/Level/Units Earned</th>
       <th style="width: 30% !important;">Date From</th>
       <th style="width: 30% !important;">Date to</th>
       <th style="width: 30% !important;">Scholarship/Academic Honors Recieved</th>
    </tr>
 </thead>
 <tbody>
    <?php if (isset($data->educational)): ?>
      <?php foreach (json_decode($data->educational) as $key => $value): ?>
        <tr>
          <td>{{$value->level}}</td>
          <td>{{$value->name_of_school}}</td>
          <td>{{$value->degree_course}}</td>
          <td>{{$value->year_graduated}}</td>
          <td>{{$value->highest_grade_level_units_earned}}</td>
          <td>{{$value->date_from}}</td>
          <td>{{$value->date_to}}</td>
          <td>{{$value->scholarship_academic_honors_recieved}}</td>
        </tr>
      <?php endforeach ?>
    <?php else: ?>
          <tr>
            <td colspan="9" class="text-center">No data</td>
          </tr>
    <?php endif ?>
    
 </tbody>
</table>