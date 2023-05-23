<?php include_once("header.php"); ?>
    <?php include_once("menu.php"); ?>
    <?php include_once("conexao.php"); 
    $query = $pdo->prepare('select * from financeiro');
    $executa = $query->execute();
    $querySoma = $pdo->prepare('select sum(valor) as total from financeiro');
    $executaSoma = $querySoma->execute();
    $soma = $querySoma->fetch(PDO::FETCH_ASSOC);
    ?>
        <article class="novos-lancamentos">
            <div class="secao-novos-lancamentos">
                <div class="form-lancamentos">
                    <h2 class="titulo-lancamento">TESTE</h2>
                    <div class="conteudo-lancamentos-tabela">
                        <table>
                            <tr>
                                <th>Descrição</th>
                                <th>Valor</th>
                                <th>Tipo</th>
                                <th>Data Entrada</th>
                                <th>Data Vencimento</th>
                                <th>Data Pagamento</th>
                            </tr>
                            <?php 
                            while($financeiros = $query->fetch(PDO::FETCH_ASSOC)) { 
                            ?>
                                <tr>
                                    <td>
                                        <?$financeiros['descricao']; ?>
                                    </td>
                                    <td>
                                        <?$financeiros['valor']; ?>
                                    </td>
                                    <td>
                                        <?$financeiros['tipo']; ?>
                                    </td>
                                    <td>
                                        <?php $dataEntrada = date_create( $financeiros['data_cadastro']);?>
                                        <?=  date_format($dataEntrada, 'd/m/Y');?>
                                    </td>
                                    <td>
                                        <?php $dataVencimento = date_create( $financeiros['data_vencimento']);?>
                                        <?=  date_format($dataVencimento, 'd/m/Y');?>
                                    </td>
                                    <td>
                                        <?php $dataPagamento = date_create( $financeiros['data_pagamento']);?>
                                        <?=  date_format($dataPagamento, 'd/m/Y');?>
                                    </td>
                                    <td>
                                        <a href="editar.php?id=<?=$financeiros['id']?>">Editar</a> 
                                    </td>
                                    <td>
                                        <a href="excluir.php?id=<?=$financeiros['id']?>">Excluir</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="conteudo-lancamentos-totais">
                        <label for="">Totais:</label>
                        <output class="saida-saldo" for="" name="total"><?= $soma['total']; ?></output>
                    </div>
                </div>
            </div>
        </article>

<?php include_once("footer.php"); ?>