<table class="table" width="100%">
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
         
      </tr>
   </thead>
   <tbody>
      <?php if (isset($data->cse)): ?>
        <?php foreach (json_decode($data->cse) as $key => $value): ?>
          <tr>
            <td>{{$value->type_of_eligibility}}</td>
            <td>{{$value->career_service_under_special_laws_ces_csee}}</td>
            <td>{{$value->rating}}</td>
            <td>{{$value->date_of_examination_conferment}}</td>
            <td>{{$value->place_of_examination_conferment}}</td>
            <td>{{$value->highest_grade_level_units_earned}}</td>
            <td>{{$value->licince_no}}</td>
            <td>{{$value->date_of_release}}</td>
            
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