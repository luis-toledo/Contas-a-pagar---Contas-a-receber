 <?php include_once("header.php"); ?>
        <?php include_once("menu.php"); ?>               
                <article class="novos-lancamentos">
                    <div class="secao-novos-lancamentos">
                        <form class="form-lancamentos" action="lancamentos.php" method="post">
                            <h2 class="titulo-lancamento">Realizar Novo Lancamento</h2>
                            
                            <div class="lancamentos-caixa">
                                <label class="label-lancamento">Descrição</label>
                                <input class="input-lancamento" type="text" name="descricao" placeholder="Descrição do Produto">
                            </div>
                            
                            <div class="lancamentos-valor-tipo">
                                
                                <div class="lancamentos-caixa valor">
                                    <label class="label-lancamento">Valor</label>
                                    <input class="input-lancamento" type="number" name="valor" placeholder="Valor do Produto">
                                </div>
                                
                                <div class="lancamentos-caixa tipo">
                                    <label class="label-lancamento">Tipo</label>
                                    <input class="input-lancamento" type="text" name="tipo" list="tipo-lancamento">
                                    <datalist id="tipo-lancamento">
                                        <option value="P">
                                        <option value="R">
                                    </datalist>
                                </div>
                            </div>
                            
                            <div class="lancamentos-data">
                                
                                <div class="lancamentos-caixa data">
                                    <label class="label-lancamento">Data Entrada</label>
                                    <input class="input-lancamento" name="data_entrada" type="date">
                                </div>
                                
                                <div class="lancamentos-caixa data">
                                    <label class="label-lancamento" for="">Data Vencimento</label>
                                    <input class="input-lancamento" name="data_vencimento" type="date">
                                </div>
                               
                                <div class="lancamentos-caixa data">
                                    <label class="label-lancamento">Data Pagamento</label>
                                    <input class="input-lancamento" name="data_pagamento" type="date">
                                </div>
                                
                            </div>
                            
                            <input class="button" type="submit" value="SALVAR" name="cadastrar">
                        
                        </form>
                    </div>
                </article>

<?php
    include_once 'conexao.php';
    if(isset($_POST['cadastrar'])){
        $descricao       = $_POST['descricao'];
        $valor           = $_POST['valor'];
        $tipo            = $_POST['tipo'];
        $dataEntrada     = $_POST['data_entrada'];
        $dataVencimento  = $_POST['data_vencimento'];
        $dataPagamento   = $_POST['data_pagamento'];
        try{
            $query = $pdo->prepare('INSERT INTO financeiro(descricao, valor, tipo, data_vencimento, data_pagamento, data_cadastro) VALUES(?,?,?,?,?,?)');
            $query->bindParam(1, $descricao,      PDO::PARAM_STR);
            $query->bindParam(2, $valor,          PDO::PARAM_STR);
            $query->bindParam(3, $tipo,           PDO::PARAM_STR);
            $query->bindParam(4, $dataVencimento, PDO::PARAM_STR);
            $query->bindParam(5, $dataPagamento,  PDO::PARAM_STR);
            $query->bindParam(6, $dataEntrada,    PDO::PARAM_STR);
            $executa = $query->execute();
            
            if($executa){
                print "<script>
                            alert('Dados gravados com sucesso!');
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