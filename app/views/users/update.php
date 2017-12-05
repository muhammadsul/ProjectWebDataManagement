<?php require_once '../app/views/templates/header.php'?>

<h2>Update Reminder</h2>


<form>

username :
<input type="text" value="<?=$data['item'][0]['subject']?>">
password:
<input type="text" value="<?=$data['item'][0]['description']?>">
Email: 
<input type="text" value="<?=$data['item'][0]['description']?>">
Phone:
<input type="text" value="<?=$data['item'][0]['description']?>">
DateOfBirth:
<input type="text" value="<?=$data['item'][0]['description']?>">
Province:
<input type="text" value="<?=$data['item'][0]['description']?>">
City:
<input type="text" value="<?=$data['item'][0]['description']?>">


<button type="submit"> Update </button>

</form>