//*************************************** CURRENCY FORMATTER ********************************************************//
let currency = Intl.NumberFormat("en-US");
document.getElementById("hf-c14").defaultValue = currency.format(
    Math.ceil(5000)
);
document.getElementById("hf-c22").defaultValue = currency.format(
    Math.ceil(5000)
);
document.getElementById("hf-c23").defaultValue = currency.format(
    Math.ceil(3500)
);
document.getElementById("hf-c24").defaultValue = currency.format(
    Math.ceil(2500)
);
document.getElementById("hf-c28").defaultValue = currency.format(
    Math.ceil(2500)
);
document.getElementById("ec_AnalystHf").defaultValue = currency.format(
    Math.ceil(1700)
);
document.getElementById("ec_LeadfacilitatorHf").defaultValue = currency.format(
    Math.ceil(3000)
);
document.getElementById("ec_LeadconsultantHf").defaultValue = currency.format(
    Math.ceil(0.85 * $("#ec_LeadfacilitatorHf").val().replace(/,/g, ""))
);
document.getElementById("ec_DesignerHf").defaultValue = currency.format(
    Math.ceil(2250)
);
document.getElementById("ec_CofacilitatorHf").defaultValue = currency.format(
    Math.ceil(1800)
);
document.getElementById("ec_ProducerHf").defaultValue = currency.format(
    Math.ceil(550)
);
document.getElementById("ec_DocumentorHf").defaultValue = currency.format(
    Math.ceil(700)
);
document.getElementById("ec_ProgramHf").defaultValue = currency.format(
    Math.ceil(1000)
);
document.getElementById("ec_Programexpense").defaultValue = 2+"%";

//percentage string of program expense
// var percentageProgram = document.getElementById('ec_Programexpense');

// percentageProgram.addEventListener('blur', function () { // as soon as the percentageProgram element loses focus, "%" is appended
//   percentageProgram.value += '%';
// });
$("#ec_Programexpense").on('input', function() {
    $(this).val(function(i, v) {
        return v.replace('%','') + '%';  });
    });

