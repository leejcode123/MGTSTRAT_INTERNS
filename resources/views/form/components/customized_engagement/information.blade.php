{{-- p --}}
<div class="card-header">
    <h4 class="card-title">Information</h4>
</div>
<div class="form-body container">
    <div class="form-group row">
        <div class="col-md-3">
            <label class="fw-bold required">Customized Type: </label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <select class="form-select @error('') is-invalid @enderror" name="" id=""
                        value="{{ old('') }}">
                        <option value="Hybrid" {{ old('') == 'Hybrid' ? 'selected="selected"' : '' }}>Hybrid
                        </option>
                        <option value="Virtual" {{ old('') == 'Virtual' ? 'selected="selected"' : '' }} selected>
                            Virtual
                        </option>
                        <option value="G.A Hybrid" {{ old('') == 'G.A Hybrid' ? 'selected="selected"' : '' }}>
                            G.A Hybrid</option>
                        <option value="G.A Virtual" {{ old('') == 'G.A Virtual' ? 'selected="selected"' : '' }}>G.A
                            Virtual
                        </option>
                        <option value="Team Journeys" {{ old('') == 'Team Journeys' ? 'selected="selected"' : '' }}>
                            Team Journeys
                        </option>
                    </select>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-gear"></i>
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
            <label class="fw-bold required">Client: </label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="">
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
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="">
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
            <label class="fw-bold required">Cluster </label>
        </div>
        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="form-select @error('') is-invalid @enderror" name=""
                            id="cluster-dropdown">
                            <option value="" selected>-- Not listed --</option>
                            <option id="capability" class="capability" value="Above The Line"
                                {{ old('') == 'Above The Line' ? 'selected="selected"' : '' }}>
                                Above The Line
                            </option>
                            <option id="culture" class="culture" value="Action Learning"
                                {{ old('') == 'Action Learning' ? 'selected="selected"' : '' }}>
                                Action Learning
                            </option>
                            <option id="culture" class="culture" value="Anxiety 1 (Culture)"
                                {{ old('') == 'Anxiety 1 (Culture)' ? 'selected="selected"' : '' }}>
                                Anxiety 1 (Culture)
                            </option>
                            {{-- <option value="{{ $data[0]->cluster }}"
                                {{ $data[0]->cluster == $data[0]->cluster ? 'selected' : '' }}>
                                {{ $data[0]->cluster }}
                            </option>
                            @foreach ($cluster as $key => $value)
                                <option value="{{ $value->role_type }}">
                                    {{ $value->role_type }}</option>
                            @endforeach --}}
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
        <div class="col-md-5">
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
            <label class="fw-bold required">Core Area </label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="core-valueInput" disabled>
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

        <div class="row justify-content-center g-3 gx-5">
            <h6 class="text-center mt-3 fst-italic">Dates Covered by Engagement</h3>
                <div class="col-md-3">
                    <div class="form-group has-icon-left">
                        <label class="fw-bold required">Number of Pax</label>
                        <div class="position-relative">
                            <input type="number" class="form-control @error('pax_number') is-invalid @enderror"
                                value="{{ old('pax_number') }}" name="pax_number" id="pax_number">
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
                <div class="col-md-3">
                    <div class="form-group has-icon-left">
                        <label class="fw-bold required">Date</label>
                        <div class="position-relative">
                            <input type="date" class="form-control datepicker @error('doe') is-invalid @enderror"
                                value="{{ old('doe') }}" placeholder="Enter Date" name="doe" id="doe"
                                min="2022-01-01">
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
                        <label class="fw-bold required">Time</label>
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
        </div>
        {{-- <div class="col-12 d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
            </div> --}}
    </div>
</div>
