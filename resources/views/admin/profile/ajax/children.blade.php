<table class="table" width="100">
      <thead>
        <tr>
            <th>Name</th>
            <th>Birthday</th>
            <th>Age</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!isset($data->children)): ?>
          <tr>
            <td colspan="3" class="text-center">No Children</td>
          </tr>
        <?php else: ?>
            <?php foreach (json_decode($data->children) as $item): ?>
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->dob }}</td>
                    <td>{{ $item->age }}</td>
                </tr>
            <?php endforeach ?>

        <?php endif ?>
      </tbody> 
</table>