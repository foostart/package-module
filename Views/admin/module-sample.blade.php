<!--
| @TITLE
| Update existing module
| Add new module
|
|-------------------------------------------------------------------------------
| @REQUIRED
| Permission
|
|÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷
| @DESCRIPTION
| 1. Admin
| 2. Manager
| 3. User
|
|_______________________________________________________________________________
-->
@extends('package-acl::admin.layouts.base-2cols')

@section('title')
    {{ trans($plang_admin.'.pages.title-sample') }}
@stop

@section('content')
<div class="row">
    <div class="col-md-12">

        <!--SAMPLE-->
        <div class="col-md-9">
            
        </div>
        <!--/SAMPLE-->
       
        <!--SEARCH-->
        <div class="col-md-3">
            @include('package-module::admin.module-search')
        </div>
        <!--/SEARCH-->
    </div>
</div>
@stop