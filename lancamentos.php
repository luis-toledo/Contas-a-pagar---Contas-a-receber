 <?php include_once("header.php"); ?>
        <?php include_once("menu.php"); ?>               
                <article class="novos-lancamentos">
                    <div class="secao-novos-lancamentos">
                        <form class="form-lancamentos" action="">
                            <h2 class="titulo-lancamento">Realizar Novo Lancamento</h2>
                            
                            <div class="lancamentos-caixa">
                                <label class="label-lancamento" for="">Descrição</label>
                                <input class="input-lancamento" type="text" placeholder="Descrição do Produto">
                            </div>
                            
                            <div class="lancamentos-valor-tipo">
                                
                                <div class="lancamentos-caixa valor">
                                    <label class="label-lancamento" for="">Valor</label>
                                    <input class="input-lancamento" type="number" placeholder="Valor do Produto">
                                </div>
                                
                                <div class="lancamentos-caixa tipo">
                                    <label class="label-lancamento" for="">Tipo</label>
                                    <input class="input-lancamento" type="text" list="tipo-lancamento">
                                    <datalist id="tipo-lancamento">
                                        <option value="P">
                                        <option value="R">
                                    </datalist>
                                </div>
                            </div>
                            
                            <div class="lancamentos-data">
                                
                                <div class="lancamentos-caixa data">
                                    <label class="label-lancamento" for="">Data Entrada</label>
                                    <input class="input-lancamento" type="date">
                                </div>
                                
                                <div class="lancamentos-caixa data">
                                    <label class="label-lancamento" for="">Data Vencimento</label>
                                    <input class="input-lancamento" type="date">
                                </div>
                               
                                <div class="lancamentos-caixa data">
                                    <label class="label-lancamento" for="">Data Pagamento</label>
                                    <input class="input-lancamento" type="date">
                                </div>
                                
                            </div>
                            
                            <button class="button">SALVAR</button>
                        
                        </form>
                    </div>
                </article>
<?php include_once("footer.php"); ?>