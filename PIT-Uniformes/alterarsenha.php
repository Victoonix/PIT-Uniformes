<?php 
session_start();
$senha = $_POST['senha']; $nova = $_POST['nova'];

$con = new mysqli("localhost", "root", "", "uniformes");
if ($senha != $nova)
{
    if ($_SESSION['escola'] == true){
        $stmt = $con->prepare("select senha from escola where token = ?");
        $stmt->bind_param("i", $_SESSION['token']);
    }
    elseif ($_SESSION['aluno'] == true){
        $stmt = $con->prepare("select senha from aluno where matricula = ? and token = ?");
        $stmt->bind_param("ii", $_SESSION['matricula'], $_SESSION['token']);
    }
    elseif ($_SESSION['fornecedor'] == true){
        $stmt = $con->prepare("select senha from fornecedor where id_fornecedor = ?");
        $stmt->bind_param("i", $_SESSION['id_fornecedor']);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows >= 1)
    {
        if ($_SESSION['escola'] == true){
            $stmt = $con->prepare("update escola set senha = ? where token = ?");
            $stmt->bind_param("si", $nova, $_SESSION['token']);
        }
        elseif ($_SESSION['aluno'] == true){
            $stmt = $con->prepare("update aluno set senha = ? where matricula = ? and token = ?");
            $stmt->bind_param("sii", $nova, $_SESSION['matricula'], $_SESSION['token']);
        }
        elseif ($_SESSION['fornecedor'] == true){
            $stmt = $con->prepare("update fornecedor set senha = ? where fornecedor = ?");
            $stmt->bind_param("si", $nova, $_SESSION['id_fornecedor']);
        }
        $stmt->execute();
        echo 'Senha alterada com sucesso';
    }
    else {
        echo 'Senha incorreta';
    }
    
}
$result->close();
$stmt->close();
?>