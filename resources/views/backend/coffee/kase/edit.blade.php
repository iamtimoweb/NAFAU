@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') edit kase @endsection
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
                        Kase
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.kase.index')}}">Kase</a>
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
                        <form id="editkaseForm" action="{{route('backend.kase.update', $kase->id)}}" method="POST"
                              enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Edit Kase Coffee Entity
                                </h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="member_id">Select Member</label>
                                        <select name="member_id" id="member_id"
                                                class="form-control select2 @error('member_id') is-invalid @enderror">
                                            <option value="" select>select member</option>
                                            @foreach($members as $member)
                                                <option value="{{$member->id}}"
                                                        @if($kase->member_id === $member->id) selected @endif>{{$member->getFullNameAttribute()}}
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
                                        <label for="kase_kgs">Kase (kgs)</label>
                                        <input type="number" name="kase_kgs"
                                               class="form-control @error('kase_kgs') is-invalid @enderror"
                                               id="kase_kgs"
                                               value="{{($errors->any()? old('kase_kgs') :  $kase->kase_kgs)}}"
                                               placeholder="Kase...">
                                        @error('kase_kgs')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="cutting">Cutting (kgs)</label>
                                        <input type="number" name="cutting"
                                               class="form-control @error('cutting') is-invalid @enderror"
                                               id="cutting"
                                               value="{{($errors->any()? old('cutting') :  $kase->cutting)}}"
                                               placeholder="Cutting...">
                                        @error('cutting')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="price">Price</label>
                                        <input type="number" name="price"
                                               class="form-control @error('price') is-invalid @enderror"
                                               id="price" value="{{($errors->any()? old('price') :  $kase->price)}}"
                                               placeholder="price..">
                                        @error('price')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="milling_charges">Milling Charges</label>
                                        <input type="number" name="milling_charges"
                                               class="form-control @error('price') is-invalid @enderror"
                                               id="pmilling_chargesrice"
                                               value="{{($errors->any()? old('milling_charges') :  $kase->milling_charges)}}"
                                               placeholder="Milling Charges..">
                                        @error('milling_charges')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="icheck-primary d-inline mr-3">
                                            <input type="radio" id="radioPrimary1" value="cash"
                                                   name="reason" {{$kase->reason === 'cash'? 'checked':''}}>
                                            <label for="radioPrimary1">
                                                Cash
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline mr-3">
                                            <input type="radio" id="radioPrimary2" value="fees"
                                                   name="reason" {{$kase->reason === 'fees'? 'checked':''}}>
                                            <label for="radioPrimary2">
                                                Fees
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary3" value="loan payment"
                                                   name="reason" {{$kase->reason === 'loan payment'? 'checked':''}}>
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
