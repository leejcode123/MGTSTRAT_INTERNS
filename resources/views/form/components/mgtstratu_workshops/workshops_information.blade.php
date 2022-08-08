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
                            <option id="diversity" class="diversity" value="ABCs of GEN XYZ"
                                {{ old('') == 'ABCs of GEN XYZ' ? 'selected="selected"' : '' }}>
                                ABCs of GEN XYZ
                            </option>
                            <option id="mindset" class="mindset" value="Activating the Growth Mindset"
                                {{ old('') == 'Activating the Growth Mindset' ? 'selected="selected"' : '' }}>
                                Activating the Growth Mindset
                            </option>
                            <option id="communication" class="communication" value="Active Listening"
                                {{ old('') == 'Active Listening' ? 'selected="selected"' : '' }}>
                                Active Listening
                            </option>
                            <option id="anxiety" class="anxiety" value="Anxiety Parties"
                                {{ old('') == 'Anxiety Parties' ? 'selected="selected"' : '' }}>
                                Anxiety Parties
                            </option>
                            <option id="leadership" class="leadership" value="Brand Called You"
                                {{ old('') == 'Brand Called You' ? 'selected="selected"' : '' }}>
                                Brand Called You
                            </option>
                            <option id="miro" class="miro" value="Building Miro Basic : Future Backwards"
                                {{ old('') == 'Building Miro Basic : Future Backwards' ? 'selected="selected"' : '' }}>
                                Building Miro Basic : Future Backwards
                            </option>
                            <option id="conflict" class="conflict" value="Co-Operative Power and the Willingness to Resolve"
                                {{ old('') == 'Co-Operative Power and the Willingness to Resolve' ? 'selected="selected"' : '' }}>
                                Co-Operative Power and the Willingness to Resolve
                            </option>
                            <option id="collaborative" class="collaborative" value="Collaboration on the Fly"
                                {{ old('') == 'Collaboration on the Fly' ? 'selected="selected"' : '' }}>
                                Collaboration on the Fly
                            </option>
                            <option id="creativity" class="creativity" value="Creative Thinking in the Workplace"
                                {{ old('') == 'Creative Thinking in the Workplace' ? 'selected="selected"' : '' }}>
                                Creative Thinking in the Workplace
                            </option>
                            <option id="team" class="team" value="Culture Driven Team Building"
                                {{ old('') == 'Culture Driven Team Building' ? 'selected="selected"' : '' }}>
                                Culture Driven Team Building
                            </option>
                            <option id="mental" class="mental" value="Deep Dive: Psychological Resilience"
                                {{ old('') == 'Deep Dive: Psychological Resilience' ? 'selected="selected"' : '' }}>
                                Deep Dive: Psychological Resilience
                            </option>
                            <option id="mental" class="mental" value="Deep Dive: The Role of Positive Emotions"
                                {{ old('') == 'Deep Dive: The Role of Positive Emotions' ? 'selected="selected"' : '' }}>
                                Deep Dive: The Role of Positive Emotions
                            </option>
                            <option id="strengths" class="strengths" value="Deep Diving with Strengths"
                                {{ old('') == 'Deep Diving with Strengths' ? 'selected="selected"' : '' }}>
                                Deep Diving with Strengths
                            </option>
                            <option id="evolution" class="evolution" value="Designing Slides for Non-Designers"
                                {{ old('') == 'Designing Slides for Non-Designers' ? 'selected="selected"' : '' }}>
                                Designing Slides for Non-Designers
                            </option>
                            <option id="evolution" class="evolution" value="Designing Virtual Learning"
                                {{ old('') == 'Designing Virtual Learning' ? 'selected="selected"' : '' }}>
                                Designing Virtual Learning
                            </option>
                            <option id="mindset" class="mindset" value="Developing the Growth Mindset"
                                {{ old('') == 'Developing the Growth Mindset' ? 'selected="selected"' : '' }}>
                                Developing the Growth Mindset
                            </option>
                            <option id="workfromhome" class="workfromhome" value="Effective Virtual Communication"
                                {{ old('') == 'Effective Virtual Communication' ? 'selected="selected"' : '' }}>
                                Effective Virtual Communication
                            </option>
                            <option id="innovation" class="innovation" value="Everyday Workplace Innovation"
                                {{ old('') == 'Everyday Workplace Innovation' ? 'selected="selected"' : '' }}>
                                Everyday Workplace Innovation
                            </option>
                            <option id="evolution" class="evolution" value="Facilitating Virtual Learning"
                                {{ old('') == 'Facilitating Virtual Learning' ? 'selected="selected"' : '' }}>
                                Facilitating Virtual Learning
                            </option>
                            <option id="workfromhome" class="workfromhome" value="Facilitating Virtual Meetings"
                                {{ old('') == 'Facilitating Virtual Meetings' ? 'selected="selected"' : '' }}>
                                Facilitating Virtual Meetings
                            </option>
                            <option id="communication" class="communication" value="Feedback with Candor"
                                {{ old('') == 'Feedback with Candor' ? 'selected="selected"' : '' }}>
                                Feedback with Candor
                            </option>
                            <option id="purpose" class="purpose" value="Find Your WHY"
                                {{ old('') == 'Find Your WHY' ? 'selected="selected"' : '' }}>
                                Find Your WHY
                            </option>
                            <option id="conflict" class="conflict" value="Foundations of Conflict Resolution"
                                {{ old('') == 'Foundations of Conflict Resolution' ? 'selected="selected"' : '' }}>
                                Foundations of Conflict Resolution
                            </option>
                            <option id="strategic" class="strategic" value="Foundations of Strategic Agility"
                                {{ old('') == 'Foundations of Strategic Agility' ? 'selected="selected"' : '' }}>
                                Foundations of Strategic Agility
                            </option>
                            <option id="strengths" class="strengths" value="Foundations of Strengths Based Development"
                                {{ old('') == 'Foundations of Strengths Based Development' ? 'selected="selected"' : '' }}>
                                Foundations of Strengths Based Development
                            </option>
                            <option id="collaborative" class="collaborative" value="Fundamentals of Collaboration"
                                {{ old('') == 'Fundamentals of Collaboration' ? 'selected="selected"' : '' }}>
                                Fundamentals of Collaboration
                            </option>
                            <option id="futureproof" class="futureproof" value="Future Proof Leadership"
                                {{ old('') == 'Future Proof Leadership' ? 'selected="selected"' : '' }}>
                                Future Proof Leadership
                            </option>
                            <option id="business" class="business" value="Future-Backwards"
                                {{ old('') == 'Future-Backwards' ? 'selected="selected"' : '' }}>
                                Future-Backwards
                            </option>
                            <option id="teambuildingvirtual" class="teambuildingvirtual" value="Game Night"
                                {{ old('') == 'Game Night' ? 'selected="selected"' : '' }}>
                                Game Night
                            </option>
                            <option id="communication" class="communication" value="Giving & Receiving Feedback"
                                {{ old('') == 'Giving & Receiving Feedback' ? 'selected="selected"' : '' }}>
                                Giving & Receiving Feedback
                            </option>
                            <option id="business" class="business" value="Graphic Gameplanning"
                                {{ old('') == 'Graphic Gameplanning' ? 'selected="selected"' : '' }}>
                                Graphic Gameplanning
                            </option>
                            <option id="leadinghybrid" class="leadinghybrid" value="Hybrid and Thriving (for individual contributors)"
                                {{ old('') == 'Hybrid and Thriving (for individual contributors)' ? 'selected="selected"' : '' }}>
                                Hybrid and Thriving (for individual contributors)
                            </option>
                            <option id="diversity" class="diversity" value="Inclusion is Your Competitive Advantage"
                                {{ old('') == 'Inclusion is Your Competitive Advantage' ? 'selected="selected"' : '' }}>
                                Inclusion is Your Competitive Advantage
                            </option>
                            <option id="trends" class="trends" value="L&D and Consulting Trends Talk"
                                {{ old('') == 'L&D and Consulting Trends Talk' ? 'selected="selected"' : '' }}>
                                L&D and Consulting Trends Talk
                            </option>
                            <option id="leadinghybrid" class="leadinghybrid" value="Leading Hybrid Teams"
                                {{ old('') == 'Leading Hybrid Teams' ? 'selected="selected"' : '' }}>
                                Leading Hybrid Teams
                            </option>
                            <option id="leadinghybrid" class="leadinghybrid" value="Leading Teams (The Hybrid Workplace)"
                                {{ old('') == 'Leading Teams (The Hybrid Workplace)' ? 'selected="selected"' : '' }}>
                                Leading Teams (The Hybrid Workplace)
                            </option>
                            <option id="workfromhome" class="workfromhome" value="Leading Virtual Teams"
                                {{ old('') == 'Leading Virtual Teams' ? 'selected="selected"' : '' }}>
                                Leading Virtual Teams
                            </option>
                            <option id="emotionalintellegence" class="emotionalintellegence" value="Leading with Emotional Intelligence"
                                {{ old('') == 'Leading with Emotional Intelligence' ? 'selected="selected"' : '' }}>
                                Leading with Emotional Intelligence
                            </option>
                            <option id="communication" class="communication" value="Leading with Questions"
                                {{ old('') == 'Leading with Questions' ? 'selected="selected"' : '' }}>
                                Leading with Questions
                            </option>
                            <option id="mindset" class="mindset" value="Leading with the Growth Mindset"
                                {{ old('') == 'Leading with the Growth Mindset' ? 'selected="selected"' : '' }}>
                                Leading with the Growth Mindset
                            </option>
                            <option id="purpose" class="purpose" value="Live Your WHY"
                                {{ old('') == 'Live Your WHY' ? 'selected="selected"' : '' }}>
                                Live Your WHY
                            </option>
                            <option id="behavior" class="behavior" value="MAGIC OF HABITS: How to drive behavior change for yourself"
                                {{ old('') == 'MAGIC OF HABITS: How to drive behavior change for yourself' ? 'selected="selected"' : '' }}>
                                MAGIC OF HABITS: How to drive behavior change for yourself
                            </option>
                            <option id="emotionalintellegence" class="emotionalintellegence" value="Making EI Visible"
                                {{ old('') == 'Making EI Visible' ? 'selected="selected"' : '' }}>
                                Making EI Visible
                            </option>
                            <option id="relationshipbuilding" class="relationshipbuilding" value="Making Meaningful Connections"
                                {{ old('') == 'Making Meaningful Connections' ? 'selected="selected"' : '' }}>
                                Making Meaningful Connections
                            </option>
                            <option id="emotionalintellegence" class="emotionalintellegence" value="Managing Relationship thru EI"
                                {{ old('') == 'Managing Relationship thru EI' ? 'selected="selected"' : '' }}>
                                Managing Relationship thru EI
                            </option>
                            <option id="leadinghybrid" class="leadinghybrid" value="Managing the Hybrid Transition"
                                {{ old('') == 'Managing the Hybrid Transition' ? 'selected="selected"' : '' }}>
                                Managing the Hybrid Transition
                            </option>
                            <option id="conflict" class="conflict" value="Mapping the Conflict and Design Options"
                                {{ old('') == 'Mapping the Conflict and Design Options' ? 'selected="selected"' : '' }}>
                                Mapping the Conflict and Design Options
                            </option>
                            <option id="mental" class="mental" value="Mental Health"
                                {{ old('') == 'Mental Health' ? 'selected="selected"' : '' }}>
                                Mental Health
                            </option>
                            <option id="mental" class="mental" value="Mental Health Foundations"
                                {{ old('') == 'Mental Health Foundations' ? 'selected="selected"' : '' }}>
                                Mental Health Foundations
                            </option>
                            <option id="team" class="team" value="Points of You: SAILING THROUGH ROUGH SEAS"
                                {{ old('') == 'Points of You: SAILING THROUGH ROUGH SEAS' ? 'selected="selected"' : '' }}>
                                Points of You: SAILING THROUGH ROUGH SEAS
                            </option>
                            <option id="mental" class="mental" value="Positive Self-Command"
                                {{ old('') == 'Positive Self-Command' ? 'selected="selected"' : '' }}>
                                Positive Self-Command
                            </option>
                            <option id="purpose" class="purpose" value="Refine Your Why"
                                {{ old('') == 'Refine Your Why' ? 'selected="selected"' : '' }}>
                                Refine Your Why
                            </option>
                            <option id="storytelling" class="storytelling" value="RESONATE: How We Engage Through Stories and Why It Matters"
                                {{ old('') == 'RESONATE: How We Engage Through Stories and Why It Matters' ? 'selected="selected"' : '' }}>
                                RESONATE: How We Engage Through Stories and Why It Matters
                            </option>
                            <option id="anxiety" class="anxiety" value="Riding the Wave"
                                {{ old('') == 'Riding the Wave' ? 'selected="selected"' : '' }}>
                                Riding the Wave
                            </option>
                            <option id="sales" class="sales" value="Sales for Non-Sales"
                                {{ old('') == 'Sales for Non-Sales' ? 'selected="selected"' : '' }}>
                                Sales for Non-Sales
                            </option>
                            <option id="emotionalintellegence" class="emotionalintellegence" value="The Emotional Agility Toolbox"
                                {{ old('') == 'The Emotional Agility Toolbox' ? 'selected="selected"' : '' }}>
                                The Emotional Agility Toolbox
                            </option>
                            <option id="trends" class="trends" value="The Future of Work"
                                {{ old('') == 'The Future of Work' ? 'selected="selected"' : '' }}>
                                The Future of Work
                            </option>
                            <option id="leadinghybrid" class="leadinghybrid" value="The Great Transition "
                                {{ old('') == 'The Great Transition ' ? 'selected="selected"' : '' }}>
                                The Great Transition 
                            </option>
                            <option id="relationshipbuilding" class="relationshipbuilding" value="The Power of Influence"
                                {{ old('') == 'The Power of Influence' ? 'selected="selected"' : '' }}>
                                The Power of Influence
                            </option>
                            <option id="psychological" class="psychological" value="The Secret to High Performing Teams"
                                {{ old('') == 'The Secret to High Performing Teams' ? 'selected="selected"' : '' }}>
                                The Secret to High Performing Teams
                            </option>
                            <option id="leadinghybrid" class="leadinghybrid" value="Thriving & Performing"
                                {{ old('') == 'Thriving & Performing' ? 'selected="selected"' : '' }}>
                                Thriving & Performing
                            </option>
                            <option id="timeenergy" class="timeenergy" value="Time and Energy Management: Rethinking Our Productivity Models"
                                {{ old('') == 'Time and Energy Management: Rethinking Our Productivity Models' ? 'selected="selected"' : '' }}>
                                Time and Energy Management: Rethinking Our Productivity Models
                            </option>
                            <option id="trends" class="trends" value="Trends Talk"
                                {{ old('') == 'Trends Talk' ? 'selected="selected"' : '' }}>
                                Trends Talk
                            </option>
                            <option id="diversity" class="diversity" value="Unconscious Bias"
                                {{ old('') == 'Unconscious Bias' ? 'selected="selected"' : '' }}>
                                Unconscious Bias
                            </option>
                            <option id="miro" class="miro" value="Using Miro & Future Backwards"
                                {{ old('') == 'Using Miro & Future Backwards' ? 'selected="selected"' : '' }}>
                                Using Miro & Future Backwards
                            </option>
                            <option id="team" class="team" value="We Canvas"
                                {{ old('') == 'We Canvas' ? 'selected="selected"' : '' }}>
                                We Canvas
                            </option>
                            <option id="mindfulness" class="mindfulness" value="Win Over Anxiety: Addressing the worrisome thoughts in your head"
                                {{ old('') == 'Win Over Anxiety: Addressing the worrisome thoughts in your head' ? 'selected="selected"' : '' }}>
                                Win Over Anxiety: Addressing the worrisome thoughts in your head
                            </option>
                            <option id="negotiation" class="negotiation" value="Winning in Negotiation"
                                {{ old('') == 'Winning in Negotiation' ? 'selected="selected"' : '' }}>
                                Winning in Negotiation
                            </option>
                            <option id="workfromhome" class="workfromhome" value="Work from Home Essentials"
                                {{ old('') == 'Work from Home Essentials' ? 'selected="selected"' : '' }}>
                                Work from Home Essentials
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
                            <option value="Mindfulness" selected>Mindfulness</option>
                            <option value="Diversity and Inclusion">Diversity and Inclusion</option>
                            <option value="Growth Mindset">Growth Mindset</option>
                            <option value="Communication">Communication</option>
                            <option value="Anxiety">Anxiety</option>
                            <option value="Leadership Brand">Leadership Brand</option>
                            <option value="Miro">Miro</option>
                            <option value="Conflict Resolution">Conflict Resolution</option>
                            <option value="Collaborative Workplaces">Collaborative Workplaces</option>
                            <option value="Creativity">Creativity</option>
                            <option value="Team Engagement">Team Engagement</option>
                            <option value="Mental Health">Mental Health</option>
                            <option value="Strengths">Strengths</option>
                            <option value="Learning Evolution">Learning Evolution</option>
                            <option value="Work From Home">Work From Home</option>
                            <option value="Innovation">Innovation</option>
                            <option value="Purpose">Purpose</option>
                            <option value="Strategic Agility">Strategic Agility</option>
                            <option value="Future Proof Leadership">Future Proof Leadership</option>
                            <option value="Business Transformation">Business Transformation</option>
                            <option value="Team Building - Virtual">Team Building - Virtual</option>
                            <option value="Leading Hybrid Teams">Leading Hybrid Teams</option>
                            <option value="Trends">Trends</option>
                            <option value="Emotional Intellegence">Emotional Intellegence</option>
                            <option value="Behavior Change">Behavior Change</option>
                            <option value="Relationship Building">Relationship Building</option>
                            <option value="Business Storytelling">Business Storytelling</option>
                            <option value="Sales">Sales</option>
                            <option value="Psychological Safety">Psychological Safety</option>
                            <option value="Time and Energy Management">Time and Energy Management</option>
                            <option value="Negotiation">Negotiation</option>
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
                        <select class="form-select @error('') is-invalid @enderror" name="" id="core-valueInput2"
                            disabled>
                            <option></option>
                            <option value="Social and Emotional" selected>Social and Emotional</option>
                            <option value="Moral">Moral</option>
                            <option value="Transformative">Transformative</option>
                            <option value="Technological">Technological</option>
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
                    <input class="form-check-input" type="checkbox" role="switch" id="dcbeCheckMgt">
                    <label class="form-check-label" for="dcbeCheckMgt">To Be Announced</label>
                </div>
            </div>
        </div>

        <div class="row justify-content-center g-3 gx-5" id="dcbeMgtDate">
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

