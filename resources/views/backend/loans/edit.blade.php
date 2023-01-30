@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') edit loan @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/select2/css/select2.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/backend/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Loan
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.loans.index')}}">Loans</a>
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
                    <div class="card card-primary card-outline shadow">
                        <form id="loanEditForm" action="{{route('backend.loans.update', $loan->id)}}" method="POST">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Edit loan
                                </h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="member_id">Select Member</label>

                                        <select name="member_id" id="member_id"
                                                class="form-control select2 @error('member_id') is-invalid @enderror">
                                            <option value="">select member</option>
                                            @foreach($members as $member)
                                                <option value="{{$member->id}}"
                                                        @if($loan->member_id === $member->id) selected @endif>{{$member->getFullNameAttribute()}}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('member_id')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="amount">Amount</label>
                                        <input type="number" name="amount"
                                               class="form-control @error('amount') is-invalid @enderror"
                                               id="amount" value="{{($errors->any()? old('amount') :  $loan->amount)}}"
                                               placeholder="Amount..." min="0">
                                        @error('amount')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Update
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
    <script>
        $(function () {
            'use strict'

            $('.select2').select2({
                theme: 'bootstrap4'
            });
        })
    </script>
@endsection
