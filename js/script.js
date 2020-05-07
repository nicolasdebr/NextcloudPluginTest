var baseUrl = OC.generateUrl('/apps/grafanadelamor');

var file = {
    title: 'New File',
    content: 'Document numero 7'
};
var fileId = 11;
$.get(baseUrl + '/files', function(response){
  alert(JSON.stringify(response));
  console.log(response);
//$.ajax({
  //  url: baseUrl + '/files/'+fileId,
    //type: 'GET',
    //contentType: 'application/json',
    //data: JSON.stringify(file)
//}).done(function (response) {
  //  alert(JSON.stringify(response));

//});


//}).fail(function (response, code) {
  //  alert(code + response);
});
