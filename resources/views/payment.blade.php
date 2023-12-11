<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Information</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

  <h2>付款資訊</h2>

  <table>
    <tr>
      <th>付款 ID</th>
      <th>客戶 ID</th>
      <th>員工 ID</th>
      <th>金額</th>
      <th>付款時間</th>
      <th>最後更新</th>
    </tr>

    @foreach($result as $item)
      <tr>
        <td>{{ $item->payment_id }}</td>
        <td>{{ $item->customer_id }}</td>
        <td>{{ $item->staff_id }}</td>
        <td>{{ $item->amount }}</td>
        <td>{{ $item->payment_date }}</td>
        <td>{{ $item->last_update }}</td>
      </tr>
    @endforeach

  </table>

</body>
</html>
