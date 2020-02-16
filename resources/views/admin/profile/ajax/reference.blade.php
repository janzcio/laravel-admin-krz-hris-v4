<table class="table" width="100%">
   <thead>
      <tr>
         <th style="width: 30% !important;">Name</th>
         <th style="width: 30% !important;">Address</th>
         <th style="width: 30% !important;">Tel No</th>
      </tr>
   </thead>
        <?php if (isset($data->reference)): ?>
          <?php foreach (json_decode($data->reference) as $key => $value): ?>
            <tr>
              <td>{{ $value->name }}</td>
              <td>{{ $value->address }}</td>
              <td>{{ $value->tel_no }}</td>

            </tr>
          <?php endforeach ?>
        <?php endif ?>
   <tbody>
   </tbody>
</table>