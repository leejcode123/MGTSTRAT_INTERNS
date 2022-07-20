<script>
/********* START *********/
/*****************************************************************COMMISION*****************************************************************************/
    /********* SALES *********/
    var salesNum = 1;
    $(document).ready(function() {
        $("#addBtn9").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableSales").append(
                `<tr class="table-warning" id="salesRow${++salesNum}">
                    <td class="title table-light">Sales (4% / 5% / 6% / 7%)</td>
                        <td></td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="inputSales" onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\......*)\./g, '$1');">
                            
                        </td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost table-light">
                            <h4 class="text-center" id="salesTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
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

    /********* REFERRAL *********/
    var refferalNum = 1;
    $(document).ready(function() {
        $("#addBtn10").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableReferral").append(
                `<tr class="table-warning" id="salesRow${++refferalNum}">
                    <td class="title table-light">Referral (2% / 3%)</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="inputReferral" onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\......*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost table-light">
                                <h4 class="text-center" id="referralTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
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

/*****************************************************************ENGAGEMENT MANAGER*****************************************************************************/
    /********* ENGAGEMENT MANAGER *********/
    var managerNum = 1;
    $(document).ready(function() {
        $("#addBtn11").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableEngagementmanager").append(
                `<tr class="table-warning" id="engagementmanagerRow${++managerNum}">
                    <td class="title fw-bold text-dark table-light">ENGAGEMENT MANAGER</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="inputManager" onblur="this.value = this.value.replace('%', '') + '%';"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\......*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost table-light">
                                <h4 class="text-center" id="engagementManagerTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
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

/*****************************************************************CONSULTING*****************************************************************************/
    /********* LEAD CONSULTANT *********/
    var leadConsultant = 1;
    $(document).ready(function () {
        $("#addBtn").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_tableLeadConsultant").append(`
                <tr class="table-warning" id="ec_LeadConsultant${++leadConsultant}">
                    <td class="title table-light">Lead Consultant (P7K, P9K)</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadconsultantNoc${leadConsultant}" max="100"
                            readonly>
                    </td>
                    <td class="">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadconsultantHf" data-type="currency">
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
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="ec_LeadconsultantTotal">-</h4>
                    </td>
                    <td class="total-td table-light">
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

    /********* ANALYST *********/
    var ecAnalyst = 1;
    $(document).ready(function () {
        $("#addBtn2").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_tableAnalyst").append(`
                <tr class="table-warning" id="ec_Analyst${++ecAnalyst}">
                    <td class="title table-light">Analyst</td>
                        <td class="noc">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystNoc${ecAnalyst}" max="100" readonly>
                        </td>
                        <td>
                            <input type="text"
                                class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystHf${ecAnalyst}" data-type="currency">
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
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="ec_AnalystTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
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

/*****************************************************************DESIGNER*****************************************************************************/
    /********* DESIGNER *********/
    var ecDesigner = 1;
    $(document).ready(function (){ 
        $("#addBtn3").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableDesigner").append(`
                <tr class="table-warning" id="ec_DesignerRow${++ecDesigner}">
                    <td class="title table-light">Designer (P48K / P64K)</td>
                    <td class="noh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DesignerNoc${ecDesigner}" max="100" readonly>
                    </td>
                    <td>
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DesignerHf" data-type="currency">
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
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="ec_DesignerTotal">-</h4>
                    </td>
                    <td class="total-td table-light">
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
                var dig = parseInt(id.substring(14));

                // Modifying row id.
                $(this).attr("id", `ec_DesignerRow${dig - 1}`);

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

    /********* CREATORS FEES *********/
    var ecCreators = 1;
    $(document).ready(function (){ 
        $("#addBtnCreators").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableCreators").append(`
                <tr class="table-warning" id="ec_CreatorsRow${++ecCreators}">
                    <td class="title table-light">Creators Fees (500, 1K)</td>
                    <td>
                        <input type="number"
                            class="text-center yellow-input form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CreatorsNoc${ecCreators}" max="100">
                    </td>
                    <td>
                        <fieldset>
                            <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                name="" id="ec_CreatorsHf"
                                data-mytooltip-content="<i>
                                        Creators Fee - 0 - no creators fee<br><br>
                                        500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                        1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;500
                                </option>
                                <option value="1000" {{ old('') == '1000' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;1,000
                                </option>
                            </select>
                            @error('ef_customFee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>
                    <td>
                        <input type="number"
                            class="text-center yellow-input form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CreatorsNoh${ecCreators}">
                    </td>
                    <td class=""></td>
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="ec_CreatorsTotal">-</h4>
                    </td>
                    <td class="total-td table-light">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecCreatorsRemove${ecCreators}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        }); 

        $("#ec_TableCreators").on("click", ".remove", function () {
            
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
                var dig = parseInt(id.substring(14));

                // Modifying row id.
                $(this).attr("id", `ec_CreatorsRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_CreatorsNoc${dig - 1}`);
                noh.attr("id", `ec_CreatorsNoh${dig - 1}`);
                nwh.attr("id", `ec_CreatorsNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecCreators--;
        }); 
    });

/*****************************************************************PROGRAM*****************************************************************************/
    /********* LEAD FACILITATOR *********/
    $(document).ready(function (){ 
        var ecLeadfaci = 1;
        $("#addBtn4").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableLeadfaci").append(`
                <tr class="table-warning" id="ec_LeadfaciRow${++ecLeadfaci}">
                    <td class="title table-light">Lead Facilitator</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadfacilitatorNoc${ecLeadfaci}" max="100"
                            readonly>
                    </td>
                    <td>
                        <input type="text"
                            class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadfacilitatorHf" data-type="currency">
                    </td>
                    <td class="noh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadfacilitatorNoh${ecLeadfaci}" readonly>
                    </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadfacilitatorNwh${ecLeadfaci}" readonly>
                    </td>
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="ec_LeadfacilitatorTotal">-</h4>
                    </td>
                    <td class="total-td table-light">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecLeadfaciRemove${ecLeadfaci}" title="Remove" style="visibility: hidden;">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        }); 

        $("#ec_TableLeadfaci").on("click", ".remove", function () {
            
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
                var dig = parseInt(id.substring(14));

                // Modifying row id.
                $(this).attr("id", `ec_LeadfaciRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_LeadfacilitatorNoc${dig - 1}`);
                noh.attr("id", `ec_LeadfacilitatorNoh${dig - 1}`);
                nwh.attr("id", `ec_LeadfacilitatorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecLeadfaci--;
        }); 
    });

    /********* CO-LEAD FACILITATOR *********/
    $(document).ready(function (){ 
        var ecCoLead = 1;
        $("#addBtnCoLead").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableCoLeadfaci").append(`
                <tr class="table-warning" id="ec_CoLeadRow${++ecCoLead}">
                    <td class="title table-light">Co-Lead</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CoLeadfacilitatorNoc${ecCoLead}" max="100">
                    </td>
                    <td class="hf">
                        <input type="text"
                            class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CoLeadfacilitatorHf${ecCoLead}" data-type="currency">
                    </td>
                    <td class="noh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CoLeadfacilitatorNoh${ecCoLead}">
                    </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CoLeadfacilitatorNwh${ecCoLead}">
                    </td>
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="ec_CoLeadfacilitatorTotal">-</h4>
                    </td>
                    <td class="total-td table-light">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecCoLeadRemove${ecCoLead}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        }); 

        $("#ec_TableCoLeadfaci").on("click", ".remove", function () {
            
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
                var hf = $(this).children(".hf").children("input");
                var noh = $(this).children(".noh").children("input");
                var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `ec_CoLeadRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_CoLeadfacilitatorNoc${dig - 1}`);
                hf.attr("id", `ec_CoLeadfacilitatorHf${dig - 1}`);
                noh.attr("id", `ec_CoLeadfacilitatorNoh${dig - 1}`);
                nwh.attr("id", `ec_CoLeadfacilitatorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecCoLead--;
        }); 
    });

    /********* AL COACH *********/
    $(document).ready(function (){
        var ecAlCoach = 1;
        $("#addBtnAlCoach").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableAlCoach").append(`
                <tr class="table-warning" id="ec_AlCoachRow${++ecAlCoach}">
                    <td class="title table-light">AL Coach</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_AlCoachNoc${ecAlCoach}" max="100">
                    </td>
                    <td>
                        <input type="text"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_AlCoachHf${ecAlCoach}" data-type="currency">
                    </td>
                    <td class="noh">
                        <input type="number"
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_AlCoachNoh${ecAlCoach}">
                    </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_AlCoachNwh${ecAlCoach}">
                    </td>
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="ec_AlCoachTotal">-</h4>
                    </td>
                    <td class="total-td table-light">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        }); 

        $("#ec_TableAlCoach").on("click", ".remove", function () {
            
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
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `ec_AlCoachRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_AlCoachNoc${dig - 1}`);
                noh.attr("id", `ec_AlCoachNoh${dig - 1}`);
                nwh.attr("id", `ec_AlCoachNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecAlCoach--;
        });  
    });

    /********* CO-FACILITATOR / RESOURCE SPEAKER *********/
    $(document).ready(function (){
        var ecCofaci = 1;
        $("#addBtn5").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableCofaci").append(`
                <tr class="table-warning" id="ec_CofaciRow${++ecCofaci}">
                    <td class="title table-light">Co-Facilitator / Resource Speaker</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CofacilitatorNoc${ecCofaci}" max="100"
                            readonly>
                    </td>
                    <td>
                        <input type="text"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CofacilitatorHf" data-type="currency">
                    </td>
                    <td class="noh">
                        <input type="number"
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CofacilitatorNoh${ecCofaci}" readonly>
                    </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CofacilitatorNwh${ecCofaci}" readonly>
                    </td>
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="ec_CofacilitatorTotal">-</h4>
                    </td>
                    <td class="total-td table-light">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecCofaciRemove${ecCofaci}" title="Remove" style="visibility: hidden;">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        }); 

        $("#ec_TableCofaci").on("click", ".remove", function () {
            
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
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `ec_CofaciRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_CofacilitatorNoc${dig - 1}`);
                noh.attr("id", `ec_CofacilitatorNoh${dig - 1}`);
                nwh.attr("id", `ec_CofacilitatorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecCofaci--;
        });  
    });

    /********* MODERATOR *********/
    $(document).ready(function (){
        var ecModerator = 1;
        $("#addBtn6").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableModerator").append(`
                <tr class="table-warning" id="ec_ModeratorRow${++ecModerator}">
                    <td class="title table-light">Moderator (&#8369;800, &#8369;1,100, &#8369;1,350)</td>
                    <td class="noc">
                        <input type="number"
                            class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_ModeratorNoc${ecModerator}" max="100"
                            readonly>
                    </td>
                    <td>
                        <fieldset>
                            <select
                                class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select"
                                name="" id="ec_ModeratorHf" style="background-color:#ffcccc; color:red;"
                                data-mytooltip-content="<i>
                                        <b>Moderator</b><br/>
                                        P800  - Associates<br/>
                                        P1,100 - Consultants<br/>
                                        P1,350 - Senior Consultant</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="right">
                                <option value="800" {{ old('') == '800' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;800
                                </option>
                                <option value="1100" {{ old('') == '1100' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;1,100
                                </option>
                                <option value="1350" {{ old('') == '1350' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;1,350
                                </option>
                            </select>
                            @error('ef_customFee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>
                    <td class="noh">
                        <input type="number"
                            class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_ModeratorNoh${ecModerator}" readonly>
                    </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_ModeratorNwh${ecModerator}" readonly>
                    </td>
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="ec_ModeratorTotal">-</h4>
                    </td>
                    <td class="total-td table-light">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecModeratorRemove${ecModerator}" title="Remove" style="visibility: hidden;">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        }); 

        $("#ec_TableModerator").on("click", ".remove", function () {
            
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
                var dig = parseInt(id.substring(15));

                // Modifying row id.
                $(this).attr("id", `ec_ModeratorRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_ModeratorNoc${dig - 1}`);
                noh.attr("id", `ec_ModeratorNoh${dig - 1}`);
                nwh.attr("id", `ec_ModeratorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecModerator--;
        });  
    });

    /********* PRODUCER *********/
    $(document).ready(function (){
        var ecProducer = 1;
        $("#addBtn7").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableProducer").append(`
                <tr class="table-warning" id="ec_ProducerRow${++ecProducer}">
                    <td class="title table-light">Producer</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_ProducerNoc${ecProducer}" readonly>
                    </td>
                    <td>
                        <input type="text"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_ProducerHf" data-type="currency">
                    </td>
                    <td class="noh">
                        <input type="number"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_ProducerNoh${ecProducer}" readonly>
                    </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_ProducerNwh${ecProducer}" readonly>
                    </td>
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="ec_ProducerTotal">-</h4>
                    </td>
                    <td class="total-td table-light">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecProducerRemove${ecProducer}" title="Remove" style="visibility: hidden;">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        }); 

        $("#ec_TableProducer").on("click", ".remove", function () {
            
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
                var dig = parseInt(id.substring(14));

                // Modifying row id.
                $(this).attr("id", `ec_ProducerRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_ProducerNoc${dig - 1}`);
                noh.attr("id", `ec_ProducerNoh${dig - 1}`);
                nwh.attr("id", `ec_ProducerNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecProducer--;
        });  
    });

/******************************************************************DOCUMENTOR*****************************************************************************/
    /********* DOCUMENTOR *********/
    $(document).ready(function (){
            var ecDocumentor = 1;
            $("#addBtn8").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_TableDocumentor").append(`
                    <tr class="table-warning" id="ec_DocumentorRow${++ecDocumentor}">
                        <td class="title table-light">Documentor</td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorNoc${ecDocumentor}" max="100"
                                readonly>
                        </td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorHf">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorNoh${ecDocumentor}" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorNwh${ecDocumentor}" readonly>
                        </td>
                        <td class="total-td table-light" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="ec_DocumentorTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecDocumentorRemove${ecDocumentor}" title="Remove" style="visibility: hidden;">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                    </tr>
                `);
            }); 

            $("#ec_TableDocumentor").on("click", ".remove", function () {
                
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
                    var dig = parseInt(id.substring(16));

                    // Modifying row id.
                    $(this).attr("id", `ec_DocumentorRow${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ec_DocumentorNoc${dig - 1}`);
                    noh.attr("id", `ec_DocumentorNoh${dig - 1}`);
                    nwh.attr("id", `ec_DocumentorNwh${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();
                // Decreasing total number of rows by 1.
                ecDocumentor--;
            });  
        });
/********* END *********/
</script>

