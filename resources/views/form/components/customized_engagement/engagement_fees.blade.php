<!------------ CARD HEADER ------------>
    <div class="card-header">
        <h4 class="card-title">Engagement Fees</h4>
    </div>

<!------------ FORM BODY ------------>
    <div class="form-body container">
        <section>
            <div class="table-responsive" id="no-more-tables" data-animation="slideHorz">
                <table class="table table-bordered" id="ec_tableEngagementFees">
                <!----------------------------------------------------------------TABLE HEADING TITLE---------------------------------------------------------------------->
                    <thead class="table-dark">
                        <b>
                            <tr class="text-center">
                                <th class="title-th" scope="col" width=20%></th>
                                <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF CONSULTANTS</th>
                                <th class="title-middle px-4" width=15% scope="col">HOURLY FEES</th>
                                <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF HOURS</th>
                                <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>    
                                    <label for="Night Shift, Weekends and Holidays">NSWH</label>
                                    <select
                                        class="input js-mytooltip form-select form-select-sm engagement-fee @error('') is-invalid @enderror select"
                                        name="" id="nswh">
                                        <option value="0.1" {{ old('') == '0.1' ? 'selected="selected"' : '' }}>
                                            &#8369;10%
                                        </option>
                                        <option value="0.15" {{ old('') == '0.15' ? 'selected="selected"' : '' }}>
                                            &#8369;15%
                                        </option>
                                        <option value="0.2" {{ old('') == '0.2' ? 'selected="selected"' : '' }} selected>
                                            &#8369;20%
                                        </option>
                                        <option value="0.25" {{ old('') == '0.25' ? 'selected="selected"' : '' }}>
                                            &#8369;25%
                                        </option>
                                    </select>
                                </th>
                                {{-- <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT,
                                    WEEKENDS HOLIDAYS *</th> --}}
                                <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                                <th class="title-th" scope="col" width=15%>NOTES</th>
                                <td class="add-row border border-white"> </td>
                            </tr>
                        </b>
                    </thead>

                <!----------------------------------------------------------------CONSULTING---------------------------------------------------------------------->
                    <tr class="">
                        <th class="px-4 title table-light">
                            <b>1. CONSULTING</b>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="table-light total-td"></th>
                        <th class="table-light total-td"></th>
                        <td class="border border-white"> </td>
                    </tr>

                    <tbody id="tableLeadconsultant">
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Lead Consultant" name="type[]" readonly>
                                Lead Consultant
                            </td>
                            <td data-title="# OF CONSULTANTS">
                                <input type="number"
                                    class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="consultant_num[]" id="ef_LeadconsultantNoc1"
                                    title="" max="100"
                                    data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                    special research (i.e. to study client materials or client -required materials, industry
                                    or function specific content), creation of client-specific learning aids/tools
                                    (i.e. assessments, c</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <fieldset>
                                    <select class="form-select input js-mytooltip @error('') is-invalid @enderror"
                                        name="hour_fee[]" id="ef_LeadconsultantHf"
                                        data-mytooltip-content="<i> &#8369;7,000 - Consultants<br>
                                        &#8369;9,000 - Senior Consultants </i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="₱7000" {{ old('') == '₱7000' ? 'selected="selected"' : '' }}>
                                            &#8369;7,000
                                        </option>
                                        <option value="₱9000" {{ old('') == '₱9000' ? 'selected="selected"' : '' }}>
                                            &#8369;9,000
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td>
                                <input type="number"
                                    class="form-control input-table input js-mytooltip @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_num[]" id="ef_LeadconsultantNoh1"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="nswh[]" id="ef_LeadconsultantNwh1">
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="leadTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    name="notes[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                    class="text-success font-18" title="Add" id="addBtn"><i
                                        class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="tableAnalyst">
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Analyst" name="type[]" readonly>
                                Analyst
                            </td>
                            <td>
                                <input type="number"
                                    class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="consultant_num[]" id="ef_AnalystNoc1" max="100"
                                    data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                    special research (i.e. to study client materials or client -required materials, industry
                                    or function specific content), creation of client-specific learning aids/tools
                                    (i.e. assessments, c</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_fee[]" id="ef_AnalystHf" data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_num[]" id="ef_AnalystNoh1"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="nswh[]" id="ef_AnalystNwh1">
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="analyst-total">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="notes[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn2"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tr class="">
                        <td class="title fw-bold text-dark fst-italic table-light">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="subtotal-consulting">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="border border-white add-row"></td>
                    </tr>

                <!----------------------------------------------------------------DESIGN---------------------------------------------------------------------->
                    <tr class="">
                        <th class="title px-4 text-dark table-light">
                            <b>2. DESIGN</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="table-light total-td"></td>
                        <td class="table-light total-td"></td>
                    </tr>

                    <tbody id="tableDesigner">
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Designer" name="type[]" readonly>
                                Designer
                            </td>
                            <td>
                                <input type="number"
                                    class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="consultant_num[]" id="ef_DesignerNoc1" max="100"
                                    data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                        special research (i.e. to study client materials or client -required materials, industry
                                        or function specific content), creation of client-specific learning aids/tools
                                        (i.e. assessments, c</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <fieldset>
                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror select"
                                        name="hour_fee[]" id="ef_DesignerHf"
                                        data-mytooltip-content="<i>Consulting - &#8369;6,000 - Consultants<br>
                                            &#8369;8,000 - Senior Consultants</i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="₱6000" {{ old('') == '₱6000' ? 'selected="selected"' : '' }}>
                                            &#8369;6,000
                                        </option>
                                        <option value="₱8000" {{ old('') == '₱8000' ? 'selected="selected"' : '' }}>
                                            &#8369;8,000
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td>
                                <input type="number"
                                    class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_num[]" id="ef_DesignerNoh1"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="nswh[]" id="ef_DesignerNwh1">
                            </td>
                            <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                                <h4 class="text-center" id="subtotal-design">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="notes[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn3"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                <!----------------------------------------------------------------PROGRAM---------------------------------------------------------------------->
                    <tr class="">
                        <th class="title px-4 text-dark table-light">
                            <b>3. PROGRAM</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="table-light total-td"></td>
                        <td class="table-light total-td"></td>
                    </tr>

                    <tbody id="tableLeadfaci">
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Lead Facilitator" name="type[]" readonly>
                                Lead Facilitator</td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="consultant_num[]" id="ef_LeadfacilitatorNoc1"
                                    max="100">
                            </td>
                            <td>
                                <div class="form-group has-icon-right mb-0" id="inputLeadfaci1" style="display:none">
                                    <div class="position-relative">
                                        <input type="text" class="form-control input-table @error('') is-invalid @enderror" value="{{ old('') }}"
                                            name="hour_fee[]" id="ef_InputLeadFaciHf1" data-type="currency" disabled>
                                        <div class="form-control-icon">
                                            <a href="javascript:void(0)" class="deleteIcon" id="deleteIcon1">
                                                <i class="fa-solid fa-square-xmark text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <fieldset>
                                    <select
                                        class="input js-mytooltip form-select engagement-fee @error('') is-invalid @enderror select"
                                        name="hour_fee[]" id="ef_LeadfacilitatorHf1"
                                        data-mytooltip-content="<i>&#8369;10,000 - For Key Accounts w/ 2021 contract <br>
                                            &#8369;11,000 - For Key Accounts with minimum guaranteed 50 sessions w/in 6 months <br>
                                            &#8369;12,000 - all else</i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="₱10000" {{ old('') == '₱10000' ? 'selected="selected"' : '' }}>
                                            &#8369;10,000
                                        </option>
                                        <option value="₱11000" {{ old('') == '₱11000' ? 'selected="selected"' : '' }}>
                                            &#8369;11,000
                                        </option>
                                        <option value="₱12000" {{ old('') == '₱12000' ? 'selected="selected"' : '' }}
                                            selected>
                                            &#8369;12,000
                                        </option>
                                        <option value="others" {{ old('') == 'others' ? 'selected="selected"' : '' }}
                                        id="others1" onclick="document.getElementById('ef_InputLeadFaciHf1').focus()">
                                            Others
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
                                    class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_num[]" id="ef_LeadfacilitatorNoh1"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="nswh[]" id="ef_LeadfacilitatorNwh1">
                            </td>
                            <td class="table-light total-td">
                                <h4 class="text-center lead" id="subtotal-lead">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="notes[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn4"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="tableCofaci">
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Co-facilitator / Resource Speaker" name="type[]" readonly>
                                Co-facilitator / Resource Speaker
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="consultant_num[]" id="ef_CofaciNoc1" max="100">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_fee[]" id="ef_CofaciHf" data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_num[]" id="ef_CofaciNoh1"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="nswh[]" id="ef_CofaciNwh1">
                            </td>
                            <td class="table-light total-td">
                                <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="notes[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn5"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="tableModerator">
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Designer" name="type[]" readonly>
                                Moderator
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="consultant_num[]" id="ef_ModeratorNoc1" max="100">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_fee[]" id="ef_ModeratorHf"
                                    data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_num[]" id="ef_ModeratorNoh1"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="nswh[]" id="ef_ModeratorNwh1">
                            </td>
                            <td class="table-light total-td">
                                <h4 class="text-center lead" id="subtotal-moderator">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="notes[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn6"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="tableProducer">
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Producer" name="type[]" readonly>
                                Producer
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="consultant_num[]" id="ef_ProducerNoc1" max="100">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_fee[]" id="ef_ProducerHf" data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_num[]" id="ef_ProducerNoh1"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="nswh[]" id="ef_ProducerNwh1">
                            </td>
                            <td class="table-light total-td">
                                <h4 class="text-center lead" id="subtotal-producer">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="notes[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn7"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tr class="">
                        <td class="title fw-bold text-dark fst-italic table-light">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="program-subtotal">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="border border-white add-row"></td>
                    </tr>

                <!----------------------------------------------------------------OTHER ROLES---------------------------------------------------------------------->
                    <tr class="">
                        <th class="title px-4 text-dark table-light">
                            <b>4. OTHER ROLES</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="table-light total-td"></td>
                        <td class="table-light total-td"></td>
                    </tr>

                    <tbody id="tableDocumentor">
                        <tr class="table-warning">
                            <td class="table-light title">
                                <input type="text" class="d-none" value="Documentor" name="type[]" readonly>
                                Documentor
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="consultant_num[]" id="ef_DocumentorNoc1" max="100">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_fee[]" id="ef_DocumentorHf"
                                    data-type="currency">
                            </td>
                            <td>
                                <input type="number"
                                    class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="hour_num[]" id="ef_DocumentorNoh1"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="nswh[]" id="ef_DocumentorNwh1">
                            </td>
                            <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="subtotal-documentor">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="notes[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn8"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                <!----------------------------------------------------------------TOTAL PACKAGE---------------------------------------------------------------------->
                    <tr class="table-active overall-total">
                        <td class="table-light text-uppercase text-dark fst-italic fw-bold overall-total-start">
                            <b>TOTAL STANDARD FEES</b>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center fw-bold text-danger" id="total-standard">-</h4>
                        </td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    <tr class="table-active">
                        <td class="table-light fw-bold text-dark text-uppercase fst-italic overall-total-start">
                            <b>Discount given (if any)</b>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle table-warning">
                            <input type="text"
                                class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="input-discount" readonly>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end"></td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    <tr class="table-active">
                        <td class="table-light fw-bold text-uppercase text-dark fst-italic overall-total-start">
                            <b>Total Package</b>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end table-warning">
                            <input type="text"
                                class="tf-f34 form-control text-center text-danger fw-bolder input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_Totalpackage" data-type="currency"
                                style="font-size: 20px;">
                        </td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
<!---------- END OF FORM BODY ---------->

<!------------ LEAD FACILITATOR DROPDOWN SCRIPT ------------>
    <script>
        $(document).ready(function() {
            $("#tableLeadfaci").each(function () {
                $(`#ef_LeadfacilitatorHf1`).click(function () {
                    var others = $(`#ef_LeadfacilitatorHf1`);
                    if ($('#others1').is(':selected')) {
                        $(`#inputLeadfaci1`).css("display", "")
                        $(`#ef_InputLeadFaciHf1`).prop('disabled', false)
                        $(`#ef_InputLeadFaciHf1`).val("₱")
                        $(`#ef_LeadfacilitatorHf1`).prop('disabled', true)
                        $(`#ef_LeadfacilitatorHf1`).css("display", "none")
                    } else {
                        $(`#inputLeadfaci1`).css("display", "none")
                    }
                    // if ($('#capability${dates}').is(':selected')){

                    // }
                });

                $('#deleteIcon1').click(function() {
                    // $(this).prev('input').val('').trigger('change').focus();
                    $(`#inputLeadfaci1`).css("display", "none")
                    $(`#ef_InputLeadFaciHf1`).prop('disabled', true)
                    $(`#ef_LeadfacilitatorHf1`).prop('disabled', false)
                    $(`#ef_LeadfacilitatorHf1`).css("display", "")
                    $(`#ef_LeadfacilitatorHf1`).val(12000)
                });
            });
        });
    </script>
@include('form.components.customized_engagement.script.ce_engagement_fees')
