<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product Codes PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  </head>
  <body>
  <table class="table table-striped">
    <thead>
      <tr>
        <th class="text-left" style="width:100px;">Sr. No.</th>
        <th class="text-left">Product Coupon Code</th>
        <th class="text-left" style="width:200px;">Date</th>
      </tr>
      </thead>

      <tbody>
        <?php $i=0;?>
        @forelse($data as $data)
        <tr>
          <td>{{++$i}}</td>
          <td>{{$data->code}}</td>
          <td >{{$data->created_at}}</td>
        </tr>
        @empty
        <tr>
          <td colspan="3">No Product Code found</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </body>
</html>
