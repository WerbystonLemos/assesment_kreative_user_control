function editaUsuario(id)
{
    showLoading()
    $.ajax({
        url: '/user/' + id,
        type: 'GET',
        success: function(response) {
            $("#inputName_modal_edit").val(response.name)
            $("#inputStatus_modal_edit").val(response.status)
            $("#home_modal_edit").modal('show')
            hideLoading()
        },
        error: function(xhr) {
            console.error("Erro ao buscar usuário:", xhr.responseJSON);
        }
    });

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
    let idUserToDelete = $("#input_id_user_modal_delete").val()
    alert(`Deletando user de id: ${idUserToDelete}`)
    // $.ajax({
    //     url: `user/${id}`,
    //     type: 'DELETE',
    //     success: ()
    // })
}

function showFormAddUser()
{
    $("#home_modal_add").modal('show')
}

function addUser()
{
    alert("A salvar")
}
