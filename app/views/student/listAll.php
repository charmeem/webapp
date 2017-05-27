<?php
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" />
  <title>A Virtual Campus</title>
  <link rel = "stylesheet" href = <?php echo $data['CSSPath']; ?>
 </head>
 <body>
  
  <header>
   <h3>Complete list of Students Registered at VU</h3>
  </header>
    <a href = "../student">
    <button>Back to Main page</button>
    </a>

 <table>
 <tr>
  <th>Roll Number</th>
  <th><a href = "<?php echo($data['actionPath'] . '/first_name'); ?>">First Name</a></th>
  <th><a href = "<?php echo($data['actionPath'] . '/last_name'); ?>">Last Name</a></th>
  <th><a href = "<?php echo($data['actionPath'] . '/semester'); ?>">Semester</a></th>
  <th><a href = "<?php echo($data['actionPath'] . '/major'); ?>">Major</a></th>
  <th><a href = "<?php echo($data['actionPath'] . '/grade'); ?>">Grade</a></th>
  <th>Update</th>
 </tr>
 
<?php foreach ($data['list'] as $k => $value) { 
  echo "<tr>";
  echo "<td>" . $value['roll_number'] . "</td>";
  echo "<td>" . $value['first_name'] . "</td>";
  echo "<td>" . $value['last_name'] . "</td>";
  echo "<td>" . $value['semester'] . "</td>";
  echo "<td>" . $value['major'] . "</td>";
  echo "<td>" . $value['grade'] . "</td>";
  
  ?>
  <td><a href = " <?php echo ('../edit/' . $value['roll_number']); ?>" >EDIT</a>
   <a href ="<?php echo ('../delete/' . $value['roll_number']); ?> " >DELETE</a></td>
  </tr>
  <?php } ?>
  
</table> 


  <footer>
   <p class = "copyright">
    &copy 2017 Mubashir Mufti
	</p>
 </body>
</html>