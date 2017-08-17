<?php
/* 
@author Ini Obong  Daniel 
@date 17-08-2017
@task First hotel.ng task
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admission form</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>


<body>

<h1>ADMISSION FORM</h1>

<div id="FORM">

		
        <form action="processing.php" method="post">
        	<input type="text" placeholder="Name" name="Name" maxlength="30" /><br />  
             <input type="text" placeholder="Date of Birth" name="DateofBirth" maxlength="20"/><br/>
               <input type="text" placeholder="Sex" name="Sex" maxlength="5"/><br/>
                 <input type="text" placeholder="Nick Name" name="Nickname" maxlength="10"/><br/>
                   <input type="text" placeholder="Favourite Colours" name="Favouritecolours" maxlength="8"/><br/>
                     <input type="text" placeholder="State Of Origin" name="Stateoforigin" maxlength="10"/><br/>
                      <input type="text" placeholder="Local Govt" name="localgovt" maxlength="10"/><br/>
                       <input type="text" placeholder="Address" name="Address" maxlength="15"/><br/>
                        <input type="text" placeholder="Phone Number" name="Phonenumber" maxlength="15"/><br/>
                         <input type="submit" value="Submit" name="submit"  />
                          </form>
                
</div>

</body>
</html>