<script>

// cluster reference 1st Part
document.getElementById("cluster-dropdown").addEventListener("change", cluster);
document.getElementById("input-notListed").disabled = false;
document.getElementById("core-valueInput").disabled = false;
document.getElementById("core-valueInput2").disabled = false;
function cluster() {
    var clusterDropdown = document.getElementById("cluster-dropdown");
    var mindfulness = document.getElementById("mindfulness");
    // var culture = document.getElementById("culture");

    //Mindfulness || Social and Emotional
    if (
        clusterDropdown.value == "A Case for Mindfulness: A Strategic Approach to Stress" ||
        clusterDropdown.value == "Win Over Anxiety: Addressing the worrisome thoughts in your head"
    ) {
        document.getElementById("core-valueInput").value = "Mindfulness";
        document.getElementById("core-valueInput2").value = "Social and Emotional";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Diversity || Moral
    } else if (
        clusterDropdown.value == "ABCs of GEN XYZ" ||
        clusterDropdown.value == "Inclusion is Your Competitive Advantage" ||
        clusterDropdown.value == "Unconscious Bias" 
    ) {
        document.getElementById("core-valueInput").value = "Diversity and Inclusion";
        document.getElementById("core-valueInput2").value = "Moral";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Growth Mindset || Transformative
    } else if (
        clusterDropdown.value == "Activating the Growth Mindset" ||
        clusterDropdown.value == "Developing the Growth Mindset" ||
        clusterDropdown.value == "Leading with the Growth Mindset" 
    ) {
        document.getElementById("core-valueInput").value = "Growth Mindset";
        document.getElementById("core-valueInput2").value = "Transformative";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Communication || Social and Emotional
    } else if (
        clusterDropdown.value == "Active Listening" ||
        clusterDropdown.value == "Feedback with Candor" ||
        clusterDropdown.value == "Giving & Receiving Feedback" ||
        clusterDropdown.value == "Leading with Questions" 
    ) {
        document.getElementById("core-valueInput").value = "Communication";
        document.getElementById("core-valueInput2").value = "Social and Emotional";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Anxiety || Social and Emotional
    } else if (
        clusterDropdown.value == "Anxiety Parties" ||
        clusterDropdown.value == "Riding the Wave"
    ) {
        document.getElementById("core-valueInput").value = "Anxiety";
        document.getElementById("core-valueInput2").value = "Social and Emotional";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("input-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Leadership Brand
    } else if (
        clusterDropdown.value == "Brand Called You") 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Leadership Brand";
        document.getElementById("core-valueInput2").value = "Moral";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        
        //Miro || Technological
    } else if (
        clusterDropdown.value == "Building Miro Basic : Future Backwards" ||
        clusterDropdown.value == "Using Miro & Future Backwards"
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Miro";
        document.getElementById("core-valueInput2").value = "Technological";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        
        //Conflict Resolution
    } else if (
        clusterDropdown.value == "Co-Operative Power and the Willingness to Resolve" ||
        clusterDropdown.value == "Foundations of Conflict Resolution" ||
        clusterDropdown.value == "Mapping the Conflict and Design Options"
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Conflict Resolution";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        
        //Collaborative Workplaces
    } else if (
        clusterDropdown.value == "Collaboration on the Fly" ||
        clusterDropdown.value == "Fundamentals of Collaboration"
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Collaborative Workplaces";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

        // Creativity
    } else if (
        clusterDropdown.value == "Creative Thinking in the Workplace") 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Creativity";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        
        //Team Engagement
    } else if (
        clusterDropdown.value == "Culture Driven Team Building" ||
        clusterDropdown.value == "Points of You: SAILING THROUGH ROUGH SEAS" ||
        clusterDropdown.value == "We Canvas"
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Team Engagement";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

      // Mental Health
    } else if (
        clusterDropdown.value == "Deep Dive: Psychological Resilience" ||
        clusterDropdown.value == "Deep Dive: The Role of Positive Emotions" ||
        clusterDropdown.value == "Mental Health" ||
        clusterDropdown.value == "Mental Health Foundations" ||
        clusterDropdown.value == "Positive Self-Command" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Mental Health";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

     //Strengths
    }  else if (
        clusterDropdown.value == "Deep Diving with Strengths" ||
        clusterDropdown.value == "Foundations of Strengths Based Development"
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Strengths";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

     //Learning Evolution
    }  else if (
        clusterDropdown.value == "Designing Slides for Non-Designers" ||
        clusterDropdown.value == "Facilitating Virtual Learning"
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Learning Evolution";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

     //Work From Home
    } else if (
        clusterDropdown.value == "Effective Virtual Communication" ||
        clusterDropdown.value == "Facilitating Virtual Meetings" ||
        clusterDropdown.value == "Leading Virtual Teams" ||
        clusterDropdown.value == "Work from Home Essentials" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Work From Home";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

        // Innvation
    }  else if (
        clusterDropdown.value == "Everyday Workplace Innovation" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Innovation";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

       //Purpose 
    }  else if (
        clusterDropdown.value == "Find Your WHY" ||
        clusterDropdown.value == "Live Your WHY" ||
        clusterDropdown.value == "Refine Your Why"
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Purpose";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
     
     //Strategic Agility
    }   else if (
        clusterDropdown.value == "Foundations of Strategic Agility" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Strategic Agility";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

    //Future Proof Leadership
    }  else if (
        clusterDropdown.value == "Future Proof Leadership" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Future Proof Leadership";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

      // Business Tranformation  
    }   else if (
        clusterDropdown.value == "Future-Backwards" ||
        clusterDropdown.value == "Graphic Gameplanning" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Business Transformation";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

    // Team Building Virtual
    }   else if (
        clusterDropdown.value == "Game Night" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Team Building - Virtual";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

      //Leading Hybrid Teams  
    }  else if (
        clusterDropdown.value == "Hybrid and Thriving (for individual contributors)" ||
        clusterDropdown.value == "Leading Hybrid Teams" ||
        clusterDropdown.value == "Leading Teams (The Hybrid Workplace)" ||
        clusterDropdown.value == "Managing the Hybrid Transition" ||
        clusterDropdown.value == "The Great Transition " ||
        clusterDropdown.value == "Thriving & Performing" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Leading Hybrid Teams";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

    //Trends
    } else if (
        clusterDropdown.value == "L&D and Consulting Trends Talk" ||
        clusterDropdown.value == "The Future of Work" ||
        clusterDropdown.value == "Trends Talk" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Trends";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

    //Emotional Intellegence
    } else if (
        clusterDropdown.value == "Leading with Emotional Intelligence" ||
        clusterDropdown.value == "Making EI Visible" ||
        clusterDropdown.value == "Managing Relationship thru EI" ||
        clusterDropdown.value == "The Emotional Agility Toolbox" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Emotional Intellegence";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        
    //Behavior Change
    }  else if (
        clusterDropdown.value == "MAGIC OF HABITS: How to drive behavior change for yourself" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Behavior Change";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

     //Relationship Building
    } else if (
        clusterDropdown.value == "Making Meaningful Connections" ||
        clusterDropdown.value == "The Power of Influence" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Relationship Building";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

    //Business Storytelling  
    } else if (
        clusterDropdown.value == "RESONATE: How We Engage Through Stories and Why It Matters" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Business Storytelling";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

    //Sales
    } else if (
        clusterDropdown.value == "Sales for Non-Sales" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Sales";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

    //Psychological Safety
    } else if (
        clusterDropdown.value == "The Secret to High Performing Teams" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Psychological Safety";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
    
     //Time and Energy Management
    }  else if (
        clusterDropdown.value == "Time and Energy Management: Rethinking Our Productivity Models" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Time and Energy Management";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";

    //Negotiation
    } else if (
        clusterDropdown.value == "Winning in Negotiation" 
        ) 
     {
        document.getElementById("core-valueInput").disabled = true;
        document.getElementById("core-valueInput").value = "Negotiation";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
    } 
    
    else {
        document.getElementById("core-valueInput").value = "Cluster";
        document.getElementById("input-notListed").disabled = false;
        document.getElementById("div-notListed").style.visibility = "";
        document.getElementById("core-valueInput").disabled = false;
    }
};



//To be announce
document.getElementById("dcbeCheckMgt").addEventListener("click", myFunction);
function myFunction() {
    var checkBox = document.getElementById("dcbeCheckMgt");
    var DatesCoveredByEngagementMgt = document.getElementById("dcbeMgtDate");
    if (checkBox.checked == false) {
        DatesCoveredByEngagementMgt.style.visibility = "";
    } else {
        DatesCoveredByEngagementMgt.style.visibility = "hidden";
    }
};
//datepicker
$(function () {
    $("#datepicker").datepicker();
    $("#datepicker").on("change", function () {
        $("#datepicker").datepicker("option", "dateFormat", "MM d, yy");
    });
});
</script>