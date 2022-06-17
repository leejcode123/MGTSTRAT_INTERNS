<script>
    var salesNum = 1;
    $(document).ready(function() {
        $("#addBtn9").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableSales").append(
                `<tr id="salesRow${++salesNum}">
                    <td class="title">Sales (4% / 5% / 6% / 7%)</td>
                        <td></td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="inputSales" onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\......*)\./g, '$1');">
                            
                        </td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="salesTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            //Setting the default value of
            //sales into 0% when adding row
            const salesId = document.querySelectorAll("#sales");
            for (let i = 0; i < salesId.length; i++) {
                salesId[i].value = "0";
            }

            //if you add row the 
            //if statement will execute
            if (salesNum > 1) {
                document.getElementById("dropdownSales").style.display =
                    "none"; //the dropdown will display none
                document.getElementById("inputSales").style.display =
                    ""; //the input field will remove the style of "display = none;"
                document.getElementById("inputSales").disabled =
                    false; //remove the disabled attribute in input field
                // document.getElementById("inputSales").value = "";   //to remove the last inputed value
            }
        });

        // Remove row   
        $("#tableSales").on("click", ".remove", function() {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Removing the current row.
            $(this).closest("tr").remove();

            // Decreasing total number of rows by 1.
            salesNum--;
            if (salesNum == 1) {
                document.getElementById("inputSales").style.display = "none";
                document.getElementById("sales").value = "0";
                document.getElementById("dropdownSales").style.display = "";
                document.getElementById("inputSales").value = ""; //to remove the last inputed value
            }

        });
    });

    var refferalNum = 1;
    $(document).ready(function() {
        $("#addBtn10").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableReferral").append(
                `<tr id="salesRow${++refferalNum}">
                    <td class="title">Referral (2% / 3%)</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="inputReferral" onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\......*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="referralTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                        <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            //Setting the default value of
            //sales into 0% when adding row
            const referralId = document.querySelectorAll("#referral");
            for (let i = 0; i < referralId.length; i++) {
                referralId[i].value = "0";
            }

            //if you add row the 
            //if statement will execute
            if (refferalNum > 1) {
                document.getElementById("dropdownReferral").style.display =
                    "none"; //the dropdown will display none
                document.getElementById("inputReferral").style.display =
                    ""; //the input field will remove the style of "display = none;"
                document.getElementById("inputReferral").disabled =
                    false; //remove the disabled attribute in input field
                // document.getElementById("inputSales").value = "";   //to remove the last inputed value
            }
        });

        // Remove row   
        $("#tableReferral").on("click", ".remove", function() {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Removing the current row.
            $(this).closest("tr").remove();

            // Decreasing total number of rows by 1.
            refferalNum--;
            if (refferalNum == 1) {
                document.getElementById("inputReferral").style.display = "none";
                document.getElementById("referral").value = "0";
                document.getElementById("dropdownReferral").style.display = "";
                document.getElementById("inputReferral").value = ""; //to remove the last inputed value
            }

        });
    });

    var managerNum = 1;
    $(document).ready(function() {
        $("#addBtn11").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableEngagementmanager").append(
                `<tr id="engagementmanagerRow${++managerNum}">
                    <td class="title fw-bold text-dark">ENGAGEMENT MANAGER</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="inputManager" onblur="this.value = this.value.replace('%', '') + '%';"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\......*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="engagementManagerTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                        <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            //Setting the default value of
            //sales into 0% when adding row
            const managerId = document.querySelectorAll("#engagementManager");
            for (let i = 0; i < managerId.length; i++) {
                managerId[i].value = "0";
            }

            //if you add row the 
            //if statement will execute
            if (managerNum > 1) {
                document.getElementById("dropdownManager").style.display =
                    "none"; //the dropdown will display none
                document.getElementById("inputManager").style.display =
                    ""; //the input field will remove the style of "display = none;"
                document.getElementById("inputManager").disabled =
                    false; //remove the disabled attribute in input field
                // document.getElementById("inputSales").value = "";   //to remove the last inputed value
            }
        });

        // Remove row   
        $("#tableEngagementmanager").on("click", ".remove", function() {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Removing the current row.
            $(this).closest("tr").remove();

            // Decreasing total number of rows by 1.
            managerNum--;
            if (managerNum == 1) {
                document.getElementById("inputManager").style.display = "none";
                document.getElementById("engagementManager").value = "0";
                document.getElementById("dropdownManager").style.display = "";
                document.getElementById("inputManager").value = ""; //to remove the last inputed value
            }

        });
    });
</script>
