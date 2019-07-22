                   <!-- application/views/ajax/index.php-->
 <table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>MembershipType</td>
    <th>MembershipLength</td>
    </tr>
    <tr>
<?php foreach ($ajaxdata as $ajax): ?>

		<td><?php echo $ajax['id']; ?></td>
		<td><?php echo $ajax['name']; ?></td>
		<td><?php echo $ajax['slug']; ?></td>
		<td><?php echo $ajax['txt']; ?></td>
 </tr>
<?php endforeach; ?>

  
    </table>
    
    

    