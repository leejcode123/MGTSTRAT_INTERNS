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

    var leadConsultant = 1;
    $(document).ready(function () {
        $("#addBtn").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_tableLeadConsultant").append(`
                <tr id="ec_LeadConsultant${++leadConsultant}">
                    <td class="title">Lead Consultant (P7K, P9K)</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadconsultantNoc${leadConsultant}" max="100"
                            readonly>
                    </td>
                    <td class="">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadconsultantHf">
                            </td>
                    <td class="noh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadconsultantNoh${leadConsultant}" readonly>
                    </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadconsultantNwh${leadConsultant}" readonly>
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_LeadconsultantTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecButton${leadConsultant}" title="Remove" style="visibility: hidden;">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        }); 
 
        $("#ec_tableLeadConsultant").on("click", ".remove", function () {
            
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();
            
            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .noh, .nwh class.
                var noc = $(this).children(".noc").children("input");
                var noh = $(this).children(".noh").children("input");
                var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(17));

                // Modifying row id.
                $(this).attr("id", `ec_LeadConsultant${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_LeadconsultantNoc${dig - 1}`);
                noh.attr("id", `ec_LeadconsultantNoh${dig - 1}`);
                nwh.attr("id", `ec_LeadconsultantNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            leadConsultant--;
        });    

    });

    var ecAnalyst = 1;
    $(document).ready(function () {
        $("#addBtn2").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_tableAnalyst").append(`
                <tr id="ec_Analyst${++ecAnalyst}">
                    <td class="title">Analyst</td>
                        <td class="noc">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystNoc${ecAnalyst}" max="100" readonly>
                        </td>
                        <td>
                            <input type="text"
                                class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystHf${ecAnalyst}">
                        </td>
                        <td class="noh">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystNoh${ecAnalyst}" readonly>
                        </td>
                        <td class="nwh">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystNwh${ecAnalyst}" readonly>
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_AnalystTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecAnalystRemove${ecAnalyst}" title="Remove" style="visibility: hidden;">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        }); 
 
        $("#ec_tableAnalyst").on("click", ".remove", function () {
            
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();
            
            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .noh, .nwh class.
                var noc = $(this).children(".noc").children("input");
                var noh = $(this).children(".noh").children("input");
                var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(10));

                // Modifying row id.
                $(this).attr("id", `ec_Analyst${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_AnalystNoc${dig - 1}`);
                noh.attr("id", `ec_AnalystNoh${dig - 1}`);
                nwh.attr("id", `ec_AnalystNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecAnalyst--;
        }); 
    });
    
    var ecDesigner = 1;
    $(document).ready(function (){ 
        $("#addBtn3").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableDesigner").append(`
                <tr id="ec_DesignerRow${++ecDesigner}">
                    <td class="title">Designer (P48K / P64K)</td>
                    <td class="noh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DesignerNoc${ecDesigner}" max="100" readonly>
                    </td>
                    <td>
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DesignerHf" max="100">
                    </td>
                    <td class="noh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DesignerNoh${ecDesigner}" readonly>
                    </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DesignerNwh${ecDesigner}" readonly>
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_DesignerTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecDesignerRemove${ecDesigner}" title="Remove" style="visibility: hidden;">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        }); 

        $("#ec_TableDesigner").on("click", ".remove", function () {
            
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();
            
            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .noh, .nwh class.
                var noc = $(this).children(".noc").children("input");
                var noh = $(this).children(".noh").children("input");
                var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(10));

                // Modifying row id.
                $(this).attr("id", `ec_Analyst${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_DesignerNoc${dig - 1}`);
                noh.attr("id", `ec_DesignerNoh${dig - 1}`);
                nwh.attr("id", `ec_DesignerNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecDesigner--;
        }); 
    });

</script>
