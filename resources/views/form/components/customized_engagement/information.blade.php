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
                            <option id="capability" class="capability" value="Anxiety 2 (Capability)"
                                {{ old('') == 'Anxiety 2 (Capability)' ? 'selected="selected"' : '' }}>
                                Anxiety 2 (Capability)
                            </option>
                            <option id="capability" class="capability" value="Art of Asking Questions 1 (Capability)"
                                {{ old('') == 'Art of Asking Questions 2 (Capability)' ? 'selected="selected"' : '' }}>
                                Art of Asking Questions 1 (Capability)
                            </option>
                            <option id="leadership" class="leadership" value="Art of Asking Questions 2 (Leadership)"
                                {{ old('') == 'Art of Asking Questions 2 (Capability)' ? 'selected="selected"' : '' }}>
                                Art of Asking Questions 2 (Leadership)
                            </option>
                            <option id="capability" class="capability" value="Assertive Communication 1 (Capability)"
                                {{ old('') == 'Assertive Communication 1 (Capability)' ? 'selected="selected"' : '' }}>
                                Assertive Communication 1 (Capability)
                            </option>
                            <option id="leadership" class="leadership" value="Assertive Communication 2 (Leadership)"
                                {{ old('') == 'Assertive Communication 2 (Leadership)' ? 'selected="selected"' : '' }}>
                                Assertive Communication 2 (Leadership)
                            </option>
                            <option id="capability" class="capability" value="Building Effective Relationships 1 (Capability)"
                                {{ old('') == 'Building Effective Relationships 1 (Capability)' ? 'selected="selected"' : '' }}>
                                Building Effective Relationships 1 (Capability)
                            </option>
                            <option id="leadership" class="leadership" value="Building Effective Relationships 2 (Leadership)"
                                {{ old('') == 'Building Effective Relationships 2 (Leadership)' ? 'selected="selected"' : '' }}>
                                Building Effective Relationships 2 (Leadership)
                            </option>
                            <option id="capability" class="capability" value="Business Analytics 1 (Capability)"
                                {{ old('') == 'Business Analytics 1 (Capability)' ? 'selected="selected"' : '' }}>
                                Business Analytics 1 (Capability)
                            </option>
                            <option id="strategy" class="strategy" value="Business Analytics 2 (Strategy)"
                                {{ old('') == 'Business Analytics 2 (Strategy)' ? 'selected="selected"' : '' }}>
                                Business Analytics 2 (Strategy)
                            </option>
                            <option id="capability" class="capability" value="Business Storytelling"
                                {{ old('') == 'Business Storytelling' ? 'selected="selected"' : '' }}>
                                Business Storytelling
                            </option>
                            <option id="culture" class="culture" value="Business Transformation 1 (Culture)"
                                {{ old('') == 'Business Transformation 1 (Culture)' ? 'selected="selected"' : '' }}>
                                Business Transformation 1 (Culture)
                            </option>
                            <option id="leadership" class="leadership" value="Business Transformation 2 (Leadership)"
                                {{ old('') == 'Business Transformation 2 (Leadership)' ? 'selected="selected"' : '' }}>
                                Business Transformation 2 (Leadership)
                            </option>
                            <option id="leadership" class="leadership" value="Change Management 1 (Leadership)"
                                {{ old('') == 'Change Management 1 (Leadership)' ? 'selected="selected"' : '' }}>
                                Change Management 1 (Leadership)
                            </option>
                            <option id="capability" class="capability" value="Change Management 2 (Capability)"
                                {{ old('') == 'Change Management 2 (Capability)' ? 'selected="selected"' : '' }}>
                                Change Management 2 (Capability)
                            </option>
                            <option id="capability" class="capability" value="Choose Flourish 1 (Capability)"
                                {{ old('') == 'Choose Flourish 1 (Capability)' ? 'selected="selected"' : '' }}>
                                Choose Flourish 1 (Capability)
                            </option>
                            <option id="leadership" class="leadership" value="Choose to Flourish 2 (Leadership)"
                                {{ old('') == 'Choose to Flourish 2 (Leadership)' ? 'selected="selected"' : '' }}>
                                Choose to Flourish 2 (Leadership)
                            </option>
                            <option id="leadership" class="leadership" value="Collaborative Leadership 1 (Leadership)"
                                {{ old('') == 'Collaborative Leadership 1 (Leadership)' ? 'selected="selected"' : '' }}>
                                Collaborative Leadership 1 (Leadership)
                            </option>
                            <option id="capability" class="capability" value="Collaborative Leadership 2 (Capability)"
                                {{ old('') == 'Collaborative Leadership 2 (Capability)' ? 'selected="selected"' : '' }}>
                                Collaborative Leadership 2 (Capability)
                            </option>
                            <option id="capability" class="capability" value="Communicate for Success"
                                {{ old('') == 'Communicate for Success' ? 'selected="selected"' : '' }}>
                                Communicate for Success
                            </option>
                            <option id="capability" class="capability" value="Communicating Across the Organization"
                                {{ old('') == 'Communicating Across the Organization' ? 'selected="selected"' : '' }}>
                                Communicating Across the Organization
                            </option>
                            <option id="capability" class="capability" value="Communication"
                                {{ old('') == 'Communication' ? 'selected="selected"' : '' }}>
                                Communication
                            </option>
                            <option id="capability" class="capability" value="Competency Building"
                                {{ old('') == 'Competency Building' ? 'selected="selected"' : '' }}>
                                Competency Building
                            </option>
                            <option id="capability" class="capability" value="Conflict Resolution"
                                {{ old('') == 'Conflict Resolution' ? 'selected="selected"' : '' }}>
                                Conflict Resolution
                            </option>
                            <option id="capability" class="capability" value="Create Authentic Connections"
                                {{ old('') == 'Create Authentic Connections' ? 'selected="selected"' : '' }}>
                                Create Authentic Connections
                            </option>
                            <option id="capability" class="capability" value="Creativity"
                                {{ old('') == 'Creativity' ? 'selected="selected"' : '' }}>
                                Creativity
                            </option>
                            <option id="culture" class="culture" value="Diversity & Inclusion"
                                {{ old('') == 'Diversity & Inclusion' ? 'selected="selected"' : '' }}>
                                Diversity & Inclusion
                            </option>
                            <option id="capability" class="capability" value="Emotional Intelligence"
                                {{ old('') == 'Emotional Intelligence' ? 'selected="selected"' : '' }}>
                                Emotional Intelligence
                            </option>
                            <option id="capability" class="capability" value="Enhance My Credibility"
                                {{ old('') == 'Enhance My Credibility' ? 'selected="selected"' : '' }}>
                                Enhance My Credibility
                            </option>
                            <option id="capability" class="capability" value="Everyday Innovation"
                                {{ old('') == 'Everyday Innovation' ? 'selected="selected"' : '' }}>
                                Everyday Innovation
                            </option>
                            <option id="capability" class="capability" value="Facilitating Virtual Meetings"
                                {{ old('') == 'Facilitating Virtual Meetings' ? 'selected="selected"' : '' }}>
                                Facilitating Virtual Meetings
                            </option>
                            <option id="capability" class="capability" value="Feedback"
                                {{ old('') == 'Feedback' ? 'selected="selected"' : '' }}>
                                Feedback
                            </option>
                            <option id="leadership" class="leadership" value="Find Your Why 1 (Leadership)"
                                {{ old('') == 'Find Your Why 1 (Leadership)' ? 'selected="selected"' : '' }}>
                                Find Your Why 1 (Leadership)
                            </option>
                            <option id="culture" class="culture" value="Find Your Why 2 (Culture)"
                                {{ old('') == 'Find Your Why 2 (Culture)' ? 'selected="selected"' : '' }}>
                                Find Your Why 2 (Culture)
                            </option>
                            <option id="leadership" class="leadership" value="Future Proof Leadership"
                                {{ old('') == 'Future Proof Leadership' ? 'selected="selected"' : '' }}>
                                Future Proof Leadership
                            </option>
                            <option id="teams" class="teams" value="Game Night"
                                {{ old('') == 'Game Night' ? 'selected="selected"' : '' }}>
                                Game Night
                            </option>
                            <option id="strategy" class="strategy" value="Goal Setting"
                                {{ old('') == 'Goal Setting' ? 'selected="selected"' : '' }}>
                                Goal Setting
                            </option>
                            <option id="capability" class="capability" value="Growth Mindset"
                                {{ old('') == 'Growth Mindset' ? 'selected="selected"' : '' }}>
                                Growth Mindset
                            </option>
                            <option id="culture" class="culture" value="Habit Formation"
                                {{ old('') == 'Habit Formation' ? 'selected="selected"' : '' }}>
                                Habit Formation
                            </option>
                            <option id="teams" class="teams" value="Heroes Assemble"
                                {{ old('') == 'Heroes Assemble' ? 'selected="selected"' : '' }}>
                                Heroes Assemble
                            </option>
                            <option id="capability" class="capability" value="Improv 1 (Capability)"
                                {{ old('') == 'Improv 1 (Capability)' ? 'selected="selected"' : '' }}>
                                Improv 1 (Capability)
                            </option>
                            <option id="teams" class="teams" value="Improv 2 (Teams)"
                                {{ old('') == 'Improv 2 (Teams)' ? 'selected="selected"' : '' }}>
                                Improv 2 (Teams)
                            </option>
                            <option id="capability" class="capability" value="Influencing"
                                {{ old('') == 'Influencing' ? 'selected="selected"' : '' }}>
                                Influencing
                            </option>
                            <option id="capability" class="capability" value="Innovation"
                                {{ old('') == 'Innovation' ? 'selected="selected"' : '' }}>
                                Innovation
                            </option>
                            <option id="capability" class="capability" value="Knowledge Management"
                                {{ old('') == 'Knowledge Management' ? 'selected="selected"' : '' }}>
                                Knowledge Management
                            </option>
                            <option id="leadership" class="leadership" value="Leadership Brand"
                                {{ old('') == 'Leadership Brand' ? 'selected="selected"' : '' }}>
                                Leadership Brand
                            </option>
                            <option id="leadership" class="leadership" value="Leadership Presence"
                                {{ old('') == 'Leadership Presence' ? 'selected="selected"' : '' }}>
                                Leadership Presence
                            </option>
                            <option id="leadership" class="leadership" value="Leadership Hybrid Teams"
                                {{ old('') == 'Leadership Hybrid Teams' ? 'selected="selected"' : '' }}>
                                Leadership Hybrid Teams
                            </option>
                            <option id="capability" class="capability" value="Leading Virtual Teams"
                                {{ old('') == 'Leading Virtual Teams' ? 'selected="selected"' : '' }}>
                                Leading Virtual Teams
                            </option>
                            <option id="leadership" class="leadership" value="Leading with Emotional Intelligence"
                                {{ old('') == 'Leading with Emotional Intelligence' ? 'selected="selected"' : '' }}>
                                Leading with Emotional Intelligence
                            </option>
                            <option id="leadership" class="leadership" value="Leading with Questions 1 (Leadership)"
                                {{ old('') == 'Leading with Questions 1 (Leadership)' ? 'selected="selected"' : '' }}>
                                Leading with Questions 1 (Leadership)
                            </option>
                            <option id="capability" class="capability" value="Leading with Questions 2 (Capability)"
                                {{ old('') == 'Leading with Questions 2 (Capability)' ? 'selected="selected"' : '' }}>
                                Leading with Questions 2 (Capability)
                            </option>
                            <option id="capability" class="capability" value="Learning Evolution"
                                {{ old('') == 'Learning Evolution' ? 'selected="selected"' : '' }}>
                                Learning Evolution
                            </option>
                            <option id="capability" class="capability" value="Learning How to Set Goals"
                                {{ old('') == 'Learning How to Set Goals' ? 'selected="selected"' : '' }}>
                                Learning How to Set Goals
                            </option>
                            <option id="teams" class="teams" value="Lip Sync Battle"
                                {{ old('') == 'Lip Sync Battle' ? 'selected="selected"' : '' }}>
                                Lip Sync Battle
                            </option>
                            <option id="capability" class="capability" value="Mental Health"
                                {{ old('') == 'Mental Health' ? 'selected="selected"' : '' }}>
                                Mental Health
                            </option>
                            <option id="leadership" class="leadership" value="Mentoring"
                                {{ old('') == 'Mentoring' ? 'selected="selected"' : '' }}>
                                Mentoring
                            </option>
                            <option id="capability" class="capability" value="Mindfulness"
                                {{ old('') == 'Mindfulness' ? 'selected="selected"' : '' }}>
                                Mindfulness
                            </option>
                            <option id="strategy" class="strategy" value="Mission & Vision Review 1 (Strategy)"
                                {{ old('') == 'Mission & Vision Review 1 (Strategy)' ? 'selected="selected"' : '' }}>
                                Mission & Vision Review 1 (Strategy)
                            </option>
                            <option id="leadership" class="leadership" value="Mission & Vision Review 2 (Leadership)"
                                {{ old('') == 'Mission & Vision Review 2 (Leadership)' ? 'selected="selected"' : '' }}>
                                Mission & Vision Review 2 (Leadership)
                            </option>
                            <option id="culture" class="culture" value="Organizational Development (OD) 1 (Culture)"
                                {{ old('') == 'Organizational Development (OD) 1 (Culture)' ? 'selected="selected"' : '' }}>
                                Organizational Development (OD) 1 (Culture)
                            </option>
                            <option id="strategy" class="strategy" value="Organizational Development (OD) 2 (Strategy)"
                                {{ old('') == 'Organizational Development (OD) 2 (Strategy)' ? 'selected="selected"' : '' }}>
                                Organizational Development (OD) 2 (Strategy)
                            </option>
                            <option id="capability" class="capability" value="Owning My Career"
                                {{ old('') == 'Owning My Career' ? 'selected="selected"' : '' }}>
                                Owning My Career
                            </option>
                            <option id="society" class="society" value="Parenting"
                                {{ old('') == 'Parenting' ? 'selected="selected"' : '' }}>
                                Parenting
                            </option>
                            <option id="capability" class="capability" value="Persuasive Communication"
                                {{ old('') == 'Persuasive Communication' ? 'selected="selected"' : '' }}>
                                Persuasive Communication
                            </option>
                            <option id="capability" class="capability" value="Problem-Solving"
                                {{ old('') == 'Problem-Solving' ? 'selected="selected"' : '' }}>
                                Problem-Solving
                            </option>
                            <option id="capability" class="capability" value="Productivity"
                                {{ old('') == 'Productivity' ? 'selected="selected"' : '' }}>
                                Productivity
                            </option>
                            <option id="capability" class="capability" value="Project Management"
                                {{ old('') == 'Project Management' ? 'selected="selected"' : '' }}>
                                Project Management
                            </option>
                            <option id="capability" class="capability" value="Psychological First Aid"
                                {{ old('') == 'Psychological First Aid' ? 'selected="selected"' : '' }}>
                                Psychological First Aid
                            </option>
                            <option id="culture" class="culture" value="Psychological Safety 1 (Culture)"
                                {{ old('') == 'Psychological Safety 1 (Culture)' ? 'selected="selected"' : '' }}>
                                Psychological Safety 1 (Culture)
                            </option>
                            <option id="leadership" class="leadership" value="Psychological Safety 2 (Leadership)"
                                {{ old('') == 'Psychological Safety 2 (Leadership)' ? 'selected="selected"' : '' }}>
                                Psychological Safety 2 (Leadership)
                            </option>
                            <option id="leadership" class="leadership" value="Purpose"
                                {{ old('') == 'Purpose' ? 'selected="selected"' : '' }}>
                                Purpose
                            </option>
                            <option id="capability" class="capability" value="Radical Candor"
                                {{ old('') == 'Radical Candor' ? 'selected="selected"' : '' }}>
                                Radical Candor
                            </option>
                            <option id="leadership" class="leadership" value="Situational Leadership"
                                {{ old('') == 'Situational Leadership' ? 'selected="selected"' : '' }}>
                                Situational Leadership
                            </option>
                            <option id="teams" class="teams" value="Squid Game"
                                {{ old('') == 'Squid Game' ? 'selected="selected"' : '' }}>
                                Squid Game
                            </option>
                            <option id="capability" class="capability" value="Stakeholder Management"
                                {{ old('') == 'Stakeholder Management' ? 'selected="selected"' : '' }}>
                                Stakeholder Management
                            </option>
                            <option id="capability" class="capability" value="Strategic Agility"
                                {{ old('') == 'Strategic Agility' ? 'selected="selected"' : '' }}>
                                Strategic Agility
                            </option>
                            <option id="capability" class="capability" value="Strategic Execution"
                                {{ old('') == 'Strategic Execution' ? 'selected="selected"' : '' }}>
                                Strategic Execution
                            </option>
                            <option id="capability" class="capability" value="Strategic Leadership"
                                {{ old('') == 'Strategic Leadership' ? 'selected="selected"' : '' }}>
                                Strategic Leadership
                            </option>
                            <option id="leadership" class="leadership" value="Strengths"
                                {{ old('') == 'Strengths' ? 'selected="selected"' : '' }}>
                                Strengths
                            </option>
                            <option id="capability" class="capability" value="Talent Building"
                                {{ old('') == 'Talent Building' ? 'selected="selected"' : '' }}>
                                Talent Building
                            </option>
                            <option id="teams" class="teams" value="Team Engagement"
                                {{ old('') == 'Team Engagement' ? 'selected="selected"' : '' }}>
                                Team Engagement
                            </option>
                            <option id="teams" class="teams" value="The Heist"
                                {{ old('') == 'The Heist' ? 'selected="selected"' : '' }}>
                                The Heist
                            </option>
                            <option id="teams" class="teams" value="The Lab"
                                {{ old('') == 'The Lab' ? 'selected="selected"' : '' }}>
                                The Lab
                            </option>
                            <option id="teams" class="teams" value="Virtual Team Building"
                                {{ old('') == 'Virtual Team Building' ? 'selected="selected"' : '' }}>
                                Virtual Team Building
                            </option>
                            <option id="Strategy" class="Strategy" value="Visioning"
                                {{ old('') == 'Visioning' ? 'selected="selected"' : '' }}>
                                Visioning
                            </option>
                            <option id="culture" class="culture" value="Well-being"
                                {{ old('') == 'Well-being' ? 'selected="selected"' : '' }}>
                                Well-being
                            </option>
                            <option id="capability" class="capability" value="Work From Home"
                                {{ old('') == 'Work From Home' ? 'selected="selected"' : '' }}>
                                Work From Home
                            </option>
                            <option id="Strategy" class="Strategy" value="World Cafe"
                                {{ old('') == 'World Cafe' ? 'selected="selected"' : '' }}>
                                World Cafe
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
