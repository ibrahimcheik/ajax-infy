@extends('layouts.app')

@section('content')
  @include('people/partials/person_modal')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">People</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             People
                             <a class="pull-right" href="{{ route('people.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                             @include('people.table')
                              <div class="pull-right mr-3">
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#personModal">new record</button>
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>


@endsection
