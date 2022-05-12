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
                        <th class="title-middle px-4" width=15% scope="col">HOURLY FEES</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF HOURS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT, WEEKENDS HOLIDAYS *</th>
                        <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                        <th class="title-th" scope="col" width=15%>NOTES</th>
                    </tr>
                </thead>
        
                <tbody>
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
                    <tr class="table-warning" id="lead-consultant">
                        <td class="title">Lead Consultant (P7K, P9K)</td>
                        <td data-title="# OF CONSULTANTS">
                            <input type="number" class="noc-b13 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 @error('') is-invalid @enderror"
                                    name="" id="" style="background-color:#ffcccc; color:red;">
                                    <option value="7000" {{ old('') == '7000' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        &#8369;7,000
                                    </option>
                                    <option value="10000" {{ old('') == '10000' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        &#8369;10,000
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
                            <input type="number" class="noh-d13 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td>
                            <input type="number" class="nwh-e13 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="leadTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}"name="" id="">
                        </td>
                    </tr>
        
                    <tr class="table-warning">
                        <td class="title">Analyst</td>
                        <td>
                            <input type="number" class="noc-b14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="hf-c14">
                        </td>
                        <td>
                            <input type="number" class="noh-d14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td>
                            <input type="number" class="nwh-e14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="total-td">
                            {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="" disabled> --}}
                                <h4 class="text-center lead" id="analyst-total">-</h4>
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
                        <th class="title px-4">2. DESIGN</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
        
                    <tr class="table-warning">
                        <td class="title">Designer (P48K / P64K)</td>
                        <td>
                            <input type="number" class="noc-b18 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <fieldset>
                                <select class="hf-c18 form-select @error('') is-invalid @enderror select"
                                    name="" id="" style="background-color:#ffcccc; color:red;">
                                    <option value="6000" {{ old('') == '6000' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        &#8369;6,000
                                    </option>
                                    <option value="8000" {{ old('') == '8000' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
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
                            <input type="number" class="noh-d18 form-control input-table @error('') is-invalid @enderror" 
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
                        <th class="title px-4">3. PROGRAM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
        
                    <tr class="table-warning">
                        <td class="title">Lead Facilitator (P80K, P88K, 96K)</td>
                        <td>
                            <input type="number" class="noc-b21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <fieldset>
                                <select class="hf-c21 form-select engagement-fee @error('') is-invalid @enderror select"
                                    name="" id="" style="background-color:#ffcccc; color:red;">
                                    <option value="10000" {{ old('') == '10000' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        &#8369;10,000
                                    </option>
                                    <option value="11000" {{ old('') == '11000' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        &#8369;11,000
                                    </option>
                                    <option value="12000" {{ old('') == '12000' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        &#8369;12,000
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
                            <input type="number" class="noh-d21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td>
                            <input type="number" class="nwh-e21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="total-td">
                            {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="" disabled> --}}
                                <h4 class="text-center lead" id="subtotal-lead">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    <tr class="table-warning">
                        <td class="title">Co-Facilitator (P10K, P11K, P12K)</td>
                        <td>
                            <input type="number" class="noc-b22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="hf-c22";>
                        </td>
                        <td>
                            <input type="number" class="noh-d22 form-control input-table @error('') is-invalid @enderror" 
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
                                value="{{ old('') }}" name="" id="hf-c23">
                        </td>
                        <td>
                            <input type="number" class="noh-d23 form-control input-table @error('') is-invalid @enderror" 
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
                                value="{{ old('') }}" name="" id="hf-c24">
                        </td>
                        <td>
                            <input type="number" class="noh-d24 form-control input-table @error('') is-invalid @enderror" 
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
                        <th class="title px-4">4. OTHER TOOLS</th>
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
                                value="{{ old('') }}" name="" id="hf-c28">
                        </td>
                        <td>
                            <input type="number" class="noh-d28 form-control input-table @error('') is-invalid @enderror" 
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
                    {{-- break --}}
                    {{-- <tr class="bg-secondary">
                        <td></td>
                    </tr> --}}

                    <tr class="table-active overall-total">
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
                    {{-- break --}}
                    {{-- <tr class="bg-secondary">
                        <td></td>
                    </tr> --}}

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
                    </tr>

                    <tr class="table-active">
                        <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">total package</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end bg-warning">
                            <input type="number" class="tf-f34 form-control input-table @error('') is-invalid @enderror" 
                            value="{{ old('') }}" name="" id="input-totalPackage">
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
