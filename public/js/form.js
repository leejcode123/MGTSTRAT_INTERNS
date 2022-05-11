function changePackage() {
    document.getElementById('packagePrice123').style.display = "none";
    var status = document.getElementById("ef_program");
    if (status.value == "Package, 51-100 pax (P54K, P60K)") {
        document.getElementById("progcost2").selectedIndex = "0";
        document.getElementById("progcost3").selectedIndex = "0";
        document.getElementById("packagePrice3").style.display = "none";
        document.getElementById("packagePrice2").style.display = "none";
        // document.getElementById("titlePrice").style.visibility = "visible";
        document.getElementById("packagePrice").style.display = "block";

    } else if (status.value == "Package, 101-200 pax (P63K, P70K)") {
        document.getElementById("progcost1").selectedIndex = "0";
        document.getElementById("progcost3").selectedIndex = "0";
        document.getElementById("packagePrice").style.display = "none";
        document.getElementById("packagePrice3").style.display = "none";
        document.getElementById("packagePrice2").style.display = "block";

    } else if (status.value == "Package, 201 pax and up (P72K, P80K)") {
        document.getElementById("progcost2").selectedIndex = "0";
        document.getElementById("progcost1").selectedIndex = "0";
        document.getElementById("packagePrice").style.display = "none";
        document.getElementById("packagePrice2").style.display = "none";
        document.getElementById("packagePrice3").style.display = "block";
    } else {
        document.getElementById("packagePrice").style.display = "none";
        document.getElementById("packagePrice2").style.display = "none";
        document.getElementById("packagePrice3").style.display = "none";
    }

}

$(document).on("change input", ".engagement-program, .engagement-fee, .program-price, .ef-sessions, .working-days", function () {
    sum = 0;
    sesSions = document.getElementById('ef-sessions').value;
    let currency = Intl.NumberFormat('en-US');

    $(".engagement-fee").each(function () {
        sum += +$(this).val();
        // document.getElementById('ef-sessions').value = 0;
        // document.getElementById('ef-workingDays').value = 0;
        // document.getElementById('packagePrice2').value = 1
        // document.getElementById('packagePrice3').value = 1
    });

    $(".program-price").each(function () {
        sum += (+$(this).val() * sesSions);
    });

    $(".working-days").each(function () {
        workingDays = (+$(this).val() * .2);

        sum += (+workingDays * $("#progcost1").val()) 
        || (+workingDays * $("#progcost2").val())
        || (+workingDays * $("#progcost3").val());
    });

    $("#totalStandard").val(currency.format(sum));
    $("#tot").val(currency.format(sum));

    totalPackage = document.getElementById('tot').value.replace(/,/g, '');
    total = document.getElementById('total').value.replace(/,/g, '');
    var profit = +totalPackage - total;
    profit = Math.ceil(profit);
    $("#profit").val(currency.format(profit));
    
    var lessPercent = document.getElementById('tot').value.replace(/,/g, '') * 0.35;
    lessPercent = Math.ceil(lessPercent);
    $("#less-percent").val(currency.format(lessPercent));

    percent = document.getElementById('less-percent').value.replace(/,/g, '');
    var netProfit = +profit - percent;
    netProfit = Math.ceil(netProfit);
    $("#net-profit").val(currency.format(netProfit));

    var profitMargin = ((+netProfit / totalPackage) * 100);
    profitMargin = Math.ceil(profitMargin);
    $("#profit-margin").val(profitMargin + "%");     
});

function input_discount() {
    let currency = Intl.NumberFormat('en-US');
    var totalStandard = document.getElementById('totalStandard').value.replace(/,/g, '');
    var disCount = document.getElementById('disc').value / 100;

    var standardPrice = Number(totalStandard) - (Number(totalStandard) * Number(disCount));

    var total = document.getElementById('tot');
    total.value = currency.format(standardPrice);
}

function isInputNumber(evt) {

    var ch = String.fromCharCode(evt.which);

    if (!(/[0-9]/.test(ch))) {
        evt.preventDefault();
    }

}

