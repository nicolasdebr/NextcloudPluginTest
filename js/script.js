var baseUrl = OC.generateUrl('/apps/grafanadelamor');
var file = {
    title: 'New File',
    content: 'This is the note text'
};

$.ajax({
    url: baseUrl + '/files/' + id,
    type: 'POST',
    contentType: 'application/json',
    data: JSON.stringify(file)
}).done(function (response) {
    alert(response);
}).fail(function (response, code) {
    alert(code + response);
});
