<?php

echo "<table>"; 
        echo"<tr><td>"."id"."</td>";
        echo"<td>"."name"."</td>";
        echo"<td>"."mobile"."</td>";
         echo"<td>"."email"."</td>";
        echo"<td>"."gender"."</td>";
       
        echo"<td>"."hobbies"."</td>";
            echo"<td>"."profile"."</td>";
        echo"<td>"."country"."</td></tr>";
		foreach ($result as $row)
        {
        //echo $row->title;
        echo"<tr><td>".$row->id."</td>";
        echo"<td>".$row->name."</td>";
        echo"<td>".$row->mobile."</td>";
        echo"<td>".$row->email."</td>";
        echo"<td>".$row->gender."</td>";
        echo"<td>".$row->hob."</td>";
        echo"<td>".$row->profile."</td>";
        echo"<td>".$row->country."</td>";
       ?>
       <td><a href="<?php echo base_url()?>index.php/register/edit/<?php echo $row->id; ?>">Edit</a><td>

      <?php
       }
        echo "</table>";