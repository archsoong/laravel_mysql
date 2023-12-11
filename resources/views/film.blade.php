<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Film Information</title>
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

  <h2>影片資訊</h2>

  <table>
    <tr>
      <th>影片 ID</th>
      <th>標題</th>
      <th>描述</th>
      <th>長度</th>
    </tr>

    @foreach($result as $item)
      <tr>
        <td>{{ $item->film_id }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->description }}</td>
        <td>{{ $item->length }}</td>
      </tr>
    @endforeach

  </table>

</body>
</html>
