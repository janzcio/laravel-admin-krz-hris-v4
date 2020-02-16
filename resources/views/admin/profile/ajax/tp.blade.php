<table class="table" width="100%">
   <thead>
      <tr>
         <th style="width: 30% !important;">Title of learning and Development Inventions/Training program</th>
         <th style="width: 30% !important;">Include Date From</th>
         <th style="width: 30% !important;">Include Date to</th>
         <th style="width: 30% !important;">Number of hours</th>
         <th style="width: 30% !important;">Type of LD</th>
         <th style="width: 30% !important;">Conducted/Sponsored by</th>
         
      </tr>
   </thead>
   <tbody>
      <?php if (isset($data->tp)): ?>
        <?php foreach (json_decode($data->tp) as $key => $value): ?>
          <tr>
            <td>{{ $value->title_of_learning_and_dev_inventions_tp }}</td>
            <td>{{ $value->include_date_from }}</td>
            <td>{{ $value->include_date_to }}</td>
            <td>{{ $value->number_of_hours }}</td>
            <td>{{ $value->tpy_of_ld }}</td>
            <td>{{ $value->conducted_sponsored_by }}</td>
            
          </tr>
        <?php endforeach ?>
      <?php endif ?>
   </tbody>
</table>