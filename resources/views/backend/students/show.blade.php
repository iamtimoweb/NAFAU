@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') student details @endsection
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
                        <li class="breadcrumb-item active">details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card card-primary card-outline shadow">
                        <div class="card-header">
                            <h3 class="card-title">
                                Showing Student Details
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <a class="btn btn-primary btn-sm" href="{{ route('backend.students.index') }}">
                                    Back to List
                                </a>
                            </div>
                            <table class="table table-striped table-light">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <td>
                                        {{ $student->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <td>
                                        @if($student->image === null)
                                            <img class="img-fluid"
                                                 style="width: 40px; border-radius: 50%;" align="center"
                                                 src="{{asset('assets/backend/images/default.jpg')}}" alt="">
                                        @else
                                            <img class="img-fluid"
                                                 style="width: 40px; border-radius: 50%;" align="center"
                                                 src="{{$student->imagePath}}" alt="">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Surname
                                    </th>
                                    <td>
                                        {{ $student->surname }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Other Names
                                    </th>
                                    <td>
                                        {{ $student->other_names }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Date of Birth
                                    </th>
                                    <td>
                                        @if (empty($student->date_of_birth))
                                            N/A
                                        @else
                                            {{ $student->date_of_birth }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Age
                                    </th>
                                    <td>
                                        @if (empty($student->date_of_birth))
                                            N/A
                                        @else
                                            {{ $student->age }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Student ID Number
                                    </th>
                                    <td>
                                        @if (empty($student->student_id_no))
                                            N/A
                                        @else
                                            {{ $student->student_id_no }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Nationality
                                    </th>
                                    <td>
                                        {{ $student->nationality }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Religion
                                    </th>
                                    <td>
                                        {{ $student->religion }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Location
                                    </th>
                                    <td>
                                        @if (empty($student->location))
                                            N/A
                                        @else
                                            {{ $student->location }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Date of Entry
                                    </th>
                                    <td>
                                        @if (empty($student->date_of_entry))
                                            N/A
                                        @else
                                            {{ $student->date_of_entry }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Class of Entry
                                    </th>
                                    <td>
                                        {{$student->entry->class_name}}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card card-primary card-outline shadow">
                        <div class="card-header">
                            <h3 class="card-title">Parent / Guardian</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-light">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <td>
                                        {{ $student->member->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <td>
                                        @if($student->member->image === null)
                                            <img class="img-fluid"
                                                 style="width: 40px; border-radius: 50%;" align="center"
                                                 src="{{asset('assets/backend/images/default.jpg')}}" alt="">
                                        @else
                                            <img class="img-fluid"
                                                 style="width: 40px; border-radius: 50%;" align="center"
                                                 src="{{$student->member->imagePath}}" alt="">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Full Names
                                    </th>
                                    <td>
                                        {{ $student->member->getFullNameAttribute() }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Relationship with student
                                    </th>
                                    <td>
                                        {{ $student->relationship_with_student }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('backend.members.show', $student->member->id)}}"
                               class="btn btn-outline-primary btn-sm">View More Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
