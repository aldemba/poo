<?php
// use App\Model\Classe;
use App\Model\Module;
$modules = Module::findAll();
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>nom_module</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        foreach ($modules as $module){
            echo "<tr>";
            echo "<td>".$module->nom_module."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
