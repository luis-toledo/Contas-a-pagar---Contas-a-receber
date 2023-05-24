<?php include_once("header.php"); ?>
    <?php include_once("menu.php"); ?>
    <?php include_once("conexao.php"); 
    $query = $pdo->prepare('select * from financeiro');
    $executa = $query->execute();
    $querySoma = $pdo->prepare('select sum(valor) as total from financeiro');
    $executaSoma = $querySoma->execute();
    $soma = $querySoma->fetch(PDO::FETCH_ASSOC);
    ?>
        <article class="lista-de-registros">
            <div class="lista-de-registros-conteudo">
                <h2 class="titulo-lista">TESTE</h2>
                <div class="secao-tabela">
                    <table class="tabela-lista">
                        <thead class="cabecalho">
                            <tr class="linha-principal">
                                <th class="coluna-principal">Descrição</th>
                                <th class="coluna-principal">Valor</th>
                                <th class="coluna-principal">Tipo</th>
                                <th class="coluna-principal">Data Entrada</th>
                                <th class="coluna-principal">Data Vencimento</th>
                                <th class="coluna-principal">Data Pagamento</th>
                                <th class="coluna-principal-acao">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="corpo">
                            <?php 
                            while($financeiros = $query->fetch(PDO::FETCH_ASSOC)) { 
                            ?>
                                <tr class="linha-registro"> 
                                    <td class="coluna-registro"> 
                                        <?php echo $financeiros['descricao']; ?>
                                    </td>
                                    <td class="coluna-registro">
                                        <?php echo 'R$ ' . $financeiros['valor']; ?>
                                    </td>
                                    <td class="coluna-registro">
                                        <?php echo $financeiros['tipo']; ?>
                                    </td>
                                    <td class="coluna-registro">
                                        <?php $dataEntrada = date_create( $financeiros['data_cadastro']);?>
                                        <?=  date_format($dataEntrada, 'd/m/Y');?>
                                    </td>
                                    <td class="coluna-registro">
                                        <?php $dataVencimento = date_create( $financeiros['data_vencimento']);?>
                                        <?=  date_format($dataVencimento, 'd/m/Y');?>
                                    </td>
                                    <td class="coluna-registro">
                                        <?php $dataPagamento = date_create( $financeiros['data_pagamento']);?>
                                        <?=  date_format($dataPagamento, 'd/m/Y');?>
                                    </td>
                                    <td class="coluna-acoes">
                                        <div class="buttons-acoes">
                                            <a class="acao" href="editar.php?id=<?=$financeiros['id']?>">Editar</a>
                                            <a class="acao" href="excluir.php?id=<?=$financeiros['id']?>">Excluir</a> 
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="conteudo-lancamentos-totais">
                    <label class="total-registro" for="">Totais:</label>
                    <output class="saida-saldo" for="" name="total"><?= 'R$ ' . $soma['total']; ?></output>
                </div>
            </div>
        </article>

<?php include_once("footer.php"); ?>