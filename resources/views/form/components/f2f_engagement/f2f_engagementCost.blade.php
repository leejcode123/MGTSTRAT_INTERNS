<hr>
<div class="card-header">
    <h4 class="card-title">Engagement Cost</h4>
</div>
<div class="form-body container">
    <section>
        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th class="title-th" scope="col" width=15%></th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF CONSULTANTS</th>
                        <th class="title-middle px-4" width=15% scope="col">PER DAY</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF DAYS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>ADDITIONAL TRAVEL DAYS *</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT,
                            WEEKENDS HOLIDAYS *</th>
                        <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                        <th class="title-th" scope="col" width=15%>ROSTER</th>
                    </tr>
                </thead>

                <tbody>

                    {{-- Consulting --}}
                    <tr class="">
                        <th class="px-4 title text-dark fw-bolder">COMMISSION</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                    </tr>
                    <tr class="" id="lead-consultant">
                        <td class="title">Sales (4% / 5% / 6% / 7%)</td>
                        <td></td>
                        <td>
                            <fieldset>
                                <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="" id="sales"
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
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        0%
                                    </option>
                                    <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        4%
                                    </option>
                                    <option value="5" {{ old('') == '5' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        5%
                                    </option>
                                    <option value="6" {{ old('') == '6' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        6%
                                    </option>
                                    <option value="7" {{ old('') == '7' ? 'selected="selected"' : '' }}
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="salesTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="title">Referral (2% / 3%)</td>
                        <td></td>
                        <td>
                            <fieldset>
                                <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="" id="referral"
                                    data-mytooltip-content="<i>
                                        Referral - 2% - repeat contracts from the same client<br>
                                        3% - 1st contract with a new client, or with a 2-year dormant client<br>
                                        <br>
                                        When in doubt, check with Joi on who referror is.
                                        
                                        </i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} title="">
                                        0%
                                    </option>
                                    <option value="2" {{ old('') == '2' ? 'selected="selected"' : '' }} title="">
                                        2%
                                    </option>
                                    <option value="3" {{ old('') == '3' ? 'selected="selected"' : '' }} title="">
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="referralTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="5"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>
                    <tr class="">
                        <td class="title fw-bold text-dark">ENGAGEMENT MANAGER(4%)</td>
                        <td></td>
                        <td>
                            <fieldset>
                                <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name=""
                                    id="engagementManager" style="background-color:#ffcccc; color:red;"
                                    data-mytooltip-content="<i>
                                        Engagement Manager - 4% - all Key Accounts and large engagements <br>
                                        <br>
                                        Large engagments: large scale consulting, or a series of at least 8 virtual sessions under 1 contract involving a roster of at least 2 people
                                        </i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} title="">
                                        0%
                                    </option>
                                    <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }} title="">
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="engagementManagerTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    <tr class="">
                        <td class="title fw-bold text-dark">OFFSITE PC(3%/4%/5%)</td>
                        <td></td>
                        <td>
                            <fieldset>
                                <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name=""
                                    id="engagementManager" style="background-color:#ffcccc; color:red;"
                                    data-mytooltip-content="<i>
                                        Engagement Manager - 4% - all Key Accounts and large engagements <br>
                                        <br>
                                        Large engagments: large scale consulting, or a series of at least 8 virtual sessions under 1 contract involving a roster of at least 2 people
                                        </i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} title="">
                                        0%
                                    </option>
                                    <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }} title="">
                                        3%
                                    </option>
                                    <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }} title="">
                                        4%
                                    </option>
                                    <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }} title="">
                                        5%
                                    </option>
                                </select>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="engagementManagerTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="5"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>

                    {{-- Consulting --}}
                    <tr class="">
                        <th class="px-4 title text-dark">1. CONSULTING</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                    </tr>
                    <tr class="" id="lead-consultant">
                        <td class="title">Lead Consultant (P7K, P9K)</td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadconsultantNoc" max="100" readonly>
                        </td>
                        <td class="">
                            <input type="text"
                                class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadconsultantHf">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadconsultantNoh" readonly>
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadconsultantNoh" readonly>
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadconsultantNwh" readonly>
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_LeadconsultantTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="title">Analyst</td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystNoc" max="100" readonly>
                        </td>
                        <td class="">
                            <input type="text"
                                class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystHf">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystNoh" readonly>
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystNoh" readonly>
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystNwh" readonly>
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_AnalystTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr class="table-secondary">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="ec_SubtotalConsulting">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="5"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>

                    {{-- Design --}}
                    <tr class="">
                        <th class="title px-4 text-dark">2. DESIGN</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
                    <tr>
                        <td class="title">Designer (P48K / P64K)</td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DesignerNoc" max="100" readonly>
                        </td>
                        <td>
                            <input type="text"
                                class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DesignerHf" max="100">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DesignerNoh" readonly>
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DesignerNoh" readonly>
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DesignerNwh" readonly>
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_DesignerTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">Creators Fees (500, 1K)</td>
                        <td>
                            <input type="number"
                                class="text-center yellow-input form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CreatorsNoc" max="100"
                                >
                        </td>
                        <td>
                            <fieldset>
                                <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="" id="ec_CreatorsHf"
                                    data-mytooltip-content="<i>
                                        Creators Fee - 0 - no creators fee<br><br>
                                        500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                        1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }} title="">
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
                                value="{{ old('') }}" name="" id="ec_CreatorsNoc" max="100"
                                >
                        </td>
                        <td>
                            <input type="number"
                                class="text-center yellow-input form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CreatorsNoh">
                        </td>
                        <td class=""></td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_CreatorsTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr class="table-secondary">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="ec_DesignSubtotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="5"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>

                    {{-- Program --}}
                    <tr class="">
                        <th class="title px-4 text-dark">3. PROGRAM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
                    <tr>
                        <td class="title">Lead Facilitator</td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadfacilitatorNoc" max="100" readonly>
                        </td>
                        <td>
                            <input type="text"
                                class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadfacilitatorHf">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadfacilitatorNoh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadfacilitatorNoh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadfacilitatorNwh" readonly>
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_LeadfacilitatorTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="title">Co-Facilitator / Resource Speaker</td>
                        <td>
                            <input type="number"
                                class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CofacilitatorNoc" max="100" readonly>
                        </td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CofacilitatorHf" ;>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CofacilitatorNoh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CofacilitatorNoh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CofacilitatorNwh" readonly>
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_CofacilitatorTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">Action Learning Coach (&#8369;800, &#8369;1,100, &#8369;1,350)</td>
                        <td>
                            <input type="number"
                                class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ModeratorNoc" max="100" readonly>
                        </td>
                        <td>
                            <fieldset>
                                <select class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select" name=""
                                    id="ec_ModeratorHf" style="background-color:#ffcccc; color:red;"
                                    data-mytooltip-content="<i>
                                        <b>Moderator</b><br/>
                                        P800  - Associates<br/>
                                        P1,100 - Consultants<br/>
                                        P1,350 - Senior Consultant</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right">
                                    <option value="800" {{ old('') == '800' ? 'selected="selected"' : '' }} title="">
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
                        <td>
                            <input type="number"
                                class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ModeratorNoh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ModeratorNwh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ModeratorNwh" readonly>
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_ModeratorTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">Marshal</td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProducerNoc" readonly>
                        </td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProducerHf">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProducerNoh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProducerNoh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProducerNwh" readonly>
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_ProducerTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">On-site PC (P4400/P6600/P8500)</td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProducerNoc" readonly>
                        </td>
                        <td>
                            <fieldset>
                                <select class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select" name=""
                                    id="ec_ModeratorHf" style="background-color:#ffcccc; color:red;"
                                    data-mytooltip-content="<i>
                                        <b>On-site PC</b><br/>
                                        P4,400<br/>
                                        P6,600<br/>
                                        P8,500</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right">
                                    <option value="4400" {{ old('') == '4400' ? 'selected="selected"' : '' }} title="">
                                        &#8369;4,400
                                    </option>
                                    <option value="6600" {{ old('') == '6600' ? 'selected="selected"' : '' }}
                                        title="">
                                        &#8369;6,600
                                    </option>
                                    <option value="8500" {{ old('') == '8500' ? 'selected="selected"' : '' }}
                                        title="">
                                        &#8369;8,500
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
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProducerNoh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProducerNoh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProducerNwh" readonly>
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_ProducerTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr class="table-secondary">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
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
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="5"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>

                    {{-- Other roles --}}
                    <tr class="">
                        <th class="title px-4 text-dark">4. OTHER ROLES</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
                    <tr>
                        <td class="title">Documentor</td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorNoc" max="100" readonly>
                        </td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorHf">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorNoh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorNoh" readonly>
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorNwh" readonly>
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="ec_DocumentorTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="5"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>

                    {{-- Per Diem --}}
                    <tr class="">
                        <th class="title px-4 text-dark">5. PER DIEM</th>
                        <td>
                            <input type="number"
                                class="text-center yellow-input form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CreatorsNoc" max="100"
                                >
                        </td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProgramHf">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorNoh" readonly>
                        </td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="ec_ProgramTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="5"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>

                    {{-- Off-Program --}}
                    <tr class="">
                        <th class="title px-4 text-dark">6. OFF-PROGRAM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
                    <tr>
                        <td class="title">Off-Program fee</td>
                        <td>
                            <input type="number"
                                class="input js-mytooltip yellow-input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProgramNoc" max="100"
                                data-mytooltip-content="<i>
                                    - For single or series of programs<br>
                                    - One time only<br>
                                    - Per person<br>
                                    </i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="right">
                        </td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ProgramHf">
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="ec_ProgramTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="5"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>

                    {{-- miscellaneous --}}
                    <tr class="">
                        <th class="title px-4 text-dark">MISCELLANEOUS</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
                    <tr>
                        <td class="title">Program Expenses</td>
                        <td></td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_Programexpense"
                                {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" --}}
                                maxlength="4">
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="ec_ProgramexpenseTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="5"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>

                    <tr class="table-active">
                        <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">TOTAL</td>
                        <td class="overall-total-middle"></td>
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
                    </tr>


                </tbody>
            </table>
        </div>
    </section>
</div>