$(document).on("change keyup click", ".engagement-cost, .custom-fee, .custom-hours, .creators-fees, .creator-hour, .program-lead, .lead-hour, .lead-nonovertime, .program-moderator, .moderator-hour, .moderator-nonovertime, .program-producer, .producer-hour, .producer-nonovertime",
    function (cost) {
        let currency = Intl.NumberFormat('en-US');
        var engagementFee = document.getElementById('tot').value.replace(/,/g, '') / 100;
        customFee = document.getElementById('ec-customFee').value;
        creatorHour = document.getElementById('creators-hours').value;
        leadNonovertime = document.getElementById('lead-nonovertime').value * 0.2;
        moderatorNonovertime = document.getElementById('moderator-nonovertime').value * 0.2;
        producerHour = document.getElementById('producer-hour').value;
        producerNonovertime = document.getElementById('producer-nonovertime').value * 0.2;
        sum = 0;

        $(".engagement-cost").each(function () {
            sum += (engagementFee * +$(this).val());
        });

        $(".custom-hours").each(function () {
            sum += (+$(this).val() * customFee);
        });

        $(".program-lead").each(function () {
            programLead = ((+$(this).val() * $(".lead-hour").val()));
            sum += +programLead
        });

        $(".lead-nonovertime").each(function () {
            sum += (programLead * leadNonovertime);
        });

        $(".creators-fees").each(function () {
            sum += (+$(this).val() * creatorHour);
        });

        $(".moderator-hour").each(function () {
            moderator = (+$(this).val() * $(".program-moderator").val());
            sum += +moderator
        });

        $(".moderator-nonovertime").each(function () {
            sum += (moderator * moderatorNonovertime);
        });

        $(".program-producer").each(function () {
            producer = ($(this).val() * producerHour);
            sum += +producer;
        });

        $(".producer-nonovertime").each(function () {
            sum += (producerNonovertime * producer);
        });

        
        $("#total").val(currency.format(Math.ceil(sum)));

        totalPackage = document.getElementById('tot').value.replace(/,/g, '');
        total = document.getElementById('total').value.replace(/,/g, '');
        var profit = +totalPackage - total;
        $("#profit").val(currency.format(Math.ceil(profit)));
        
        var lessPercent = document.getElementById('tot').value.replace(/,/g, '') * 0.35;
        lessPercent = Math.ceil(lessPercent);
        $("#less-percent").val(currency.format(lessPercent));

        percent = document.getElementById('less-percent').value.replace(/,/g, '');
        var netProfit = +profit - percent;
        netProfit = Math.ceil(netProfit);
        $("#net-profit").val(currency.format(netProfit));
        
        var profitMargin = ((+netProfit / totalPackage) * 100);
        profitMargin = Math.ceil(profitMargin);
        $("#profit-margin").val(profitMargin + "%");        
        
    });

function input_expense() {
    let currency = Intl.NumberFormat('en-US');
    var engagementFee = document.getElementById('tot').value.replace(/,/g, '') / 100;
    var expense = document.getElementById('ec_programExpense').value.replace(/,/g, '');

    var standardPrice = Number(expense) * Number(engagementFee);

    var total = document.getElementById('total');
    total.value = standardPrice + sum;
}

document.getElementById("ec-creatorsFee").addEventListener("change", creatorsFee);
function creatorsFee() {
    var creatorHours = document.getElementById('creators-hours');
    if (creatorHours.value == "") {
    document.getElementById("creators-hours").value = 0;
    }
}

document.getElementById("ec-lead").addEventListener("keyup", lead);
function lead() {
    var leadHours = document.getElementById('lead-hours');
    var leadNonOvertime = document.getElementById('lead-nonovertime');
    if (leadHours.value == "" && leadNonOvertime.value == "") {
    document.getElementById("lead-hours").value = 0;
    document.getElementById("lead-nonovertime").value = 0;
    }
}

document.getElementById("ec_moderator").addEventListener("change", moderator);
function moderator() {
    var moderatorHour = document.getElementById('moderator-hour');
    var moderatorNonOvertime = document.getElementById('moderator-nonovertime');
    if(moderatorHour.value == "" && moderatorNonOvertime.value == "" ){
        document.getElementById('moderator-hour').value = 0
        document.getElementById("moderator-nonovertime").value = 0;
    }
}

document.getElementById("ec-producer").addEventListener("keyup", producer);
function producer() {
    var producerHour = document.getElementById("producer-hour");
    var producerNonOvertime = document.getElementById("producer-nonovertime");
    if(producerHour.value == "" && producerNonOvertime.value == ""){
    document.getElementById("producer-hour").value = 0;
    document.getElementById("producer-nonovertime").value = 0;
    }
}


