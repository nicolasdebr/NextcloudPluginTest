var baseUrl = OC.generateUrl('/apps/grafanadelamor');
var file = {
    title: 'New File',
    content: 'Description of the file'
};

$.ajax({
    url: baseUrl + '/files',
    type: 'POST',
    contentType: 'application/json',
    data: JSON.stringify(file)
}).done(function (response) {
    alert(response);
}).fail(function (response, code) {
    alert(code + response);
});
