<?php 
include "header.php";
include "dbfunction.php";

function filltable()
{	
	$data = null;
	if (!empty($_GET["id"])) {
		$data = selectbyid($_GET['id']);	
	} else {
		header("location:index.php");
	}
	
	//$data = selectbyid($_GET['id']);
	return $data;
}
$data = filltable();
?>

<div>
  <form action="valid.php" method="POST">
  	<input type="hidden" name="id" value="<?php if(isset($data['id'])) echo $data['id'];?>">
    <label for="emplyeename">Employee Name<span style="color: red;">*</span></label>
    <input type="text" id="fname" name="emp_name" placeholder="Your name.." value="<?php if(isset($data['emp_name'])) echo $data['emp_name'];?>">

    <label for="address">Address<span style="color: red;">*</span></label>
    <textarea type="text" id="address" name="address" placeholder="Your address.."><?php if(isset($data['adress'])) echo $data['adress'];?></textarea>

    <label for="post">Post<span style="color: red;">*</span></label>
    <select id="post" name="post">
      <option value="Clerk" <?php if ($data['post'] == 'Clerk'): ?>
        selected
      <?php endif ?>>Clerk</option>
      <option value="Admin" <?php if ($data['post'] == 'Admin'): ?>
        selected
      <?php endif ?>>Admin</option>
      <option value="Manager" <?php if ($data['post'] == 'Manager'): ?>
        selected
      <?php endif ?>>Manager</option>
    </select>
  
    <input type="submit" value="Submit" name="submit">
  </form>
</div>
<?php include "footer.php";?>