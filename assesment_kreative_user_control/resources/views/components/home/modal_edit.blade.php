<!-- Modal -->
<div id="home_modal_edit" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Editar usuário</h5>
            <button type="button" class="close btn btn-sm btn-link" data-dismiss="modal" aria-label="Close" onclick="closeModal('home_modal_edit')">
                <span aria-hidden="true" class="home_modal_btn_close"><i class="bi bi-x-lg"></i></span>
            </button>
        </div>

        <div class="modal-body">

            <form>
                <input id="inputId_modal_edit" type="hidden" value="">
                <div class="form-group">
                    <label for="inputName_modal_edit">Nome</label>
                    <input type="text" class="form-control" id="inputName_modal_edit" aria-describedby="emailHelp" placeholder="Digite nome" @required(true)>
                    <small id="erro_name" class="alert_error"></small>
                </div>
                <div class="form-check">
                    <label for="inputStatus_modal_edit" class="form-check-label">Ativo</label>
                    <input type="checkbox" class="form-check-input" id="inputStatus_modal_edit">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-success" onclick="editUser()">Salvar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeModal('home_modal_edit')">Cancelar</button>
                </div>
            </form>

      </div>
    </div>
  </div>
</div>
