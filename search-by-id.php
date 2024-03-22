<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Search Data</h4>
                    
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" name="get_id" class="form-control" placeholder="Enter your ID" required>
                                </div>
                                <br>
                                <button type="submit" name="search_by_id" class="btn btn-primary">Search</button>
                                <br>
                                </form>
                            </div>
                        </div>
                        <?php
                             
                        ?>
                        <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Month</th>
                        <th scope="col">Salary</th>
                        </tr>
                          </thead>
                          <tbody>
<?php
$connection = mysqli_connect("localhost","root","","user_db1");
if(isset($_POST['search_by_id']))
{
   $id = $_POST['get_id'];
   $query = "SELECT * FROM  info  WHERE id='$id'";
   $query_run = mysqli_query($connection,$query);
if(mysqli_num_rows($query_run)>0)
{
   while($row = mysqli_fetch_array($query_run))
   {

?>
                        <tr>
                       <td><?php echo $row["ID"]; ?></th>
                       <td><?php echo $row["Name"]; ?></td>
                       <td><?php echo $row["Month"]; ?></td>
                       <td><?php echo $row["Salary"]; ?></td>
                       </tr>


<?php
 }
}
else{
?>
<tr>
 <td colspan="4">No Record is Found</td>
</tr>
      <?php
}




?>
                       </tbody>
                      </table>
                        </div>
<?php

}

?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>