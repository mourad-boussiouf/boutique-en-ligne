

<?php foreach ($categorie as $value): ?> <!-- Recherche les catégories en bdd -->
                    <option value="<?= $value['name_categories']; ?>"><?= $value['name_categories']; ?></option> <!-- Affiche les catégories -->
<?php endforeach; ?>