<?php
if(isset($result))
{

	foreach ($result as $row)
	{
            $id= $row->id;
		    $name=$row->name;
		    $mobile=$row->mobile;
		    $email=$row->email;
		    $gender=$row->gender;
		    $hobbies=$row->hobbies;
		    $profile=$row->profile;
		    $country=$row->country;
		    $hob=explode(",", $hobbies);
	}
}
else
{
	$id="";
	$name="";
	$mobile="";
	$email="";
	$gender="";
	$hob="";
	$profile="";
	$country="";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>
<?php
echo form_open('Register/insert');
?>
<table>
   <tr><td>Name:</td><td><input type="text" name="name" id="na" placeholder="Name"></td></tr><br>
   <tr><td>Mobile:</td><td><input type="text" name="mobile" id="na" placeholder="Mobile" maxlength="10"></td></tr><br>
    <tr><td>Email:</td><td><input type="text" name="email" id="na" placeholder="email"></td></tr><br>
    <tr><td>gender</td><td><input type="radio" name="gender" value="male"
		 <?php
      if($gender=='male')
        {
          ?>
          checked
          <?php
        }
          ?>>male
	<input type="radio" name="gender" value="female"	 <?php
      if($gender=='female')
        {
          ?>
          checked
          <?php
        }
          ?>>female</td></tr><br>
    <tr><td>Hobbies</td>
	<td><input type="checkbox" name="hobbies[]" value="listen to music" <?php
       if($hob!="")
        {
          if (in_array("listen to music", $hob)) 
           {
            echo "checked";
          
          }
        }
     ?>>listen to music<br>
     <input type="checkbox" name="hobbies[]" value="Reading" <?php
       if($hob!="")
        {
          if (in_array("Reading", $hob)) 
           {
            echo "checked";
          
          }
        }
     ?>>Reading<br>
     <input type="checkbox" name="hobbies[]" value="Playing" <?php
       if($hob!="")
        {
          if (in_array("Playing", $hob)) 
           {
            echo "checked";
          
          }
        }
     ?>>Playing<br>
       <input type="checkbox" name="hobbies[]" value="Browsing" <?php
       if($hob!="")
        {
          if (in_array("Browsing", $hob)) 
           {
            echo "checked";
          
          }
        }
     ?>>Browsing<br>
     </td></tr><br>
     <tr><td>Profile pic</td><td><input type="text" name="profile"  placeholder="profile pic"></td><br>
<tr><td>Country</td>
	<td><select name="country">
	    <option value="select">select</option>
		<option value="india"<?php
       if($district="india")
       {
        ?>
        selected
        <?php
       }
       ?>>india</option>
       <option value="pakistan"<?php
       if($district=="pakistan")
       {
        ?>
        selected
        <?php
       }
       ?>>pakistan</option>
   
       </select></td></tr><br>
       <tr><td><input type="submit" name="s1" value="Save"></td>
       <td><input type="submit" name="s1" value="view"></td>
    <td><input type="submit" name="s1" value="update"></td></tr>
       </table>
          </form>
</body>
</html>