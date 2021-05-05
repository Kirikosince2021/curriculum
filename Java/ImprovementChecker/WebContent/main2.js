var today = new Date();
var YYYY = today.getFullYear();
var MM = today.getMonth() + 1;
var DD = today.getDate();
document.getElementById("date").value = YYYY + "-" + MM + "-" + DD;