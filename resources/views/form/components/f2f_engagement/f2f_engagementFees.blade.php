<hr>
<div class="card-header">
    <h4 class="card-title">Engagement Fees</h4>
</div>
<div class="form-body container">
    <section>
        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th class="title-th" scope="col" width=20%></th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF CONSULTANTS</th>
                        <th class="title-middle px-4" width=15% scope="col">PER DAY FEES</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF DAYS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">ADDITIONAL TRAVEL DAYS *</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT, WEEKENDS HOLIDAYS *</th>
                        <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                        <th class="title-th" scope="col" width=15%>NOTES</th>
                    </tr>
                </thead>
        
                <tbody>
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
                    <tr class="table-warning" id="lead-consultant">
                        <td class="title">Lead Consultant</td>
                        <td data-title="# OF CONSULTANTS">
                            <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_LeadconsultantNoc" 
                                title="" 
                                max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="" 
                                    id="ef_LeadconsultantHf"
                                    data-mytooltip-content="<i> &#8369;7,000 - Consultants<br>
                                    &#8369;9,000 - Senior Consultants </i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right" 
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="50,400" {{ old('') == '50,400' ? 'selected="selected"' : '' }}>
                                        &#8369;50,400
                                    </option>
                                    <option value="56,000" {{ old('') == '56,000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;56,000
                                    </option>
                                    <option value="64,800" {{ old('') == '64,800' ? 'selected="selected"' : '' }}>
                                        &#8369;64,800
                                    </option>
                                    <option value="72,000" {{ old('') == '72,000' ? 'selected="selected"' : '' }}>
                                        &#8369;72,000
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
                            <input type="number" class=" form-control input-table input js-mytooltip @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_LeadconsultantNoh"
                                data-mytooltip-content="<i>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class=" form-control input-table input js-mytooltip @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_LeadconsultantNoh"
                                data-mytooltip-content="<i>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>

                        <td>
                            <input type="number" class=" form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadconsultantNwh">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="lead-total">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}"name="" id="">
                        </td>
                    </tr>
        {{-- Analyst --}}
                    <tr class="table-warning">
                        <td class="title">Analyst</td>
                        <td>
                            <input type="number" class=" input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_AnalystNoc" 
                                max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_AnalystPdf">
                        </td>
                        <td>
                            <input type="number" class=" input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_AnalystNod"
                                data-mytooltip-content="<i>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_AnalystAtd">
                        </td>
                        <td>
                            <input type="number" class="nwh-e14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_AnalystNsw">
                        </td>
                        <td class="total-td">
                            {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="" disabled> --}}
                                <h4 class="text-center lead" id="analyst-total">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystNotes">
                        </td>
                    </tr>
        
                    <tr class="">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="subtotal-consulting">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="">
                        </td>
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
        
                    <tr class="table-warning">
                        <td class="title">Designer</td>
                        <td>
                            <input type="number" class="noc-b18 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="" 
                                max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <fieldset>
                                <select class="hf-c18 input js-mytooltip form-select @error('') is-invalid @enderror select"
                                    name="" 
                                    id=""
                                    data-mytooltip-content="<i>Consulting - &#8369;6,000 - Consultants<br>
                                    &#8369;8,000 - Senior Consultants</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right" 
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="48000" {{ old('') == '48000' ? 'selected="selected"' : '' }}>
                                        &#8369;48,000
                                    </option>
                                    <option value="64000" {{ old('') == '8000' ? 'selected="selected"' : '' }}>
                                        &#8369;64,000
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
                            <input type="number" class="noh-d18 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id=""
                                data-mytooltip-content="<i>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e18 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td>
                            <input type="number" class="nwh-e18 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                                <h4 class="text-center" id="subtotal-design">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
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
        
                    <tr class="table-warning">
                        <td class="title">Lead Facilitator</td>
                        <td>
                            <input type="number" class="noc-b21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <fieldset>
                                <select class="hf-c21 input js-mytooltip form-select engagement-fee @error('') is-invalid @enderror select"
                                    name="" 
                                    id=""
                                    data-mytooltip-content="<i>&#8369;10,000 - For Key Accounts w/ 2021 contract <br>
                                    &#8369;11,000 - For Key Accounts with minimum guaranteed 50 sessions w/in 6 months <br>
                                    &#8369;12,000 - all else</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right" 
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="80,000" {{ old('') == '80,000' ? 'selected="selected"' : '' }}>
                                        &#8369;80,000
                                    </option>
                                    <option value="88,000" {{ old('') == '88,000' ? 'selected="selected"' : '' }}>
                                        &#8369;88,000
                                    </option>
                                    <option value="96,000" {{ old('') == '96,000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;96,000
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
                            <input type="number" class="noh-d21 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id=""
                                data-mytooltip-content="<i>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="">
                        </td>
                        <td>
                            <input type="number" class="nwh-e21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-lead">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    <tr class="table-warning">
                        <td class="title">Co-facilitator / Resource Speaker</td>
                        <td>
                            <input type="number" class="noc-b22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="coFacilitator";>
                        </td>
                        <td>
                            <input type="number" class="noh-d22 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id=""
                                data-mytooltip-content="<i>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td>
                            <input type="number" class="nwh-e22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    <tr class="table-warning">
                        <td class="title">Moderator</td>
                        <td>
                            <input type="number" class="noc-b23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="aModerator">
                        </td>
                        <td>
                            <input type="number" class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id=""
                                data-mytooltip-content="<i>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-moderator">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    <tr class="table-warning">
                        <td class="title">Producer</td>
                        <td>
                            <input type="number" class="noc-b24 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c24 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="aProducer">
                        </td>
                        <td>
                            <input type="number" class="noh-d24 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id=""
                                data-mytooltip-content="<i>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e24 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td>
                            <input type="number" class="nwh-e24 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-producer">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    <tr class="">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="program-subtotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="">
                        </td>
                    </tr>

                    {{-- Program --}}
                    <tr class="">
                        <th class="title px-4 text-dark">4. OTHER TOOLS</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>

                    <tr class="table-warning">
                        <td class="title">Documentor</td>
                        <td>
                            <input type="number" class="noc-b28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="aDocumentor">
                        </td>
                        <td>
                            <input type="number" class="noh-d28 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id=""
                                data-mytooltip-content="<i>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td>
                            <input type="number" class="nwh-e28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="subtotal-documentor">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    <tr class="table-active overall-total">
                        <td class="text-uppercase text-dark fst-italic fw-bold overall-total-start">TOTAL STANDARD FEES</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center fw-bold" id="total-standard">-</h4>
                        </td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="">
                        </td>
                    </tr>
                    <tr class="table-active">
                        <td class="fw-bold text-dark text-uppercase fst-italic overall-total-start">discount given (if any)</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle table-warning">
                            <input type="text" class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="input-discount" readonly>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end"></td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"  name="" id="">
                        </td>
                    </tr>

                    <tr class="table-active">
                        <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">total package</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end table-warning">
                            <input type="text" class="tf-f34 form-control text-center text-danger fw-bolder input-table @error('') is-invalid @enderror" 
                            value="{{ old('') }}" name="" id="input-totalPackages" style="font-size: 20px;">
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

<script>
$('input[type="number"]').on('input', function () {
    this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null
});

$('input[type="number"]').attr('min', '0');
</script>
