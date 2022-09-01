<!------------ CARD HEADER ------------>
<div class="card-header">
    <h4 class="card-title">Engagement Fees</h4>
</div>
@php
    $efLeadConsultant = 0;
    $efAnalyst = 0;
    $efDesigner = 0;
    $efLeadfaci = 0;
    $efCofaci = 0;
    $efModerator = 0;
    $efProducer = 0;
    $efDocumentor = 0;
@endphp
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
                    @foreach ($dataJoin1 as $key=>$fee_types )
                    @if ($fee_types->type === 'Lead Consultant')
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_types->id }}">
                            <input type="text" class="d-none" value="{{ $fee_types->type }}" name="fee_type[]" readonly {{$efLeadConsultant++}}>
                                {{$fee_types->type}}
                        </td>
                        <td data-title="# OF CONSULTANTS">
                            <input type="number"
                                class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ $fee_types->consultant_num }}" name="fee_consultant_num[]" id="ef_LeadconsultantNoc{{$efLeadConsultant}}"
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
                                    name="fee_hour_fee[]" id="ef_LeadconsultantHf"
                                    data-mytooltip-content="<i> &#8369;7,000 - Consultants<br>
                                    &#8369;9,000 - Senior Consultants </i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="₱7000" {{ $fee_types->hour_fee == '₱7000' ? 'selected="selected"' : '' }}>
                                        &#8369;7,000
                                    </option>
                                    <option value="₱9000" {{ $fee_types->hour_fee == '₱9000' ? 'selected="selected"' : '' }}>
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
                                value="{{ $fee_types->hour_num }}" name="fee_hour_num[]" id="ef_LeadconsultantNoh{{$efLeadConsultant}}"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->nswh }}" name="fee_nswh[]" id="ef_LeadconsultantNwh{{$efLeadConsultant}}">
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="leadTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->notes }}" name="fee_notes[]" id=""> --}}
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_types->notes}}</textarea>
                        </td>
                        @if ($efLeadConsultant === 1)
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn"><i
                                    class="fa fa-plus"></i></a>
                        </td>
                        {{-- @else
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecButton{{$efLeadConsultant}}').trigger('click');">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td> --}}
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>
                
                <tbody id="tableAnalyst">
                    @foreach ($dataJoin1 as $key=>$fee_types )
                    @if ($fee_types->type === 'Analyst')
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_types->id }}">
                            <input type="text" class="d-none" value="{{ $fee_types->type }}" name="fee_type[]" readonly {{$efAnalyst++}}>
                            {{ $fee_types->type }}
                        </td>
                        <td>
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->consultant_num }}" name="fee_consultant_num[]" id="ef_AnalystNoc{{$efAnalyst}}" max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->hour_fee }}" name="fee_hour_fee[]" id="ef_AnalystHf" data-type="currency">
                        </td>
                        <td>
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->hour_num }}" name="fee_hour_num[]" id="ef_AnalystNoh{{$efAnalyst}}"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->nswh }}" name="fee_nswh[]" id="ef_AnalystNwh{{$efAnalyst}}">
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="analyst-total">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_types->notes}}</textarea>
                        </td>
                        @if($efAnalyst === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn2"><i class="fa fa-plus"></i></a>
                            </td>
                        {{-- @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecAnalystRemove{{$efAnalyst}}').trigger('click');">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td> --}}
                        @endif
                    </tr>
                    @endif
                    @endforeach
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
                    <td class="total-td table-light"></td>
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
                    @foreach ($dataJoin1 as $key=>$fee_types )
                    @if ($fee_types->type === 'Designer')
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_types->id }}">
                            <input type="text" class="d-none" value="{{ $fee_types->type }}" name="fee_type[]" readonly {{$efDesigner++}}>
                            {{ $fee_types->type }}
                        </td>
                        <td>
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->consultant_num }}" name="fee_consultant_num[]" id="ef_DesignerNoc{{$efDesigner}}" max="100"
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
                                    name="fee_hour_fee[]" id="ef_DesignerHf"
                                    data-mytooltip-content="<i>Consulting - &#8369;6,000 - Consultants<br>
                                        &#8369;8,000 - Senior Consultants</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="₱6000" {{ $fee_types->hour_fee == '₱6000' ? 'selected="selected"' : '' }}>
                                        &#8369;6,000
                                    </option>
                                    <option value="₱8000" {{ $fee_types->hour_fee == '₱8000' ? 'selected="selected"' : '' }}>
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
                                value="{{ $fee_types->hour_num }}" name="fee_hour_num[]" id="ef_DesignerNoh{{$efDesigner}}"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->nswh }}" name="fee_nswh[]" id="ef_DesignerNwh{{$efDesigner}}">
                        </td>
                        <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="subtotal-design">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_types->notes}}</textarea>
                        </td>
                        @if ($efDesigner === 1 )
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn3"><i class="fa fa-plus"></i></a>
                            </td>
                        {{-- @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecDesignerRemove{{$efDesigner}}').trigger('click');" title="Remove">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td> --}}
                        @endif
                    </tr>
                    @endif
                    @endforeach
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
                    @foreach ($dataJoin1 as $key=>$fee_types )
                    @if ($fee_types->type === 'Lead Facilitator')
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_types->id }}">
                            <input type="text" class="d-none" value="{{ $fee_types->type }}" name="fee_type[]" readonly {{$efLeadfaci++}}>
                            {{ $fee_types->type }}</td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->consultant_num }}" name="fee_consultant_num[]" id="ef_LeadfacilitatorNoc{{$efLeadfaci}}"
                                max="100">
                        </td>
                        <td>
                            <div class="form-group has-icon-right mb-0" id="inputLeadfaci1" style="display:none">
                                <div class="position-relative">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror" value="{{ old('') }}"
                                        value="{{ $fee_types->hour_fee }}" name="fee_hour_fee[]" id="ef_InputLeadFaciHf{{$efLeadfaci}}" data-type="currency" disabled>
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
                                    name="fee_hour_fee[]" id="ef_LeadfacilitatorHf{{$efLeadfaci}}"
                                    data-mytooltip-content="<i>&#8369;10,000 - For Key Accounts w/ 2021 contract <br>
                                        &#8369;11,000 - For Key Accounts with minimum guaranteed 50 sessions w/in 6 months <br>
                                        &#8369;12,000 - all else</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="₱10000" {{ $fee_types->hour_fee == '₱10000' ? 'selected="selected"' : '' }}>
                                        &#8369;10,000
                                    </option>
                                    <option value="₱11000" {{ $fee_types->hour_fee == '₱11000' ? 'selected="selected"' : '' }}>
                                        &#8369;11,000
                                    </option>
                                    <option value="₱12000" {{ $fee_types->hour_fee == '₱12000' ? 'selected="selected"' : '' }}
                                        selected>
                                        &#8369;12,000
                                    </option>
                                    <option value="others" {{ $fee_types->hour_fee == 'others' ? 'selected="selected"' : '' }}
                                    id="others1" onclick="document.getElementById('ef_InputLeadFaciHf{{$efLeadfaci}}').focus()">
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
                                value="{{ $fee_types->hour_num }}" name="fee_hour_num[]" id="ef_LeadfacilitatorNoh{{$efLeadfaci}}"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->nswh }}" name="fee_nswh[]" id="ef_LeadfacilitatorNwh{{$efLeadfaci}}">
                        </td>
                        <td class="table-light total-td">
                            <h4 class="text-center lead" id="subtotal-lead">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_types->notes}}</textarea>
                        </td>
                        @if ($efLeadfaci === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn4"><i class="fa fa-plus"></i></a>
                            </td>
                        {{-- @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecLeadfaciRemove{{$efLeadfaci}}').trigger('click');" title="Remove">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td> --}}
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>

                <tbody id="tableCofaci">
                    @foreach ($dataJoin1 as $key=>$fee_types )
                    @if ($fee_types->type === 'Co-facilitator / Resource Speaker')
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_types->id }}">
                            <input type="text" class="d-none" value="{{ $fee_types->type }}" name="fee_type[]" readonly {{$efCofaci++}}>
                            {{ $fee_types->type }}
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->consultant_num }}" name="fee_consultant_num[]" id="ef_CofaciNoc{{$efCofaci}}" max="100">
                        </td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->hour_fee }}" name="fee_hour_fee[]" id="ef_CofaciHf" data-type="currency">
                        </td>
                        <td>
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->hour_num }}" name="fee_hour_num[]" id="ef_CofaciNoh{{$efCofaci}}"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->nswh }}" name="fee_nswh[]" id="ef_CofaciNwh{{$efCofaci}}">
                        </td>
                        <td class="table-light total-td">
                            <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_types->notes}}</textarea>
                        </td>
                        @if ($efCofaci === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn5"><i class="fa fa-plus"></i></a>
                            </td>
                        {{-- @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecCofaciRemove{{$efCofaci}}').trigger('click');">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td> --}}
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>

                <tbody id="tableModerator">
                    @foreach ($dataJoin1 as $key=>$fee_types )
                    @if ($fee_types->type === 'Moderator')
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_types->id }}">
                            <input type="text" class="d-none" value="{{ $fee_types->type }}" name="fee_type[]" readonly {{$efModerator++}}>
                            {{ $fee_types->type }}
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->consultant_num }}" name="fee_consultant_num[]" id="ef_ModeratorNoc{{$efModerator}}" max="100">
                        </td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->hour_fee }}" name="fee_hour_fee[]" id="ef_ModeratorHf"
                                data-type="currency">
                        </td>
                        <td>
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->hour_num }}" name="fee_hour_num[]" id="ef_ModeratorNoh{{$efModerator}}"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->nswh }}" name="fee_nswh[]" id="ef_ModeratorNwh{{$efModerator}}">
                        </td>
                        <td class="table-light total-td">
                            <h4 class="text-center lead" id="subtotal-moderator">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_types->notes}}</textarea>
                        </td>
                        @if ($efModerator === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn6"><i class="fa fa-plus"></i></a>
                            </td>
                        {{-- @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecModeratorRemove{{$efModerator}}').trigger('click');">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td> --}}
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>

                <tbody id="tableProducer">
                    @foreach ($dataJoin1 as $key=>$fee_types )
                    @if ($fee_types->type === 'Producer')
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_types->id }}">
                            <input type="text" class="d-none" value="{{ $fee_types->type }}" name="fee_type[]" readonly {{$efProducer++}}>
                            {{ $fee_types->type }}
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->consultant_num }}" name="fee_consultant_num[]" id="ef_ProducerNoc{{$efProducer}}" max="100">
                        </td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->hour_fee }}" name="fee_hour_fee[]" id="ef_ProducerHf" data-type="currency">
                        </td>
                        <td>
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->hour_num }}" name="fee_hour_num[]" id="ef_ProducerNoh{{$efProducer}}"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->nswh }}" name="fee_nswh[]" id="ef_ProducerNwh{{$efProducer}}">
                        </td>
                        <td class="table-light total-td">
                            <h4 class="text-center lead" id="subtotal-producer">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_types->notes}}</textarea>
                        </td>
                        @if($efProducer === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn7"><i class="fa fa-plus"></i></a>
                            </td>
                        {{-- @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecProducerRemove{{$efProducer}}').trigger('click');" title="Remove">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td> --}}
                        @endif
                    </tr>
                    @endif
                    @endforeach
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
                    <td class="table-light total-td"></td>
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
                    @foreach ($dataJoin1 as $key=>$fee_types )
                    @if ($fee_types->type === 'Documentor')
                    <tr class="table-warning">
                        <td class="table-light title">
                            <input type="hidden" name="ce_id[]" value="{{$fee_types->id }}">
                            <input type="text" class="d-none" value="{{ $fee_types->type }}" name="fee_type[]" readonly {{$efDocumentor++}}>
                            {{ $fee_types->type }}
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->consultant_num }}" name="fee_consultant_num[]" id="ef_DocumentorNoc{{$efDocumentor}}" max="100">
                        </td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->hour_fee }}" name="fee_hour_fee[]" id="ef_DocumentorHf"
                                data-type="currency">
                        </td>
                        <td>
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->hour_num }}" name="fee_hour_num[]" id="ef_DocumentorNoh{{$efDocumentor}}"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_types->nswh }}" name="fee_nswh[]" id="ef_DocumentorNwh{{$efDocumentor}}">
                        </td>
                        <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="subtotal-documentor">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_types->notes}}</textarea>
                        </td>
                        @if($efDocumentor === 1)
                        <td style="background-color: #FFFFFF;" class="border border-white"><a
                                href="javascript:void(0)" class="text-success font-18" title="Add"
                                id="addBtn8"><i class="fa fa-plus"></i></a>
                        </td>
                        {{-- @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecDocumentorRemove{{$efDocumentor}}').trigger('click');" title="Remove">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td> --}}
                        @endif
                    </tr>
                    @endif
                    @endforeach
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
                        <h4 class="text-center fw-bold text-danger" id="total-standard" onclick="this.innerHTML = $ef_Totalpackage">-</h4>
                    </td>
                    <td class="overall-total-end"></td>
                </tr>

                @foreach ($dataJoin1 as $key=>$fee_types )
                    @if ($fee_types->type === 'Discounts')
                        <tr class="table-active">
                            <td class="table-light fw-bold text-dark text-uppercase fst-italic overall-total-start">
                                <input type="text" class="d-none" value="{{$fee_types->type}}" name="fee_type[]" readonly>
                                <b>Discount given (if any)</b>
                            </td>
                            <td class="overall-total-middle">
                                <input type="text" class="d-none" value="" name="fee_consultant_num[]" readonly>
                            </td>
                            <td class="overall-total-middle table-warning">
                                <input type="text"
                                    class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror"
                                    value="{{$fee_types->hour_fee}}" name="fee_hour_fee[]" id="input-discount" readonly>
                            </td>
                            <td class="overall-total-middle">
                                <input type="text" class="d-none" value="" name="fee_hour_num[]" readonly>
                            </td>
                            <td class="overall-total-middle">
                                <input type="text" class="d-none" value="" name="fee_nswh[]" readonly>
                            </td>
                            <td class="overall-total-end"></td>
                            <td class="overall-total-end">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="fee_notes[]" id="" rows="2" cols="55">{{$fee_types->notes}}</textarea>
                            </td>
                        </tr>
                    @endif
                @endforeach

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
                            value="{{ $data->Engagement_fees_total }}" name="engagement_fees_total" id="ef_Totalpackage" data-type="currency"
                            style="font-size: 20px;">
                    </td>
                    <td class="overall-total-end"></td>
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
@include('form.budgetForm_update.update_script.ce_update_fees')
