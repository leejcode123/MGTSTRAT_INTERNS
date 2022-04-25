<hr>
<div class="card-header">
    <h4 class="card-title">Engagement Fees</h4>
</div>
<div class="form-body container">
    <div class="row">
        <div class="col-md-4">
            <label class="fw-bold">Customization Fee</label>
            <div class="form-group position-relative has-icon-left">
                <fieldset>
                    <select class="form-select engagement-fee @error('ef_customFee') is-invalid @enderror select"
                        name="ef_customFee" id="ef_customFee" onclick="input_discount()"
                        onchange="efs_customFee(this.value);">
                        <option value="{{ $data[0]->ef_customFee }}"
                            {{ $data[0]->ef_customFee == $data[0]->ef_customFee ? 'selected' : '' }}>
                            &#8369;{{ $data[0]->ef_customFee }}
                        </option>
                        {{-- <option value="10000" {{ old('ef_customFee') == '10000' ? 'selected="selected"' : '' }}
                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                            &#8369;10,000</option> --}}
                    </select>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                    </div>
                    @error('ef_customFee')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </fieldset>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label class="fw-bold">Program</label>
            <div class="form-group position-relative has-icon-left">
                <fieldset>
                    <select class="form-select engagement-program @error('ef_program') is-invalid @enderror" name="ef_program"
                        id="ef_program" onchange="changePackage()">
                        <option value="{{ $data[0]->ef_program }}"
                            {{ $data[0]->ef_program == $data[0]->ef_program ? 'selected' : '' }}>
                            {{ $data[0]->ef_program }}
                        </option>
                        <option id="package1" value="Package, 51-100 pax (P54K, P60K)"
                            {{ old('ef_program') == 'Package, 51-100 pax (P54K, P60K)' ? 'selected="selected"' : '' }}
                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                            Package, 51-100 pax (P54K, P60K)</option>
                        <option id="package2" value="Package, 101-200 pax (P63K, P70K)"
                            {{ old('ef_program') == 'Package, 101-200 pax (P63K, P70K)' ? 'selected="selected"' : '' }}
                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                            Package, 101-200 pax (P63K, P70K)</option>
                        <option id="package3" value="Package, 201 pax and up (P72K, P80K)"
                            {{ old('ef_program') == 'Package, 201 pax and up (P72K, P80K)' ? 'selected="selected"' : '' }}
                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                            Package, 201 pax and up (P72K, P80K)</option>
                    </select>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-cubes"></i>
                    </div>
                    @error('ef_program')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </fieldset>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <label class="fw-bold" id="titlePrice">Price</label>
                <div class="position-relative">
                    <fieldset class="form-group" id="packagePrice123" style="display: block;">
                        {{-- <select class="form-select program-price @error('ef_programCost') is-invalid @enderror select"
                            name="ef_programCost" id="progcost123" 
                            onchange="input_discount()">
                            <option selected disabled>{{ $data[0]->ef_programCost }}</option>
                        </select> --}}

                        @if ($data[0]->ef_programCost == 54000 || $data[0]->ef_programCost == 60000)
                            <select class="form-select program-price @error('ef_programCost') is-invalid @enderror select"
                            name="ef_programCost" id="progcost1" onclick="input_discount()">
                                <option value="0" selected disabled>-- Select Price --</option>
                                <option value="{{ $data[0]->ef_programCost }}"
                                    {{ $data[0]->ef_programCost == $data[0]->ef_programCost ? 'selected' : '' }}>
                                    &#8369;{{ $data[0]->ef_programCost }}
                                </option>
                                <option value="54000" {{ old('ef_programCost') == '54000' ? 'selected="selected"' : '' }}>
                                    &#8369;54,000</option>
                                <option value="60000" {{ old('ef_programCost') == '60000' ? 'selected="selected"' : '' }}>
                                    &#8369;60,000</option>
                            </select>

                        @elseif ($data[0]->ef_programCost == 63000 || $data[0]->ef_programCost == 70000)
                            <select class="form-select program-price @error('ef_programCost') is-invalid @enderror select"
                            name="ef_programCost" id="progcost2" onclick="input_discount()">
                                <option value="0" selected disabled>-- Select Price --</option>
                                <option value="{{ $data[0]->ef_programCost }}"
                                    {{ $data[0]->ef_programCost == $data[0]->ef_programCost ? 'selected' : '' }}>
                                    &#8369;{{ $data[0]->ef_programCost }}
                                </option>
                                <option value="63000" {{ old('ef_programCost') == '63000' ? 'selected="selected"' : '' }}>
                                    &#8369;63,000</option>
                                <option value="70000"
                                    {{ old('ef_programCost') == '70000' ? 'selected="selected"' : '' }}>
                                    &#8369;70,000</option>
                            </select>

                        @elseif ($data[0]->ef_programCost == 72000 || 80000)
                            <select class="form-select program-price @error('ef_programCost') is-invalid @enderror select"
                            name="ef_programCost" id="progcost3" onclick="input_discount()">
                                <option value="0" selected disabled>-- Select Price --</option>
                                <option value="{{ $data[0]->ef_programCost }}"
                                    {{ $data[0]->ef_programCost == $data[0]->ef_programCost ? 'selected' : '' }}>
                                    &#8369;{{ $data[0]->ef_programCost }}
                                </option>
                                <option value="72000"
                                    {{ old('ef_programCost') == '72000' ? 'selected="selected"' : '' }}>
                                    &#8369;72,000</option>
                                <option value="80000"
                                    {{ old('ef_programCost') == '80000' ? 'selected="selected"' : '' }}>
                                    &#8369;80,000</option>
                            </select>
                        @endif

                        <div class="form-control-icon">
                            <i class="bi bi-cash"></i>
                        </div>
                        @error('ef_programCost')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </fieldset>
                    
                    {{-- @if ('value="Package, 51-100 pax (P54K, P60K)"')           --}}
                    <fieldset class="form-group" id="packagePrice" style="display: none">
                        <select class="form-select program-price @error('ef_programCost') is-invalid @enderror select"
                            name="ef_programCost" id="progcost1" onclick="input_discount()">
                            <option value="0" selected disabled>-- Select Price --</option>

                            {{-- @if ($data[0]->ef_programCost == 54000 || 60000)
                            <option value="{{ $data[0]->ef_programCost }}"
                                {{ $data[0]->ef_programCost == $data[0]->ef_programCost ? 'selected' : '' }}>
                                &#8369;{{ $data[0]->ef_programCost }}
                            </option>
                            @endif --}}
                            <option value="54000" {{ old('ef_programCost') == '54000' ? 'selected="selected"' : '' }}>
                                &#8369;54,000</option>
                            <option value="60000" {{ old('ef_programCost') == '60000' ? 'selected="selected"' : '' }}>
                                &#8369;60,000</option>
                        </select>
                        <div class="   form-control-icon">
                            <i class="bi bi-cash"></i>
                        </div>
                        @error('ef_programCost')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </fieldset>

                    {{-- @elseif ('value="Package, 101-200 pax (P63K, P70K)"') --}}
                    <fieldset class="form-group" id="packagePrice2" style="display: none">
                        <select class="form-select program-price @error('ef_programCost') is-invalid @enderror select"
                            name="ef_programCost" id="progcost2" onclick="input_discount()">
                            <option value="0" selected disabled>-- Select Price --</option>

                            {{-- @if ($data[0]->ef_programCost == 63000 || 70000)
                            <option value="{{ $data[0]->ef_programCost }}"
                                {{ $data[0]->ef_programCost == $data[0]->ef_programCost ? 'selected' : '' }}>
                                &#8369;{{ $data[0]->ef_programCost }}
                            </option>
                            @endif --}}
                            <option value="63000" {{ old('ef_programCost') == '63000' ? 'selected="selected"' : '' }}>
                                &#8369;63,000</option>
                            <option value="70000"
                                {{ old('ef_programCost') == '70000' ? 'selected="selected"' : '' }}>
                                &#8369;70,000</option>
                        </select>
                        <div class="form-control-icon">
                            <i class="bi bi-cash"></i>
                        </div>
                        @error('ef_programCost')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </fieldset>
                    {{-- @elseif('value="Package, 201 pax and up (P72K, P80K)"') --}}
                    <fieldset class="form-group" id="packagePrice3" style="display: none">
                        <select class="form-select program-price @error('ef_programCost') is-invalid @enderror select"
                            name="ef_programCost" id="progcost3" onclick="input_discount()">
                            <option value="0" selected disabled>-- Select Price --</option>

                            {{-- @if ($data[0]->ef_programCost == 72000 || 80000)
                            <option value="{{ $data[0]->ef_programCost }}"
                                {{ $data[0]->ef_programCost == $data[0]->ef_programCost ? 'selected' : '' }}>
                                &#8369;{{ $data[0]->ef_programCost }}
                            </option>
                            @endif --}}

                            <option value="72000"
                                {{ old('ef_programCost') == '72000' ? 'selected="selected"' : '' }}>
                                &#8369;72,000</option>
                            <option value="80000"
                                {{ old('ef_programCost') == '80000' ? 'selected="selected"' : '' }}>
                                &#8369;80,000</option>
                        </select>
                        <div class="form-control-icon">
                            <i class="bi bi-cash"></i>
                        </div>
                        @error('ef_programCost')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </fieldset>
                    {{-- @endif --}}
                    @error('ef_programCost')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <label class="fw-bold">Sessions</label>
                <div class="position-relative">
                    <input type="number" class="form-control ef-sessions @error('ef_sessions') is-invalid @enderror"
                        value="{{ $data[0]->ef_sessions }}" placeholder="Number of sessions" id="ef-sessions"
                        name="ef_sessions">
                    <div class="form-control-icon">
                        <i class="bi bi-calendar4-week"></i>
                    </div>
                    @error('ef_sessions')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group has-icon-left">
                <label class="fw-bold">Night Shift, Weekends, Holidays</label>
                <div class="position-relative">
                    <input type="number" class="form-control working-days @error('ef_workingDays') is-invalid @enderror"
                    value="{{ $data[0]->ef_workingDays }}" placeholder="---" id="ef-workingDays"
                        name="ef_workingDays">
                    <div class="form-control-icon">
                        <i class="bi bi-calendar4-week"></i>
                    </div>

                    @error('ef_workingDays')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-4">
            <div class="form-group has-icon-left">
                <label class="fw-bold">Producer</label>
                <div class="position-relative">
                    {{-- <div class="input-group-text">
                        <span class="bi bi-person-video2"></span>
                    </div> --}}
                    <fieldset>
                        <select class="form-select engagement-fee @error('ef_producer') is-invalid @enderror select"
                            name="ef_producer" id="producer" onclick="input_discount()"
                            onchange="producerFcn(this.value);">
                            <option selected disabled>-- Select Producer Price--</option>
                            <option value="{{ $data[0]->ef_producer }}"
                                {{ $data[0]->ef_producer == $data[0]->ef_producer ? 'selected' : '' }}>
                                &#8369;{{ $data[0]->ef_producer }}
                            </option>
                            <option value="0" {{ old('ef_producer') == '0' ? 'selected="selected"' : '' }}>
                                &#8369;0</option>
                            <option value="4000" {{ old('ef_producer') == '4000' ? 'selected="selected"' : '' }}>
                                &#8369;4,000</option>
                        </select>
                        <div class="form-control-icon">
                            <i class="bi bi-person-video2"></i>
                        </div>
                        @error('ef_producer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">

        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <label class="fw-bold">Total Standard Fees</label>
                <div class="position-relative">
                    {{-- <div class="input-group-text">
                        <span class="bi bi-cash fa-lg"></span>
                    </div> --}}
                    <input type="text" id="totalStandard" name="ef_totalStandard"
                    value="{{ $data[0]->ef_totalStandard }}"
                        class="form-control tot @error('ef_totalStandard') is-invalid @enderror" readonly>
                    <div class="form-control-icon">
                        <i class="bi bi-cash"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Discounts Given (if any)</label>
                    <div class="position-relative">
                        <div class="input-group">
                            <input type="text" class="form-control @error('ef_discount') is-invalid @enderror"
                                name="ef_discount" value="{{ $data[0]->ef_discount }}" id="disc"
                                onkeypress="isInputNumber(event)" onkeyup="input_discount(this.value)" min="0"
                                max="100">
                            <div class="input-group-append">
                                <span class="input-group-text">%</span>
                            </div>
                            @error('ef_discount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <label class="fw-bold text-uppercase">Total</label>
                <div class="position-relative">
                    <input type="text" id="tot" name="ef_total" value="{{ $data[0]->ef_total }}"
                        class="form-control tot @error('ef_total') is-invalid @enderror" readonly>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
