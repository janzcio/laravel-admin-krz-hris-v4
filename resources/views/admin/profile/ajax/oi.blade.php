<table class="table" width="100%">
   <thead>
      <tr>
         <th style="width: 30% !important;">Special Skills / Hobbies</th>
         <th style="width: 30% !important;">Non-Academ Distinctions / Recognition</th>
         <th style="width: 30% !important;">Membership in Association/Organization</th>
      </tr>
   </thead>
   <tbody>
      <?php if (isset($data->oi)): ?>
        <?php foreach (json_decode($data->oi) as $key => $value): ?>
          <tr>
            <td>{{ $value->special_skills_hobbies }}</td>
            <td>{{ $value->non_academic_distinctions_recognitions }}</td>
            <td>{{ $value->membership_in_assoc_org }}</td>
          </tr>
        <?php endforeach ?>
      <?php endif ?>
   </tbody>
</table>