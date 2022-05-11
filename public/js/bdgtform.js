// const { sum } = require("lodash");

/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/bdgtform.js ***!
  \**********************************/

  //Customized Engagement form of Engagement Fees
  $(document).on("change keyup", ".noc-b13, .hf-c13, .noh-d13, .nwh-e13, .noc-b14, .hf-c14, .noh-d14, .nwh-e14 .noc-b18, .hf-c18, .noh-d18, .nwh-e18, .noc-b21, .hf-c21, .noh-d21, .nwh-e21, .noc-b22, .hf-c22, .noh-d22, .nwh-e22, .noc-b23, .hf-c23, .noh-d23, .nwh-e23, .noc-b24, .hf-c24, .noh-d24, .nwh-e24, .noc-b28, .hf-c28, .noh-d28, .nwh-e28",
    function () {
      let currency = Intl.NumberFormat('en-US');
      //total package
      sum = 0;

      //consulting
      sum13 = 0;
      sum14 = 0;

      //design
      sum18 = 0;

      //program
      sum21 = 0;
      sum22 = 0;
      sum23 = 0;
      sum24 = 0;

      //other tools
      sum28 = 0;
/*******************************************************CONSULTING**********************************************************************************************/
        //Lead consultant
        $(".hf-c13").each(function () {
            sum13 += ($(".noc-b13").val() * +$(this).val() * $(".noh-d13").val())
            + ($(".nwh-e13").val() * ($(".noc-b13").val() * +$(this).val() * $(".noh-d13").val() * 0.2));
            sum += +sum13;
        });
        $("#leadTotal").html(currency.format(Math.ceil(sum13)));
        //Analyst
        $(".hf-c14").each(function () {
          sum14 += ($(".noc-b14").val() * +$(this).val().replace(/,/g, '') * $(".noh-d14").val())
          + ($(".nwh-e14").val() * ($(".noc-b14").val() * +$(this).val().replace(/,/g, '') * $(".noh-d14").val() * 0.2));
          sum += +sum14;
        });
        $("#analyst-total").html(currency.format(Math.ceil(sum14)));
        //Subtotal
        $("#subtotal-consulting").html(currency.format(Math.ceil(sum)));

/*******************************************************DESIGN************************************************************************************************/
        $(".hf-c18").each(function () {
          sum18 += ($(".noc-b18").val() * +$(this).val() * $(".noh-d18").val())
          + ($(".nwh-e18").val() * ($(".noc-b18").val() * +$(this).val() * $(".noh-d18").val() * 0.2));
          sum += +sum18;
        });
        $("#subtotal-design").html(currency.format(Math.ceil(sum18)));

/*******************************************************PROGRAM************************************************************************************************/
        //Lead Facilitator
        $(".hf-c21").each(function () {
          sum21 += ($(".noc-b21").val() * +$(this).val() * $(".noh-d21").val())
          + ($(".nwh-e21").val() * ($(".noc-b21").val() * +$(this).val() * $(".noh-d21").val() * 0.2));
          sum += +sum21;
        });
        $("#subtotal-lead").html(currency.format(Math.ceil(sum21)));
        
        //Co-Facilitator
        $(".hf-c22").each(function () {
            sum22 += ($(".noc-b22").val() * +$(this).val().replace(/,/g, '') * $(".noh-d22").val())
            + ($(".nwh-e22").val() * ($(".noc-b22").val() * +$(this).val().replace(/,/g, '') * $(".noh-d22").val() * 0.2));
            sum += +sum22;
        });
        $("#subtotal-coFacilitator").html(currency.format(Math.ceil(sum22)));

        //Moderator
        $(".hf-c23").each(function () {
            sum23 += ($(".noc-b23").val() * +$(this).val().replace(/,/g, '') * $(".noh-d23").val())
            + ($(".nwh-e23").val() * ($(".noc-b23").val() * +$(this).val().replace(/,/g, '') * $(".noh-d23").val() * 0.2));
            sum += +sum23;
        });
        $("#subtotal-moderator").html(currency.format(Math.ceil(sum23)));

        //Producer
        $(".hf-c24").each(function () {
            sum24 += ($(".noc-b24").val() * +$(this).val().replace(/,/g, '') * $(".noh-d24").val())
            + ($(".nwh-e24").val() * ($(".noc-b24").val() * +$(this).val().replace(/,/g, '') * $(".noh-d24").val() * 0.2));
            sum += +sum24;
        });
        $("#subtotal-producer").html(currency.format(Math.ceil(sum24)));
        $("#program-subtotal").html(currency.format(Math.ceil(sum21 + sum22 + sum23 + sum24)));

/*******************************************************DOCUMENTOR************************************************************************************************/
        $(".hf-c28").each(function () {
            sum28 += ($(".noc-b28").val() * +$(this).val().replace(/,/g, '') * $(".noh-d28").val())
            + ($(".nwh-e28").val() * ($(".noc-b28").val() * +$(this).val().replace(/,/g, '') * $(".noh-d28").val() * 0.2));
            sum += +sum28;
        });
        $("#subtotal-documentor").html(currency.format(Math.ceil(sum28)));

/*******************************************************TOTAL PACKAGE************************************************************************************************/
        $("#total-package").html(currency.format(Math.ceil(sum)));
    });

  //design
  // $(document).on("change keyup", ".noc-b18, .hf-c18, .noh-d18, .nwh-e18",
  //   function () {
  //     let currency = Intl.NumberFormat('en-US');
  //     sum18 = 0;

  //       //Designer
  //       $(".hf-c18").each(function () {
  //           sum18 += ($(".noc-b18").val() * +$(this).val() * $(".noh-d18").val())
  //           + ($(".nwh-e18").val() * ($(".noc-b18").val() * +$(this).val() * $(".noh-d18").val() * 0.2));
  //           sum += +sum18;
  //       });
  //       subtotal = sum18;
  //       $("#subtotal-design").html(currency.format(Math.ceil(subtotal)));
  //       // $("#total-package").html(currency.format(Math.ceil(sum)));

  //   });
    

  // //Program
  // $(document).on("change keyup", ".noc-b21, .hf-c21, .noh-d21, .nwh-e21, .noc-b22, .hf-c22, .noh-d22, .nwh-e22, .noc-b23, .hf-c23, .noh-d23, .nwh-e23, .noc-b24, .hf-c24, .noh-d24, .nwh-e24, .noc-b28, .hf-c28, .noh-d28, .nwh-e28",
  //   function () {
  //     let currency = Intl.NumberFormat('en-US');
  //     sum21 = 0;
  //     sum22 = 0;
  //     sum23 = 0;
  //     sum24 = 0;
  //     sum28 = 0;

  //       //Lead Facilitator
  //       $(".hf-c21").each(function () {
  //           sum21 += ($(".noc-b21").val() * +$(this).val() * $(".noh-d21").val())
  //           + ($(".nwh-e21").val() * ($(".noc-b21").val() * +$(this).val() * $(".noh-d21").val() * 0.2));
  //       });
  //       $("#subtotal-lead").html(currency.format(Math.ceil(sum21)));

  //       //Co-Facilitator
  //       $(".hf-c22").each(function () {
  //           sum22 += ($(".noc-b22").val() * +$(this).val().replace(/,/g, '') * $(".noh-d22").val())
  //           + ($(".nwh-e22").val() * ($(".noc-b22").val() * +$(this).val().replace(/,/g, '') * $(".noh-d22").val() * 0.2));
  //       });
  //       $("#subtotal-coFacilitator").html(currency.format(Math.ceil(sum22)));

  //       //Moderator
  //       $(".hf-c23").each(function () {
  //           sum23 += ($(".noc-b23").val() * +$(this).val().replace(/,/g, '') * $(".noh-d23").val())
  //           + ($(".nwh-e23").val() * ($(".noc-b23").val() * +$(this).val().replace(/,/g, '') * $(".noh-d23").val() * 0.2));
  //       });
  //       $("#subtotal-moderator").html(currency.format(Math.ceil(sum23)));

  //       //Producer
  //       $(".hf-c24").each(function () {
  //           sum24 += ($(".noc-b24").val() * +$(this).val().replace(/,/g, '') * $(".noh-d24").val())
  //           + ($(".nwh-e24").val() * ($(".noc-b24").val() * +$(this).val().replace(/,/g, '') * $(".noh-d24").val() * 0.2));
  //       });
  //       $("#subtotal-producer").html(currency.format(Math.ceil(sum24)));
  //       $("#program-subtotal").html(currency.format(Math.ceil(sum21 + sum22 + sum23 + sum24)));

  //       //Documentor
  //       $(".hf-c28").each(function () {
  //           sum28 += ($(".noc-b28").val() * +$(this).val().replace(/,/g, '') * $(".noh-d28").val())
  //           + ($(".nwh-e28").val() * ($(".noc-b28").val() * +$(this).val().replace(/,/g, '') * $(".noh-d28").val() * 0.2));
  //       });
  //       $("#subtotal-documentor").html(currency.format(Math.ceil(sum28)));

  //   });


    

    //*************************************** CURRENCY FORMATTER ********************************************************//

    //currency formatter
    let currency = Intl.NumberFormat('en-US');
    document.getElementById("hf-c14").defaultValue = currency.format(Math.ceil(5000));
    document.getElementById("hf-c22").defaultValue = currency.format(Math.ceil(5000));
    document.getElementById("hf-c23").defaultValue = currency.format(Math.ceil(3500));
    document.getElementById("hf-c24").defaultValue = currency.format(Math.ceil(2500));
    document.getElementById("hf-c28").defaultValue = currency.format(Math.ceil(2500));

    //currency formatter
    $(".hf-c14").on({
      keyup: function() {
          let input_val = $(this).val();
          input_val = numberToCurrency(input_val);
          $(this).val(input_val);
      },
      blur: function() { 
          let input_val = $(this).val();
          input_val = numberToCurrency(input_val, true, true);
          $(this).val(input_val);
      }
  });

    $(".hf-c22").on({
      keyup: function() {
          let input_val = $(this).val();
          input_val = numberToCurrency(input_val);
          $(this).val(input_val);
      },
      blur: function() { 
          let input_val = $(this).val();
          input_val = numberToCurrency(input_val, true, true);
          $(this).val(input_val);
      }
  });

    $(".hf-c23").on({
      keyup: function() {
          let input_val = $(this).val();
          input_val = numberToCurrency(input_val);
          $(this).val(input_val);
      },
      blur: function() { 
          let input_val = $(this).val();
          input_val = numberToCurrency(input_val, true, true);
          $(this).val(input_val);
      }
  });

    $(".hf-c24").on({
      keyup: function() {
          let input_val = $(this).val();
          input_val = numberToCurrency(input_val);
          $(this).val(input_val);
      },
      blur: function() { 
          let input_val = $(this).val();
          input_val = numberToCurrency(input_val, true, true);
          $(this).val(input_val);
      }
  });

    $(".hf-c28").on({
      keyup: function() {
          let input_val = $(this).val();
          input_val = numberToCurrency(input_val);
          $(this).val(input_val);
      },
      blur: function() { 
          let input_val = $(this).val();
          input_val = numberToCurrency(input_val, true, true);
          $(this).val(input_val);
      }
  });
  //end currency formatter


  //cluster reference
  document.getElementById("cluster-dropdown").addEventListener("change", cluster);
  document.getElementById("input-notListed").disabled = false;
  document.getElementById("core-valueInput").disabled = false;
  function cluster() {
    var clusterDropdown = document.getElementById("cluster-dropdown");
    var capability = document.getElementById("capability");
    var culture = document.getElementById("culture");
    if (clusterDropdown.value == "Above The Line") {
        document.getElementById("core-valueInput").value = "Capability";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("core-valueInput").disabled = true;
        console.log(capability.classList.contains('capability'));
    } else if (clusterDropdown.value == "Action Learning") {
        document.getElementById("core-valueInput").value = "Culture";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("core-valueInput").disabled = true;
        console.log(culture.classList.contains('culture'));
    } else if (clusterDropdown.value == "Anxiety 1 (Culture)") {
        document.getElementById("core-valueInput").value = "Culture";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("core-valueInput").disabled = true;
        console.log(culture.classList.contains('culture'));
    } else{
        document.getElementById("core-valueInput").value = "";
        document.getElementById("input-notListed").disabled = false;
        document.getElementById("core-valueInput").disabled = false;
    }
  }




  


/******/ })()
;