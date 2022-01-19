<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <div>
            <tr>1.</tr>
            <label>Bangla<label><br>
            <input type="text" name="Bangla" placeholder="Bangla">
        </div>
        <div>
            <tr>2.</tr>
            <label>ENGLISH<label><br>
            <input type="text" name="ENGLISH" placeholder="ENGLISH">
        </div>
        <div>
            <tr>3.</tr>
            <label>MATHEMATICS<label><br>
            <input type="text" name="MATHEMATICS" placeholder="MATHEMATICS">
        </div>
        <div>
            <tr>4.</tr>
            <label>SCIENCE<label><br>
            <input type="text" name="SCIENCE" placeholder="SCIENCE">
        </div>
        <div>
            <tr>5.</tr>
            <label>ISLAM<label><br>
            <input type="text" name="ISLAM" placeholder="ISLAM">
        </div>
        <div>
            <tr>6.</tr>
            <label> Global_studies<label><br>
            <input type="text" name=" Global_studies" placeholder="Global_studies">
        </div>
        <div>
            <tr>7.</tr>
            <label>ICT<label><br>
            <input type="text" name="ICT" placeholder="ICT">
        </div>
        <br>
       <div>
           <button type="Reset"> Reset </button>
           <input type="submit" name="submit" value="Submit">
        </div>
    </form>
    <br>
    <?php
      if(isset($_GET['submit']))
      {
          $Subject1=$_GET['Bangla'];
          $Subject2=$_GET['ENGLISH'];
          $Subject3=$_GET['MATHEMATICS'];
          $Subject4=$_GET['SCIENCE'];
          $Subject5=$_GET['ISLAM'];
          $Subject6=$_GET['Global_studies'];
          $Subject7=$_GET['ICT'];
          $Total = $Subject1+$Subject2+$Subject3+$Subject4+$Subject5+$Subject6+$Subject7;
          $Totalmarks=700;
          $grade=$Total/$Totalmarks*100;

          if($grade>= 80 && $grade <=100){
            $totalgrade= " You got A+";
        }else if ($grade>=70 && $grade<=79){
            $totalgrade= "You got A";
        }else if ($grade>=60 && $grade<=69){
            $totalgrade= "You got A-";
        }else if ($grade>=50 && $grade<=59){
            $totalgrade= "You got B";
        }else if ($grade>=40 && $grade<=49){
            $totalgrade= "You got c";
        }else if ($grade>=33 && $grade<=39){
            $totalgrade= "You got D";
        }else if ($grade>=0 && $grade<=32){
            $totalgrade= "You got F";
        }else {
            $totalgrade= "invalid Number";
        }

      }  
      
    ?>
    <table border="1px solid" width="50%">
        <tr>
            <th>sl</th>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Bangla</td>
            <td><?php echo   $Subject1; ?> </td>
        </tr>
        <tr>
            <td>2</td>
            <td>ENGLISH</td>
            <td><?php echo   $Subject1; ?> </td>
        </tr>
        <tr>
            <td>4</td>
            <td>MATHEMATICS</td>
            <td><?php echo   $Subject1; ?> </td>
        </tr>
        <tr>
            <td>4</td>
            <td>SCIENCE</td>
            <td><?php echo   $Subject1; ?> </td>
        </tr> <tr>
            <td>5</td>
            <td>ISLAM</td>
            <td><?php echo   $Subject1; ?> </td>
        </tr>

        <tr>
            <td>6</td>
            <td>Global_studies</td>
            <td><?php echo   $Subject1; ?> </td>
        </tr>
        <tr>
            <td>7</td>
            <td>ICT</td>
            <td><?php echo   $Subject1; ?> </td>
        </tr>
        <tr>
            <td>8</td>
            <th>Total Marks</th>
            <td><?php echo   $Totalmarks; ?> </td>
        </tr>
        <tr>
            <td>89</td>
            <th>Grade</th>
            <td><?php echo   $totalgrade; ?> </td>
        </tr>
    </table>
</body>
</html>