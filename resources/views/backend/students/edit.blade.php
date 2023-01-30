@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') edit student @endsection
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
                        Student
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.students.index')}}">Students</a>
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
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                        @if(@empty($student->image))
                                            <img src="{{asset('assets/backend/images/default.jpg')}}" class="img-circle"
                                                 width="128px"
                                                 alt="student Profile Image">
                                        @else
                                            <img src="{{ $student->imagePath }}" class="img-circle" width="128px"
                                                 alt="student Profile Image">
                                        @endif

                                        <span class="font-weight-bold mt-1">
                                            {{ $student->getFullNameAttribute() }}
                                        </span>
                                        <span class="text-black-50 mt-1">
                                            <i>
                                                Nationality : {{ $student->nationality }}
                                            </i>
                                        </span>
                                        <span class="text-black-50 mt-1">
                                            <i>
                                                Parent : {{ $student->member->getFullNameAttribute() }}
                                            </i>
                                        </span>

                                        <span class="text-black-50 mt-1">
                                               Date of Birth : {{ $student->date_of_birth }}
                                            </span>
                                    </div>
                                </div>
                                <div class="col-md-9 border-right">
                                    <div class="p-3 py-4">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Edit student #{{$student->id}}</h4>
                                        </div>

                                        <form id="studentEditForm"
                                              action="{{route('backend.students.update', $student->id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="card-body">
                                                @csrf
                                                @method('PATCH')
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="surname">Surname:</label>
                                                        <input type="text" name="surname"
                                                               class="form-control @error('surname') is-invalid @enderror"
                                                               id="surname" value="{{ $student->surname }}"
                                                               placeholder="Enter surname..."
                                                               required minlength="3" maxlength="30">
                                                        @error('surname')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="other_names">Other names:</label>
                                                        <input type="text" name="other_names"
                                                               class="form-control @error('other_names') is-invalid @enderror"
                                                               id="other_names" value="{{ $student->other_names }}"
                                                               placeholder="Enter other_names..."
                                                               required minlength="3" maxlength="30">
                                                        @error('other_names')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="date_of_birth">Date of Birth:</label>
                                                        <input type="text" name="date_of_birth"
                                                               class="form-control selector @error('date_of_birth') is-invalid @enderror"
                                                               id="date_of_birth" value="{{ $student->date_of_birth }}"
                                                               placeholder="Enter date_of_birth">
                                                        @error('date_of_birth')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="age">Age:</label>
                                                        <input type="number" name="age"
                                                               class="form-control @error('age') is-invalid @enderror"
                                                               id="age" value="{{ $student->age }}"
                                                               placeholder="Enter age" min="1"
                                                               maxlength="3" readonly="readonly">
                                                        @error('age')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="student_id_no">Student Identification
                                                            Number:</label>
                                                        <input type="text" name="student_id_no"
                                                               class="form-control @error('student_id_no') is-invalid @enderror"
                                                               id="student_id_no" value="{{ $student->student_id_no }}"
                                                               placeholder="Enter student identification number"
                                                                maxlength="10">
                                                        @error('student_id_no')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="nationality">Nationality:</label>
                                                        <input type="text" name="nationality"
                                                               class="form-control @error('nationality') is-invalid @enderror"
                                                               id="nationality" value="{{ $student->nationality }}"
                                                               placeholder="Enter student nationality"
                                                               minlength="3" maxlength="30">
                                                        @error('nationality')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="religion">Religion:</label>
                                                        <input type="text" name="religion"
                                                               class="form-control @error('religion') is-invalid @enderror"
                                                               id="religion" value="{{ $student->religion }}"
                                                               placeholder="Enter student religion"
                                                               minlength="3" maxlength="30">
                                                        @error('religion')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="location">Location:</label>
                                                        <input type="text" name="location"
                                                               class="form-control @error('location') is-invalid @enderror"
                                                               id="location" value="{{ $student->location }}"
                                                               placeholder="Enter student location"
                                                               minlength="3" maxlength="30">
                                                        @error('location')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="date_of_entry">Date of Entry:</label>
                                                        <input type="text" name="date_of_entry"
                                                               class="form-control selector @error('date_of_entry') is-invalid @enderror"
                                                               id="date_of_entry" value="{{ $student->date_of_entry }}"
                                                               placeholder="Enter student date of entry">
                                                        @error('date_of_entry')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="entry_id">Class of Entry:</label>
                                                        <select name="entry_id" id="entry_id"
                                                                class="form-control select2 @error('entry_id') is-invalid @enderror"
                                                        >
                                                            @if($student->entry_id)
                                                                @foreach($entries as $entry)
                                                                    <option
                                                                        value="{{$entry->id}}"
                                                                        @if($student->entry_id ===$entry->id)selected @endif>{{$entry->class_name}}</option>
                                                                @endforeach
                                                            @else
                                                                <option value="" select>select class entry</option>
                                                                @foreach($entries as $entry)
                                                                    <option
                                                                        value="{{$entry->id}}">{{$entry->class_name}}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        @error('entry_id')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="member_id">Parent:</label>
                                                        <select name="member_id" id="member_id"
                                                                class="form-control select2 @error('member_id') is-invalid @enderror"
                                                        >
                                                            @if($student->member_id)
                                                                @foreach($parents as $parent)
                                                                    <option
                                                                        @if($student->member_id === $parent->id)selected
                                                                        @endif
                                                                        value="{{$parent->id}}">{{$parent->getFullNameAttribute()}}</option>
                                                                @endforeach
                                                            @else
                                                                <option value="">select parent name</option>
                                                                @foreach($parents as $parent)
                                                                    <option
                                                                        value="{{$parent->id}}">{{$parent->getFullNameAttribute()}}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        @error('member_id')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="relationship_with_student">Relation with
                                                            student:</label>
                                                        <select name="relationship_with_student"
                                                                id="relationship_with_student"
                                                                class="form-control select2 @error('gender') is-invalid @enderror"
                                                        >
                                                            @if($student->relationship_with_student))
                                                            <option value="parent"
                                                                    @if($student->relationship_with_student === 'parent')selected @endif>
                                                                parent
                                                            </option>
                                                            <option value="guardian"
                                                                    @if($student->relationship_with_student === 'guardian')selected @endif>
                                                                guardian
                                                            </option>
                                                            @else
                                                                <option value="" selected>select relationship with
                                                                    student
                                                                </option>
                                                                <option value="parent">parent</option>
                                                                <option value="guardin">guardian</option>
                                                            @endif
                                                        </select>
                                                        @error('relationship_with_student')
                                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="file">Image:</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="image" value="{{ old('image') }}"
                                                                   accept=".jpeg, .jpg, .png"
                                                                   class="custom-file-input @error('image') is-invalid @enderror"
                                                                   id="image">
                                                            <label class="custom-file-label" for="image">select image or
                                                                leave
                                                                blank</label>
                                                            @error('image')
                                                            <span class="invalid-tooltip" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-between">
                                                <button type="submit" class="btn btn-primary">
                                                    Update
                                                </button>
                                                <a href="{{route('backend.members.index')}}"
                                                   class="btn btn-primary">
                                                    back
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
