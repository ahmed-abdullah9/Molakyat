$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use $ here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    // modal.find('.modal-title').text('New message to ' + recipient)
    // modal.find('.modal-body input').val(recipient)
})


$(document).ready(function(){
    $('#ajaxSubmit').click(function(e){
       e.preventDefault();
       $.ajax({
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },

        url: "../user/addInvestmentsRequests",
        data: {
            'company_id': $('input#company_id').val(),
            "description": $('#description').val(),
        },
        success: function(data) {
            // empty
            $('.alert-danger').hide();
            $('#exampleModal').hide();
            $('#exampleModal').modal('hide');
      
        },
    });
})
});

function showTabs(element)  {

        document.getElementById('quarter').style.display = 'none';
        document.getElementById('year').style.display = 'none';    
        document.getElementById(element).style.display = 'block';
}