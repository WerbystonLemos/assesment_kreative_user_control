<!-- Modal -->
<div id="home_modal_edit" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('home_modal_edit')">
          <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">

        <form>
            <div class="form-group">
                <label for="inputName_modal_edit">Nome</label>
                <input type="email" class="form-control" id="inputName_modal_edit" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="inputStatus_modal_edit">Status</label>
                <input type="password" class="form-control" id="inputStatus_modal_edit" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal('home_modal_edit')">Close</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>
