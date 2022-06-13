require("./components/clusterReference");
require('./components/currencyFormat');
//*************************************** CUSTOMIZED ENGAGEMENT BUDGET FORM COMPUTATION ********************************************************//
$(document).on(
    "change keyup click",
    ".customized-type, .ga-only-dropdown, .remove, #tableLeadconsultant, #ef_LeadconsultantNoc, #ef_LeadconsultantHf, #ef_LeadconsultantNoh, #ef_LeadconsultantNwh, #ef_AnalystNoc, #ef_AnalystHf, #ef_AnalystNoh, #ef_AnalystNwh, #ef_DesignerNoc, #ef_DesignerHf, #ef_DesignerNoh, #ef_DesignerNwh, #ef_LeadfacilitatorNoc, #ef_LeadfacilitatorHf, #ef_LeadfacilitatorNoh, #ef_LeadfacilitatorNwh, #ef_CofaciNoc, #ef_CofaciHf, #ef_CofaciNoh, #ef_CofaciNwh, #ef_ModeratorNoc, #ef_ModeratorHf, #ef_ModeratorNoh, #ef_ModeratorNwh, #ef_ProducerNoc, #ef_ProducerHf, #ef_ProducerNoh, #ef_ProducerNwh, #ef_DocumentorNoc, #ef_DocumentorHf, #ef_DocumentorNoh, #ef_DocumentorNwh, #ef_Totalpackage, #sales, #referral, #engagementManager, #ec_LeadconsultantHf, #ec_AnalystHf, #ec_DesignerHf, #ec_CreatorsNoc, #ec_CreatorsHf, #ec_CreatorsNoh, #ec_LeadfacilitatorHf, #ec_CofacilitatorHf, #ec_ModeratorHf, #ec_ProducerHf, #ec_DocumentorHf, #ec_ProgramNoc, #ec_ProgramHf, #ec_Programexpense, #ef_Totalpackage, #LessCTO_NOC, #addBtn, #addBtn2",
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
        $("#tableLeadconsultant > tr").each(function () {
            //lead consultant engagement fees auto sum
            sum13 =
                $(this).find("#ef_LeadconsultantNoc").val() *
                    +$(this).find("#ef_LeadconsultantHf").val() *
                    $(this).find("#ef_LeadconsultantNoh").val() +
                $(this).find("#ef_LeadconsultantNwh").val() *
                    ($(this).find("#ef_LeadconsultantNoc").val() *
                        +$(this).find("#ef_LeadconsultantHf").val() *
                        $(this).find("#ef_LeadconsultantNoh").val() *
                        0.2);

            // if the customized type is G.A Hybrid or G.A Virtual is
            // selected the percent of customized type will execute
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum13 +=
                    sum13 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this)
                .find("#leadTotal")
                .html(currency.format(Math.ceil(sum13)));

            $("#tableLeadconsultant > tr").on("click", ".remove", function () {
                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowIdx--;
            });

            //Assign the value of lead consultant to the sum of engagement fees
            sum += +sum13;

            //Assign the values of lead consultant engagement fees to
            //lead consultant engagement cost
            $("#ec_LeadconsultantNoc").val($("#ef_LeadconsultantNoc").val());
            $("#ec_LeadconsultantNoh").val($("#ef_LeadconsultantNoh").val());
            $("#ec_LeadconsultantNwh").val($("#ef_LeadconsultantNwh").val());

            //lead consultant engagement cost sum
            sumecLeadconsultant +=
                $("#ec_LeadconsultantNoc").val() *
                    $("#ec_LeadconsultantHf").val().replace(/,/g, "") *
                    $("#ec_LeadconsultantNoh").val() +
                $("#ec_LeadconsultantNwh").val() *
                    ($("#ec_LeadconsultantNoc").val() *
                        $("#ec_LeadconsultantHf").val().replace(/,/g, "") *
                        $("#ec_LeadconsultantNoh").val() *
                        0.2);

            // if the customized type is G.A Hybrid or G.A Virtual is
            // selected it will add 10 percent to lead consultant engagement fees
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecLeadconsultant += sumecLeadconsultant * (10 / 100);
            }

            //Assign the value of lead consultant to the sum of engagement cost
            sumEngagementCost += +sumecLeadconsultant;
        });
        $("#ec_LeadconsultantTotal").html(
            currency.format(Math.ceil(sumecLeadconsultant))
        );

        //Analyst
        $("#tableAnalyst > tr").each(function () {
            //analyst engagement fees auto sum
            sum14 =
                $(this).find("#ef_AnalystNoc").val() *
                    +$(this).find("#ef_AnalystHf").val().replace(/\₱|,/g, "") *
                    $(this).find("#ef_AnalystNoh").val() +
                $(this).find("#ef_AnalystNwh").val() *
                    ($(this).find("#ef_AnalystNoc").val() *
                        +$(this).find("#ef_AnalystHf").val().replace(/\₱|,/g, "") *
                        $(this).find("#ef_AnalystNoh").val() *
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

            //lead consultant engagement fees sum
            $(this)
                .find("#analyst-total")
                .html(currency.format(Math.ceil(sum14)));

            $("#tableAnalyst > tr").on("click", ".remove", function () {
                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                efAnalyst--;
            });

            //adding the subtotal of analyst into sum the sum of engagement fees
            sum += +sum14;

            // Getting the value of engagement fees of analyst to pass the value
            // into the engagement cost analyst
            $("#ec_AnalystNoc").val($("#ef_AnalystNoc").val());
            $("#ec_AnalystNoh").val($("#ef_AnalystNoh").val());
            $("#ec_AnalystNwh").val($("#ef_AnalystNwh").val());

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
        //Subtotal
        $("#subtotal-consulting").html("₱" + currency.format(Math.ceil(sum)));
        //subtotal engagement cost
        $("#ec_AnalystTotal").html(currency.format(Math.ceil(sumecAnalyst)));
        $("#ec_SubtotalConsulting").html(
            currency.format(Math.ceil(sumecLeadconsultant + sumecAnalyst))
        );

        /*******************************************************DESIGN*********************************************************************/
        $("#tableDesigner > tr").each(function () {
            sum18 =
                $(this).find("#ef_DesignerNoc").val() *
                    +$(this).find("#ef_DesignerHf").val() *
                    $(this).find("#ef_DesignerNoh").val() +
                $(this).find("#ef_DesignerNwh").val() *
                    ($(this).find("#ef_DesignerNoc").val() *
                        +$(this).find("#ef_DesignerHf").val() *
                        $(this).find("#ef_DesignerNoh").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum18 +=
                    sum18 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this)
                .find("#subtotal-design")
                .html("₱" + currency.format(Math.ceil(sum18)));

            $("#tableDesigner > tr").on("click", ".remove", function () {
                // Removing the current row.
                $(this).closest("tr").remove();
                // Decreasing total number of rows by 1.
                --efDesigner;
            });

            sum += +sum18;

            // Getting the value of engagement fees of designer to pass the value
            // into the engagement cost designer
            $("#ec_DesignerNoc").val($("#ef_DesignerNoc").val());
            $("#ec_DesignerNoh").val($("#ef_DesignerNoh").val());
            $("#ec_DesignerNwh").val($("#ef_DesignerNwh").val());

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
        $("#ec_DesignerTotal").html("₱" + currency.format(Math.ceil(sumecDesigner)));

        /*******************************************************PROGRAM*********************************************************************/
        //Lead Facilitator
        $("#tableLeadfaci > tr").each(function () {
            sum21 =
                $(this).find("#ef_LeadfacilitatorNoc").val() *
                    +$(this).find("#ef_LeadfacilitatorHf").val() *
                    $(this).find("#ef_LeadfacilitatorNoh").val() +
                $(this).find("#ef_LeadfacilitatorNwh").val() *
                    ($(this).find("#ef_LeadfacilitatorNoc").val() *
                        +$(this).find("#ef_LeadfacilitatorHf").val() *
                        $(this).find("#ef_LeadfacilitatorNoh").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum21 +=
                    sum21 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this)
                .find("#subtotal-lead")
                .html(currency.format(Math.ceil(sum21)));

            $("#tableLeadfaci > tr").on("click", ".remove", function () {
                // Removing the current row.
                $(this).closest("tr").remove();
                // Decreasing total number of rows by 1.
                --efLeadfaci;
            });

            sum += +sum21;

            // Getting the value of engagement fees of program to pass the value
            // into the engagement cost program
            $("#ec_LeadfacilitatorNoc").val($("#ef_LeadfacilitatorNoc").val());
            $("#ec_LeadfacilitatorNoh").val($("#ef_LeadfacilitatorNoh").val());
            $("#ec_LeadfacilitatorNwh").val($("#ef_LeadfacilitatorNwh").val());

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
        $("#ec_LeadfacilitatorTotal").html(
            currency.format(Math.ceil(sumecLeadfacilitator))
        );

        //Co-Facilitator
        $("#tableCofaci > tr").each(function () {
            sum22 =
                $(this).find("#ef_CofaciNoc").val() *
                    +$(this).find("#ef_CofaciHf").val().replace(/\₱|,/g, "") *
                    $(this).find("#ef_CofaciNoh").val() +
                $(this).find("#ef_CofaciNwh").val() *
                    ($(this).find("#ef_CofaciNoc").val() *
                        +$(this).find("#ef_CofaciHf").val().replace(/\₱|,/g, "") *
                        $(this).find("#ef_CofaciNoh").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum22 +=
                    sum22 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this)
                .find("#subtotal-coFacilitator")
                .html(currency.format(Math.ceil(sum22)));

            $("#tableLeadfaci > tr").on("click", ".remove", function () {
                // Removing the current row.
                $(this).closest("tr").remove();
                // Decreasing total number of rows by 1.
                --efCofaci;
            });

            sum += +sum22;

            // Getting the value of engagement fees of program to pass the value
            // into the engagement cost program
            $("#ec_CofacilitatorNoc").val($("#ef_CofaciNoc").val());
            $("#ec_CofacilitatorNoh").val($("#ef_CofaciNoh").val());
            $("#ec_CofacilitatorNwh").val($("#ef_CofaciNwh").val());

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
        $("#ec_CofacilitatorTotal").html(
            currency.format(Math.ceil(sumecCofacilitator))
        );

        //Moderator
        $("#tableModerator > tr").each(function () {
            sum23 =
                $(this).find("#ef_ModeratorNoc").val() *
                    +$(this).find("#ef_ModeratorHf").val().replace(/\₱|,/g, "") *
                    $(this).find("#ef_ModeratorNoh").val() +
                $(this).find("#ef_ModeratorNwh").val() *
                    ($(this).find("#ef_ModeratorNoc").val() *
                        +$(this).find("#ef_ModeratorHf").val().replace(/\₱|,/g, "") *
                        $(this).find("#ef_ModeratorNoh").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum23 +=
                    sum23 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //Moderator engagement fees sum
            $(this)
                .find("#subtotal-moderator")
                .html(currency.format(Math.ceil(sum23)));

            $("#tableModerator > tr").on("click", ".remove", function () {
                // Removing the current row.
                $(this).closest("tr").remove();
                // Decreasing total number of rows by 1.
                --efModerator;
            });

            sum += +sum23;

            // Getting the value of engagement fees of Moderator to pass the value
            // into the engagement cost Moderator
            $("#ec_ModeratorNoc").val($("#ef_ModeratorNoc").val());
            $("#ec_ModeratorNoh").val($("#ef_ModeratorNoh").val());
            $("#ec_ModeratorNwh").val($("#ef_ModeratorNwh").val());

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
        // $("#subtotal-moderator").html(currency.format(Math.ceil(sum23)));
        $("#ec_ModeratorTotal").html(
            currency.format(Math.ceil(sumecModerator))
        );

        //Producer
        $("#tableProducer > tr").each(function () {
            sum24 =
                $(this).find("#ef_ProducerNoc").val() *
                    +$(this).find("#ef_ProducerHf").val().replace(/\₱|,/g, "") *
                    $(this).find("#ef_ProducerNoh").val() +
                $(this).find("#ef_ProducerNwh").val() *
                    ($(this).find("#ef_ProducerNoc").val() *
                        +$(this).find("#ef_ProducerHf").val().replace(/\₱|,/g, "") *
                        $(this).find("#ef_ProducerNoh").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum24 +=
                    sum24 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //Producer engagement fees sum
            $(this)
                .find("#subtotal-producer")
                .html(currency.format(Math.ceil(sum24)));

            $("#tableProducer > tr").on("click", ".remove", function () {
                // Removing the current row.
                $(this).closest("tr").remove();
                // Decreasing total number of rows by 1.
                --efProducer;
            });

            sum += +sum24;

            // Getting the value of engagement fees of Producer to pass the value
            // into the engagement cost Producer
            $("#ec_ProducerNoc").val($("#ef_ProducerNoc").val());
            $("#ec_ProducerNoh").val($("#ef_ProducerNoh").val());
            $("#ec_ProducerNwh").val($("#ef_ProducerNwh").val());

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
        // $("#subtotal-producer").html(currency.format(Math.ceil(sum24)));
        $("#ec_ProducerTotal").html(currency.format(Math.ceil(sumecProducer)));
        $("#program-subtotal").html(
            "₱" + currency.format(Math.ceil(sum21 + sum22 + sum23 + sum24))
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
        $("#tableDocumentor > tr").each(function () {
            sum28 =
                $(this).find("#ef_DocumentorNoc").val() *
                    +$(this).find("#ef_DocumentorHf").val().replace(/\₱|,/g, "") *
                    $(this).find("#ef_DocumentorNoh").val() +
                $(this).find("#ef_DocumentorNwh").val() *
                    ($(this).find("#ef_DocumentorNoc").val() *
                        +$(this).find("#ef_DocumentorHf").val().replace(/\₱|,/g, "") *
                        $(this).find("#ef_DocumentorNoh").val() *
                        0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum28 +=
                    sum28 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //Producer engagement fees sum
            $(this)
                .find("#subtotal-documentor")
                .html("₱" + currency.format(Math.ceil(sum28)));

            $("#tableDocumentor > tr").on("click", ".remove", function () {
                // Removing the current row.
                $(this).closest("tr").remove();
                // Decreasing total number of rows by 1.
                --efDocumentor;
            });

            sum += +sum28;

            // Getting the value of engagement fees of Documentor to pass the value
            // into the engagement cost Documentor
            $("#ec_DocumentorNoc").val($("#ef_DocumentorNoc").val());
            $("#ec_DocumentorNoh").val($("#ef_DocumentorNoh").val());
            $("#ec_DocumentorNwh").val($("#ef_DocumentorNwh").val());

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
        // $("#subtotal-documentor").html(currency.format(Math.ceil(sum28)));
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
                    $("#ef_Totalpackage").val().replace(/,/g, "")) /
                100;

            sumEngagementCost += +sumecProgramexpense;
        });
        $("#ec_ProgramexpenseTotal").html(
            currency.format(Math.ceil(sumecProgramexpense))
        );

        /*******************************************TOTAL STANDARD FEES**********************************************************************/
        $("#total-standard").html("₱" + currency.format(Math.ceil(sum)));

        /********************************************DISCOUNTS*******************************************************************************/
        $("#ef_Totalpackage").each(function () {
            sum32 += (1 - +$(this).val().replace(/\₱|,/g, "") / sum) * 100;

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
                ($("#ef_Totalpackage").val().replace(/,/g, "") / 100) *
                $(this).val();
            sumEngagementCost += +sumSales;
        });
        $("#salesTotal").html(currency.format(Math.ceil(sumSales)));

        //Referral
        $("#referral").each(function () {
            sumReferral +=
                ($("#ef_Totalpackage").val().replace(/,/g, "") / 100) *
                $(this).val();
            sumEngagementCost += +sumReferral;
        });
        $("#referralTotal").html(currency.format(Math.ceil(sumReferral)));

        //Engagement Manager
        $("#engagementManager").each(function () {
            sumEngagementManager +=
                ($("#ef_Totalpackage").val().replace(/,/g, "") / 100) *
                $(this).val();
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
        sumProfit =
            $("#ef_Totalpackage").val().replace(/,/g, "") - sumEngagementCost;
        $("#Profit").html(currency.format(Math.ceil(sumProfit)));

        //Less: Contribution to Overhead
        sumCto = 0;
        $("#LessCTO_NOC").each(function () {
            sumCto +=
                ($("#ef_Totalpackage").val().replace(/,/g, "") *
                    $(this).val()) /
                100;
        });
        $("#LessContributionToOverhead").html(
            currency.format(Math.ceil(sumCto))
        );

        //Net profit
        sumNetprofit = sumProfit - sumCto;
        $("#NetProfit").html(currency.format(Math.ceil(sumNetprofit)));

        //Profit margin
        sumProfitmargin =
            (sumNetprofit / $("#ef_Totalpackage").val().replace(/,/g, "")) *
            100;
        $("#ProfitMargin").html(Math.floor(sumProfitmargin) + "%");
    }
); //end of engagement fees

//*************************************** APPEND NUMBER FORMAT ********************************************************//
$(document).on(
    "change keyup click",
    "#ef_AnalystHf, #ef_CofaciHf, #ef_ModeratorHf, #ef_ProducerHf, #ef_DocumentorHf",
    function () {
// Jquery Dependency

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }

    // join number by .
    input_val = "₱" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "₱" + input_val;
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}




    });

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
        $("#datepicker").datepicker("option", "dateFormat", "M d, yy");
    });
});

$('input[type="number"]').on("input", function () {
    this.value =
        !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null;
});
$('input[type="number"]').attr("min", "0");

//*************************************** CURRENCY FORMATTER ********************************************************//
let currency = Intl.NumberFormat("en-US");
//default value in ANALYST
document.getElementById("ef_AnalystHf").defaultValue = "₱" + currency.format(
    Math.ceil(5000)
);
//default value CO-FACILITATOR
document.getElementById("ef_CofaciHf").defaultValue = "₱" + currency.format(
    Math.ceil(5000)
);
//default value in MODERATOR
document.getElementById("ef_ModeratorHf").defaultValue = "₱" + currency.format(
    Math.ceil(3500)
);
//default value in PRODUCER
document.getElementById("ef_ProducerHf").defaultValue = "₱" + currency.format(
    Math.ceil(2500)
);
//default value in DOCUMENTOR
document.getElementById("ef_DocumentorHf").defaultValue = "₱" + currency.format(
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
document.getElementById("ec_Programexpense").defaultValue = 2 + "%";

//percentage string of program expense
$("#ec_Programexpense").on("blur", function () {
    $(this).val(function (i, v) {
        return v.replace("%", "") + "%";
    });
});

//CURRENCY FORMATTER

//ENGAGEMENT COST
$("#ec_LeadconsultantHf").on({
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
$("#ec_AnalystHf").on({
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
$("#ec_DesignerHf").on({
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
$("#ec_LeadfacilitatorHf").on({
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
$("#ec_CofacilitatorHf").on({
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
$("#ec_ProducerHf").on({
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
$("#ec_DocumentorHf").on({
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
$("#ec_ProgramHf").on({
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
