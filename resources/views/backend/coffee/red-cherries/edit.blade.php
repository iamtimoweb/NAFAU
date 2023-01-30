@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') edit red-cherries @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/select2/css/select2.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/backend/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Red Cherries
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.red-cherries.index')}}">Red Cherries</a>
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
                        <form id="editRedCherriesForm" action="{{route('backend.red-cherries.update', $redCherry->id)}}"
                              method="POST"
                              enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Edit Red Cherries Coffee Entity
                                </h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="member_id">Select Member</label>
                                        <select name="member_id" id="member_id"
                                                class="form-control select2 @error('member_id') is-invalid @enderror">
                                            <option value="">select member</option>
                                            @foreach($members as $member)
                                                <option value="{{$member->id}}"
                                                        @if($redCherry->member_id === $member->id) selected @endif>{{$member->getFullNameAttribute()}}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('member_id')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="red_cherries_kgs">Red Cherries(kgs)</label>
                                        <input type="number" name="red_cherries_kgs"
                                               class="form-control @error('red_cherries_kgs') is-invalid @enderror"
                                               id="red_cherries_kgs"
                                               value="{{($errors->any()? old('red_cherries_kgs') :  $redCherry->red_cherries_kgs)}}"
                                               placeholder="Red Cherries...">
                                        @error('red_cherries_kgs')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="price">Price</label>
                                        <input type="number" name="price"
                                               class="form-control @error('price') is-invalid @enderror"
                                               id="price"
                                               value="{{($errors->any()? old('price') :  $redCherry->price)}}"
                                               placeholder="price..">
                                        @error('price')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="icheck-primary d-inline mr-3">
                                            <input type="radio" id="radioPrimary1" value="cash"
                                                   name="reason" {{$redCherry->reason === 'cash'? 'checked':''}}>
                                            <label for="radioPrimary1">
                                                Cash
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline mr-3">
                                            <input type="radio" id="radioPrimary2" value="fees"
                                                   name="reason" {{$redCherry->reason === 'fees'? 'checked':''}}>
                                            <label for="radioPrimary2">
                                                Fees
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary3" value="loan payment"
                                                   name="reason" {{$redCherry->reason === 'loan payment'? 'checked':''}}>
                                            <label for="radioPrimary3">
                                                loan payment
                                            </label>
                                        </div>
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
