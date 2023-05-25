<?php
    header('Content-Type: application/json');
    include_once 'conexao.php';
    $id = $_GET['id'] ? $_GET['id'] : '';
    $sql = $pdo->prepare("DELETE FROM financeiro WHERE id = $id");
    $executa = $sql->execute();
    if($executa){
        echo json_encode(['success' => true , 'message' => 'Registro apagado com sucesso!']);
    }else{
        echo json_encode(['success' => false , 'message' => 'Falha ao apagar registro!']);
    }
    
?>
    