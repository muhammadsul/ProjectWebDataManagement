<?php require_once '../app/views/templates/header.php'?>

<h2>Reminder Page</h2>

<table class='table table-striped table-condensed'>
	<tr>
		<th>Subject</th>
		<th>Action</th>
	</tr> 47 - 26 -31
	
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['subject']?></td>
			<td><a href="/users/remove/<?=$items['id']?>">Remove</a> | 
				<a href="/users/<?=$items['id']?>">View</a> | 
				<a href="/users/update/<?=$items['id']?>">Update</a>
				<a href="/users/create/<?=$items['id']?>">create</a>

			</td>
        </tr>
    <?php }?>

</table>