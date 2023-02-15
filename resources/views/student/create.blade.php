<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap_3.3.7_css_bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap_3.3.7_css_bootstrap.min.css') }}">
    <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/cdn.npm_popper.js1.16.0_dist_umd_popper.min.js" type="text/javascript" ></script>
    <script src="js/stackpath.bootstrapcdn.com_bootstrap_4.4.1_js_bootstrap.min.js"></script>
    <script src="js/bootstrap_3.3.7_js_bootstrap.min.js"></script> 
    <script src="js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js "></script>
  		
    <script type="text/javascript">
        $(document).ready(function(){
            $(".select2").select2();
            });
            /*---Image View Function-----*/
            function preview() {
            frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <title>Student Registration</title>
</head>
<body>
    <h1 class="text-center"> Student Registration Form </h1>
    <a class="btn btn-primary float-right" href="{{route('student')}}">Back</a></br>
    @if (\Session::has('msg'))
        <div class="text-success  text-center ">
            <h6 style=" text-align:center !important;"><b>Success! </b>{!! \Session::get('msg') !!}</h6>
        </div>
    @endif
    <hr/>
    <div class="container">
        <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="John">
            </div>
            <div class="form-group">
                <label for="father name">Father Name</label>
                <input type="text" name="fatname" id="fatname" class="form-control" placeholder="Doe">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" class="form-control"  placeholder="john@doe.com">
            </div>
            <div class="form-group">
                <label for="">Roll Number</label>
                <input type="number" class="form-control" id="rolnumber" name="rolnumber">
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input type="number" class="form-control" name="phone" id="phone"  placeholder="092-345-7007326" pattern="[0-9]{3}-[0-9]{3}-[0-9]{7}" >
            </div>
            
            <div class="form-group">
                <label for="">Enter Your D.O.B</label>
                <input class="form-control datepicker" name="date" id="date" data-date-format="dd/mm/yyyy" >
            </div>
            
            <div class="form-group">
                <label for="comment">Address</label>
                <textarea class="form-control" rows="5" id="address" name="address" autocomplete="off" ></textarea>
            </div>
            <label for="gender" class="form-group">Gender</label></br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
                <label class="form-check-label" for="male">
                Male
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                <label class="form-check-label" for="other">
                    Other
                </label>
            </div>
            
            <div class="form-group"><br>
                <label for="province">Province</label>
                <select class="select2 form-control" id="province" name="province">
                    <option value="Punjab">Punjab</option>
                    <option value="Sindh">Sindh</option>
                    <option value="Khyber-Pakhtunkhwa">Khyber-Pakhtunkhwa</option>
                    <option value="Balochistan">Balochistan</option>
                    <option value="Gilgit-Baltistan">Gilgit-Baltistan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <select class="select2 form-control" id="city" name="city">
                <option value="Islamabad">Islamabad</option>
                <option value="Rawalpindi">Rawalpindi</option>
                <option value="Lahore">Lahore</option>
                <option value="Gujrawnala">Gujrawnala</option>
                <option value="Multan">Multan</option>
                <option value="Karachi">Karachi</option>
                <option value="Peshawar">Peshawar</option>
                <option value="Queta">Queta</option>
                <option value="Fasilabad">Fasilabad</option>
                <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="skills">Skills</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="skills[]" type="checkbox" id="ct" value="Critical thinking">
                    <label class="form-check-label" for="ct">Critical thinking</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="skills[]" type="checkbox" id="cr" value="Creativity">
                    <label class="form-check-label" for="cr">Creativity</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="skills[]" type="checkbox" id="col" value="Collaboration">
                    <label class="form-check-label" for="col">Collaboration</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="skills[]" type="checkbox" id="com" value="Communication">
                    <label class="form-check-label" for="com">Communication</label>il
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="skills[]" type="checkbox" id="il" value="Information literacy">
                    <label class="form-check-label" for="il">Information literacy</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="skills[]" type="checkbox" id="ml" value="Media literacy">
                    <label class="form-check-label" for="ml">Media literacy</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="skills[]" type="checkbox" id="tl" value="Technology literacy">
                    <label class="form-check-label" for="tl">Technology literacy</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Favourite Subject</label>
                <select multiple class="select2 form-control" id="subject" name="subject[]">
                <option value="#" disabled>Select Subject</option>
                <option value="English">English</option>
                <option value="Urdu">Urdu</option>
                <option value="Islamiat">Islamiat</option>
                <option value="Pak study">Pak study</option>
                <option value="Biology">Biology</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Physic">Physic</option>
                <option value="Computer science">Computer science</option>
                </select>
            </div>
            <div class="form-group">
                <a href="#" class="pop">
                <img id="frame" class="img-responsive" src="" width="100px" height="100px"/>
                </a></br>
                <input type="file" name="image" id="image" onChange="preview()">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <script src="js/datepicker_1.7.1_js_bootstrap-datepicker.min.js"></script>
    <script src="js/maxcdn.bootstrap_3.3.7_js_bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.datepicker').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $('.datepicker').datepicker("setDate", new Date());
        /*----Function for modal---*/
        $(function() {
            $('.pop').on('click', function() {
                $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                $('#imagemodal').modal('show');   
            });		
        });
        // Wait for the DOM to be ready
        $(function() {
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
            $("form[name='registration']").validate({
            // Specify validation rules
                rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                fullname: "required",
                fatname: "required",
                email: {
                    required: true,
                    // Specify that email should be validated
                    // by the built-in "email" rule
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 11
                }
                },
                // Specify validation error messages
                messages: {
                fullname: "Please enter your firstname",
                fatname: "Please enter your lastname",
                phone: {
                    required: "Please provide a phone number",
                    minlength: "Your phone number must be at least 11 characters long"
                },
                email: "Please enter a valid email address"
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                form.button();
                }
            });
        });
    </script>
</body>