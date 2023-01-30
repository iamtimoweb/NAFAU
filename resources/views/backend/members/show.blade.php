@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') member details @endsection
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
                            <h3 class="card-title">Showing Member Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <a class="btn btn-primary btn-sm" href="{{ route('backend.members.index') }}">
                                    Back to List
                                </a>
                            </div>
                            <table class="table table-striped table-light">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <td>
                                        {{ $member->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <td>
                                        @if($member->image === null)
                                            <img class="img-fluid"
                                                 style="width: 40px; border-radius: 50%;" align="center"
                                                 src="{{asset('assets/backend/images/default.jpg')}}" alt="">
                                        @else
                                            <img class="img-fluid"
                                                 style="width: 40px; border-radius: 50%;" align="center"
                                                 src="{{$member->imagePath}}" alt="">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Firstname
                                    </th>
                                    <td>
                                        {{ $member->firstname }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Lastname
                                    </th>
                                    <td>
                                        {{ $member->lastname }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        District
                                    </th>
                                    <td>
                                        {{ $member->district }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        County
                                    </th>
                                    <td>
                                        {{ $member->county }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Parish
                                    </th>
                                    <td>
                                        {{ $member->parish }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Village
                                    </th>
                                    <td>
                                        {{ $member->village }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Gender
                                    </th>
                                    <td>
                                        {{ $member->gender }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Date of Birth
                                    </th>
                                    <td>
                                        @if (empty($member->date_of_birth))
                                            N/A
                                        @else
                                            {{ $member->date_of_birth }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Age
                                    </th>
                                    <td>
                                        @if (empty($member->date_of_birth))
                                            N/A
                                        @else
                                            {{ $member->age }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Contact Number
                                    </th>
                                    <td>
                                        {{ $member->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        NIN Number
                                    </th>
                                    <td>
                                        @if (empty($member->nin))
                                            N/A
                                        @else
                                            {{ $member->nin }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Proffession
                                    </th>
                                    <td>
                                        @if (empty($member->proffession))
                                            N/A
                                        @else
                                            {{ $member->proffession }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Occupation
                                    </th>
                                    <td>
                                        @if (empty($member->occupation))
                                            N/A
                                        @else
                                            {{ $member->occupation }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Acrage
                                    </th>
                                    <td>
                                        @if (empty($member->acrage))
                                            N/A
                                        @else
                                            {{ $member->acrage }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Number of Coffee Trees
                                    </th>
                                    <td>
                                        @if (empty($member->number_of_coffee_trees))
                                            N/A
                                        @else
                                            {{ $member->number_of_coffee_trees }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        GPS Longitude
                                    </th>
                                    <td>
                                        @if (empty($member->lng))
                                            N/A
                                        @else
                                            {{ $member->lng }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        GPS Latitude
                                    </th>
                                    <td>
                                        @if (empty($member->lat))
                                            N/A
                                        @else
                                            {{ $member->lat }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Coffee Type
                                    </th>
                                    <td>
                                        {{ $member->coffee_type }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Number of Dependants
                                    </th>
                                    <td>
                                        @if (empty($member->number_of_dependants))
                                            N/A
                                        @else
                                            {{ $member->number_of_dependants }}
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                @if($member->students)
                    @foreach($member->students as $student)
                        <div class="col-md-12 mb-3">
                            <div class="card card-primary card-outline shadow">
                                <div class="card-header">
                                    <h3 class="card-title">Student #{{$student->id}}</h3>
                                </div>
                                <div class="card-body">
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
                                                Full Names
                                            </th>
                                            <td>
                                                {{ $student->getFullNameAttribute() }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Relationship with Member
                                            </th>
                                            <td>
                                                {{ $student->relationship_with_student }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('backend.students.show', $student->id)}}"
                                       class="btn btn-outline-primary btn-sm">View More Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                <div class="col-md-6 mb-3">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Bar Chart showing the monthly supply of the red cherries</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChartRedCherries"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Bar Chart showing the monthly supply of the kiboko</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChartKiboko"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-olive">
                        <div class="card-header">
                            <h3 class="card-title">Bar Chart showing the monthly supply of the kase</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChartKase"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{asset('assets/vendor/backend/chart.js/Chart.min.js')}}"></script>
    <script>
        /*-- BAR CHART - Red Cherries
-----------------------------------*/
        let barChartCanvas = $('#barChartRedCherries').get(0).getContext('2d')

        let barChartData = {
            // data on the x-axis
            labels: JSON.parse('{!! json_encode($red_cherries__months)!!}'),
            datasets: [
                {
                    label: 'Red Cherries',
                    backgroundColor: 'rgba(218, 51, 51, 0.9)',
                    borderColor: 'rgba(218, 51, 51, 0.8)',
                    pointRadius: false,
                    pointColor: '#da3333',
                    pointStrokeColor: 'rgba(218, 51, 51, 1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(218, 51, 51, 1)',
                    data: JSON.parse('{!! json_encode($red_cherries__monthCount)!!}'),
                }
            ]
        }

        let barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        /*-- BAR CHART - Kiboko cherries
-----------------------------------*/
        let kibokoBarChartCanvas = $('#barChartKiboko').get(0).getContext('2d')

        let kibokoBarChartData = {
            // data on the x-axis
            labels: JSON.parse('{!! json_encode($kiboko__months)!!}'),
            datasets: [
                {
                    label: 'Kiboko',
                    backgroundColor: 'rgba(52, 58, 64, 0.9)',
                    borderColor: 'rgba(52, 58, 64, 0.8)',
                    pointRadius: false,
                    pointColor: '#343a40',
                    pointStrokeColor: 'rgba(52, 58, 64, 1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(52, 58, 64, 1)',
                    data: JSON.parse('{!! json_encode($kiboko__monthCount)!!}'),
                }
            ]
        }

        let kibokoBarChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(kibokoBarChartCanvas, {
            type: 'bar',
            data: kibokoBarChartData,
            options: kibokoBarChartOptions
        })

        /*-- BAR CHART - Kase cherries
-----------------------------------*/
        let kaseBarChartCanvas = $('#barChartKase').get(0).getContext('2d')

        let kaseBarChartData = {
            // data on the x-axis
            labels: JSON.parse('{!! json_encode($kase__months)!!}'),
            datasets: [
                {
                    label: 'Kiboko',
                    backgroundColor: 'rgba(61, 153, 112, 0.9)',
                    borderColor: 'rgba(61, 153, 112, 0.8)',
                    pointRadius: false,
                    pointColor: '#3d9970',
                    pointStrokeColor: 'rgba(61, 153, 112, 1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(61, 153, 112, 1)',
                    data: JSON.parse('{!! json_encode($kase__monthCount)!!}'),
                }
            ]
        }

        let kaseBarChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(kaseBarChartCanvas, {
            type: 'bar',
            data: kaseBarChartData,
            options: kaseBarChartOptions
        })
    </script>
@endsection
