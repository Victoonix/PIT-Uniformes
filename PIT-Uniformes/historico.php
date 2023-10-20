<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario</title>
  <link rel="stylesheet" type="text/css" href="css\styleCadUni.css">
</head>
<?php
$con = new mysqli("localhost", "root", "", "uniformes");
$stmt = $con->prepare("select c.id_compra, c.id_uniforme, c.matricula, c.dataCompra, u.preco from compra c join uniformes u on c.id_uniforme = u.id_uniforme");
$stmt->execute();
$result = $stmt->get_result();

$id_compra = [];
$id_uniforme = [];
$matricula = [];
$dataCompra = [];
$precos = [];

while ($row = $result->fetch_assoc()) {
    $id_compra[] = $row['id_compra'];
    $id_uniforme[] = $row['id_uniforme'];
    $matricula[] = $row['matricula'];
    $dataCompra[] = $row['dataCompra'];
    $precos[] = $row['preco'];
}
?>
<body class="uniforme">
  <div id="titulo">
    <h2>Histórico de vendas</h2>
  </div>
  <form style="width: 80%" enctype="multipart/form-data">
  <ul>
        <?php
        for ($i = 0; $i < count($id_compra); $i++) {
            echo '<li>ID: ' . $id_compra[$i] . ' | Uniforme ID: ' . $id_uniforme[$i] . ' | Matrícula: ' . $matricula[$i] . ' | Data de Compra: ' . $dataCompra[$i] . ' | Preço: ' . $precos[$i] . '</li>';
        }
        ?>
    </ul>
  </form>
</body>
</html>