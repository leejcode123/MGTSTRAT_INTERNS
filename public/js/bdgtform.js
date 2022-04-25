/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/bdgtform.js ***!
  \**********************************/
function changePackage() {
  var status = document.getElementById("ef_program");

  if (status.value == "Package, 51-100 pax (P54K, P60K)") {
    document.getElementById("packagePrice3").style.display = "none";
    document.getElementById("packagePrice2").style.display = "none";
    document.getElementById("packagePrice").style.display = "block";
  } else if (status.value == "Package, 101-200 pax (P63K, P70K)") {
    document.getElementById("packagePrice").style.display = "none";
    document.getElementById("packagePrice3").style.display = "none";
    document.getElementById("packagePrice2").style.display = "block";
  } else if (status.value == "Package, 201 pax and up (P72K, P80K)") {
    document.getElementById("packagePrice").style.display = "none";
    document.getElementById("packagePrice2").style.display = "none";
    document.getElementById("packagePrice3").style.display = "block";
  } else {
    document.getElementById("packagePrice").style.display = "none";
    document.getElementById("packagePrice2").style.display = "none";
    document.getElementById("packagePrice3").style.display = "none";
  }
} // calculation of engagement fees


function efs_customFee() {
  var efsCustomFee = document.getElementById('ef_customFee').value;
  var efsProgramCost1 = document.getElementById('ef_ProgramCost1').value;
  var efsProgramCost2 = document.getElementById('ef_ProgramCost2').value;
  var efsProgramCost3 = document.getElementById('ef_ProgramCost3').value; //compute the selected value

  var standardPrice = Number(efsCustomFee) + Number(efsProgramCost1) || Number(efsCustomFee) + Number(efsProgramCost2) || Number(efsCustomFee) + Number(efsProgramCost3); //display the total value

  var total_standard = document.getElementById('ef_TotalStandard');
  total_standard.value = standardPrice;
}
/******/ })()
;