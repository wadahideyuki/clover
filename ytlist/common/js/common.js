$(document).ready(function () {
$.ajax({
    url: 'https://note.mu/api/v1/notes?urlname=hayashikejinan',
    type: 'get',
    dataType: 'json',

    success: function(result, textStatus, xhr) {
        call_back_function.call(self, result, textStatus, xhr);
    },
    error: function(xhr, textStatus, error) {
        call_back_error_function.call(self, xhr, textStatus, error);
    }
});

}); //DocRdyFncEnd
