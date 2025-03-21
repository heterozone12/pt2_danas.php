<!DOCTYPE html>
<head>
    <title>PT2_danas.php</title>
<style>
  body{
    text-align:center;
    background: radial-gradient(circle at top, rgba(27, 77, 62, 0.6), transparent),
    linear-gradient(to bottom, rgba(27, 77, 62, 0.4), white);
    height: 100vh;
    margin: 0;
  }
  h1{
    color:#001C04;
    text-shadow: 2px 3px 5px white;
  }
  
  label,input{
    color:#1B411E;
  }
  .button{
    color:#000030;
  }
  .result {
      margin-top: 20px;
      font-size: 18px;
      color:#690B22;
  }
  .container {
      background-color: white;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 300px;
      margin: 0 auto;
    color:#00191C;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    
  }
  b{
    color:#003205;
  }
</style>  
</head>
<body>


<h1>GRADE CALCULATOR</h1>
  <div class="container">
  <form action="" method="POST">
    <label>1st Quarter Grade</label> <input type="text" name="firstgrading" "><br>
    <label>2nd Quarter Grade</label> <input type="text" name="secondgrading" "><br>
    <label>3rd Quarter Grade</label> <input type="text" name="thirdgrading" "><br>
    <label>4th Quarter Grade</label> <input type="text" name="fourtgrading" "><br>
    <br>
    <input class="button" type="submit" name="add" >
  </form>
     

    <?php
if (isset($_POST['add'])) {
  $first_grading = $_POST['firstgrading'];
  $second_grading = $_POST['secondgrading'];
  $third_grading = $_POST['thirdgrading'];
  $fourt_grading = $_POST['fourtgrading'];
  $total = ($first_grading + $second_grading + $third_grading + $fourt_grading) /4;
  
if  ($total >= 90 && $total <= 100 ) {  
  echo "<hr>";
  echo "Average Grade: <b>$total</b> ";
  echo "<br>";
  echo "Description: <b>outstanding</b>"; 
  echo "<br>";
  echo"Remark: <b>Passed</b>";

  }elseif ($total >= 85 && $total <= 89 ) {
  echo "<hr>";
  echo "Average Grade: <b>$total</b> ";
  echo "<br>";
  echo "Description: <b>very satisfactory</b>"; 
  echo "<br>";
  echo"Remark:  <b>Passed</b>";

  }elseif ($total >= 80 && $total <= 84 ) {
  echo "<hr>";
  echo "Average Grade: <b>$total</b> ";
  echo "<br>";
  echo "Description:  <b>satisfactory</b>"; 
  echo "<br>";
  echo"Remark:  <b>Passed</b>";
      
  }elseif ($total >= 75 && $total <= 79 ) {
  echo "<hr>";
  echo "Average Grade: <b>$total</b> ";
  echo "<br>";
  echo "Description:  <b>fairly satisfactory</b>"; 
  echo "<br>";
  echo"Remark:  <b>Passed</b>";
        
  }elseif ($total >= 0 && $total <= 74 ) {
  echo "<hr>";
  echo "Average Grade: <b>$total</b> ";
  echo "<br>";
  echo "Description:  <b>Did not Meet The Expectations</b>"; 
  echo "<br>";
  echo"Remark:  <b>Failed </b>";
  }
  }
 ?> 
  
  </div>
</body>