@extends('layouts.app')

@section('title')
    Home
@endsection

@section('page-header')
    Home
@endsection

@section('page-content')
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Info
                </div>
                <div class="panel-body">
                    <p>This is a simple application in doing the basic CRUD operation in managing records such as books.</p>
                    <p>This application uses SB Admin Theme by Start Bootstrap.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Search Button
                </div>
                <div class="panel-body">
                    <p>The Search on the upper right part of the application searches for a book in the record and returns the result.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
