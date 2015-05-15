<?php
	require'connect.inc.php';
	include'header.php';
?>
<div class="box span12">
<div class="box-content ">
<fieldset>
<legend>Enter the student details</legend>
<form action="enterprocess.php" method="POST">
	<table class="table table-striped table-bordered bootstrap-datatable ">
<tr>
	<td>Application No</td>
	<td>	<input type="text" name='appno'></td>
</tr>
<tr>
	<td>Name</td>
	<td>	<input type="text" name='name'></td>
</tr>
<tr>
	<td>Category</td>
	<td>	
		<select name="caste">
			<option value="1">General</option>
			<option value="2">OBC</option>
			<option value="3">OEC</option>
			<option value="4">SC</option>
			<option value="5">ST</option>
		</select>	
	</td>
</tr>
<tr>
	<td>Core Course CGPA</td>
	<td>	<input type="text" name='ccgpa'></td>
</tr>
<tr>
	<td>Complementary Course CGPA</td>
	<td>	<input type="text" name='cocgpa'></td>
</tr>
<tr>
	<td>Same University</td>
	<td>	
		<select name="uty">
			<option value="1">Yes</option>
			<option value="0">No</option>	
		</select>	
	</td>
</tr>

<tr>
	<td>NSS / NCC </td>
	<td>	
		<select name="ncc">
			<option value="0">Nil</option>
			<option value="1">NSS-NCC</option>					
			<option value="2">NCC(B)</option>		
			<option value="3">NCC(C)</option>		
		</select>	
	</td>
</tr>

<tr>
	<td>HS</td>
	<td>	<select name="hs">
			<option value="1">Chance 1</option>					
			<option value="2">Chance 2</option>		
			<option value="3">Chance 3</option>		
			<option value="4">Chance 4 or greater</option>		
		</select>	
		</td>
</tr>

</table>
<div class="form-actions">
	<input type="submit" class="btn btn-primary"name="submit" value="Submit">
</div>
</form>
</div>
</div>

<?php
	include'footer.php';
?>