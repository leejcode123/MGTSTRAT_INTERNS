<!------------ CARD HEADER ------------>
    <div class="card-header">
        <h4 class="card-title">Engagement Cost</h4>
    </div>
<!------------ END CARD HEADER ------------>

<!------------ FORM BODY ------------>
    <div class="form-body container">
        <section>
            <div class="table-responsive" id="no-more-tables">
                <table class="table table-bordered" id="ec_tableEngagementCost">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th class="title-th" scope="col" width=20%></th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF CONSULTANTS</th>
                            <th class="title-middle px-4" width=15% scope="col">HOURLY FEES</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF HOURS</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT,
                                WEEKENDS HOLIDAYS *</th>
                            <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                            <th class="title-th" scope="col" width=15%>ROSTER</th>
                            <td class="border border-white add-row"> </td>
                        </tr>
                    </thead>

                <!----------------------------------------------------------------COMMISION---------------------------------------------------------------------->
                    <tr class="table-light">
                        <th class="px-4 title text-dark font-weight-bold"><b>COMMISSION</b></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                        <th class="border border-white add-row" style="display: none"> </th>
                    </tr>

                    <tbody id="tableSales">
                        <tr class="table-warning" id="salesRow">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Sales" name="cost_type[]" readonly>
                                Sales (4% / 5% / 6% / 7%)
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_consultant_num[]" readonly></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="inputSales" style="display: none;"
                                    onblur="this.value = this.value.replace('%', '') + '%';"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    maxlength="2" disabled>

                                <fieldset id="dropdownSales">
                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                        name="cost_hour_fee[]" id="sales"
                                        data-mytooltip-content="<i>
                                                <b>Sales</b><br>
                                                For large engagements, with EMs: <br>
                                                4% - discounted <br>
                                                6% - standard rates<br>
                                                <br>
                                                For regular engagements:<br>
                                                5% - discounted<br>
                                                7% - standard rates<br>
                                                <br>
                                                For Key Accounts, with EMs:<br>
                                                4% - discounted<br>
                                                5% - packaged rate</i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="0%" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                            0%
                                        </option>
                                        <option value="4%" {{ old('') == '4' ? 'selected="selected"' : '' }}
                                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                            4%
                                        </option>
                                        <option value="5%" {{ old('') == '5' ? 'selected="selected"' : '' }}
                                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                            5%
                                        </option>
                                        <option value="6%" {{ old('') == '6' ? 'selected="selected"' : '' }}
                                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                            6%
                                        </option>
                                        <option value="7%" {{ old('') == '7' ? 'selected="selected"' : '' }}
                                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                            7%
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td tbl-engmt-cost table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="salesTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn9" onclick="$('#salesTotal').html(0)"><i
                                        class="fa fa-plus"></i></a></td>
                        </tr>
                    </tbody>

                    <tbody id="tableReferral">
                        <tr class="table-warning" id="referralRow">
                            <td class="title table-light">
                                Referral (2% / 3%)
                                <input type="text" class="d-none" value="Referral" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="text" class="d-none" value="" name="cost_consultant_num[]" readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="inputReferral" style="display: none;"
                                    onblur="this.value = this.value.replace('%', '') + '%';"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    maxlength="2" disabled>

                                <fieldset id="dropdownReferral">
                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                        name="cost_hour_fee[]" id="referral"
                                        data-mytooltip-content="<i>
                                                Referral - 2% - repeat contracts from the same client<br>
                                                3% - 1st contract with a new client, or with a 2-year dormant client<br>
                                                <br>
                                                When in doubt, check with Joi on who referror is.
                                                
                                                </i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="0%" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                            title="">
                                            0%
                                        </option>
                                        <option value="2%" {{ old('') == '2' ? 'selected="selected"' : '' }}
                                            title="">
                                            2%
                                        </option>
                                        <option value="3%" {{ old('') == '3' ? 'selected="selected"' : '' }}
                                            title="">
                                            3%
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td tbl-engmt-cost table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="referralTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td class="border border-white add-row"><a href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn10"><i class="fa fa-plus"></i></a></td>
                        </tr>
                    </tbody>

                    <tbody id="tableEngagementmanager">
                        <tr class="table-warning" id="engagementmanagerRow">
                            <td class="title fw-bold text-dark table-light">
                                ENGAGEMENT MANAGER
                                <input type="text" class="d-none" value="Engagement Manager" name="cost_type[]" readonly>
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_consultant_num[]" readonly></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="inputManager" style="display: none;"
                                    onblur="this.value = this.value.replace('%', '') + '%';"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    maxlength="2" disabled>

                                <fieldset id="dropdownManager">
                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                        name="cost_hour_fee[]" id="engagementManager"
                                        style="background-color:#ffcccc; color:red;"
                                        data-mytooltip-content="<i>
                                                Engagement Manager - 4% - all Key Accounts and large engagements <br>
                                                <br>
                                                Large engagments: large scale consulting, or a series of at least 8 virtual sessions under 1 contract involving a roster of at least 2 people
                                                </i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right">
                                        <option value="0%" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                            title="">
                                            0%
                                        </option>
                                        <option value="4%" {{ old('') == '4' ? 'selected="selected"' : '' }}
                                            title="">
                                            4%
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td tbl-engmt-cost table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="engagementManagerTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td class="border border-white add-row"><a href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn11"><i class="fa fa-plus"></i></a></td>
                        </tr>
                    </tbody>

                <!----------------------------------------------------------------CONSULTING---------------------------------------------------------------------->
                    <tr class="table-light">
                        <th class="px-4 title text-dark">
                            <b>1. CONSULTING</b>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                        <th class="border border-white add-row" style="display: none"></th>
                    </tr>

                    <tbody id="ec_tableLeadConsultant">
                        <tr class="table-warning" id="ec_LeadConsultant">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Lead Consultant" name="cost_type[]" readonly>
                                Lead Consultant (P7K, P9K)
                            </td>
                            <td class="">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadconsultantNoc1" max="100"
                                    readonly>
                            </td>
                            <td class="">
                                <input type="text"
                                    class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_LeadconsultantHf" data-type="currency">
                            </td>
                            <td class="">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_LeadconsultantNoh1" readonly>
                            </td>
                            <td class="">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadconsultantNwh1" readonly>
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="ec_LeadconsultantTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td class="border border-white add-row invisible"></td>
                        </tr>
                    </tbody>

                    <tbody id="ec_tableAnalyst">
                        <tr class="table-warning" id="ec_Analyst1">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Analyst" name="cost_type[]" readonly>
                                Analyst

                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_AnalystNoc1" max="100" readonly>
                            </td>
                            <td>
                                <input type="text"
                                    class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_AnalystHf1" data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_AnalystNoh1" readonly>
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_AnalystNwh1" readonly>
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="ec_AnalystTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                        </tr>
                    </tbody>
                    
                    <tr class="table-secondary">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="ec_SubtotalConsulting">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>   

                <!----------------------------------------------------------------DESIGN---------------------------------------------------------------------->
                    <tr class="table-light">
                        <th class="title px-4 text-dark">
                            <b>2. DESIGN</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row" style="display: none"> </td>
                    </tr>

                    <tbody id=ec_TableDesigner>
                        <tr class="table-warning" id=ec_DesignerRow>
                            <td class="title table-light">Designer (P48K / P64K)
                                <input type="text" class="d-none" value="Designer" name="cost_type[]" readonly>
                            </td>
                            <td class="">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_DesignerNoc1" max="100" readonly>
                            </td>
                            <td>
                                <input type="text"
                                    class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_DesignerHf" data-type="currency">
                            </td>
                            <td class="">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_DesignerNoh1" readonly>
                            </td>
                            <td class="">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_DesignerNwh1" readonly>
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="ec_DesignerTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_TableCreators">
                        <tr class="table-warning">
                            <td class="title table-light">
                                Creators Fees (500, 1K)
                                <input type="text" class="d-none" value="Creators Fees" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CreatorsNoc1" max="100">
                            </td>
                            <td>
                                <fieldset>
                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                        name="cost_hour_fee[]" id="ec_CreatorsHf"
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
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_CreatorsNoh1">
                            </td>
                            <td class=""><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="ec_CreatorsTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtnCreators"><i
                                    class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tr class="table-secondary">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="ec_DesignSubtotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                <!----------------------------------------------------------------PROGRAM---------------------------------------------------------------------->
                    <tr class="table-light">
                        <th class="title px-4 text-dark">
                            <b>3. PROGRAM</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                        </td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                    <tbody id="ec_TableLeadfaci">
                        <tr class="table-warning">
                            <td class="title table-light">
                                Lead Facilitator
                                <input type="text" class="d-none" value="Lead Facilitator" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadfacilitatorNoc1" max="100"
                                    readonly>
                            </td>
                            <td>
                                <input type="text"
                                    class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_LeadfacilitatorHf" data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_LeadfacilitatorNoh1">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadfacilitatorNwh1" readonly>
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="ec_LeadfacilitatorTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_TableCoLeadfaci">
                        <tr class="table-warning">
                            <td class="title table-light">
                                Co-Lead
                                <input type="text" class="d-none" value="Co-Lead" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CoLeadfacilitatorNoc1" max="100">
                            </td>
                            <td>
                                <input type="text"
                                    class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_CoLeadfacilitatorHf1" data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_CoLeadfacilitatorNoh1">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_CoLeadfacilitatorNwh1">
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="ec_CoLeadfacilitatorTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtnCoLead">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    
                    <tbody id="ec_TableAlCoach">
                        <tr class="table-warning">
                            <td class="title table-light">
                                AL Coach
                                <input type="text" class="d-none" value="AL Coach" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_AlCoachNoc1" max="100">
                            </td>
                            <td>
                                <input type="text"
                                    class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_AlCoachHf1" data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_AlCoachNoh1">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_AlCoachNwh1">
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="ec_AlCoachTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtnAlCoach">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_TableCofaci">
                        <tr class="table-warning">
                            <td class="title table-light">
                                Co-Facilitator / Resource Speaker
                                <input type="text" class="d-none" value="Co-Facilitator / Resource Speaker" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CofacilitatorNoc1" max="100">
                            </td>
                            <td>
                                <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_CofacilitatorHf" data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_CofacilitatorNoh1">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_CofacilitatorNwh1" readonly>
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="ec_CofacilitatorTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_TableModerator">
                        <tr class="table-warning">
                            <td class="title table-light">
                                Moderator (&#8369;800, &#8369;1,100, &#8369;1,350)
                                <input type="text" class="d-none" value="Moderator" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="number"
                                    class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_ModeratorNoc1" max="100"
                                    readonly>
                            </td>
                            <td>
                                <fieldset>
                                    <select
                                        class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select"
                                        name="cost_hour_fee[]" id="ec_ModeratorHf" style="background-color:#ffcccc; color:red;"
                                        data-mytooltip-content="<i>
                                                <b>Moderator</b><br/>
                                                P800  - Associates<br/>
                                                P1,100 - Consultants<br/>
                                                P1,350 - Senior Consultant</i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right">
                                        <option value="???800" {{ old('') == '800' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;800
                                        </option>
                                        <option value="???1100" {{ old('') == '1100' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;1,100
                                        </option>
                                        <option value="???1350" {{ old('') == '1350' ? 'selected="selected"' : '' }}
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
                            <td>
                                <input type="number"
                                    class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_ModeratorNoh1">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_ModeratorNwh1" readonly>
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="ec_ModeratorTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td class="border border-white add-row invisible"> </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_TableProducer">
                        <tr class="table-warning">
                            <td class="title table-light">
                                Producer
                                <input type="text" class="d-none" value="Producer" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_ProducerNoc1" readonly>
                            </td>
                            <td>
                                <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_ProducerHf" data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_ProducerNoh1">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_ProducerNwh1" readonly>
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="ec_ProducerTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td class="border border-white add-row invisible"> </td>
                        </tr>
                    </tbody>

                    <tr class="table-secondary">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="ec_ProgramSubtotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                <!----------------------------------------------------------------OTHER ROLES---------------------------------------------------------------------->
                    <tr class="table-light">
                        <th class="title px-4 text-dark">
                            <b>4. OTHER ROLES</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                    <tbody id="ec_TableDocumentor">
                        <tr class="table-warning">
                            <td class="title table-light">
                                Documentor
                                <input type="text" class="d-none" value="Documentor" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_DocumentorNoc1" max="100"
                                    readonly>
                            </td>
                            <td>
                                <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_DocumentorHf" data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_DocumentorNoh1" readonly>
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_DocumentorNwh1" readonly>
                            </td>
                            <td class="total-td table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="ec_DocumentorTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td class="border border-white add-row invisible"> </td>
                        </tr>
                    </tbody>

                <!----------------------------------------------------------------OFF-PROGRAM---------------------------------------------------------------------->
                    <tr class="table-light">
                        <th class="title px-4 text-dark">
                            <b>5. OFF-PROGRAM</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                    <tr class="table-warning">
                        <td class="title table-light">
                            Off-Program fee
                            <input type="text" class="d-none" value="Off-Program fee" name="cost_type[]" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="input js-mytooltip text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_ProgramNoc" max="100"
                                data-mytooltip-content="<i>
                                        - For single or series of programs<br>
                                        - One time only<br>
                                        - Per person<br>
                                        </i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="ec_ProgramHf" data-type="currency">
                        </td>
                        <td><input type="text" class="d-none" name="cost_hour_num[]" readonly></td>
                        <td><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                        <td class="total-td table-light" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="ec_ProgramTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="">
                        </td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                <!----------------------------------------------------------------MISCELLANEOUS---------------------------------------------------------------------->
                    <tr class="table-light">
                        <th class="title px-4 text-dark">
                            <b>MISCELLANEOUS</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                    <tr class="table-warning">
                        <td class="title table-light">
                            Program Expenses
                            <input type="text" class="d-none" value="Program Expenses" name="cost_type[]" readonly>
                        </td>
                        <td><input type="text" class="d-none" name="cost_consultant_num[]" readonly></td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="ec_Programexpense"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                maxlength="5">
                        </td>
                        <td><input type="text" class="d-none" name="cost_hour_num[]" readonly></td>
                        <td><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                        <td class="total-td table-light" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="ec_ProgramexpenseTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="">
                        </td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                <!----------------------------------------------------------------TOTAL---------------------------------------------------------------------->
                    <tr class="table-active">
                        <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">
                            <b>TOTAL</b>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end">
                            <h4 class="text-center text-danger" id="ec_Total">-</h4>
                        </td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="border border-white add-row invisible"></td>
                    </tr>
                </table>
            </div>
        </section>
    </div>
<!------------ END OF FORM BODY ------------>
<script>
    document.addEventListener('keypress', function (e) {
            if (e.keyCode === 13 || e.which === 13) {
                e.preventDefault();
                return false;
            }
            
        });
</script>
<!------------ CE ENGAGEMENT COST SCRIPT ------------>
@include('form.components.customized_engagement.script.ce_engagement_cost')
