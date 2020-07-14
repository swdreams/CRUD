function btnClear() {
  document.getElementById('form').reset();
}

function successMsg() {
  alert('Information has been added to the database!');
}

/*
function onFormSubmit() {
  var userData = addUser();
  insertRecord(userData);
}

function addUser() {
  var userData = {};
  userData['fName'] = document.getElementById('first_name').value;
  userData['lName'] = document.getElementById('last_name').value;
  userData['gender'] = document.getElementById('gender1').value;
  userData['address'] = document.getElementById('address').value;
  return userData;
}

function insertRecord(data) {
  var table = document
    .getElementById('userList')
    .getElementsByTagName('tbody')[0];
  var newRow = table.insertRow(table.length);
  cell1 = newRow.insertCell(0);
  cell1.innerHTML = data.fName;
  cell2 = newRow.insertCell(1);
  cell2.innerHTML = data.lName;
  cell3 = newRow.insertCell(2);
  cell3.innerHTML = data.gender;
  cell4 = newRow.insertCell(3);
  cell4.innerHTML = data.address;
  cell5 = newRow.insertCell(4);
  cell5.innerHTML = `<input type='button' class='btn btn-primary' value='Edit'>
                     <input type='button' class='btn btn-danger' value='Delete'>`;
}
*/
