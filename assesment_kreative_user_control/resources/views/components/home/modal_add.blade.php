<div id="home_modal_add" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="exampleModalCenterTitle">

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Adicionar usuário
                </h5>
                <button type="button" class="close btn btn-sm btn-link" data-dismiss="modal" aria-label="Close" onclick="closeModal('home_modal_add')">
                    <span aria-hidden="true" class="home_modal_btn_close"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <div class="modal-body">

                <form>
                    <div>
                        <label for="input_form_add_user_nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="input_form_add_user_nome">
                    </div>
                    <div>
                        <label for="input_form_add_user_email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="input_form_add_user_email">
                    </div>
                    <div>
                        <label for="input_form_add_user_Password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="input_form_add_user_Password">
                    </div>
                    <div class=" form-check">
                        <input type="checkbox" class="form-check-input" id="input_form_add_user_status">
                        <label class="form-check-label" for="exampleCheck1">Ativado</label>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" onclick="addUser()">Salvar</button>
                        <button type="button" class="btn btn-primary" onclick="closeModal('home_modal_add')">Cancelar</button>
                    </div>
                </form>

            </div>
        </div>
  </div>

</div>
