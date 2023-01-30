@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') Dashboard @endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- End content header -->

    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3>{{$users}}</h3>

                            <p>{{$users > 1 ?'Users':'User'}}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        @can('view-users')
                            <a href="{{route('backend.users.index')}}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        @endcan
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-pink">
                        <div class="inner">
                            <h3>{{$members}}</h3>
                            <p>{{$members > 1 ?'Members':'Member'}}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        @can('view-members')
                            <a href="{{route('backend.members.index')}}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        @endcan
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h3>{{$students}}</h3>

                            <p>{{$students > 1 ?'Students':'Student'}}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        @can('view-students')
                            <a href="{{route('backend.students.index')}}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        @endcan
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3>{{$testimonials}}</h3>

                            <p>{{$testimonials > 1 ?'testimonials':'testimonial'}}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-quote-left "></i>
                        </div>
                        @can('view-testimonials')
                            <a href="{{route('backend.testimonials.index')}}" class="small-box-footer">
                                More info
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        @endcan
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <!--End of row-->
            <div class="row">
                <div class="col-md-6">
                    <!-- DONUT CHART  for top countries-->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Google Analytics ( Top Countries )</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- AREA CHART -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Area Chart using member monthly entries</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="areaChart"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <!-- BAR CHART  Visitors and page views-->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">
                                Visitors (Sessions Last 7 Days)
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="lineChartVisitors"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- BAR CHART -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Bar Chart showing student monthly entries </h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{asset('assets/vendor/backend/chart.js/Chart.min.js')}}"></script>
    <script>
        /*-- Area Charts - Members
-----------------------------------*/
        // Get context with jQuery - using jQuery's .get() method.
        let areaChartCanvas = $('#areaChart').get(0).getContext('2d')
        let areaChartData = {
            // data on the x-axis
            labels: JSON.parse('{!! json_encode($members_months)!!}'),
            datasets: [
                {
                    label: 'Nafau Members',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: JSON.parse('{!! json_encode($members_monthCount)!!}'),
                }
            ]
        }
        let areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })


        /*-- BAR CHART - Students
-----------------------------------*/
        let barChartCanvas = $('#barChart').get(0).getContext('2d')

        let barChartData = {
            // data on the x-axis
            labels: JSON.parse('{!! json_encode($students_months)!!}'),
            datasets: [
                {
                    label: 'Nafau Students',
                    backgroundColor: 'rgba(40, 167, 69,0.9)',
                    borderColor: 'rgba(40, 167, 69,0.8)',
                    pointRadius: false,
                    pointColor: '#28a744',
                    pointStrokeColor: 'rgba(40, 167, 69,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(40, 167, 69,1)',
                    data: JSON.parse('{!! json_encode($students_monthCount)!!}'),
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

        //-------------
        //- DONUT CHART - Top countries
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        function getRandomColor() {
            let letters = '0123456789ABCDEF'.split('');
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        function getRandomColorEach(count) {
            let data = [];
            for (let i = 0; i < count; i++) {
                data.push(getRandomColor());
            }
            return data;
        }

        let donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        let countries = {!! json_encode($country) !!};
        let donutData = {
            labels: {!! json_encode($country) !!},
            datasets: [
                {
                    label: "Countries",
                    backgroundColor: getRandomColorEach(countries.length),
                    // borderColor: '#328daa',
                    data: {!! json_encode($country_sessions) !!},
                }
            ]
        }
        let donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        /*
        * Visitors for the last 7 days
        *
        */
        let lineChartVisitorsCanvas = $('#lineChartVisitors').get(0).getContext('2d')
        let visitorsData = [
            @foreach($analyticsData as $analyticData)
            {{ $analyticData['visitors'] }}, //remeber to put comma (,) at end for array
            @endforeach
        ]
        let lineChartVisitorsData = {
            // data on the x-axis
            {{--labels: JSON.parse('{!! json_encode($visitors_pageviews_date)!!}'),--}}
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [
                {
                    label: 'Sessions Last 7 Days',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: visitorsData
                }
            ]
        }

        let lineChartVisitorsOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(lineChartVisitorsCanvas, {
           // type: 'bar',
            type: 'line',
            data: lineChartVisitorsData,
            options: lineChartVisitorsOptions
        })

    </script>
@endsection
