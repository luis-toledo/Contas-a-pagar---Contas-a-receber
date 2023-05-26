<?php include_once("header.php"); ?>
        <?php include_once("menu.php");?>
        <?php 
            $idEditar = $_GET['id'];
            include_once 'conexao.php';

            $sqlEditar = $pdo->prepare('select * from financeiro WHERE id = ?');
            $sqlEditar->bindParam(1, $idEditar, PDO::PARAM_INT);
            $executaEditar = $sqlEditar->execute();
            
            $dadosEditar = $sqlEditar->fetch(PDO::FETCH_ASSOC);
            $descricaoEditar = $dadosEditar['descricao'];   
            $valorEditar = $dadosEditar['valor'];   
            $tipoEditar = $dadosEditar['tipo'];   
            $dataEntradaEditar = $dadosEditar['data_cadastro'];   
            $dataVencimentoEditar = $dadosEditar['data_vencimento'];     
            $dataPagamentoEditar = $dadosEditar['data_pagamento'];   
            
            ?>               
                <article class="novos-lancamentos">
                    <div class="secao-novos-lancamentos">
                        <form class="form-lancamentos" action=""  method="post">
                            <h2 class="titulo-lancamento">Editar Lançamento</h2>
                            
                            <div class="lancamentos-caixa">
                                <label class="label-lancamento">Descrição</label>
                                <input class="input-lancamento" value="<?= $descricaoEditar ?>" type="text" name="descricao" placeholder="Descrição do Produto">
                            </div>
                            
                            <div class="lancamentos-valor-tipo">
                                
                                <div class="lancamentos-caixa valor">
                                    <label class="label-lancamento">Valor</label>
                                    <input class="input-lancamento" value="<?= $valorEditar ?>" type="number" name="valor" placeholder="Valor do Produto">
                                </div>
                                
                                <div class="lancamentos-caixa tipo">
                                    <label class="label-lancamento">Tipo</label>
                                    <input class="input-lancamento" value="<?= $tipoEditar ?>" type="text" name="tipo" list="tipo-lancamento">
                                    <datalist id="tipo-lancamento">
                                        <option value="P">
                                        <option value="R">
                                    </datalist>
                                </div>
                            </div>
                            
                            <div class="lancamentos-data">
                                
                                <div class="lancamentos-caixa data">
                                    <label class="label-lancamento">Data Entrada</label>
                                    <input class="input-lancamento" value="<?= $dataEntradaEditar ?>" name="data_entrada" type="date">
                                </div>
                                
                                <div class="lancamentos-caixa data">
                                    <label class="label-lancamento" for="">Data Vencimento</label>
                                    <input class="input-lancamento" value="<?= $dataVencimentoEditar ?>" name="data_vencimento" type="date">
                                </div>
                               
                                <div class="lancamentos-caixa data">
                                    <label class="label-lancamento">Data Pagamento</label>
                                    <input class="input-lancamento" value="<?= $dataPagamentoEditar ?>" name="data_pagamento" type="date">
                                </div>
                                
                            </div>
                            
                            <input class="button" type="submit" value="EDITAR" name="editar">
                        
                        </form>
                    </div>
                </article>

<?php
    include_once 'conexao.php';
    if(isset($_POST['editar'])){
        $descricao       = $_POST['descricao'];
        $valor           = $_POST['valor'];
        $tipo            = $_POST['tipo'];
        $dataEntrada     = $_POST['data_entrada'];
        $dataVencimento  = $_POST['data_vencimento'];
        $dataPagamento   = $_POST['data_pagamento'];
        try{
            echo $idEditar;
            $query = $pdo->prepare('UPDATE financeiro SET id =?, descricao =?, valor =?, tipo =?, data_vencimento =?, data_pagamento =?, data_cadastro =? WHERE id=?');
            $executa = $query->execute([$idEditar,$descricao,$valor,$tipo,$dataVencimento,$dataPagamento,$dataEntrada,$idEditar]);
            if($executa){
                print "<script>
                            alert('Dados atualizados com sucesso!');
                            location='index.php';
                        </script>";
            }else{
                print "<script>
                            alert('Problema ao tentar gravar os dados!');
                        </script>";
            }
        }catch(PDOException $erro){
            print "<script>
                       console.log('Erro');
                   </script>";
        }
    }
?>
<?php include_once("footer.php"); ?>