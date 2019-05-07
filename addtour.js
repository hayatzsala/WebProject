/*wfunction myFunction() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(0);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);
  cell1.innerHTML = "NEW CELL1";
  cell2.innerHTML = "NEW CELL2";
  cell3.innerHTML = "NEW CELL1";
  cell4.innerHTML = "NEW CELL2";
  cell5.innerHTML = "NEW CELL1";
  cell6.innerHTML = "NEW CELL2";
  cell7.innerHTML = "NEW CELL1";
  cell8.innerHTML = "NEW CELL2";
}
*/
$(document).ready(function() {
  var i = 1;
  $("#add_row").click(function() {
    $("#addr" + (i - 1))
      .find("input")
      .attr("disabled", true);
    $("#addr" + i).html(
      "<td>" +
        (i + 1) +
        "</td><td><input type='text' name='uid" +
        i +
        "'  placeholder='User ID' class='form-control input-md'/></td><td><input type='text' name='uname" +
        i +
        "' placeholder='Name' class='form-control input-md'/></td><td><input type='text' name='nic" +
        i +
        "' placeholder='NIC' class='form-control input-md'/></td><td><input type='text' name='amount" +
        i +
        "' placeholder='Amount' class='form-control input-md'/></td><td><input type='date' name='dt" +
        i +
        "' placeholder='Date' class='form-control input-md'/></td>"
    );

    $("#tab_logic").append('<tr id="addr' + (i + 1) + '"></tr>');
    i++;
  });
});
