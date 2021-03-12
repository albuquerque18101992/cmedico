<div class="flex">
    <div class="row ml-1">
        <div class="col-md-6 col-sm-12">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal">Novo Médico</button>
        </div>

        <div class="col-md-6 col-sm-12">
            <form class="form-inline my-2 my-lg-0 float-right">
                <input class="form-control mr-sm-2" type="search" placeholder="Nome ou CRM" aria-label="Pesquisar" name="txtBuscar">
                <button class="btn btn-success my-2 my-sm-0" type="submit" name="<?php echo $item2; ?>"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</div>


<table class="table table-hover table-sm mt-4 text-center">
    <thead class="title-table-medicos text-center">
        <tr>
            <th>Nome</th>
            <th>Especialidade</th>
            <th>CRM</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Fernando</td>
            <td>Ortopedista</td>
            <td>665156</td>
            <td>(11) 99837-0115</td>
            <td>
                <a href="#"><i class="fas fa-edit text-info"></i></a>
                <a href="#"><i class="fas fa-trash-alt text-danger"></i></a>
            </td>
        </tr>
    </tbody>
</table>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Médico</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Nome do Médico" name="nome">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Especialidade</label>
                                <select class="form-control" name="especialidade">
                                    <option>SELECIONE</option>
                                    <option>Ortopedista</option>
                                    <option>Ginecologista</option>
                                    <option>Pediatra</option>
                                    <option>Clínico Geral</option>
                                    <option>Oftalmologista</option>
                                    <option>Otorrinolaringologia</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CRM do Médico</label>
                                <input type="email" class="form-control" id="crm" placeholder="Insira o CRM" name="crm">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CPF do Médico</label>
                                <input type="text" class="form-control" id="cpf" placeholder="Insira o CPF" name="cpf">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Telefone do Médico</label>
                                <input type="text" class="form-control" id="tel" placeholder="Insira o Número de telefone" name="tel">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Endereço de email</label>
                                <input type="email" class="form-control" placeholder="nome@exemplo.com" name="email">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form action="POST">
                    <button type="submit" name="SalvarCadMedico" class="btn btn-primary">Salvar</button>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="../js/mascaras.js"></script>