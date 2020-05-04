var baseUrl = OC.generateUrl('/apps/notestutorial');
var note = {
    title: 'New note',
    content: 'This is the note text'
};
var id = 1;
$.ajax({
    url: baseUrl + '/notes/' + id,
    type: 'PUT',
    contentType: 'application/json',
    data: JSON.stringify(note)
}).done(function (response) {
    // handle success
}).fail(function (response, code) {
    // handle failure
});
