// const { sum } = require("lodash");

/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/bdgtform.js ***!
  \**********************************/

  //Customized Engagement form of Engagement Fees
  $(document).on("change keyup", ".noc-b13, .hf-c13, .noh-d13, .nwh-e13, .noc-b14, .hf-c14, .noh-d14, .nwh-e14 .noc-b18, .hf-c18, .noh-d18, .nwh-e18, .noc-b21, .hf-c21, .noh-d21, .nwh-e21, .noc-b22, .hf-c22, .noh-d22, .nwh-e22, .noc-b23, .hf-c23, .noh-d23, .nwh-e23, .noc-b24, .hf-c24, .noh-d24, .nwh-e24, .noc-b28, .hf-c28, .noh-d28, .nwh-e28, .tf-f34",
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

      //discounts if given
      sum32 = 0;
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

        /*******************************************************TOTAL STANDARD FEES************************************************************************************************/
        $("#total-standard").html(currency.format(Math.ceil(sum)));

        /*******************************************************DISCOUNTS************************************************************************************************/
        $(".tf-f34").each(function () {
          sum32 += (1 - (+$(this).val() / sum)) * 100;
          totalPackage = $("#input-totalPackage").val();

          if (sum32 > 100) {
            sumDiscount = sum32 - 100;
            $("#input-discount").val('-'+sumDiscount+'%');
          }else if(sum32 == isNaN(sum32) || isNaN(sum32) != 0) {
            $("#input-discount").val(100+'%');
          }else {
            sumDiscount = Math.round(sum32);
            $("#input-discount").val(sumDiscount+'%');
          }
        });

        }); //end of engagement fees

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
    
    //Capability
    if (clusterDropdown.value == "Above The Line" || clusterDropdown.value == "Anxiety 2 (Capability)"
    || clusterDropdown.value == "Art of Asking Questions 1 (Capability)" || clusterDropdown.value == "Assertive Communication 1 (Capability)"
    || clusterDropdown.value == "Building Effective Relationships 1 (Capability)" || clusterDropdown.value == "Business Analytics 1 (Capability)"
    || clusterDropdown.value == "Business Storytelling" || clusterDropdown.value == "Change Management 2 (Capability)"
    || clusterDropdown.value == "Choose Flourish 1 (Capability)" || clusterDropdown.value == "Collaborative Leadership 2 (Capability)"
    || clusterDropdown.value == "Communicate for Success" || clusterDropdown.value == "Communicating Across the Organization"
    || clusterDropdown.value == "Communication" || clusterDropdown.value == "Competency Building" || clusterDropdown.value == "Conflict Resolution"
    || clusterDropdown.value == "Create Authentic Connections" || clusterDropdown.value == "Creativity" || clusterDropdown.value == "Emotional Intelligence"
    || clusterDropdown.value == "Enhance My Credibility" || clusterDropdown.value == "Everyday Innovation" || clusterDropdown.value == "Facilitating Virtual Meetings"
    || clusterDropdown.value == "Feedback" || clusterDropdown.value == "Growth Mindset" || clusterDropdown.value == "Improv 1 (Capability)"
    || clusterDropdown.value == "Influencing" || clusterDropdown.value == "Innovation" || clusterDropdown.value == "Knowledge Management"
    || clusterDropdown.value == "Leading Virtual Teams" || clusterDropdown.value == "Leading with Questions 2 (Capability)"
    || clusterDropdown.value == "Learning Evolution" || clusterDropdown.value == "Learning How to Set Goals" || clusterDropdown.value == "Mental Health"
    || clusterDropdown.value == "Mindfulness" || clusterDropdown.value == "Owning My Career" || clusterDropdown.value == "Persuasive Communication"
    || clusterDropdown.value == "Problem-Solving" || clusterDropdown.value == "Productivity" || clusterDropdown.value == "Project Management"
    || clusterDropdown.value == "Psychological First Aid" || clusterDropdown.value == "Radical Candor" || clusterDropdown.value == "Stakeholder Management"
    || clusterDropdown.value == "Strategic Execution" || clusterDropdown.value == "Strategic Agility" || clusterDropdown.value == "Talent Building"
    || clusterDropdown.value == "Work From Home") {  

        document.getElementById("core-valueInput").value = "Capability";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("core-valueInput").disabled = true;

      //Culture
    } else if (clusterDropdown.value == "Action Learning" || clusterDropdown.value == "Anxiety 1 (Culture)"
    || clusterDropdown.value == "Business Transformation 1 (Culture)" || clusterDropdown.value == "Diversity & Inclusion"
    || clusterDropdown.value == "Find Your Why 2 (Culture)" || clusterDropdown.value == "Habit Formation"
    || clusterDropdown.value == "Organizational Development (OD) 1 (Culture)" || clusterDropdown.value == "Psychological Safety 1 (Culture)"
    || clusterDropdown.value == "Well-being") {

        document.getElementById("core-valueInput").value = "Culture";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("core-valueInput").disabled = true;

      //Leadership
    } else if (clusterDropdown.value == "Art of Asking Questions 2 (Leadership)" || clusterDropdown.value == "Assertive Communication 2 (Leadership)"
    || clusterDropdown.value == "Building Effective Relationships 2 (Leadership)" || clusterDropdown.value == "Business Transformation 2 (Leadership)"
    || clusterDropdown.value == "Change Management 1 (Leadership)" || clusterDropdown.value == "Choose to Flourish 2 (Leadership)"
    || clusterDropdown.value == "Coaching" || clusterDropdown.value == "Collaborative Leadership 1 (Leadership)"
    || clusterDropdown.value == "Find Your Why 1 (Leadership)" || clusterDropdown.value == "Future Proof Leadership"
    || clusterDropdown.value == "Leadership Brand" || clusterDropdown.value == "Leadership Presence" || clusterDropdown.value == "Leadership Hybrid Teams"
    || clusterDropdown.value == "Leading with Emotional Intelligence" || clusterDropdown.value == "Leading with Questions 1 (Leadership)"
    || clusterDropdown.value == "Mentoring" || clusterDropdown.value == "Mission & Vision Review 2 (Leadership)"
    || clusterDropdown.value == "Psychological Safety 2 (Leadership)" || clusterDropdown.value == "Purpose" || clusterDropdown.value == "Situational Leadership"
    || clusterDropdown.value == "Strategic Leadership" || clusterDropdown.value == "Strengths") { 

      document.getElementById("core-valueInput").value = "Leadership";
      document.getElementById("input-notListed").disabled = true;
      document.getElementById("core-valueInput").disabled = true;

      //Strategy
    } else if (clusterDropdown.value == "Business Analytics 2 (Strategy)" || clusterDropdown.value == "Goal Setting"
    || clusterDropdown.value == "Mission & Vision Review 1 (Strategy)" || clusterDropdown.value == "Organizational Development (OD) 2 (Capability)"
    || clusterDropdown.value == "Visioning" || clusterDropdown.value == "World Cafe") {

      document.getElementById("core-valueInput").value = "Strategy";
      document.getElementById("input-notListed").disabled = true;
      document.getElementById("core-valueInput").disabled = true;

      //Teams
    } else if (clusterDropdown.value == "Game Night" || clusterDropdown.value == "Heroes Assemble" || clusterDropdown.value == "Improv 2 (Teams)"
    || clusterDropdown.value == "Lip Sync Battle" || clusterDropdown.value == "Squid Game" || clusterDropdown.value == "Team Engagement"
    || clusterDropdown.value == "The Heist" || clusterDropdown.value == "The Lab" || clusterDropdown.value == "Virtual Team Building") {

      document.getElementById("core-valueInput").value = "Teams";
      document.getElementById("input-notListed").disabled = true;
      document.getElementById("core-valueInput").disabled = true;

      //Society
    } else if(clusterDropdown.value == "Parenting") {

      document.getElementById("core-valueInput").value = "Society";
      document.getElementById("input-notListed").disabled = true;
      document.getElementById("core-valueInput").disabled = true;

      //Not listed
    } else{
        document.getElementById("core-valueInput").value = "";
        document.getElementById("input-notListed").disabled = false;
        document.getElementById("core-valueInput").disabled = false;
    }
  }




  


/******/ })()
;