function editaUsuario(id)
{
    $.ajax({
        url: '/user/' + id,
        type: 'GET',
        success: function(response) {
            console.log("Usuário:", response);
            $("#inputName_modal_edit").val(response.name)
            $("#inputStatus_modal_edit").val(response.status)
            $("#home_modal_edit").modal('show')
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
