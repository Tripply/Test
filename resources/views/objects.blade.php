<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h2><a href="/">Back</a></h2>
<h2>Object table</h2>

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  @foreach ($objects as $object)
  <tr>
    <td>{{ $object->Description }}</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  @endforeach
</table>

</body>
</html>
