
<?php
$sql = $conn->prepare("SELECT * FROM usuarios");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);


$qtd = 0;

if (!empty($result)) {
    echo "<table class='table table-hover table-striped table-bordered'>";
    echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Nome</th>";
        echo "<th>E-mail</th>";
        echo "<th>Data de Nascimento</th>";
        echo "<th>Ações</th>";
    echo "</tr>";
    foreach($result as $dados) {
        echo "<tr>";
            echo "<td>" . $dados['id'] . "</td>";
            echo "<td>" . $dados['nome'] . "</td>";
            echo "<td>" . $dados['email'] . "</td>";
            echo "<td>" . $dados['data_nasc'] . "</td>";
        echo "<td>
<button onclick=\"location.href='?page=editar&id=" . $dados['id'] . "'\" class='btn btn-success'>Editar</button>
<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $dados['id'] . "'}else{return false;}\" class='btn btn-danger'>Excluir</button>
</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>