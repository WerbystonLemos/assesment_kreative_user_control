<!-- Modal -->
<div id="home_modal_delete" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
            <i class="bi bi-exclamation-triangle-fill text-warning"></i>
            Deletar usuário
        </h5>
        <button type="button" class="close btn btn-sm btn-link" data-dismiss="modal" aria-label="Close" onclick="closeModal('home_modal_delete')">
            <span aria-hidden="true" class="home_modal_btn_close"><i class="bi bi-x-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <input id="input_id_user_modal_delete" type="hidden" val="">
        Tem certeza que desejas <b class="text-danger">DELETAR</b> o usuário?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="deleteUser()">Sim</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeModal('home_modal_delete')">Não</button>
      </div>
    </div>
  </div>
</div>
