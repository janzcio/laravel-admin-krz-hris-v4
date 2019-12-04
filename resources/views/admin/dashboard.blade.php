
@extends('layouts.backend')

@section('title', 'Dashboard')

@section('css-extend')
@endsection


@section('main-title', 'Dashboard')

@section('breadcrumb')
         <ol class="breadcrumb">
          <li class="breadcrumb-item">
              <a href="/">Home</a>
          </li>
          <li class="breadcrumb-item active">
              <a href="/dashboard">Dashboard</a> 
          </li>
         </ol>
@endsection

@section('left-sidebar')
        @include ('layouts.lsidebar',["currentModule" => "dashboard"])
@endsection

@section('content')
         <div class="row">
           <h3 class="font-bold">Dashboard</h3>
         </div>
@endsection

@section('js-extend')

@endsection

