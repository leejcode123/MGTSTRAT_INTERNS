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

$("#ef_PDPdf").on({
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

//Engagement Cost
//ENGAGEMENT COST
$("#ec_LeadconsultantsPd").on({
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

$("#ec_AnalystsPd").on({
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

$("#ec_DesignersPd").on({
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

$("#ec_CreatorPd").on({
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

$("#ec_LeadfacilitatorsPd").on({
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

$("#ec_CofacilitatorsPd").on({
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

$("#ec_ActionlearningcoachPd").on({
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
$("#ec_MarshalPd").on({
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

$("#ec_OnsitePd").on({
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
$("#ec_DocumentorsPd").on({
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
$("#ec_PerdiemPd").on({
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
$("#ec_OffprogramsPd").on({
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
$("#ec_Programexpenses").on({
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
document.getElementById("ef_PDPdf").defaultValue = currency.format(2000);
//Engagement Cost
document.getElementById("ec_LeadfacilitatorsPd").defaultValue = currency.format(
    Math.ceil(24000)
);
document.getElementById("ec_LeadconsultantsPd").defaultValue = currency.format(
    Math.ceil(0.85 * $("#ec_LeadfacilitatorsPd").val().replace(/,/g, ""))
);
document.getElementById("ec_AnalystsPd").defaultValue = currency.format(
    Math.ceil(13600)
);
document.getElementById("ec_DesignersPd").defaultValue = currency.format(
    Math.ceil(0.75 * $("#ec_LeadfacilitatorsPd").val().replace(/,/g, ""))
);
document.getElementById("ec_CreatorPd").defaultValue = currency.format(
    Math.ceil(500)
);
document.getElementById("ec_CofacilitatorsPd").defaultValue = currency.format(
    Math.ceil(0.6 * $("#ec_LeadfacilitatorsPd").val().replace(/,/g, ""))
);
document.getElementById("ec_ActionlearningcoachPd").defaultValue = currency.format(
    Math.ceil(16000)
);
document.getElementById("ec_MarshalPd").defaultValue = currency.format(
    Math.ceil(8000)
);
document.getElementById("ec_OnsitepcPd").defaultValue = currency.format(
    Math.ceil(1000)
);
document.getElementById("ec_DocumentorsPd").defaultValue = currency.format(
    Math.ceil(5600)
);
document.getElementById("ec_PerdiemPd").defaultValue = currency.format(
    Math.ceil(200)
);
document.getElementById("ec_OffprogramsPd").defaultValue = currency.format(
    Math.ceil(1000)
);
document.getElementById("ec_Programexpenses").defaultValue = 2 + "%";

//Customized Engagement form of Engagement Fees
$(document).on(
    "change keyup click",
    ".f2f-customized-type, .f2f-ga-only-dropdown, .remove, #ef_LeadconsultantAtd, #ef_LeadconsultantNoc, #ef_LeadconsultantHf, #ef_LeadconsultantNoh, #ef_LeadconsultantNwh, #ef_AnalystNoc, #ef_AnalystPdf, #ef_AnalystNod, #ef_AnalystAtd, #ef_AnalystNsw, #ef_DesignerNoc, #ef_DesignerPdf, #ef_DesignerNod, #ef_DesignerAtd, #ef_DesignerNsw, #ef_LeadFaciNoc, #ef_LeadFaciPdf, #ef_LeadFaciNod, #ef_LeadFaciAtd, #ef_LeadFaciNsw, #ef_CoFaciNoc, #ef_CoFaciPdf, #ef_CoFaciNod, #ef_CoFaciAtd, #ef_CoFaciNsw, #ef_ActionLearnNoc, #ef_ActionLearnPdf, #ef_ActionLearnNod, #ef_ActionLearnAtd, #ef_ActionLearnNsw, #ef_MarshalNoc, #ef_MarshalPdf, #ef_MarshalNod, #ef_MarshalAtd, #ef_MarshalNsw, #ef_OnsiteNoc, #ef_OnsitePdf, #ef_OnsiteNod, #ef_OnsiteAtd, #ef_OnsiteNsw, #ef_DocumentorNoc, #ef_DocumentorPdf, #ef_DocumentorNod, #ef_DocumentorAtd, #ef_DocumentorNsw,  #ef_PDNoc, #ef_PDPdf, #ef_PDNod, #ef_PDAtd, #ef_PDNsw, #input_totalPackages, #ec_sale, #inputforSale, #referrals, #inputforReferrals, #ecengagementManager, #inputforEngagementManager, #ec_offsitePc, #inputforOffsite, #ec_LeadconsultantsPd, #ec_AnalystsPd, #ec_DesignersPd, #ec_CreatorNoc, #ec_CreatorPd, #ec_CreatorNod, #ec_LeadfacilitatorsPd, #ec_CofacilitatorsPd, #ec_ActionlearningcoachPd, #ec_MarshalPd, #ec_OnsitepcPD, #ec_DocumentorsPd, #ec_PerdiemPd, #ec_PerdiemNoc, #ec_OffprogramsPd, #ec_OffprogramsNoc, #ec_Programexpenses, #tableLeadconsultant, #ecaddButton, #ecaddButton2, #ecaddButton3, #ecaddButton4",
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

        $("#ec_Programexpenses").on("input", function () {
            $(this).val(function (i, v) {
                return v.replace("%", "") + "%";
            });
        });


        /********************************************************AUTO SUM***************************************************************************/
        let currency = Intl.NumberFormat("en-US");

        //total package
        sumEf = 0;

        //consulting
        sumLc = 0;
        //Analyst
        sumAnlst = 0;

        sumSales1 = 0;

        //Designer
        sumDesigner = 0;

        //Lead Facilitator
        sumLeadFaci = 0;

        //Co Facilitator
        sumCoFaci = 0;

        //Action Learning 
        sumActionLearn = 0;

        //Marshal
        sumMarshal = 0;

        //Onsite
        sumOnsite = 0;

        //Documentor
        sumDocumentor = 0;

        //Per Diem
        sumPD = 0;

        //Discount
        sumA = 0;
        sum50 = 0;

        // engagement cost total
        sumofEngagementCost = 0;
        sumofSales = 0;
        sumofReferral = 0;
        sumofEngagementManager = 0;
        sumofOffsitepc = 0;
        sumofecLeadconsultant = 0;
        sumofecAnalyst = 0;
        sumofecDesigner = 0;
        sumofecCreators = 0;
        sumofecLeadfacilitator = 0;
        sumofecCofacilitator = 0;
        sumofecActionlearningcoach = 0;
        sumofecMarshal = 0;
        sumofecOnsitepc = 0;
        sumofecDocumentor = 0;
        sumofecPerdiem = 0;
        sumofecOffprogram = 0;
        sumofecProgramexpense = 0;

        //customized type
        var gaPercentage = $(".customized-type");

        /*******************************************************CONSULTING*********************************************************************/
        //Lead consultant
        $("#tableLeadconsultant > tr").each(function () {
            
            sumLc =
                $(this).find("#ef_LeadconsultantNoc").val() *
                +$(this).find("#ef_LeadconsultantHf").val().replace(/,/g, "") *
                $(this).find("#ef_LeadconsultantNoh").val() +
                $(this).find("#ef_LeadconsultantAtd").val() *
                ($(this).find("#ef_LeadconsultantNoc").val() *
                    +$(this).find("#ef_LeadconsultantHf").val().replace(/,/g, "") *
                    0.2) +
                $(this).find("#ef_LeadconsultantNwh").val() *
                ($(this).find("#ef_LeadconsultantNoc").val() *
                    +$(this).find("#ef_LeadconsultantHf").val().replace(/,/g, "") *
                    0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumLc +=
                    sumLc *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this).find("#leadTotal").html(currency.format(Math.ceil(sumLc)));

            $("#tableLeadconsultant > tr ").on("click", ".removed", function () {
                // Removing he current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowIndx--;
            });

            sumEf += +sumLc;

            $("#ec_LeadconsultantsNoc").val($("#ef_LeadconsultantNoc").val());
            $("#ec_LeadconsultantsNod").val($("#ef_LeadconsultantNoh").val());
            $("#ec_LeadconsultantsNwh").val($("#ef_LeadconsultantNwh").val());
            $("#ec_LeadconsultantsAtd").val($("#ef_LeadconsultantAtd").val());

            sumofecLeadconsultant +=
                $("#ec_LeadconsultantsNoc").val() *
                $("#ec_LeadconsultantsPd").val().replace(/,/g, "") *
                $("#ec_LeadconsultantsNod").val() +
                $("#ec_LeadconsultantsAtd").val() *
                ($("#ec_LeadconsultantsNoc").val() *
                    $("#ec_LeadconsultantsPd").val().replace(/,/g, "") *
                    $("#ec_LeadconsultantsNod").val() *
                    0.2) + $("#ec_LeadconsultantsNwh").val() *
                ($("#ec_LeadconsultantsNoc").val() *
                    $("#ec_LeadconsultantsPd").val().replace(/,/g, "") *
                    $("#ec_LeadconsultantsNod").val() *
                    0.2);

            sumofEngagementCost += +sumofecLeadconsultant;
            
        });

            // $("#ec_LeadconsultantsTotal").html(currency.format(Math.ceil(sumEf)));
            $("#subtotalConsulting").html("₱" + currency.format(Math.ceil(sumLc + sumAnlst)));
            // $("#lead-total").html(currency.format(Math.ceil(sumLc)));
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

                $("#ec_AnalystsNoc").val($("#ef_AnalystNoc").val());
                $("#ec_AnalystsNod").val($("#ef_AnalystNod").val());
                $("#ec_AnalystsNwh").val($("#ef_AnalystNsw").val());
                $("#ec_AnalystsAtd").val($("#ef_AnalystAtd").val());

                sumofecAnalyst +=
                    $("#ec_AnalystsNoc").val() *
                    $("#ec_AnalystsPd").val().replace(/,/g, "") *
                    $("#ec_AnalystsNod").val() +
                    $("#ec_AnalystsAtd").val() *
                    ($("#ec_AnalystsNoc").val() *
                        $("#ec_AnalystsPd").val().replace(/,/g, "") *
                        $("#ec_AnalystsNod").val() *
                        0.2) + $("#ec_AnalystsNwh").val() *
                    ($("#ec_AnalystsNoc").val() *
                        $("#ec_AnalystsPd").val().replace(/,/g, "") *
                        $("#ec_AnalystsNod").val() *
                        0.2);


                sumofEngagementCost += +sumofecAnalyst;

                $("#ec_AnalystsTotal").html(currency.format(Math.ceil(sumofecAnalyst)));
                $("#ec_SubtotalsConsulting").html("₱" + currency.format(Math.ceil(sumofecLeadconsultant + sumofecAnalyst)));
            });
            $("#analyst-total").html(currency.format(Math.ceil(sumAnlst)));
            $("#subtotalConsulting").html(
               "₱" +  currency.format(Math.ceil(sumLc + sumAnlst))
            );

            // Designer
            $("#ef_DesignerPdf").each(function () {
                sumDesigner +=
                    $("#ef_DesignerNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    $("#ef_DesignerNod").val() +
                    $("#ef_DesignerAtd").val() *
                    ($("#ef_DesignerNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2) +
                    $("#ef_DesignerNsw").val() *
                    ($("#ef_DesignerNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumDesigner +=
                        sumDesigner *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumEf += +sumDesigner;

                $("#ec_DesignersNoc").val($("#ef_DesignerNoc").val());
                $("#ec_DesignersNod").val($("#ef_DesignerNod").val());
                $("#ec_DesignersNwh").val($("#ef_DesignerNsw").val());
                $("#ec_DesignersAtd").val($("#ef_DesignerAtd").val());

                sumofecDesigner +=
                    $("#ec_DesignersNoc").val() *
                    $("#ec_DesignersPd").val().replace(/,/g, "") *
                    $("#ec_DesignersNod").val() +
                    $("#ec_DesignersAtd").val() *
                    ($("#ec_DesignersNoc").val() *
                        $("#ec_DesignersPd").val().replace(/,/g, "") *
                        $("#ec_DesignersNod").val() *
                        0.2) + $("#ec_DesignersNwh").val() *
                    ($("#ec_DesignersNoc").val() *
                        $("#ec_DesignersPd").val().replace(/,/g, "") *
                        $("#ec_DesignersNod").val() *
                        0.2);

                sumofEngagementCost += +sumofecDesigner;

                $("#ec_DesignersTotal").html(currency.format(Math.ceil(sumofecDesigner)));
            });

            $("#subtotal-design").html("₱" +currency.format(Math.ceil(sumDesigner)));
            // Lead Facilitator
            $("#ef_LeadFaciPdf").each(function () {
                sumLeadFaci +=
                    $("#ef_LeadFaciNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    $("#ef_LeadFaciNod").val() +
                    $("#ef_LeadFaciAtd").val() *
                    ($("#ef_LeadFaciNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2) +
                    $("#ef_LeadFaciNsw").val() *
                    ($("#ef_LeadFaciNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumLeadFaci +=
                        sumLeadFaci *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumEf += +sumLeadFaci;

                $("#ec_LeadfacilitatorsNoc").val($("#ef_LeadFaciNoc").val());
                $("#ec_LeadfacilitatorsNod").val($("#ef_LeadFaciNod").val());
                $("#ec_LeadfacilitatorsNwh").val($("#ef_LeadFaciNsw").val());
                $("#ec_LeadfacilitatorsAtd").val($("#ef_LeadFaciAtd").val());

                sumofecLeadfacilitator +=
                    $("#ec_LeadfacilitatorsNoc").val() *
                    $("#ec_LeadfacilitatorsPd").val().replace(/,/g, "") *
                    $("#ec_LeadfacilitatorsNod").val() +
                    $("#ec_LeadfacilitatorsAtd").val() *
                    ($("#ec_LeadfacilitatorsNoc").val() *
                        $("#ec_LeadfacilitatorsPd").val().replace(/,/g, "") *
                        $("#ec_LeadfacilitatorsNod").val() *
                        0.2) + $("#ec_LeadfacilitatorsNwh").val() *
                    ($("#ec_LeadfacilitatorsNoc").val() *
                        $("#ec_LeadfacilitatorsPd").val().replace(/,/g, "") *
                        $("#ec_LeadfacilitatorsNod").val() *
                        0.2);

                sumofEngagementCost += +sumofecLeadfacilitator;

                $("#ec_LeadfacilitatorsTotal").html(
                    currency.format(Math.ceil(sumofecLeadfacilitator))
                );
                $("#subtotal-LeadFaci").html(currency.format(Math.ceil(sumLeadFaci)));
            });
            // Co Facilitator
            $("#ef_CoFaciPdf").each(function () {
                sumCoFaci +=
                    $("#ef_CoFaciNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    $("#ef_CoFaciNod").val() +
                    $("#ef_CoFaciAtd").val() *
                    ($("#ef_CoFaciNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2) +
                    $("#ef_CoFaciNsw").val() *
                    ($("#ef_CoFaciNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumCoFaci +=
                        sumCoFaci *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumEf += +sumCoFaci;

                $("#ec_CofacilitatorsNoc").val($("#ef_CoFaciNoc").val());
                $("#ec_CofacilitatorsNod").val($("#ef_CoFaciNod").val());
                $("#ec_CofacilitatorsNwh").val($("#ef_CoFaciNsw").val());
                $("#ec_CofacilitatorsAtd").val($("#ef_CoFaciAtd").val());

                sumofecCofacilitator +=
                    $("#ec_CofacilitatorsNoc").val() *
                    $("#ec_CofacilitatorsPd").val().replace(/,/g, "") *
                    $("#ec_CofacilitatorsNod").val() +
                    $("#ec_CofacilitatorsAtd").val() *
                    ($("#ec_CofacilitatorsNoc").val() *
                        $("#ec_CofacilitatorsPd").val().replace(/,/g, "") *
                        $("#ec_CofacilitatorsNod").val() *
                        0.2) + $("#ec_CofacilitatorsNwh").val() *
                    ($("#ec_CofacilitatorsNoc").val() *
                        $("#ec_CofacilitatorsPd").val().replace(/,/g, "") *
                        $("#ec_CofacilitatorsNod").val() *
                        0.2);

                sumofEngagementCost += +sumofecCofacilitator;

                $("#ec_CofacilitatorsTotal").html(
                    currency.format(Math.ceil(sumofecCofacilitator))
                );

            });

            $("#subtotal-coFacilitator").html(currency.format(Math.ceil(sumCoFaci)));

            // Action Learning
            $("#ef_ActionLearnPdf").each(function () {
                sumActionLearn +=
                    $("#ef_ActionLearnNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    $("#ef_ActionLearnNod").val() +
                    $("#ef_ActionLearnAtd").val() *
                    ($("#ef_ActionLearnNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2) +
                    $("#ef_ActionLearnNsw").val() *
                    ($("#ef_ActionLearnNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumActionLearn +=
                        sumActionLearn *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumEf += +sumActionLearn;
            });

            $("#subtotal-ActionLearn").html(currency.format(Math.ceil(sumActionLearn)));
            // Marshal
            $("#ef_MarshalPdf").each(function () {
                sumMarshal +=
                    $("#ef_MarshalNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    $("#ef_MarshalNod").val() +
                    $("#ef_MarshalAtd").val() *
                    ($("#ef_MarshalNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2) +
                    $("#ef_MarshalNsw").val() *
                    ($("#ef_MarshalNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumMarshal +=
                        sumMarshal *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumEf += +sumMarshal;
            });
            $("#subtotal-marshal").html(currency.format(Math.ceil(sumMarshal)));
            // Documentor
            $("#ef_DocumentorPdf").each(function () {
                sumDocumentor +=
                    $("#ef_DocumentorNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    $("#ef_DocumentorNod").val() +
                    $("#ef_DocumentorAtd").val() *
                    ($("#ef_DocumentorNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2) +
                    $("#ef_DocumentorNsw").val() *
                    ($("#ef_DocumentorNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumDocumentor +=
                        sumDocumentor *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumEf += +sumDocumentor;
            });

            $("#subtotal-Documentor").html("₱" + currency.format(Math.ceil(sumDocumentor)));
            
            // Per Diem
            $("#ef_PDPdf").each(function () {
                sumPD +=
                    $("#ef_PDNod").val() *
                    $("#ef_PDPdf").val().replace(/,/g, "");

                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumPD +=
                        sumPD *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumEf += +sumPD;
            });
            $("#subtotal-PD").html("₱" + currency.format(Math.ceil(sumPD)));;


            // Onsite PC
            $("#ef_OnsitePdf").each(function () {
                sumOnsite +=
                    $("#ef_OnsiteNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    $("#ef_OnsiteNod").val() +
                    $("#ef_OnsiteAtd").val() *
                    ($("#ef_OnsiteNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2) +
                    $("#ef_OnsiteNsw").val() *
                    ($("#ef_OnsiteNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumOnsite +=
                        sumOnsite *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumEf += +sumOnsite;
            });

            $("#subtotal-Onsite").html(currency.format(Math.ceil(sumOnsite)));
            $("#program-Subtotal").html(
               "₱" + currency.format(Math.ceil(sumLeadFaci + sumCoFaci + sumActionLearn + sumMarshal + sumOnsite)))
            $("#standard_total").html("₱" + currency.format(Math.ceil(sumEf)));

            // Discountsss-------------------------------------------------------------------
            $("#input_totalPackages").each(function () {
                sum50 += (1 - +$(this).val().replace(/,/g, "") / sumEf) * 100;

                if (sum50 > 100) {
                    sumDiscount2 = sum50 - 100;
                    $("#inpt_dsct").val("-" + sumDiscount2 + "%");
                } else if (isNaN(sum50) != 0) {
                    $("#inpt_dsct").val(100 + "%");
                } else {
                    sumDiscount2 = Math.round(sum50);
                    $("#inpt_dsct").val(sumDiscount2 + "%");
                }
            });
            //Lead Consultant
            $("#sales1").each(function () {
                sumSales1 +=
                    ($("#inpt_dsct").val().replace(/,/g, "") / 100) * $(this).val();
                sumEf += +sumSales1;
            });
            $("#salesTotal1").html(currency.format(Math.ceil(sumSales1)));

            // }
            // ); line issue
        
            //end of engagement fees

            //start of engagement cost

            //Sales
            $("#tableofSale > tr").each(function () {
                sumofSales =
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#ec_sale").val() ||
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#inputforSale").val().replace(/%/g, "");

                    $(this).find("#ec_saleTotal").html("₱" + currency.format(Math.ceil(sumofSales)));

                sumofEngagementCost += +sumofSales;
            });

            //Referral
            $("#tableofReferrals > tr").each(function () {
                sumofReferral =
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#referrals").val() ||
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#inputforReferrals").val().replace(/%/g, "");

                    $(this).find("#referralsTotal").html("₱" + currency.format(Math.ceil(sumofReferral)));                
                    
                sumofEngagementCost += +sumofReferral;
            });

            //Engagement Manager
            $("#tableofEngagementManager > tr").each(function () {
                sumofEngagementManager =
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#ecengagementManager").val() ||
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#inputforEngagementManager").val().replace(/%/g, "");

                    $(this).find("#ecengagementManagerTotal").html("₱" + currency.format(Math.ceil(sumofEngagementManager)));

                sumofEngagementCost += +sumofEngagementManager;
            });

            //Offsite PC
            //$("#ec_offsitePc").each(function () {
            $("#tableofOffsite > tr").each(function () {
                sumofOffsitepc +=
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) -
                    $("#subtotal-consulting").val() - $("#subtotal-PD").val() *
                    $(this).find("#ec_offsitePc").val() || 
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) -
                    $("#subtotal-consulting").val() - $("#subtotal-PD").val() *
                    $(this).find("#inputforOffsite").val();

                    $(this).find("#ec_offsitePcTotal").html("₱" + currency.format(Math.ceil(sumofOffsitepc)));


                sumofEngagementCost += +sumofOffsitepc;
            });

            //Lead Consultant
            //Analyst
            //Designer

            //Creators Fee
            $("#ec_CreatorPd").each(function () {
                sumofecCreators +=
                    $(this).val() *
                    $("#ec_CreatorNod").val() *
                    $("#ec_CreatorNoc").val();

                sumofEngagementCost += +sumofecCreators;

                $("#ec_CreatorTotal").html(currency.format(Math.ceil(sumofecCreators)));
                $("#ec_DesignsSubtotal").html("₱" + currency.format(Math.ceil(sumofecDesigner + sumofecCreators)));
            });

            //Lead Facilitator

            //Co-facilitator

            //Action Learning Coach
            $("#ec_ActionlearningcoachNoc").val($("#ef_ActionLearnNoc").val());
            $("#ec_ActionlearningcoachNod").val($("#ef_ActionLearnNod").val());
            $("#ec_ActionlearningcoachNwh").val($("#ef_ActionLearnNsw").val());
            $("#ec_ActionlearningcoachAtd").val($("#ef_ActionLearnAtd").val());

            sumofecActionlearningcoach +=
                $("#ec_ActionlearningcoachNoc").val() *
                $("#ec_ActionlearningcoachPd").val().replace(/,/g, "") *
                $("#ec_ActionlearningcoachNod").val() +
                $("#ec_ActionlearningcoachAtd").val() *
                ($("#ec_ActionlearningcoachNoc").val() *
                    $("#ec_ActionlearningcoachPd").val().replace(/,/g, "") *
                    $("#ec_ActionlearningcoachNod").val() *
                    0.2) + $("#ec_ActionlearningcoachNwh").val() *
                ($("#ec_ActionlearningcoachNoc").val() *
                    $("#ec_ActionlearningcoachPd").val().replace(/,/g, "") *
                    $("#ec_ActionlearningcoachNod").val() *
                    0.2);

            sumofEngagementCost += +sumofecActionlearningcoach;

            $("#ec_ActionlearningcoachTotal").html(
                currency.format(Math.ceil(sumofecActionlearningcoach))
            );
            //Marshal
            $("#ec_MarshalNoc").val($("#ef_MarshalNoc").val());
            $("#ec_MarshalNod").val($("#ef_MarshalNod").val());
            $("#ec_MarshalNwh").val($("#ef_MarshalNsw").val());
            $("#ec_MarshalAtd").val($("#ef_MarshalAtd").val());

            sumofecMarshal +=
                $("#ec_MarshalNoc").val() *
                $("#ec_MarshalPd").val().replace(/,/g, "") *
                $("#ec_MarshalNod").val() +
                $("#ec_MarshalAtd").val() *
                ($("#ec_MarshalNoc").val() *
                    $("#ec_MarshalPd").val().replace(/,/g, "") *
                    $("#ec_MarshalNod").val() *
                    0.2) + $("#ec_MarshalNwh").val() *
                ($("#ec_MarshalNoc").val() *
                    $("#ec_MarshalPd").val().replace(/,/g, "") *
                    $("#ec_MarshalNod").val() *
                    0.2);


            sumofEngagementCost += +sumofecMarshal;

            $("#ec_MarshalTotal").html(
                currency.format(Math.ceil(sumofecMarshal))
            );

            //On-site PC
            $("#ec_OnsitepcNoc").val($("#ef_OnsiteNoc").val());
            $("#ec_OnsitepcNod").val($("#ef_OnsiteNod").val());
            $("#ec_OnsitepcNwh").val($("#ef_OnsiteNsw").val());
            $("#ec_OnsitepcAtd").val($("#ef_OnsiteAtd").val());

            sumofecOnsitepc +=
                $("#ec_OnsitepcNoc").val() *
                $("#ec_OnsitepcPd").val().replace(/,/g, "") *
                $("#ec_OnsitepcNod").val() +
                $("#ec_OnsitepcAtd").val() *
                ($("#ec_OnsitepcNoc").val() *
                    $("#ec_OnsitepcPd").val().replace(/,/g, "") *
                    $("#ec_OnsitepcNod").val() *
                    0.2) + $("#ec_OnsitepcNwh").val() *
                ($("#ec_OnsitepcNoc").val() *
                    $("#ec_OnsitepcPd").val().replace(/,/g, "") *
                    $("#ec_OnsitepcNod").val() *
                    0.2);


            sumofEngagementCost += +sumofecOnsitepc;

            $("#ec_OnsitepcTotal").html(
                currency.format(Math.ceil(sumofecOnsitepc))
            );
            $("#ec_ProgramsSubtotal").html(
                "₱" + currency.format(
                    Math.ceil(
                        sumofecLeadfacilitator +
                        sumofecCofacilitator +
                        sumofecActionlearningcoach +
                        sumofecMarshal +
                        sumofecOnsitepc
                    )
                )
            );

            //Documentor
            $("#ec_DocumentorsNoc").val($("#ef_DocumentorNoc").val());
            $("#ec_DocumentorsNod").val($("#ef_DocumentorNod").val());
            $("#ec_DocumentorsNwh").val($("#ef_DocumentorNsw").val());
            $("#ec_DocumentorsAtd").val($("#ef_DocumentorAtd").val());

            sumofecDocumentor +=
                $("#ec_DocumentorsNoc").val() *
                $("#ec_DocumentorsPd").val().replace(/,/g, "") *
                $("#ec_DocumentorsNod").val() +
                $("#ec_DocumentorsAtd").val() *
                ($("#ec_DocumentorsNoc").val() *
                    $("#ec_DocumentorsPd").val().replace(/,/g, "") *
                    $("#ec_DocumentorsNod").val() *
                    0.2) + $("#ec_DocumentorsNwh").val() *
                ($("#ec_DocumentorsNoc").val() *
                    $("#ec_DocumentorsPd").val().replace(/,/g, "") *
                    $("#ec_DocumentorsNod").val() *
                    0.2);


            sumofEngagementCost += +sumofecDocumentor;

            $("#ec_DocumentorsTotal").html("₱" + currency.format(Math.ceil(sumofecDocumentor)));

            //Per Diem
            $("#ec_PerdiemNod").val($("#ef_PDNod").val());

            sumofecPerdiem +=
                $("#ec_PerdiemPd").val() *
                $("#ec_PerdiemNod").val() *
                $("#ec_PerdiemNoc").val();


            sumofEngagementCost += +sumofecPerdiem;

            $("#ec_PerdiemTotal").html("₱" + currency.format(Math.ceil(sumofecPerdiem)));

            //Off-program Fee

            sumofecOffprogram +=
                $("#ec_OffprogramsNoc").val() *
                $("#ec_OffprogramsPd").val().replace(/,/g, "");


            sumofEngagementCost += +sumofecOffprogram;

            $("#ec_OffprogramsTotal").html(
                "₱" + currency.format(Math.ceil(sumofecOffprogram))
            );

            //Program Expenses
            sumofecProgramexpense +=
                ($("#ec_Programexpenses").val().replace(/%/g, "") *
                $("#input_totalPackages").val().replace(/,/g, "")) /100;


            sumofEngagementCost += +sumofecProgramexpense;

            $("#ec_ProgramexpensesTotal").html(
                "₱" + currency.format(Math.ceil(sumofecProgramexpense))
            );
            $("#ec_Totals").html(
                "₱" + currency.format(Math.ceil(sumofEngagementCost))
            );

    });
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
};

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
};

//datepicker
$(function () {
    $("#datepicker").datepicker();
    $("#datepicker").on("change", function () {
        $("#datepicker").datepicker("option", "dateFormat", "MM d, yy");
    });
});
