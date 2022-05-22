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
                        <th class="title-th" scope="col" width=20%></th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF CONSULTANTS</th>
                        <th class="title-middle px-4" width=15% scope="col">HOURLY FEES</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF HOURS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT, WEEKENDS HOLIDAYS *</th>
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
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                    </tr>
                    <tr class="" id="lead-consultant">
                        <td class="title">Sales (4% / 5% / 6% / 7%)</td>
                        <td></td>
                        <td>
                            <fieldset>
                                <select class="form-select @error('') is-invalid @enderror"
                                    name="" id="" style="background-color:#ffcccc; color:red;">
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
                        <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center lead" id="salesTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}"name="" id="">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="title">Referral (2% / 3%)</td>
                        <td></td>
                        <td>
                            <fieldset>
                                <select class="form-select @error('') is-invalid @enderror"
                                    name="" id="" style="background-color:#ffcccc; color:red;">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                        title="">
                                        0%
                                    </option>
                                    <option value="2" {{ old('') == '2' ? 'selected="selected"' : '' }}
                                        title="">
                                        2%
                                    </option>
                                    <option value="3" {{ old('') == '3' ? 'selected="selected"' : '' }}
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
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center lead" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="4"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>
                    <tr class="">
                        <td class="title fw-bold text-dark">ENGAGEMENT MANAGER</td>
                        <td></td>
                        <td>
                            <fieldset>
                                <select class="form-select @error('') is-invalid @enderror"
                                    name="" id="" style="background-color:#ffcccc; color:red;">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                        title="">
                                        0%
                                    </option>
                                    <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }}
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
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="subtotal-consulting">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="4"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>

                    {{-- Consulting --}}
                    <tr class="">
                        <th class="px-4 title">1. CONSULTING</th>
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
                            <input type="number" class="noc-b46 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="" max="100" readonly>
                        </td>
                        <td class="">
                            <input type="text" class="hf-c46 text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="">
                            <input type="number" class="noh-d46 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="">
                            <input type="number" class="nwh-e46 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="total-td">
                                <h4 class="text-center tf-f46" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}"name="" id="">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="title">Analyst</td>
                        <td class="">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100" readonly>
                        </td>
                        <td class="">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="">-</h4>
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
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="4"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>
        
                    {{-- Design --}}
                    <tr class="">
                        <th class="title px-4">2. DESIGN</th>
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
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100" readonly>
                        </td>
                        <td>
                            <input type="text" class="fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror" 
                                value="&#8369;2,250 {{ old('') }}" name="" id="" max="100">
                        </td>
                        <td class="">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="total-td">
                                <h4 class="text-center" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">Creators Fees (500, 1K)</td>
                        <td>
                            <input type="number" class="yellow-input form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select @error('') is-invalid @enderror"
                                    name="" id="" style="background-color:#ffcccc; color:red;">
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
                            <input type="number" class="yellow-input form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class=""></td>
                        <td class="total-td">
                                <h4 class="text-center" id="">-</h4>
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
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="4"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>
        
                    {{-- Program --}}
                    <tr class="">
                        <th class="title px-4">3. PROGRAM</th>
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
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100" readonly>
                        </td>
                        <td>
                            <input type="text" class="hf-c56 fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="title">Co-Facilitator / Resource Speaker</td>
                        <td>
                            <input type="number" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100" readonly>
                        </td>
                        <td>
                            <input type="text" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="&#8369;1,800{{ old('') }}" name="" id="";>
                        </td>
                        <td>
                            <input type="number" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td>
                            <input type="number" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">Moderator (&#8369;800, &#8369;1,100, &#8369;1,350)</td>
                        <td>
                            <input type="number" class="text-dark fw-bold text-center form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100" readonly>
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select @error('') is-invalid @enderror select"
                                    name="" id="" style="background-color:#ffcccc; color:red;">
                                    <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }}
                                        title="">
                                        &#8369;500
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
                            <input type="number" class="text-dark fw-bold text-center form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td>
                            <input type="number" class="text-dark fw-bold text-center form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">Producer</td>
                        <td>
                            <input type="number" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100"readonly>
                        </td>
                        <td>
                            <input type="text" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="&#8369;550{{ old('') }}" name="" id="">
                        </td>
                        <td>
                            <input type="number" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td>
                            <input type="number" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="">-</h4>
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
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="4"></td>
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
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
                    <tr>
                        <td class="title">Documentor</td>
                        <td>
                            <input type="number" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100" readonly>
                        </td>
                        <td>
                            <input type="text" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="&#8369;700{{ old('') }}" name="" id="">
                        </td>
                        <td>
                            <input type="number" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td>
                            <input type="number" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" readonly>
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="4"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>

                    {{-- Off-Program --}}
                    <tr class="">
                        <th class="title px-4 text-dark">5. OFF-PROGRAM</th>
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
                            <input type="number" class="yellow-input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <input type="text" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="&#8369;1,000{{ old('') }}" name="" id="">
                        </td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="4"></td>
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
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
                    <tr>
                        <td class="title">Program Expenses</td>
                        <td></td>
                        <td>
                            <input id="tbMyTextbox" type="text" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" 
                                value="2%{{ old('') }}" name="" id="">
                        </td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    {{-- break --}}
                    <tr>
                        <td class="title" colspan=""></td>
                        <td class="" colspan="4"></td>
                        <td class="title" colspan=""></td>
                        <td class="title" colspan=""></td>
                    </tr>

                    {{-- <tr class="table-active overall-total">
                        <td class="text-uppercase text-dark fst-italic fw-bold overall-total-start">TOTAL STANDARD FEES</td>
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
                            <input type="text" class="hf-c32 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="input-discount">
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end"></td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"  name="" id="">
                        </td>
                    </tr> --}}

                    <tr class="table-active">
                        <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">TOTAL</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end">
                            <h4 class="text-center text-danger" id="">-</h4>
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
