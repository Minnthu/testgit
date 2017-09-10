<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  .table-responsive {
    margin: 50px;
}
.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 0 50px;
    border-radius: 4px;

  </style>
</head>
<body>
<div class="table-responsive">
  <table class="table table-bordered">
     <tr>
       <th>Name</th>
       <th>Email</th>
       <th>Photo</th>
       <th>Phone</th>
       <th>Address</th>
     </tr>
     <tr>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>

</table>
</div>
  <ul class="pagination">
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>
</body>
</html>
<?php define('BASEPATH', "localhost");
require_once("autoload.php");

$contact = new ContactModel();
