<div class="row">
    <div class="users add col-md-10 columns content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <legend>Clientes</legend>
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Ação</button>
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo BASE; ?>clientes/home">Listar Clientes</a></li>
                            </ul>
                        </div>            
                    </li>
                </ul>
                <br/>
            </div>
            <br/>
			<div class="box-body">
                <div class="users form col-md-10 columns content">
                    <form method="post" accept-charset="utf-8" role="form">
                    	<fieldset>
                        	<legend>Editar Cliente</legend>
                        		<div class="form-group text required">
                        			<label for="nome">Nome</label>
                        			<input type="text" name="nome" required="required" maxlength="30" id="nome" class="form-control" value="<?= $cliente['cli_tx_nome_cliente']; ?>" />
                        		</div>
                        		<div class="form-group username required">
                        			<label for="endereco">Endereço</label>
                        			<input type="text" name="endereco" required="required" maxlength="100" id="endereco" class="form-control" value="<?= $cliente['cli_tx_endereco']; ?>" />
                        		</div>
                        		<div class="form-group password required">
                        			<label for="telefone">Telefone</label>
                        			<input type="text" name="telefone" required="required" id="telefone" class="form-control" value="<?= $cliente['cli_tx_telefone']; ?>"/>
                        		</div>
                                <div class="form-group radio">
                                    <legend>Status</legend>
                                    <div class="radio">
                                        <label for="status">
                                            <input type="radio" name="status" id="optionsRadios1" value="0" <?php if ($cliente['cli_in_desativado'] == 0) { echo 'checked=""'; }?>>Ativado
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="status">
                                            <input type="radio" name="status" id="optionsRadios2" value="1" <?php if ($cliente['cli_in_desativado'] == 1) { echo 'checked=""'; }?>>Desativado
                                        </label>
                                    </div>
                                </div>
                        </fieldset>
                    <br/>
                    <button class="btn btn-success" type="submit">Atualizar</button>
                	</form>
            	</div>
            </div>
        </div>
    </div>
</div>