var qnt_result_pg = 30; //amount of record per page
var page = 1; // home page

$(document).ready(function () {
  listLinks(page, qnt_result_pg); // Call function to list records
});

function listLinks(page, qnt_result_pg) {

  var data = {
    page: page,
    qnt_result_pg: qnt_result_pg
  }

  $.post('./src/link/listlinks.php', data , function(retur) {
    $("#listlinks").html(retur);
  });

}