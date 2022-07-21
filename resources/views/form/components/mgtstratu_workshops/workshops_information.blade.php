{{-- datepicker css --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
{{-- tooltip css --}}
<link rel="stylesheet" href="{{ url('css/tooltip-css/jquery.mytooltip.min.css') }}">
{{-- <link rel="stylesheet" href="{{ url('css/tooltip-css/demo/style.css') }}"> --}}
{{-- datepicker js --}}
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
{{-- tooltip js --}}
{{-- <script src="{{ url('js/tooltipJs/jquery-1.11.3.min.js') }}"></script> --}}
<script src="{{ url('js/tooltipJs/jquery.mytooltip.js') }}"></script>
<script src="{{ url('js/tooltipJs/demo/script.js') }}"></script>

{{-- p --}}
<div class="card-header">
    <h4 class="card-title">Information</h4>
</div>
<div class="form-body container">
    <div class="form-group row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        </div>
        <div class="col-md-2" id="dropdown-ga" style="visibility: hidden;">
        </div>

        <div class="col-md-3">
            <label class="fw-bold required">Client: </label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}"
                        name="" id="fourth" title="asdasdasd">
                    <div class="form-control-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    @error('')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label class="fw-bold required">Engagement Title: </label>
        </div>
        <div class="col-md-6">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}"
                        name="" id="">
                    <div class="form-control-icon">
                        <i class="fa-solid fa-t"></i>
                    </div>
                    @error('')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-2 g-2">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Pilot</label>
            </div>
        </div>

        <div class="col-md-3">
            <label class="fw-bold required">MGTSTRAT-U Workshop Title</label>
        </div>
        <div class="col-md-4">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="" id="cluster-dropdown"
                        data-mytooltip-content="<i>
                            If not on the list, choose suggested cluster title at Core Area.
                            </i>"
                        data-mytooltip-theme="dark"
                        data-mytooltip-action="focus" 
                        data-mytooltip-direction="right">
                            <option value="" selected>-- Not listed --</option>
                            <option id="mindfulness" class="mindfulness" value="A Case for Mindfulness: A Strategic Approach to Stress"
                                {{ old('') == 'A Case for Mindfulness: A Strategic Approach to Stress' ? 'selected="selected"' : '' }}>
                                A Case for Mindfulness: A Strategic Approach to Stress
                            </option>
                        </select>
                        <div class="form-control-icon">
                            <i class="fa-solid fa-diagram-project"></i>
                        </div>
                        @error('')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="col-md-4" id="div-notListed">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="input-notListed" disabled>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-t"></i>
                    </div>
                    @error('')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label class="fw-bold required">CLUSTER</label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    {{-- <input type="text" class="form-control @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="core-valueInput" disabled> --}}
                    <fieldset class="form-group">
                        <select class="form-select @error('') is-invalid @enderror" name="" id="core-valueInput"
                            disabled>
                            <option value="Culture" selected>Culture</option>
                            <option value="Capability">Capability</option>
                            <option value="Leadership">Leadership</option>
                            <option value="Social">Social</option>
                            <option value="Strategy">Strategy</option>
                            <option value="Teams">Teams</option>
                        </select>
                    </fieldset>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-circle-nodes"></i>
                    </div>
                    @error('')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label class="fw-bold required">INTELLIGENCE:</label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    {{-- <input type="text" class="form-control @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="core-valueInput" disabled> --}}
                    <fieldset class="form-group">
                        <select class="form-select @error('') is-invalid @enderror" name="" id="core-valueInput"
                            disabled>
                            <option value="Culture" selected>Culture</option>
                            <option value="Capability">Capability</option>
                            <option value="Leadership">Leadership</option>
                            <option value="Social">Social</option>
                            <option value="Strategy">Strategy</option>
                            <option value="Teams">Teams</option>
                        </select>
                    </fieldset>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-circle-nodes"></i>
                    </div>
                    @error('')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label class="fw-bold required">Number of pax </label>
        </div>

        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="number" class="form-control @error('pax_number') is-invalid @enderror"
                        value="{{ old('pax_number') }}" name="pax_number" id="pax_number" min="0"
                        oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                    <div class="form-control-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    @error('pax_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label class="fw-bold required">Date Covered by Engagement </label>
            </div>

            <div class="col-md-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="dcbeCheck">
                    <label class="form-check-label" for="dcbeCheck">To Be Announced</label>
                </div>
            </div>
        </div>

        <div class="row justify-content-center g-3 gx-5" id="dcbe">
            <h6 class="text-center mt-3 fst-italic">Date</h3>
                <div class="col-md-3">
                    <div class="form-group has-icon-left">
                        <label class="fw-bold required">Date</label>
                        <div class="position-relative">
                            <input type="text" class="form-control datepicker @error('doe') is-invalid @enderror"
                                value="{{ old('doe') }}" placeholder="Enter Date" name="doe" id="datepicker"
                                size="30">
                            <div class="form-control-icon">
                                <i class="bi bi-calendar"></i>
                            </div>
                            @error('doe')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-icon-left">
                        <label class="fw-bold required">Start Time</label>
                        <div class="position-relative">
                            <input type="time" class="form-control @error('dot') is-invalid @enderror"
                                value="{{ old('dot') }}" placeholder="Enter Time" name="dot">
                            <div class="form-control-icon">
                                <i class="bi bi-clock"></i>
                            </div>
                            @error('dot')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-icon-left">
                        <label class="fw-bold required">End Time</label>
                        <div class="position-relative">
                            <input type="time" class="form-control @error('dot') is-invalid @enderror"
                                value="{{ old('dot') }}" placeholder="Enter Time" name="dot">
                            <div class="form-control-icon">
                                <i class="fa-solid fa-hourglass-end"></i>
                            </div>
                            @error('dot')
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
