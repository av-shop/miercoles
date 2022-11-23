<?php


echo $header;?>

<h1>Users list</h1>

<div class="usersContainer">
  
<div class="tableContainer">
<table>
  <tr class="tableHeader">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Registration date</th>
    <th>Avatar</th>
    <th>Options</th>
  </tr>
  <?php foreach($usersData as $userData):
    
$userAvatarTitle = $userData['name'].' avatar';
$avatarUrl = base_url('uploads/'.$userData['avatar']);
$userAvatarHtml =  "<img alt='${userAvatarTitle}'title='${userAvatarTitle}'class='userAvatar' width='50'height='50'src='${avatarUrl}'/>";

    ?>
  <tr>
  <td><?= $userData['ID'];?></td>
    <td><?= $userData['name'];?></td>
    <td><?= $userData['email'];?></td>
    <td><?= $userData['registration_date'];?></td>
    <td><?php if(! empty($userData['avatar'])): $userAvatarHtml; endif ?></td>
  <td>Edit/Delete</td>
  </tr>
 <?php endforeach;?>
</table>
</div>

<a class="button"href="/new-user">Add new user</a>
</div>



<?= $footer;?>