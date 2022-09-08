<div class="card-header">
    <h4 class="card-title">Information</h4>
</div>

<div class="form-body container">
    <div class="form-group row">
        <div class="col-md-3">
            <label class="required">Company Name</label>
        </div>

        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('fullName') is-invalid @enderror"
                        value="{{ old('fullName') }}" placeholder="Enter Company Name" id="first-name-icon"
                        name="fullName">
                    <div class="form-control-icon">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    @error('fullName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label class="required">Engagement Type</label>
        </div>

        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="form-select @error('engagement_type') is-invalid @enderror"
                            name="engagement_type" id="engagement_type" value="{{ old('engagement_type') }}">
                            <option selected disabled>-- Select Engagement Type --</option>
                            <option value="Strategy"
                                {{ old('engagement_type') == 'Strategy' ? 'selected="selected"' : '' }}>Strategy
                            </option>
                            <option value="Leadership"
                                {{ old('engagement_type') == 'Leadership' ? 'selected="selected"' : '' }}>Leadership
                            </option>
                            <option value="Teams"
                                {{ old('engagement_type') == 'Teams' ? 'selected="selected"' : '' }}>Teams</option>
                            <option value="Capability"
                                {{ old('engagement_type') == 'Capability' ? 'selected="selected"' : '' }}>Capability
                            </option>
                        </select>
                        <div class="form-control-icon">
                            <i class="fa-solid fa-bars-staggered"></i>
                        </div>
                        @error('engagement_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label class="required">Webinar Title</label>
        </div>

        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="form-select @error('webinar_title') is-invalid @enderror" name="webinar_title"
                            id="webinar_title">
                            <option selected disabled>-- Select Webinar Title --</option>
                            <option value="Re:Think Mental Wellness"
                                {{ old('webinar_title') == 'Re:Think Mental Wellness' ? 'selected="selected"' : '' }}>
                                Think Mental
                                Wellness
                            </option>
                            <option value="Making Emotional Intelligence Visible"
                                {{ old('webinar_title') == 'Making Emotional Intelligence Visible' ? 'selected="selected"' : '' }}>
                                Making
                                Emotional Intelligence Visible
                            </option>
                            <option value="From Burnout to Balance"
                                {{ old('webinar_title') == 'From Burnout to Balance' ? 'selected="selected"' : '' }}>
                                From Burnout to Balance
                            </option>
                            <option value="Power of Yet"
                                {{ old('webinar_title') == 'Power of Yet' ? 'selected="selected"' : '' }}>Power of
                                Yet</option>
                            <option value="Leading Virtual Teams"
                                {{ old('webinar_title') == 'Leading Virtual Teams' ? 'selected="selected"' : '' }}>
                                Leading Virtual Teams
                            </option>
                            <option value="Secret Ingredient to High Performing Teams"
                                {{ old('webinar_title') == 'Secret Ingredient to High Performing Teams' ? 'selected="selected"' : '' }}>
                                Secret Ingredient to High Performing Teams</option>
                            <option value="Creating Digital Bonds"
                                {{ old('webinar_title') == 'Creating Digital Bonds' ? 'selected="selected"' : '' }}>
                                Creating Digital Bonds
                            </option>
                        </select>
                        <div class="form-control-icon">
                            <i class="fa-solid fa-display"></i>
                        </div>
                        @error('webinar_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>
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
                                value="{{ old('pax_number') }}" name="pax_number"
                                id="pax_number">
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

    </div>
</div>
