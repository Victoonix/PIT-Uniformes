
<?php
$con = new mysqli("localhost", "root", "", "uniformes");
$id = $_POST['id'];
 $stmt = $con->prepare("delete from uniformes where id_uniforme=?");
                        $stmt->bind_param("i",$id);
                        $stmt->execute();
                        $stmt->close();
                        echo 'Uniforme deletado'; ?>