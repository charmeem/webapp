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
   <h1>Welcome to the Teacher section of virtual CAMPUS</h1>
    <section>
	    <form id="update_teacher" method="post" action="../update/{first_name}">
		    <h2>Edit Teacher data</h2>
			<label>
			    First Name :
			    <input type="text" name="first_name" value="{first_name}" />
			</label>
			<label>
			    Last Name:
			    <input type="text" name="last_name" value="{last_name}"/>
			</label>
			<label>
			    Education:
			    <input type="text" name="education" value="{education}"/>
			</label>
			<label>
			    Subject_Semester:
			    <input type="text" name="sub1" value="{sub1}"/>
			</label>
			<label>
			    Subject_Semester:
			    <input type="text" name="sub2" value="{sub2}"/>
			</label>
			<label>
			    Subject_Semester:
			    <input type="text" name="sub3" value="{sub3}"/>
			<label>
            <label>			
			    <input type="submit" Value="Update Record" />
			</label>
			<br>
			
		</form>				
    </section>
	<br><br>
	 
   </header>
  <footer>
   <p class = "copyright">
    &copy 2017 Mubashir Mufti
	</p>
 </body>
</html>