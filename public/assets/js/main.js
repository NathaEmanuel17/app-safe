$(document).ready(function() {
    $('#buttonView').click(function(e) {
        e.preventDefault()
        window.location.href = $(this).attr('href') + '?' + $('#create_user').serialize()
    })
})


$('#editUser').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)

    var recipientId = button.data('id')
    var recipientDate_expiration = button.data('date_expiration')
    var recipientTelephone = button.data('telephone')
    var modal = $(this)

    modal.find('#telephone').val(recipientTelephone)
    modal.find('#date_expiration').val(recipientDate_expiration)
    modal.find('#id').val(recipientId)

})
$('#deleteUser').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)

    var recipientId = button.data('id')
    console.log(recipientId)
    var modal = $(this)

    modal.find('#id_user').val(recipientId)
        //modal.find('#date_expiration').val(recipientName)

})