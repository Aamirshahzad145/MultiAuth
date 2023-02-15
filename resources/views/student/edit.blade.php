<X-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Page') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
    label{
        font-weight: 600;
    }
</style>

</head>
<body>

    <div class="d-flex justify-content-center p-2 m-2">
        <div class="card p-2 w-50">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h3>Edit student</h3>
                </div>
                <div class="">
                    <a href="{{ route('student') }}"><button class="btn btn-primary"><i class="fa fa-list"></i> Post List</button></a>
                </div>
            </div>
            <hr class="my-1">
            <form action="{{ route('student.update',$StudentData->id) }}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('post')
                <div class="row">
                    <div class="col">
                      <label for="">Student Name</label>
                      <input type="text" name="fullname" class="form-control" value="{{ $StudentData->fullname }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Father Name</label>
                      <input type="text" name="fatname" class="form-control" value="{{ $StudentData->fatname }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Email</label>
                      <input type="email" name="email" class="form-control" value="{{ $StudentData->email }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Roll Number</label>
                      <input type="number" name="rolnumber" class="form-control" value="{{ $StudentData->rolnumber }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Phone Number</label>
                      <input type="number" name="phone" class="form-control" value="{{ $StudentData->phone }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">D.O.B</label>
                      <input type="date" name="date" class="form-control" value="{{ $StudentData->date }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Address</label>
                      <textarea name="detail" class="form-control">{{ $StudentData->address }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="gender">Gender</label></br>
                      <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" {{ $StudentData->gender == 'Male' ? 'checked' : ''}}>
                            <label class="form-check-label" for="male">
                            Male
                            </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" {{ $StudentData->gender == 'Female' ? 'checked' : ''}}>
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="Other" {{ $StudentData->gender == 'Other' ? 'checked' : ''}}>
                        <label class="form-check-label" for="other">
                            Other
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Province</label>
                        <select class="select2 form-control" id="province" name="province">
                            <option value="Punjab"{{ $StudentData->province == 'Punjab' ? 'selected' : ''}}>Punjab</option>
                            <option value="Sindh" {{ $StudentData->province == 'Sindh' ? 'selected' : ''}}>Sindh</option>
                            <option value="Khyber-Pakhtunkhwa" {{ $StudentData->province == 'Khyber-Pakhtunkhwa' ? 'selected' : ''}}>Khyber Pakhtunkhwa</option>
                            <option value="Balochistan" {{ $StudentData->province == 'Balochistan' ? 'selected' : ''}}>Balochistan</option>
                            <option value="Gilgit-Baltistan" {{ $StudentData->province == 'Gilgit-Baltistan' ? 'selected' : ''}}>Gilgit-Baltistan</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="">City</label>
                        <select class="select2 form-control" id="city" name="city">
                        <option value="Islamabad"  {{ $StudentData->city == 'Islamabad' ? 'selected' : ''}}>Islamabad</option>
                        <option value="Rawalpindi"  {{ $StudentData->city == 'Rawalpindi' ? 'selected' : ''}}>Rawalpindi</option>
                        <option value="Lahore"  {{ $StudentData->city == 'Lahore' ? 'selected' : ''}}>Lahore</option>
                        <option value="Gujrawnala"  {{ $StudentData->city == 'Gujrawnala' ? 'selected' : ''}}>Gujrawnala</option>
                        <option value="Multan"  {{ $StudentData->city == 'Multan' ? 'selected' : ''}}>Multan</option>
                        <option value="Karachi"  {{ $StudentData->city == 'Karachi' ? 'selected' : ''}}>Karachi</option>
                        <option value="Peshawar"  {{ $StudentData->city == 'Peshawar' ? 'selected' : ''}}>Peshawar</option>
                        <option value="Queta"  {{ $StudentData->city == 'Queta' ? 'selected' : ''}}>Queta</option>
                        <option value="Fasilabad"  {{ $StudentData->city == 'Fasilabad' ? 'selected' : ''}}>Fasilabad</option>
                        <option value="Dera Ghazi Khan"  {{ $StudentData->city == 'Dera Ghazi Khan' ? 'selected' : ''}}>Dera Ghazi Khan</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="skills">Skills</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="skills[]" type="checkbox" id="ct" value="Critical thinking"
                                @foreach($StudentData->skills as $skill)
                                {{ $skill == 'Critical thinking' ? 'checked' : ''}}

                                @endforeach>
                                <label class="form-check-label" for="ct">Critical thinking</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="skills[]" type="checkbox" id="cr" value="Creativity"
                                @foreach($StudentData->skills as $skill)
                                {{ $skill == 'Creativity' ? 'checked' : ''}}

                                @endforeach>
                                <label class="form-check-label" for="cr">Creativity</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="skills[]" type="checkbox" id="col" value="Collaboration"
                                @foreach($StudentData->skills as $skill)
                                {{ $skill == 'Collaboration' ? 'checked' : ''}}

                                @endforeach>
                                <label class="form-check-label" for="col">Collaboration</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="skills[]" type="checkbox" id="com" value="Communication"
                                @foreach($StudentData->skills as $skill)
                                {{ $skill == 'Communication' ? 'checked' : ''}}

                                @endforeach>
                                <label class="form-check-label" for="com">Communication</label>il
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="skills[]" type="checkbox" id="il" value="Information literacy"
                                @foreach($StudentData->skills as $skill)
                                {{ $skill == 'Information literacy' ? 'checked' : ''}}

                                @endforeach>
                                <label class="form-check-label" for="il">Information literacy</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="skills[]" type="checkbox" id="ml" value="Media literacy"
                                @foreach($StudentData->skills as $skill)
                                {{ $skill == 'Media literacy' ? 'checked' : ''}}

                                @endforeach>
                                <label class="form-check-label" for="ml">Media literacy</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="skills[]" type="checkbox" id="tl" value="Technology literacy"
                                @foreach($StudentData->skills as $skill)
                                {{ $skill == 'Technology literacy' ? 'checked' : ''}}

                                @endforeach>
                                <label class="form-check-label" for="tl">Technology literacy</label>
                        </div>
                    </div>      
                 </div>

                 <div class="form-group">
                <label for="exampleFormControlSelect2">Favourite Subject</label>
                <select multiple class="select2 form-control" id="subject" name="subject[]">
                <option value="English"
                @foreach($StudentData->subject as $subject)
                {{ $subject == 'English' ? 'selected' : ''}}
                @endforeach>English</option>
                <option value="Urdu"@foreach($StudentData->subject as $subject)
                {{ $subject == 'Urdu' ? 'selected' : ''}}
                @endforeach>Urdu</option>
                <option value="Islamiat"@foreach($StudentData->subject as $subject)
                {{ $subject == 'Islamiat' ? 'selected' : ''}}
                @endforeach>Islamiat</option>
                <option value="Pak study"@foreach($StudentData->subject as $subject)
                {{ $subject == 'Pak study' ? 'selected' : ''}}
                @endforeach>Pak study</option>
                <option value="Biology"@foreach($StudentData->subject as $subject)
                {{ $subject == 'Biology' ? 'selected' : ''}}
                @endforeach>Biology</option>
                <option value="Chemistry"@foreach($StudentData->subject as $subject)
                {{ $subject == 'Chemistry' ? 'selected' : ''}}
                @endforeach>Chemistry</option>
                <option value="Physic"@foreach($StudentData->subject as $subject)
                {{ $subject == 'Physic' ? 'selected' : ''}}
                @endforeach>Physic</option>
                <option value="Computer science"@foreach($StudentData->subject as $subject)
                {{ $subject == 'Computer science' ? 'selected' : ''}}
                @endforeach>Computer science</option>
                </select>
            </div>
                <div class="my-2">
                    <button type="submit" class="btn btn-success w-100">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html> 
</X-app-layout>