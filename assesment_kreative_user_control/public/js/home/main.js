function showEditaUsuario(id)
{
    showLoading()
    $.ajax({
        url: '/user/' + id,
        type: 'GET',
        success: function(response) {
            $("#inputId_modal_edit").val(id)
            $("#inputName_modal_edit").val(response.name)
            let status = (response.status == "ativado") ? true : false
            $("#inputStatus_modal_edit").prop('checked', status)
            $("#home_modal_edit").modal('show')
            hideLoading()
        },
        error: function(xhr) {
            console.error("Erro ao buscar usuário:", xhr.responseJSON);
        }
    });

}

function editUser()
{
    showLoading()
    let name    = $('#inputName_modal_edit').val()
    let status  = $('#inputStatus_modal_edit').is(":checked")
    let id      = $("#inputId_modal_edit").val()

    $.ajax({
        url: `/user/${id}`,
        data: {
            'name': name,
            'status': status
        },
        type: 'PATCH',
        headers: {
            'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
        },
        success: res => {
            Swal.fire({
                title: "Sucesso",
                text: "Editado  com sucesso!",
                showCancelButton: false,
                confirmButtonColor: '#168751',
                confirmButtonText: 'OK'
            })
        },
        error: (err) => {
            Swal.fire({
                title: "Erro",
                text: "Erro ao editar. Tente mais tarde ou revise os campos e tente novamente.",
                icon: "Warning",
                showCancelButton: false,
                confirmButtonColor: '#168751',
                confirmButtonText: 'OK'
            })
        },
        complete: () => {
            hideLoading()
            closeModal('home_modal_edit')
            location.reload()
        }
    })
}

function closeModal(tagId)
{
    $(`#${tagId}`).modal('hide')
}

function showDeleteUsuario(idUser)
{
    $("#home_modal_delete").modal('show')
    $("#input_id_user_modal_delete").val(idUser)
}

function deleteUser()
{
    showLoading("Deletando. Aguarde!")
    let idUserToDelete = $("#input_id_user_modal_delete").val()
    $.ajax({
        url: `user/${idUserToDelete}`,
        type: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: res => {
            let title = ''
            let msg = ''
            let icon = ''

            if(res)
            {
                title = "Sucesso"
                msg = "Deletado com sucesso!"
                icon = 'Success'
            }
            else
                {
                title = "Erro"
                msg = "Erro ao Deletar!"
                icon = 'warning'

            }

            Swal.fire({
                title: title,
                text: msg,
                icon: icon,
                showCancelButton: false,
                confirmButtonColor: '#168751',
                confirmButtonText: 'OK'
            })
        },
        error: err => {
            Swal.fire({
                title: 'Erro',
                text: "Erro ao deletar usuário.",
                icon: "Warning",
                showCancelButton: false,
                confirmButtonColor: '#e63047',
                confirmButtonText: 'OK'
            })
            console.log(`Erro: ${err}`)
        },
        complete: () => {
            closeModal('home_modal_delete')
            hideLoading()
            location.reload()
        }
    })
}

function showFormAddUser()
{
    $("#home_modal_add").modal('show')
}

function addUser()
{
    alert("A salvar")
}
