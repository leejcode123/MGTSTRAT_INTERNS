<script>
    var ecsaleNum = 1;
    $(document).ready(function() {
        $("#ecaddButton").on("click", function() {
            $("#tableofSale").append(
                `<tr class="" id="rowofSale${++ecsaleNum}">
                            <td class="title">Sales (4% / 5% / 6% / 7%)</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforSale"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="ec_saleTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            const ecsaleId = document.querySelectorAll("#ec_sale");
            for (let i = 0; i < ecsaleId.length; i++) {
                ecsaleId[i].value = "0";
            }

            if (ecsaleNum > 1) {
                document.getElementById("dropdownforSale").style.display =
                    "none"; 
                document.getElementById("inputforSale").style.display =
                    ""; 
                document.getElementById("inputforSale").disabled =
                    false;
            
            }
        });

        $("#tableofSale > tr").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecsaleNum--;
            if (ecsaleNum == 1) {
                document.getElementById("inputforSale").style.display = "none";
                document.getElementById("ec_sale").value = "0";
                document.getElementById("dropdownforSale").style.display = "";
                document.getElementById("inputforSale").value = ""; 
            }

        });

    });

    var ecreferralsNum = 1;
    $(document).ready(function() {
        $("#ecaddButton2").on("click", function() {
            $("#tableofReferrals").append(
                `<tr class="" id="rowofReferrals${++ecreferralsNum}">
                            <td class="title">Referral (2% / 3%)</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforReferrals"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="referralsTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            const ecreferralsId = document.querySelectorAll("#referrals");
            for (let i = 0; i < ecreferralsId.length; i++) {
                ecreferralsId[i].value = "0";
            }

            if (ecreferralsNum > 1) {
                document.getElementById("dropdownforReferrals").style.display =
                    "none"; 
                document.getElementById("inputforReferrals").style.display =
                    ""; 
                document.getElementById("inputforReferrals").disabled =
                    false;
            
            }
        });

        $("#tableofReferrals > tr").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecreferralsNum--;
            if (ecreferralsNum == 1) {
                document.getElementById("inputforReferrals").style.display = "none";
                document.getElementById("referrals").value = "0";
                document.getElementById("dropdownforReferrals").style.display = "";
                document.getElementById("inputforReferrals").value = ""; 
            }

        });

    });

    var ecengagementNum = 1;
    $(document).ready(function() {
        $("#ecaddButton3").on("click", function() {
            $("#tableofEngagementManager").append(
                `<tr class="" id="rowofEngagementManager${++ecengagementNum}">
                            <td class="title fw-bold text-dark">ENGAGEMENT MANAGER(4%)</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforEngagementManager"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="ecengagementManagerTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            const ecengagementId = document.querySelectorAll("#ecengagementManager");
            for (let i = 0; i < ecengagementId.length; i++) {
                ecengagementId[i].value = "0";
            }

            if (ecengagementNum > 1) {
                document.getElementById("dropdownforEngagementManager").style.display =
                    "none"; 
                document.getElementById("inputforEngagementManager").style.display =
                    ""; 
                document.getElementById("inputforEngagementManager").disabled =
                    false;
            
            }
        });

        $("#tableofEngagementManager > tr").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecengagementNum--;
            if (ecengagementNum == 1) {
                document.getElementById("inputforEngagementManager").style.display = "none";
                document.getElementById("ecengagementManager").value = "0";
                document.getElementById("dropdownforEngagementManager").style.display = "";
                document.getElementById("inputforEngagementManager").value = ""; 
            }

        });

    });

    var ecoffsiteNum = 1;
    $(document).ready(function() {
        $("#ecaddButton4").on("click", function() {
            $("#tableofOffsite").append(
                `<tr class="" id="rowofOffsite${++ecoffsiteNum}">
                            <td class="title fw-bold text-dark">OFFSITE PC(3%/4%/5%)</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforOffsite"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="ec_offsitePcTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            const ecoffsiteId = document.querySelectorAll("#ec_offsitePc");
            for (let i = 0; i < ecoffsiteId.length; i++) {
                ecoffsiteId[i].value = "0";
            }

            if (ecoffsiteNum > 1) {
                document.getElementById("dropdownforOffsite").style.display =
                    "none"; 
                document.getElementById("inputforOffsite").style.display =
                    ""; 
                document.getElementById("inputforOffsite").disabled =
                    false;
            
            }
        });

        $("#tableofOffsite > tr").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecoffsiteNum--;
            if (ecoffsiteNum == 1) {
                document.getElementById("inputforOffsite").style.display = "none";
                document.getElementById("ec_offsitePc").value = "0";
                document.getElementById("dropdownforOffsite").style.display = "";
                document.getElementById("inputforOffsite").value = ""; 
            }

        });

    });

</script>