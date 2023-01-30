@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') create member @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/select2/css/select2.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/backend/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/jquery-ui-1.13.2/jquery-ui.min.css')}}">
@endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Member
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.members.index')}}">Members</a>
                        </li>
                        <li class="breadcrumb-item active">add</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline shadow">
                        <form id="memberCreateForm" action="{{route('backend.members.store')}}" method="POST"
                              enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Create a new Member
                                </h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="farmer_identification_no">Farmer ID</label>
                                        <input type="text" name="farmer_identification_no"
                                               e class="form-control @error('farmer_identification_no') is-invalid @enderror"
                                               id="farmer_identification_no" value="{{ old('farmer_identification_no') }}"
                                               placeholder="Enter farmer identification number..."
                                               maxlength="30">
                                        @error('farmer_identification_no')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" name="firstname"
                                               e class="form-control @error('firstname') is-invalid @enderror"
                                               id="firstname" value="{{ old('firstname') }}"
                                               placeholder="Enter firstname..."
                                               minlength="3" maxlength="30">
                                        @error('firstname')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" name="lastname"
                                               class="form-control @error('lastname') is-invalid @enderror"
                                               id="lastname" value="{{ old('lastname') }}"
                                               placeholder="Enter lastname..."
                                               minlength="3" maxlength="30">
                                        @error('lastname')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="district">District</label>
                                        <input type="text" name="district"
                                               class="form-control @error('district') is-invalid @enderror"
                                               id="district" value="{{ old('district') }}"
                                               placeholder="Enter district"
                                               minlength="3" maxlength="30">
                                        @error('district')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="county">County</label>
                                        <input type="text" name="county"
                                               class="form-control @error('county') is-invalid @enderror"
                                               id="county" value="{{ old('county') }}"
                                               placeholder="Enter county"
                                               minlength="3" maxlength="30">
                                        @error('county')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="parish">Parish</label>
                                        <input type="text" name="parish"
                                               class="form-control @error('parish') is-invalid @enderror"
                                               id="parish" value="{{ old('parish') }}"
                                               placeholder="Enter parish"
                                               minlength="3" maxlength="30">
                                        @error('parish')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="village">Village</label>
                                        <input type="text" name="village"
                                               class="form-control @error('village') is-invalid @enderror"
                                               id="village" value="{{ old('village') }}"
                                               placeholder="Enter village"
                                               minlength="3" maxlength="30">
                                        @error('village')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender"
                                                class="form-control select2 @error('gender') is-invalid @enderror"

                                        >
                                            @if(old('gender'))
                                                <option value="male" @if(old('gender')==='male')select @endif>Male
                                                </option>
                                                <option value="female" @if(old('gender')==='gender')select @endif>
                                                    Female
                                                </option
                                            @else
                                                <option value="" selected>select gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            @endif
                                        </select>
                                        @error('gender')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="date_of_birth">Date of Birth</label>
                                        <input type="text" name="date_of_birth"
                                               class="form-control selector @error('date_of_birth') is-invalid @enderror"
                                               id="date_of_birth" value="{{ old('date_of_birth') }}"
                                               placeholder="Enter date of birth"
                                        >
                                        @error('date_of_birth')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="age">Age</label>
                                        <input type="number" name="age"
                                               class="form-control @error('age') is-invalid @enderror"
                                               id="age" value="{{ old('age') }}"
                                               placeholder="Enter age" min="1" readonly="readonly">
                                        @error('age')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="phone">Tel</label>
                                        <input type="text" name="phone"
                                               class="form-control @error('phone') is-invalid @enderror"
                                               id="phone" value="{{ old('phone') }}"
                                               placeholder="Enter phone number..."
                                               minlength="10" maxlength="10">
                                        @error('phone')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="education_levels">Education Level</label>
                                        <select name="education_levels[]" id="education_level"
                                                class="form-control select2-multiple @error('education_level') is-invalid @enderror"
                                                multiple>
                                            @foreach($education as $educ)
                                                <option value="{{$educ->id}}">{{$educ->education_level}}</option>
                                            @endforeach
                                        </select>
                                        @error('education_level')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="nin">NIN Number</label>
                                        <input type="text" name="nin"
                                               class="form-control @error('nin') is-invalid @enderror"
                                               id="nin" value="{{ old('nin') }}"
                                               placeholder="Enter NIN Number">
                                        @error('nin')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="profession">Profession</label>
                                        <input type="text" name="profession"
                                               class="form-control @error('profession') is-invalid @enderror"
                                               id="profession" value="{{ old('profession') }}"
                                               placeholder="Enter profession..."
                                               minlength="3" maxlength="30">
                                        @error('profession')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="occupation">Occupation</label>
                                        <input type="text" name="occupation"
                                               class="form-control @error('occupation') is-invalid @enderror"
                                               id="occupation" value="{{ old('occupation') }}"
                                               placeholder="Enter occupation..."
                                               minlength="3" maxlength="10">
                                        @error('occupation')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="acrage">Acrage</label>
                                        <input type="number" name="acrage"
                                               class="form-control @error('acrage') is-invalid @enderror"
                                               id="acrage" value="{{ old('acrage') }}"
                                               placeholder="Enter acrage..." min="1">
                                        @error('acrage')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="latId">GPS Latitude</label>
                                        <input type="number" name="lat"
                                               class="form-control @error('lat') is-invalid @enderror"
                                               id="latId" value="{{ old('lat') }}"
                                               placeholder="Enter GPS Latitude...">
                                        @error('lat')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="lngId">GPS Longitude</label>
                                        <input type="number" name="lng"
                                               class="form-control @error('lng') is-invalid @enderror"
                                               id="lngId" value="{{ old('lng') }}"
                                               placeholder="Enter GPS Longitude...">
                                        @error('lng')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="no_of_coffee_trees">Number of Coffee Trees</label>
                                        <input type="number" name="no_of_coffee_trees"
                                               class="form-control @error('no_of_coffee_trees') is-invalid @enderror"
                                               id="no_of_coffee_trees" value="{{ old('no_of_coffee_trees') }}"
                                               placeholder="Enter number of coffee trees..." min="1">
                                        @error('no_of_coffee_trees')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="coffee_type">Coffee Type</label>
                                        <select name="coffee_type" id="coffee_type"
                                                class="form-control select2 @error('coffee_type') is-invalid @enderror"

                                        >
                                            <option value="" select>select coffee type</option>
                                            <option value="Arabica">Arabica</option>
                                            <option value="Robusta">Robusta</option>
                                        </select>
                                        @error('coffee_type')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="no_of_dependants">Number of Dependants</label>
                                        <input type="number" name="no_of_dependants"
                                               class="form-control @error('no_of_dependants') is-invalid @enderror"
                                               id="no_of_dependants" value="{{ old('no_of_dependants') }}"
                                               placeholder="Enter number of dependants..." min="1">
                                        @error('no_of_dependants')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="file">Photo</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" value="{{ old('image') }}"
                                                   accept=".jpeg, .jpg, .png"
                                                   class="custom-file-input @error('image') is-invalid @enderror"
                                                   id="image"
                                            >
                                            <label class="custom-file-label" for="image">select file</label>
                                            @error('image')
                                            <span class="invalid-tooltip" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{asset('assets/vendor/backend/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/jquery-ui-1.13.2/jquery-ui.min.js')}}"></script>
    <script>
        $(function () {
            'use strict'
            let age = '';
            // activating the custom file upload field
            bsCustomFileInput.init();
            $('.select2').select2({
                theme: 'bootstrap4'
            });
            // select2 multi
            $('.select2-multiple').select2({
                placeholder: "select a education level",
                theme: 'bootstrap4'
            });
            $('.selector').datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "1930:",
                dateFormat: "yy-mm-dd",
                onSelect: function (val, ui) {
                    const today = new Date();
                    age = today.getFullYear() - ui.selectedYear;
                    $('#age').val(age);
                }
            });

        })
    </script>
@endsection
