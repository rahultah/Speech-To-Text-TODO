<?php

session_start();
include "con.php";
include "header.php";
include "err.php";

// error_reporting(E_ALL);
// ini_set('display_errors', 'on');
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
$name = $_SESSION['username'];

$query = mysqli_query($con,"select uid from users where username = '$name'");
// echo $query;

$row = mysqli_fetch_row($query);
// echo $row;

$uid = $row[0];
$result = mysqli_query($con,"SELECT * FROM tasks where uid = '$uid'");



// $_SESSION['name'] = $_SESSION['username'];

 
?>


  <body>
     <!-- <h1>Hello, world!</h1>  -->
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">HOME</h1>
      <p class="lead">Welcome  <?php echo $_SESSION['username'];?>  </p>
    </div>
    <div class="container">
        <h1 class="text-center">Speech to text TODO App.</h1>
        <form action="task.php" method="POST">
        <div class="form-group">
            <textarea name="cont" id="cont" class = "form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="text" value="<?php echo $name;?>" name="sus" id="sus" hidden>
        </div>
        <div class="form-group">
        <p id= "instructions">Please Click the start Button</p>
        </div>
        
        <div class="form-group">
            <button class = "btn btn-primary" type="submit">Add to you Tasks</button>
        </div>
        </form>
         
        <button id = "start" class = "btn btn-primary">Start</button>
        <button id = "stop" class = "btn btn-primary">Stop</button><br><br>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
Show Tasks</button>

  
<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Tasks</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body">
        
      <?php
if (mysqli_num_rows($result) > 0) {
?>
  <table class = "table">
  <thead class="thead-dark">
  
  <tr>
     <th scope="col">TID</th> 
    <th scope="col">Task Content</th>
    <th scope="col">Task Category</th>
    <th scope="col">Task Status</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {

    

    
?>
<tr>
     <th scope = "row"><?php echo $row["tid"]; ?></th> 
    <td><?php echo $row["task_content"]; ?></td>
    <td><?php echo $row["task_cat"]; ?></td>
    <td><?php echo $row["task_stat"]; ?></td>
</tr>
<?php
$i++;
    
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src = "script.js"></script>
</html>