let currency = Intl.NumberFormat("en-US");
//default value in ANALYST
document.getElementById("ef_AnalystHf").defaultValue =
    "₱" + currency.format(Math.ceil(5000));
//default value CO-FACILITATOR
document.getElementById("ef_CofaciHf").defaultValue =
    "₱" + currency.format(Math.ceil(5000));
//default value in MODERATOR
document.getElementById("ef_ModeratorHf").defaultValue =
    "₱" + currency.format(Math.ceil(3500));
//default value in PRODUCER
document.getElementById("ef_ProducerHf").defaultValue =
    "₱" + currency.format(Math.ceil(2500));
//default value in DOCUMENTOR
document.getElementById("ef_DocumentorHf").defaultValue =
    "₱" + currency.format(Math.ceil(2500));

document.getElementById("ec_AnalystHf1").defaultValue = "₱" + currency.format(
    Math.ceil(1700)
);
document.getElementById("ec_LeadfacilitatorHf").defaultValue = "₱" + currency.format(
    Math.ceil(3000)
);
document.getElementById("ec_LeadconsultantHf").defaultValue = "₱" + currency.format(
    Math.ceil(0.85 * $("#ec_LeadfacilitatorHf").val().replace(/\₱|,/g, ""))
);
document.getElementById("ec_DesignerHf").defaultValue = "₱" + currency.format(
    Math.ceil(2250)
);
document.getElementById("ec_CofacilitatorHf").defaultValue = "₱" + currency.format(
    Math.ceil(1800)
);
document.getElementById("ec_ProducerHf").defaultValue = "₱" + currency.format(
    Math.ceil(550)
);
document.getElementById("ec_DocumentorHf").defaultValue = "₱" + currency.format(
    Math.ceil(700)
);
document.getElementById("ec_ProgramHf").defaultValue = "₱" + currency.format(
    Math.ceil(1000)
);
document.getElementById("ec_Programexpense").defaultValue = 2 + "%";

$("#ec_Programexpense").on("blur", function () {
    $(this).val(function (i, v) {
        return v.replace("%", "") + "%";
    });
});