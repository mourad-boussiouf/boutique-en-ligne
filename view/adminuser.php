


<table class = tableuser>
  <tr>
    <th>Id Utilisateur</th>
    <th>Email Utilisateur</th>
    <th>Nom utilisateur</th>
  </tr>
<?php foreach ($userlist as $value): ?>
    <tr>
    <td><?=$value['id'] ?></td>
    <td><?=$value['email'] ?></td>
    <td><?=$value['nom'] ?></td>
  </tr>
<?php endforeach; ?>  
</table>
