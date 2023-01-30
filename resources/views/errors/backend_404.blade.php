@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') 404 Error @endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Page not found</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">404</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- End content header -->

    <section class="content">
        <div class="error-page p-5">
            <h2 class="headline text-warning"> 404</h2>

            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
                <p>
                    We could not find the page you were looking for.
                    Meanwhile, you may <a href="{{route('backend.dashboard')}}">return to dashboard</a>.
                </p>
            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>
@endsection

