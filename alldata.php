<?php

include "dbfunction.php";

function filltable()
{
	$data = selectalldata();

	foreach ($data as $key => $value) {
	
		echo "<tr>";
		foreach ($value as $col => $coldata) {		
			echo "<td>$coldata</td>";
		}
		echo "<td><a href='update.php?id=".$value['id']."'>Update</a></td>";
		echo "<td><a href='delete.php?id=".$value['id']."'>Delete</a></td>";
		echo "</tr>";
	}

}
?>
<table id="customers">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Post</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php filltable();?>
</table>