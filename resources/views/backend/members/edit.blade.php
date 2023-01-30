@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') edit member @endsection
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
                        <li class="breadcrumb-item active">edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                        @if(@empty($member->image))
                                            <img src="{{asset('assets/backend/images/default.jpg')}}" class="img-circle"
                                                 width="128px"
                                                 alt="member Profile Image">
                                        @else
                                            <img src="{{ $member->imagePath }}" class="img-circle" width="128px"
                                                 alt="member Profile Image">
                                        @endif

                                        <span class="font-weight-bold mt-1">
                                            {{ $member->getFullNameAttribute() }}
                                        </span>
                                        <span class="text-black-50 mt-1">
                                            <i>
                                                County : {{ $member->county }}
                                            </i>
                                        </span>
                                        <span class="text-black-50 mt-1">
                                            <i>
                                                Village : {{ $member->village }}
                                            </i>
                                        </span>

                                        <span class="text-black-50 mt-1">
                                            @if(empty($member->date_of_birth))
                                                Date of Birth : N/A
                                            @else
                                                Date of Birth : {{ $member->date_of_birth }}
                                            @endif
                                            </span>
                                    </div>
                                </div>
                                <div class="col-md-9 border-right">
                                    <div class="p-3 py-4">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Edit Member #{{$member->id}}</h4>
                                        </div>

                                        <form id="memberEditForm"
                                              action="{{route('backend.members.update', $member->id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">

                                            @csrf
                                            @method('PATCH')
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="farmer_identification_no">Farmer ID</label>
                                                    <input type="text" name="farmer_identification_no"
                                                           e
                                                           class="form-control @error('farmer_identification_no') is-invalid @enderror"
                                                           id="farmer_identification_no"
                                                           value="{{ ($errors->any()? old('farmer_identification_no') :  $member->farmer_identification_no)}}"
                                                           placeholder="Enter farmer identification number..."
                                                           maxlength="30">
                                                    @error('farmer_identification_no')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="firstname">Firstname</label>
                                                    <input type="text" name="firstname"
                                                           class="form-control @error('firstname') is-invalid @enderror"
                                                           id="firstname"
                                                           value="{{ ($errors->any()? old('firstname') :  $member->firstname)}}"
                                                           placeholder="Enter firstname..."
                                                           required minlength="3" maxlength="30">
                                                    @error('firstname')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lastname">Lastname</label>
                                                    <input type="text" name="lastname"
                                                           class="form-control @error('lastname') is-invalid @enderror"
                                                           id="lastname"
                                                           value="{{($errors->any()? old('lastname') :  $member->lastname) }}"
                                                           placeholder="Enter lastname..."
                                                           required minlength="3" maxlength="30">
                                                    @error('lastname')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="district">District</label>
                                                    <input type="text" name="district"
                                                           class="form-control @error('district') is-invalid @enderror"
                                                           id="district"
                                                           value="{{ ($errors->any()? old('district') :  $member->district) }}"
                                                           placeholder="Enter district"
                                                           required minlength="3" maxlength="30">
                                                    @error('district')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="county">County</label>
                                                    <input type="text" name="county"
                                                           class="form-control @error('county') is-invalid @enderror"
                                                           id="county"
                                                           value="{{ ($errors->any()? old('county') :  $member->county) }}"
                                                           placeholder="Enter county"
                                                           required minlength="3" maxlength="30">
                                                    @error('county')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="parish">Parish</label>
                                                    <input type="text" name="parish"
                                                           class="form-control @error('parish') is-invalid @enderror"
                                                           id="parish"
                                                           value="{{($errors->any()? old('parish') :  $member->parish)}}"
                                                           placeholder="Enter parish"
                                                           required minlength="3" maxlength="30">
                                                    @error('parish')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="village">Village</label>
                                                    <input type="text" name="village"
                                                           class="form-control @error('village') is-invalid @enderror"
                                                           id="village"
                                                           value="{{($errors->any()? old('village') :  $member->village)}}"
                                                           placeholder="Enter village"
                                                           required minlength="3" maxlength="30">
                                                    @error('village')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="gender">Gender</label>
                                                    <select name="gender" id="gender"
                                                            class="form-control select2 @error('gender') is-invalid @enderror"
                                                            required
                                                    >
                                                        @if($member->gender)
                                                            <option value="male"
                                                                    @if($member->gender==='male') select @endif>
                                                                Male
                                                            </option>
                                                            <option value="female"
                                                                    @if($member->gender==='female') select @endif>
                                                                Female
                                                            </option>
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
                                                <div class="form-group col-md-6">
                                                    <label for="date_of_birth">Date of Birth</label>
                                                    <input type="text" name="date_of_birth"
                                                           class="form-control selector @error('date_of_birth') is-invalid @enderror"
                                                           id="date_of_birth"
                                                           value="{{($errors->any()? old('date_of_birth') :  $member->date_of_birth)}}"
                                                           placeholder="Enter date of birth">
                                                    @error('date_of_birth')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="age">Age</label>
                                                    <input type="number" name="age"
                                                           class="form-control @error('age') is-invalid @enderror"
                                                           id="age"
                                                           value="{{ ($errors->any()? old('age') :  $member->age) }}"
                                                           placeholder="Enter age" min="1" readonly="readonly">
                                                    @error('age')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="phone">Tel</label>
                                                    <input type="text" name="phone"
                                                           class="form-control @error('phone') is-invalid @enderror"
                                                           id="phone"
                                                           value="{{ ($errors->any()? old('phone') :  $member->phone)}}"
                                                           placeholder="Enter phone number..."
                                                           minlength="10" maxlength="10">
                                                    @error('phone')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="education_levels">Education Level</label>
                                                    <select name="education_levels[]" id="education_level"
                                                            class="form-control select2-multiple @error('education_level') is-invalid @enderror"
                                                            multiple>
                                                        @foreach($education as $educ)
                                                            <option value="{{$educ->id}}"
                                                                    @if($member->educationLevel->pluck('id')->contains($educ->id)) selected @endif>{{$educ->education_level}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('education_level')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nin">NIN Number</label>
                                                    <input type="text" name="nin"
                                                           class="form-control @error('nin') is-invalid @enderror"
                                                           id="nin"
                                                           value="{{($errors->any()? old('nin') :  $member->nin)}}"
                                                           placeholder="Enter NIN Number" minlength="14" maxlength="14">
                                                    @error('nin')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="profession">Profession</label>
                                                    <input type="text" name="profession"
                                                           class="form-control @error('profession') is-invalid @enderror"
                                                           id="profession"
                                                           value="{{ ($errors->any()? old('profession') :  $member->profession) }}"
                                                           placeholder="Enter profession..." minlength="3"
                                                           maxlength="30">
                                                    @error('profession')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="occupation">Occupation</label>
                                                    <input type="text" name="occupation"
                                                           class="form-control @error('occupation') is-invalid @enderror"
                                                           id="occupation"
                                                           value="{{ ($errors->any()? old('occupation') :  $member->occupation) }}"
                                                           placeholder="Enter occupation..." minlength="3"
                                                           maxlength="30">
                                                    @error('occupation')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="acrage">Acrage</label>
                                                    <input type="number" name="acrage"
                                                           class="form-control @error('acrage') is-invalid @enderror"
                                                           id="acrage"
                                                           value="{{($errors->any()? old('acrage') :  $member->acrage) }}"
                                                           placeholder="Enter accrage..." min="1">
                                                    @error('acrage')
                                                    <span class="invalid-tooltip" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="latId">GPS Latitude</label>
                                                    <input type="number" name="lat"
                                                           class="form-control @error('lat') is-invalid @enderror"
                                                           id="latId"
                                                           value="{{($errors->any()? old('lat') :  $member->lat) }}"
                                                           placeholder="Enter GPS Latitude...">
                                                    @error('lat')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lngId">GPS Longitude</label>
                                                    <input type="number" name="lng"
                                                           class="form-control @error('lng') is-invalid @enderror"
                                                           id="lngId"
                                                           value="{{ ($errors->any()? old('lng') :  $member->lng) }}"
                                                           placeholder="Enter GPS Longitude...">
                                                    @error('lng')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="no_of_coffee_trees">No of Coffee Trees</label>
                                                    <input type="text" name="no_of_coffee_trees"
                                                           class="form-control @error('no_of_coffee_trees') is-invalid @enderror"
                                                           id="no_of_coffee_trees"
                                                           value="{{ ($errors->any()? old('no_of_coffee_trees') :  $member->no_of_coffee_trees)  }}"
                                                           placeholder="Enter number of coffee trees..."
                                                           minlength="1" maxlength="30">
                                                    @error('no_of_coffee_trees')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="coffee_type">Coffee Type</label>
                                                    <select name="coffee_type" id="coffee_type"
                                                            class="form-control select2 @error('coffee_type') is-invalid @enderror"
                                                            required
                                                    >
                                                        @if($member->coffee_type)

                                                            <option value="Arabica"
                                                                    @if($member->coffee_type==='Arabia')select @endif>
                                                                Arabica
                                                            </option>
                                                            <option value="Robusta"
                                                                    @if($member->coffee_type==='Robusta')select @endif>
                                                                Robusta
                                                            </option>
                                                        @else
                                                            <option value="" select>select coffee type</option>
                                                            <option value="Arabica">Arabica</option>
                                                            <option value="Robusta">Robusta</option>
                                                        @endif
                                                    </select>
                                                    @error('coffee_type')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="no_of_dependants">Number of Dependants</label>
                                                    <input type="number" name="no_of_dependants"
                                                           class="form-control @error('no_of_dependants') is-invalid @enderror"
                                                           id="no_of_dependants"
                                                           value="{{ ($errors->any()? old('no_of_dependants') :  $member->no_of_dependants) }}"
                                                           placeholder="Enter number of dependants..."
                                                           min="1">
                                                    @error('no_of_dependants')
                                                    <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="file">Photo</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="image" value="{{ old('image') }}"
                                                               accept=".jpeg, .jpg, .png"
                                                               class="custom-file-input @error('image') is-invalid @enderror"
                                                               id="image">
                                                        <label class="custom-file-label" for="image">select image or
                                                            leave blank</label>
                                                        @error('image')
                                                        <span class="invalid-tooltip" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12 d-flex justify-content-between">
                                                <button type="submit" class="btn btn-primary">
                                                    Update
                                                </button>
                                                <a href="{{route('backend.members.index')}}"
                                                   class="btn btn-primary bg-gradient-primary">
                                                    <i class="fa fa-long-arrow-alt-left"></i>
                                                    Back
                                                </a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                placeholder: "select education level",
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
