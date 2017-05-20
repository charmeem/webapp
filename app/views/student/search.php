<?php
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" />
  <title>A Virtual Campus</title>
 </head>
 <body>
  
  <header>
   <h2>Search result for {query}:</h2>
  </header>
  
 
<table>
 <tr>
  <th>Roll_No.</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Semester</th>
  <th>Major</th>
  <th>Grade</th>
 </tr>
 <tr>
  <td>{roll_number}</td>
  <td>{first_name}</td>
  <td>{last_name}</td>
  <td>{semester}</td>
  <td>{major}</td>
  <td>{grade}</td>
 </tr>
</table> 
<br><br>
<form id = "edit" method = "post" action = "edit/{roll_number}" >
        <label>
		  <input type = "submit" name = "edit" value = "EDIT">
        </label>
</form>	
 <br>
<form id = "delete" method = "post" action = "delete/{roll_number}" >
        <label>
		  <input type = "submit" name = "delete" value = "DELETE">
        </label>
</form>	
<br><br>
<a href = "../student">
    <button>Back to Main page</button>
</a>

<br><br><br><br><br><br><br><br> 
 <footer>
   <p class = "copyright">
    &copy 2017 Mubashir Mufti
	</p>
 </body>
</html>