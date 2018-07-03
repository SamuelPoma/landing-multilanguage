@extends('layouts.app')

@section('metatitle')
  Careers
@endsection

@section('body-content')
<div class="my-container">
  <div class="row">
    <div class="col">
      <h1 class="text-center">@lang('careers.titleSection')</h1>
      <p class="text-center lead mt-5">@lang('careers.paragraph')</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-2">
      <div class="salaryJob_cnt mt-4">
        <p class="lead text-center">20 -35K</p>
        <div class="text-center">
          <small>@lang('careers.salary')</small>
        </div>
      </div>
    </div>
    <div class="col-md-10">
      <div class="content_cnt">
        <h2 class="font-weight-bold">Frontend Developer</h2>
        <p class="lead">@lang('careers.frontendContent')</p>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-2">
      <div class="salaryJob_cnt mt-4">
        <p class="lead text-center">20 -35K</p>
        <div class="text-center">
          <small>@lang('careers.salary')</small>
        </div>
      </div>
    </div>
    <div class="col-md-10">
      <div class="content_cnt">
        <h2 class="font-weight-bold">Backend Developer</h2>
        <p class="lead">@lang('careers.backendContent')</p>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-2">
      <div class="salaryJob_cnt mt-4">
        <p class="lead text-center">25 -40K</p>
        <div class="text-center">
          <small>@lang('careers.salary')</small>
        </div>
      </div>
    </div>
    <div class="col-md-10">
      <div class="content_cnt">
        <h2 class="font-weight-bold">Fullstack Developer</h2>
        <p class="lead">@lang('careers.fullstackContent')</p>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-2">
      <div class="salaryJob_cnt mt-4">
        <p class="lead text-center">20 -35K</p>
        <div class="text-center">
          <small>@lang('careers.salary')</small>
        </div>
      </div>
    </div>
    <div class="col-md-10">
      <div class="content_cnt">
        <h2 class="font-weight-bold">Mobile Developer</h2>
        <p class="lead">@lang('careers.mobileContent')</p>
      </div>
    </div>
  </div>


    <div class="row mt-5">
      <div class="col-md-2">
        <div class="salaryJob_cnt mt-4">
          <p class="lead text-center">24 -40K</p>
          <div class="text-center">
            <small>@lang('careers.salary')</small>
          </div>
        </div>
      </div>
      <div class="col-md-10">
        <div class="content_cnt">
          <h2 class="font-weight-bold">Product Manager</h2>
          <p class="lead">@lang('careers.mobileContent')</p>
        </div>
      </div>
    </div>

</div>


@endsection
