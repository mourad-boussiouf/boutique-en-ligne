
<?php $pageask = explode('/', $_GET['p']); ?>

<table class = tableuser>
  <tr>
    <th>Id Utilisateur</th>
    <th>Email Utilisateur</th>
    <th>Téléphone utilisateur</th>
    <th>Adresse utilisateur</th>
    <th>Niveau de droit</th>
    <th>Nom utilisateur</th>
    <th>Prenom utilisateur</th>

  </tr>
<?php foreach ($userlist as $value): ?>
    <tr>
    <td><a href="<?= path ?>adminuser/<?= $value['id'] ?>"><?=$value['id'] ?></a></td>
    <td><?=$value['email'] ?></td>
    <td><?=$value['telephone'] ?></td>
    <td><?=$value['adresse'] ?></td>
    <td><?=$value['id_droit'] ?></td>
    <td><?=$value['nom'] ?></td>
    <td><?=$value['prenom'] ?></td>
  </tr>
<?php endforeach; ?>  
</table>
<?php if (isset($pageask[1])): ?>

<p> COUCOU!!</p>
<a href="<?=path?>adminuser">Annuler la modification</a>
<?php endif; ?>