//currency formatter
$(".hf-c14").on({
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

$(".hf-c22").on({
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

$(".hf-c23").on({
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

$(".hf-c24").on({
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

$(".hf-c28").on({
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

$(".tf-f34").on({
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

$(".hf-c46").on({
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

//Customized Engagement form of Engagement Fees
$(document).on(
    "change keyup",
    ".customized-type, .ga-only-dropdown, .noc-b13, .hf-c13, .noh-d13, .nwh-e13, .noc-b14, .hf-c14, .noh-d14, .nwh-e14, .noc-b18, .hf-c18, .noh-d18, .nwh-e18, .noc-b21, .hf-c21, .noh-d21, .nwh-e21, .noc-b22, .hf-c22, .noh-d22, .nwh-e22, .noc-b23, .hf-c23, .noh-d23, .nwh-e23, .noc-b24, .hf-c24, .noh-d24, .nwh-e24, .noc-b28, .hf-c28, .noh-d28, .nwh-e28, .tf-f34, #sales, #referral, #engagementManager, #ec_LeadconsultantHf, #ec_AnalystHf, #ec_DesignerHf, #ec_CreatorsNoc, #ec_CreatorsHf, #ec_CreatorsNoh, #ec_LeadfacilitatorHf, #ec_CofacilitatorHf, #ec_ModeratorHf, #ec_ProducerHf, #ec_DocumentorHf, #ec_ProgramNoc, #ec_ProgramHf, #ec_Programexpense, #input-totalPackages, #LessCTO_NOC",
    function () {
        //customized type
        $(".customized-type").each(function () {
            var gaPercentage = $(".customized-type");
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                document.getElementById("dropdown-ga").style.visibility = "";
            } else {
                document.getElementById("dropdown-ga").style.visibility =
                    "hidden";
            }
        });

        /********************************************************AUTO SUM***************************************************************************/
        //currency format
        // let currency = Intl.NumberFormat("en-US", {
        //   style: 'currency',
        //   currency: 'PHP',
        // });
        let currency = Intl.NumberFormat("en-US");

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

        // engagment cost total
        sumEngagementCost = 0;
        sumSales = 0;
        sumReferral = 0;
        sumEngagementManager = 0;
        sumecLeadconsultant = 0;
        sumecAnalyst = 0;
        sumecDesigner = 0;
        sumecCreators = 0;
        sumecLeadfacilitator = 0;
        sumecCofacilitator = 0;
        sumecModerator = 0;
        sumecProducer = 0;
        sumecDocumentor = 0;
        sumecOffprogram = 0;
        sumecProgramexpense = 0;


        //customized type
        var gaPercentage = $(".customized-type");

        /*******************************************************CONSULTING*********************************************************************/
        //Lead consultant
        $(".hf-c13").each(function () {
            sum13 +=
                $(".noc-b13").val() * +$(this).val() * $(".noh-d13").val() +
                $(".nwh-e13").val() *
                    ($(".noc-b13").val() *
                        +$(this).val() *
                        $(".noh-d13").val() *
                        0.2);
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum13 +=
                    sum13 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sum += +sum13;

            $("#ec_LeadconsultantNoc").val($(".noc-b13").val());
            $("#ec_LeadconsultantNoh").val($(".noh-d13").val());
            $("#ec_LeadconsultantNwh").val($(".nwh-e13").val());

            sumecLeadconsultant +=
                $("#ec_LeadconsultantNoc").val() *
                    $("#ec_LeadconsultantHf").val().replace(/,/g, "") *
                    $("#ec_LeadconsultantNoh").val() +
                $("#ec_LeadconsultantNwh").val() *
                    ($("#ec_LeadconsultantNoc").val() *
                        $("#ec_LeadconsultantHf").val().replace(/,/g, "") *
                        $("#ec_LeadconsultantNoh").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecLeadconsultant +=
                    sumecLeadconsultant *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEngagementCost += +sumecLeadconsultant;
        });
        $("#leadTotal").html(currency.format(Math.ceil(sum13)));
        $("#ec_LeadconsultantTotal").html(
            currency.format(Math.ceil(sumecLeadconsultant))
        );

        //Analyst
        $(".hf-c14").each(function () {
            //analyst engagement fees auto sum
            sum14 +=
                $(".noc-b14").val() *
                    +$(this).val().replace(/,/g, "") *
                    $(".noh-d14").val() +
                $(".nwh-e14").val() *
                    ($(".noc-b14").val() *
                        +$(this).val().replace(/,/g, "") *
                        $(".noh-d14").val() *
                        0.2);

            //if the customized type value is G.A then it will add percentage
            //to engagement fees analyst subtotal
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum14 +=
                    sum14 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //adding the subtotal of analyst into sum the sum of engagement fees
            sum += +sum14;

            // Getting the value of engagement fees of analyst to pass the value
            // into the engagement cost analyst
            $("#ec_AnalystNoc").val($(".noc-b14").val());
            $("#ec_AnalystNoh").val($(".noh-d14").val());
            $("#ec_AnalystNwh").val($(".nwh-e14").val());

            //analyst engagement cost auto sum
            sumecAnalyst +=
                $("#ec_AnalystNoc").val() *
                    $("#ec_AnalystHf").val().replace(/,/g, "") *
                    $("#ec_AnalystNoh").val() +
                $("#ec_AnalystNwh").val() *
                    ($("#ec_AnalystNoc").val() *
                        $("#ec_AnalystHf").val().replace(/,/g, "") *
                        $("#ec_AnalystNoh").val() *
                        0.2);

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecAnalyst +=
                    sumecAnalyst *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecAnalyst;
        });

        $("#analyst-total").html(currency.format(Math.ceil(sum14)));
        //Subtotal
        $("#subtotal-consulting").html(currency.format(Math.ceil(sum)));
        //subtotal engagement cost
        $("#ec_AnalystTotal").html(currency.format(Math.ceil(sumecAnalyst)));
        $("#ec_SubtotalConsulting").html(
            currency.format(Math.ceil(sumecLeadconsultant + sumecAnalyst))
        );

        /*******************************************************DESIGN*********************************************************************/
        $(".hf-c18").each(function () {
            sum18 +=
                $(".noc-b18").val() * +$(this).val() * $(".noh-d18").val() +
                $(".nwh-e18").val() *
                    ($(".noc-b18").val() *
                        +$(this).val() *
                        $(".noh-d18").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum18 +=
                    sum18 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sum += +sum18;

            // Getting the value of engagement fees of designer to pass the value
            // into the engagement cost designer
            $("#ec_DesignerNoc").val($(".noc-b18").val());
            $("#ec_DesignerNoh").val($(".noh-d18").val());
            $("#ec_DesignerNwh").val($(".nwh-e18").val());

            //designer engagement cost auto sum
            sumecDesigner +=
                $("#ec_DesignerNoc").val() *
                    $("#ec_DesignerHf").val().replace(/,/g, "") *
                    $("#ec_DesignerNoh").val() +
                $("#ec_DesignerNwh").val() *
                    ($("#ec_DesignerNoc").val() *
                        $("#ec_DesignerHf").val().replace(/,/g, "") *
                        $("#ec_DesignerNoh").val() *
                        0.2);

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecDesigner +=
                    sumecDesigner *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecDesigner;
        });
        $("#subtotal-design").html(currency.format(Math.ceil(sum18)));
        $("#ec_DesignerTotal").html(currency.format(Math.ceil(sumecDesigner)));

        /*******************************************************PROGRAM*********************************************************************/
        //Lead Facilitator
        $(".hf-c21").each(function () {
            sum21 +=
                $(".noc-b21").val() * +$(this).val() * $(".noh-d21").val() +
                $(".nwh-e21").val() *
                    ($(".noc-b21").val() *
                        +$(this).val() *
                        $(".noh-d21").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum21 +=
                    sum21 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sum += +sum21;

            // Getting the value of engagement fees of program to pass the value
            // into the engagement cost program
            $("#ec_LeadfacilitatorNoc").val($(".noc-b21").val());
            $("#ec_LeadfacilitatorNoh").val($(".noh-d21").val());
            $("#ec_LeadfacilitatorNwh").val($(".nwh-e21").val());

            //program engagement cost auto sum
            sumecLeadfacilitator +=
                $("#ec_LeadfacilitatorNoc").val() *
                    $("#ec_LeadfacilitatorHf").val().replace(/,/g, "") *
                    $("#ec_LeadfacilitatorNoh").val() +
                $("#ec_LeadfacilitatorNwh").val() *
                    ($("#ec_LeadfacilitatorNoc").val() *
                        $("#ec_LeadfacilitatorHf").val().replace(/,/g, "") *
                        $("#ec_LeadfacilitatorNoh").val() *
                        0.2);

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecLeadfacilitator +=
                    sumecLeadfacilitator *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecLeadfacilitator;
        });
        $("#subtotal-lead").html(currency.format(Math.ceil(sum21)));
        $("#ec_LeadfacilitatorTotal").html(
            currency.format(Math.ceil(sumecLeadfacilitator))
        );

        //Co-Facilitator
        $(".hf-c22").each(function () {
            sum22 +=
                $(".noc-b22").val() *
                    +$(this).val().replace(/,/g, "") *
                    $(".noh-d22").val() +
                $(".nwh-e22").val() *
                    ($(".noc-b22").val() *
                        +$(this).val().replace(/,/g, "") *
                        $(".noh-d22").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum22 +=
                    sum22 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sum += +sum22;

            // Getting the value of engagement fees of program to pass the value
            // into the engagement cost program
            $("#ec_CofacilitatorNoc").val($(".noc-b22").val());
            $("#ec_CofacilitatorNoh").val($(".noh-d22").val());
            $("#ec_CofacilitatorNwh").val($(".nwh-e22").val());

            //program engagement cost auto sum
            sumecCofacilitator +=
                $("#ec_CofacilitatorNoc").val() *
                    $("#ec_CofacilitatorHf").val().replace(/,/g, "") *
                    $("#ec_CofacilitatorNoh").val() +
                $("#ec_CofacilitatorNwh").val() *
                    ($("#ec_CofacilitatorNoc").val() *
                        $("#ec_CofacilitatorHf").val().replace(/,/g, "") *
                        $("#ec_CofacilitatorNoh").val() *
                        0.2);

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecCofacilitator +=
                    sumecCofacilitator *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecCofacilitator;
        });
        $("#subtotal-coFacilitator").html(currency.format(Math.ceil(sum22)));
        $("#ec_CofacilitatorTotal").html(
            currency.format(Math.ceil(sumecCofacilitator))
        );

        //Moderator
        $(".hf-c23").each(function () {
            sum23 +=
                $(".noc-b23").val() *
                    +$(this).val().replace(/,/g, "") *
                    $(".noh-d23").val() +
                $(".nwh-e23").val() *
                    ($(".noc-b23").val() *
                        +$(this).val().replace(/,/g, "") *
                        $(".noh-d23").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum23 +=
                    sum23 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sum += +sum23;

            // Getting the value of engagement fees of Moderator to pass the value
            // into the engagement cost Moderator
            $("#ec_ModeratorNoc").val($(".noc-b23").val());
            $("#ec_ModeratorNoh").val($(".noh-d23").val());
            $("#ec_ModeratorNwh").val($(".nwh-e23").val());

            //Moderator engagement cost auto sum
            sumecModerator +=
                $("#ec_ModeratorNoc").val() *
                    $("#ec_ModeratorHf").val().replace(/,/g, "") *
                    $("#ec_ModeratorNoh").val() +
                $("#ec_ModeratorNwh").val() *
                    ($("#ec_ModeratorNoc").val() *
                        $("#ec_ModeratorHf").val().replace(/,/g, "") *
                        $("#ec_ModeratorNoh").val() *
                        0.2);

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecModerator +=
                    sumecModerator *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecModerator;
        });
        $("#subtotal-moderator").html(currency.format(Math.ceil(sum23)));
        $("#ec_ModeratorTotal").html(
            currency.format(Math.ceil(sumecModerator))
        );

        //Producer
        $(".hf-c24").each(function () {
            sum24 +=
                $(".noc-b24").val() *
                    +$(this).val().replace(/,/g, "") *
                    $(".noh-d24").val() +
                $(".nwh-e24").val() *
                    ($(".noc-b24").val() *
                        +$(this).val().replace(/,/g, "") *
                        $(".noh-d24").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum24 +=
                    sum24 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sum += +sum24;

            // Getting the value of engagement fees of Producer to pass the value
            // into the engagement cost Producer
            $("#ec_ProducerNoc").val($(".noc-b24").val());
            $("#ec_ProducerNoh").val($(".noh-d24").val());
            $("#ec_ProducerNwh").val($(".nwh-e24").val());

            //Producer engagement cost auto sum
            sumecProducer +=
                $("#ec_ProducerNoc").val() *
                    $("#ec_ProducerHf").val().replace(/,/g, "") *
                    $("#ec_ProducerNoh").val() +
                $("#ec_ProducerNwh").val() *
                    ($("#ec_ProducerNoc").val() *
                        $("#ec_ProducerHf").val().replace(/,/g, "") *
                        $("#ec_ProducerNoh").val() *
                        0.2);

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecProducer +=
                    sumecProducer *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecProducer;
        });
        $("#subtotal-producer").html(currency.format(Math.ceil(sum24)));
        $("#ec_ProducerTotal").html(currency.format(Math.ceil(sumecProducer)));
        $("#program-subtotal").html(
            currency.format(Math.ceil(sum21 + sum22 + sum23 + sum24))
        );
        $("#ec_ProgramSubtotal").html(
            currency.format(
                Math.ceil(
                    sumecLeadfacilitator +
                        sumecCofacilitator +
                        sumecModerator +
                        sumecProducer
                )
            )
        );

        /*******************************************************DOCUMENTOR******************************************************************/
        $(".hf-c28").each(function () {
            sum28 +=
                $(".noc-b28").val() *
                    +$(this).val().replace(/,/g, "") *
                    $(".noh-d28").val() +
                $(".nwh-e28").val() *
                    ($(".noc-b28").val() *
                        +$(this).val().replace(/,/g, "") *
                        $(".noh-d28").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum28 +=
                    sum28 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sum += +sum28;

            // Getting the value of engagement fees of Documentor to pass the value
            // into the engagement cost Documentor
            $("#ec_DocumentorNoc").val($(".noc-b28").val());
            $("#ec_DocumentorNoh").val($(".noh-d28").val());
            $("#ec_DocumentorNwh").val($(".nwh-e28").val());

            //Documentor engagement cost auto sum
            sumecDocumentor +=
                $("#ec_DocumentorNoc").val() *
                    $("#ec_DocumentorHf").val().replace(/,/g, "") *
                    $("#ec_DocumentorNoh").val() +
                $("#ec_DocumentorNwh").val() *
                    ($("#ec_DocumentorNoc").val() *
                        $("#ec_DocumentorHf").val().replace(/,/g, "") *
                        $("#ec_DocumentorNoh").val() *
                        0.2);

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecDocumentor +=
                    sumecDocumentor *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecDocumentor;
        });
        $("#subtotal-documentor").html(currency.format(Math.ceil(sum28)));
        $("#ec_DocumentorTotal").html(
            currency.format(Math.ceil(sumecDocumentor))
        );

        /*******************************************************Off Program fee******************************************************************/
        $("#ec_ProgramHf").each(function () {
            sumecOffprogram +=
                $("#ec_ProgramNoc").val() *
                $("#ec_ProgramHf").val().replace(/,/g, "");

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecOffprogram +=
                    sumecOffprogram *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEngagementCost += +sumecOffprogram;
        });
        $("#ec_ProgramTotal").html(currency.format(Math.ceil(sumecOffprogram)));

        /*******************************************************Program Expense******************************************************************/
        $("#ec_Programexpense").each(function () {
            sumecProgramexpense +=
                ($(this).val().replace(/%/g, "") *
                    $("#input-totalPackages").val().replace(/,/g, "")) /
                100;

            sumEngagementCost += +sumecProgramexpense;
        });
        $("#ec_ProgramexpenseTotal").html(
            currency.format(Math.ceil(sumecProgramexpense))
        );

        /*******************************************TOTAL STANDARD FEES**********************************************************************/
        $("#total-standard").html(currency.format(Math.ceil(sum)));

        /********************************************DISCOUNTS*******************************************************************************/
        $(".tf-f34").each(function () {
            sum32 += (1 - +$(this).val().replace(/,/g, "") / sum) * 100;

            if (sum32 > 100) {
                sumDiscount = sum32 - 100;
                $("#input-discount").val("-" + sumDiscount + "%");
            } else if (isNaN(sum32) != 0) {
                $("#input-discount").val(100 + "%");
            } else {
                sumDiscount = Math.round(sum32);
                $("#input-discount").val(sumDiscount + "%");
            }
        });

        //Sales
        $("#sales").each(function () {
            sumSales +=
                ($(".tf-f34").val().replace(/,/g, "") / 100) * $(this).val();
            sumEngagementCost += +sumSales;
        });
        $("#salesTotal").html(currency.format(Math.ceil(sumSales)));

        //Referral
        $("#referral").each(function () {
            sumReferral +=
                ($(".tf-f34").val().replace(/,/g, "") / 100) * $(this).val();
            sumEngagementCost += +sumReferral;
        });
        $("#referralTotal").html(currency.format(Math.ceil(sumReferral)));

        //Engagement Manager
        $("#engagementManager").each(function () {
            sumEngagementManager +=
                ($(".tf-f34").val().replace(/,/g, "") / 100) * $(this).val();
            sumEngagementCost += +sumEngagementManager;
        });
        $("#engagementManagerTotal").html(
            currency.format(Math.ceil(sumEngagementManager))
        );

        //Engagement cost Creators
        $("#ec_CreatorsHf").each(function () {
            sumecCreators +=
                $(this).val() *
                $("#ec_CreatorsNoh").val() *
                $("#ec_CreatorsNoc").val();
            sumEngagementCost += +sumecCreators;
        });
        $("#ec_CreatorsTotal").html(currency.format(Math.ceil(sumecCreators)));
        $("#ec_DesignSubtotal").html(
            currency.format(Math.ceil(sumecDesigner + sumecCreators))
        );

        /***********************ENGAGEMENT COST TOTAL FEES***********************/
        $("#ec_Total").html(currency.format(Math.ceil(sumEngagementCost)));

        /***********************PROFIT FORECAST***********************/
        //profit    
        sumProfit = $("#input-totalPackages").val().replace(/,/g, "") - sumEngagementCost;
        $("#Profit").html(currency.format(Math.ceil(sumProfit)));

        //Less: Contribution to Overhead
        sumCto = 0;
        $("#LessCTO_NOC").each(function () {
            sumCto +=
                $("#input-totalPackages").val().replace(/,/g, "") * $(this).val() / 100;
        });
        $("#LessContributionToOverhead").html(currency.format(Math.ceil(sumCto)));     
        
        //Net profit
        sumNetprofit = sumProfit - sumCto;
        $("#NetProfit").html(currency.format(Math.ceil(sumNetprofit))); 

        //Profit margin
        sumProfitmargin = (sumNetprofit / $("#input-totalPackages").val().replace(/,/g, "") * 100);
        $("#ProfitMargin").html(Math.floor(sumProfitmargin) + "%"); 
        // console.log(Math.ceil(sumProfitmargin));
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
