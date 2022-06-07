//*************************************** CURRENCY FORMATTER ********************************************************//
let currency = Intl.NumberFormat("en-US");

//currency formatter
$("#ef_AnalystPdf").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});

$("#ef_LeadconsultantHf").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});
$("#ef_LeadFaciPdf").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});
$("#ef_CoFaciPdf").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});
$("#ef_ActionLearnPdf").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});
$("#ef_MarshalPdf").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});
$("#ef_DocumentorPdf").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});
//default value of input types
document.getElementById("ef_AnalystPdf").defaultValue = currency.format(40000);
document.getElementById("ef_LeadconsultantHf").defaultValue = currency.format(13600);
document.getElementById("ef_LeadFaciPdf").defaultValue = currency.format(96000);
document.getElementById("ef_CoFaciPdf").defaultValue = currency.format(40000);
document.getElementById("ef_ActionLearnPdf").defaultValue = currency.format(40000);
document.getElementById("ef_MarshalPdf").defaultValue = currency.format(30000);
document.getElementById("ef_DocumentorPdf").defaultValue = currency.format(20000);

//Customized Engagement form of Engagement Fees
$(document).on(
    "change keyup",
    ".f2f-customized-type, .f2f-ga-only-dropdown, #ef_LeadconsultantAtd, #ef_LeadconsultantNoc, #ef_LeadconsultantHf, #ef_LeadconsultantNoh, #ef_LeadconsultantNwh, #ef_AnalystNoc, #ef_AnalystPdf, #ef_AnalystNod, #ef_AnalystAtd, #ef_AnalystNsw",
    function () {
        //customized type
        $(".f2f-customized-type").each(function () {
            var gaPercentage = $(".f2f-customized-type");
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                document.getElementById("f2f-dropdown-ga").style.visibility = "";
            } else {
                document.getElementById("f2f-dropdown-ga").style.visibility =
                    "hidden";
            }
        });

        /********************************************************AUTO SUM***************************************************************************/
        let currency = Intl.NumberFormat("en-US");

        //total package
        sumEf = 0;

        //consulting
        sumLc = 0;
        //Analyst
        sumAnlst = 0;

        //customized type
        var gaPercentage = $(".customized-type");

        /*******************************************************CONSULTING*********************************************************************/
        //Lead consultant
        $("#ef_LeadconsultantHf").each(function () {
            sumLc +=
                $("#ef_LeadconsultantNoc").val() *
                +$(this).val().replace(/,/g, "") *
                $("#ef_LeadconsultantNoh").val() +
                $("#ef_LeadconsultantAtd").val() *
                    ($("#ef_LeadconsultantNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2) +
                $("#ef_LeadconsultantNwh").val() *
                    ($("#ef_LeadconsultantNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2) ;
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumLc +=
                    sumLc *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEf += +sumLc;
        });

        $("#lead-total").html(currency.format(Math.ceil(sumLc)));
        $("#subtotal-consulting").html(
            currency.format(Math.ceil(sumLc + sumAnlst))
        );
        // Analyst
        $("#ef_AnalystPdf").each(function () {
            sumAnlst +=
                $("#ef_AnalystNoc").val() *
                +$(this).val().replace(/,/g, "") *
                $("#ef_AnalystNod").val() +
                $("#ef_AnalystAtd").val() *
                ($("#ef_AnalystNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2) +
                $("#ef_AnalystNsw").val() *
                ($("#ef_AnalystNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2);
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumAnlst +=
                    sumAnlst *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEf += +sumAnlst;
        });
        $("#analyst-total").html(currency.format(Math.ceil(sumAnlst)));
        console.log(sumAnlst);
        $("#subtotal-consulting").html(
            currency.format(Math.ceil(sumLc + sumAnlst))
        );

    }
); //end of engagement fees

//cluster reference
document.getElementById("cluster-dropdown").addEventListener("change", cluster);
document.getElementById("input-notListed").disabled = false;
document.getElementById("core-valueInput").disabled = false;
function cluster() {
    var clusterDropdown = document.getElementById("cluster-dropdown");
    var capability = document.getElementById("capability");
    var culture = document.getElementById("culture");

    //Capability
    if (
        clusterDropdown.value == "Above The Line" ||
        clusterDropdown.value == "Anxiety 2 (Capability)" ||
        clusterDropdown.value == "Art of Asking Questions 1 (Capability)" ||
        clusterDropdown.value == "Assertive Communication 1 (Capability)" ||
        clusterDropdown.value ==
        "Building Effective Relationships 1 (Capability)" ||
        clusterDropdown.value == "Business Analytics 1 (Capability)" ||
        clusterDropdown.value == "Business Storytelling" ||
        clusterDropdown.value == "Change Management 2 (Capability)" ||
        clusterDropdown.value == "Choose Flourish 1 (Capability)" ||
        clusterDropdown.value == "Collaborative Leadership 2 (Capability)" ||
        clusterDropdown.value == "Communicate for Success" ||
        clusterDropdown.value == "Communicating Across the Organization" ||
        clusterDropdown.value == "Communication" ||
        clusterDropdown.value == "Competency Building" ||
        clusterDropdown.value == "Conflict Resolution" ||
        clusterDropdown.value == "Create Authentic Connections" ||
        clusterDropdown.value == "Creativity" ||
        clusterDropdown.value == "Emotional Intelligence" ||
        clusterDropdown.value == "Enhance My Credibility" ||
        clusterDropdown.value == "Everyday Innovation" ||
        clusterDropdown.value == "Facilitating Virtual Meetings" ||
        clusterDropdown.value == "Feedback" ||
        clusterDropdown.value == "Growth Mindset" ||
        clusterDropdown.value == "Improv 1 (Capability)" ||
        clusterDropdown.value == "Influencing" ||
        clusterDropdown.value == "Innovation" ||
        clusterDropdown.value == "Knowledge Management" ||
        clusterDropdown.value == "Leading Virtual Teams" ||
        clusterDropdown.value == "Leading with Questions 2 (Capability)" ||
        clusterDropdown.value == "Learning Evolution" ||
        clusterDropdown.value == "Learning How to Set Goals" ||
        clusterDropdown.value == "Mental Health" ||
        clusterDropdown.value == "Mindfulness" ||
        clusterDropdown.value == "Owning My Career" ||
        clusterDropdown.value == "Persuasive Communication" ||
        clusterDropdown.value == "Problem-Solving" ||
        clusterDropdown.value == "Productivity" ||
        clusterDropdown.value == "Project Management" ||
        clusterDropdown.value == "Psychological First Aid" ||
        clusterDropdown.value == "Radical Candor" ||
        clusterDropdown.value == "Stakeholder Management" ||
        clusterDropdown.value == "Strategic Execution" ||
        clusterDropdown.value == "Strategic Agility" ||
        clusterDropdown.value == "Talent Building" ||
        clusterDropdown.value == "Work From Home"
    ) {
        document.getElementById("core-valueInput").value = "Capability";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Culture
    } else if (
        clusterDropdown.value == "Action Learning" ||
        clusterDropdown.value == "Anxiety 1 (Culture)" ||
        clusterDropdown.value == "Business Transformation 1 (Culture)" ||
        clusterDropdown.value == "Diversity & Inclusion" ||
        clusterDropdown.value == "Find Your Why 2 (Culture)" ||
        clusterDropdown.value == "Habit Formation" ||
        clusterDropdown.value ==
        "Organizational Development (OD) 1 (Culture)" ||
        clusterDropdown.value == "Psychological Safety 1 (Culture)" ||
        clusterDropdown.value == "Well-being"
    ) {
        document.getElementById("core-valueInput").value = "Culture";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Leadership
    } else if (
        clusterDropdown.value == "Art of Asking Questions 2 (Leadership)" ||
        clusterDropdown.value == "Assertive Communication 2 (Leadership)" ||
        clusterDropdown.value ==
        "Building Effective Relationships 2 (Leadership)" ||
        clusterDropdown.value == "Business Transformation 2 (Leadership)" ||
        clusterDropdown.value == "Change Management 1 (Leadership)" ||
        clusterDropdown.value == "Choose to Flourish 2 (Leadership)" ||
        clusterDropdown.value == "Coaching" ||
        clusterDropdown.value == "Collaborative Leadership 1 (Leadership)" ||
        clusterDropdown.value == "Find Your Why 1 (Leadership)" ||
        clusterDropdown.value == "Future Proof Leadership" ||
        clusterDropdown.value == "Leadership Brand" ||
        clusterDropdown.value == "Leadership Presence" ||
        clusterDropdown.value == "Leadership Hybrid Teams" ||
        clusterDropdown.value == "Leading with Emotional Intelligence" ||
        clusterDropdown.value == "Leading with Questions 1 (Leadership)" ||
        clusterDropdown.value == "Mentoring" ||
        clusterDropdown.value == "Mission & Vision Review 2 (Leadership)" ||
        clusterDropdown.value == "Psychological Safety 2 (Leadership)" ||
        clusterDropdown.value == "Purpose" ||
        clusterDropdown.value == "Situational Leadership" ||
        clusterDropdown.value == "Strategic Leadership" ||
        clusterDropdown.value == "Strengths"
    ) {
        document.getElementById("core-valueInput").value = "Leadership";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Strategy
    } else if (
        clusterDropdown.value == "Business Analytics 2 (Strategy)" ||
        clusterDropdown.value == "Goal Setting" ||
        clusterDropdown.value == "Mission & Vision Review 1 (Strategy)" ||
        clusterDropdown.value ==
        "Organizational Development (OD) 2 (Capability)" ||
        clusterDropdown.value == "Visioning" ||
        clusterDropdown.value == "World Cafe"
    ) {
        document.getElementById("core-valueInput").value = "Strategy";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Teams
    } else if (
        clusterDropdown.value == "Game Night" ||
        clusterDropdown.value == "Heroes Assemble" ||
        clusterDropdown.value == "Improv 2 (Teams)" ||
        clusterDropdown.value == "Lip Sync Battle" ||
        clusterDropdown.value == "Squid Game" ||
        clusterDropdown.value == "Team Engagement" ||
        clusterDropdown.value == "The Heist" ||
        clusterDropdown.value == "The Lab" ||
        clusterDropdown.value == "Virtual Team Building"
    ) {
        document.getElementById("core-valueInput").value = "Teams";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("input-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Society
    } else if (clusterDropdown.value == "Parenting") {
        document.getElementById("core-valueInput").value = "Society";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Not listed
    } else {
        document.getElementById("core-valueInput").value = "Cluster";
        document.getElementById("input-notListed").disabled = false;
        document.getElementById("div-notListed").style.visibility = "";
        document.getElementById("core-valueInput").disabled = false;
    }
}

//To be announce
document.getElementById("dcbeCheck").addEventListener("click", myFunction);
function myFunction() {
    var checkBox = document.getElementById("dcbeCheck");
    var DatesCoveredByEngagement = document.getElementById("dcbe");
    if (checkBox.checked == false) {
        DatesCoveredByEngagement.style.visibility = "";
    } else {
        DatesCoveredByEngagement.style.visibility = "hidden";
    }
}

//datepicker
$(function () {
    $("#datepicker").datepicker();
    $("#datepicker").on("change", function () {
        $("#datepicker").datepicker("option", "dateFormat", "MM d, yy");
    });
});
