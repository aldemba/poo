
<?php
use App\Model\Classe;
$classes = classe::findAll();
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Nom Classe</th>
            <th>Grade</th>
            <th>Filiere</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($classes as $classe){
            echo "<tr>";
            echo "<td>".$classe->libelle."</td>";
            echo "<td>".$classe->niveau."</td>";
            echo "<td>".$classe->filiere."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
