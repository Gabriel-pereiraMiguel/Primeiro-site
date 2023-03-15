
<h1>Listagem de usuarios</h1>
<style>
	

<?php
    $sql = "SELECT * FROM alunos;";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
       print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>ID</th>";
            print "<th>Nome</th>";
            print "<th>Idade</th>";
            print "<th>Genero</th>";
            print "<th>Serie</th>";
            print "</tr>"; 
       while($row = $res->fetch_object()){
            print "<tr >";
            print "<td>".$row->id;
            print "<td>".$row->nome;
            print "<td>".$row->idade;
            print "<td>".$row->genero;
            print "<td>".$row->serie;
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class'alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
</style>