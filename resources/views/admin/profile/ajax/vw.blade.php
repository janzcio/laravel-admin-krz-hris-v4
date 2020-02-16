<table class="table">
   <thead>
      <tr>
         <th style="width: 30% !important;">Name and address of organization</th>
         <th style="width: 30% !important;">Include Date from</th>
         <th style="width: 30% !important;">Include Date To</th>
         <th style="width: 30% !important;">Number of hours</th>
         <th style="width: 30% !important;">Position/Nature of work</th>
         
      </tr>
   </thead>
   <tbody>
      <?php if (isset($data->vw)): ?>
        <?php foreach (json_decode($data->vw) as $key => $value): ?>
          <tr>
            <td>{{ $value->name_address_of_organization }}</td>
            <td>{{ $value->include_date_from }}</td>
            <td>{{ $value->include_date_to }}</td>
            <td>{{ $value->number_of_hours }}</td>
            <td>{{ $value->position_nature_of_work }}</td>
          </tr>
        <?php endforeach ?>
      <?php endif ?>
   </tbody>
</table>