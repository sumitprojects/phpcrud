<?php include "header.php";?>

<h3>Using CSS to style an HTML Form</h3>


<p><span style="color: red;">*</span> is Mandetory</p>

<div>
  <form action="valid.php" method="POST">
    <label for="emplyeename">Employee Name<span style="color: red;">*</span></label>
    <input type="text" id="fname" name="emp_name" placeholder="Your name..">

    <label for="address">Address<span style="color: red;">*</span></label>
    <textarea type="text" id="address" name="address" placeholder="Your address.."></textarea>

    <label for="post">Post<span style="color: red;">*</span></label>
    <select id="post" name="post">
      <option value="">Select a Post</option>
      <option value="Clerk">Clerk</option>
      <option value="Admin">Admin</option>
      <option value="Manager">Manager</option>
    </select>
  
    <input type="submit" value="Submit" name="submit">
  </form>
</div>


<?php include "alldata.php"; ?>



<?php include "footer.php";?>