@extends('layouts/blankLayout')

@section('title', 'Register Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection


@section('content')
<div class="position-relative">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="py-4 col-md-6">

      <!-- Register Card -->
      <div class="card p-2">
        <!-- Logo -->
        <div class="app-brand justify-content-center mt-5">
          <a href="{{url('/')}}" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">@include('_partials.macros',["height"=>20])</span>
            <span class="app-brand-text demo text-heading fw-semibold">{{ config('variables.templateName') }}</span>
          </a>
        </div>
        <!-- /Logo -->
        <div class="card-body mt-2">

          <h4 class="mb-2" style="text-align: justify;font-family: 'Roboto', sans-serif;font-size: 17px;">
            <small>
              To ensure that we provide you with the best possible experience, we'd like to learn a bit more about your farm. Your input will help us tailor our recommendations and assistance to your specific needs.
            </small>
          </h4>

          <form id="verificationLevelAuthentication" class="mb-3" action="{{ route('farmer.quiz.stepone.farm') }}" method="POST">
            @csrf

            <div class="row mt-3">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Farm Name" name="farm_name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Farm Location" name="farm_location">
                </div>
              </div>
              <div class="col-md-6 mt-4">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Main type of crop" name="crop_name">
                </div>
              </div>
              <div class="col-md-6 mt-4">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Farm size" name="farm_size">
                </div>
              </div>
              <div class="mt-3">
                <button class="btn btn-primary w-100" type="submit">Submit</button>
              </div>
            </div>
          </form>


        </div>
      </div>
      <!-- Register Card -->
      <img src="{{asset('assets/img/illustrations/tree-3.png')}}" alt="auth-tree" class="authentication-image-object-left d-none d-lg-block">
      <img src="{{asset('assets/img/illustrations/auth-basic-mask-light.png')}}" class="authentication-image d-none d-lg-block" alt="triangle-bg">
      <img src="{{asset('assets/img/illustrations/tree.png')}}" alt="auth-tree" class="authentication-image-object-right d-none d-lg-block">
    </div>
  </div>
</div>
@endsection
