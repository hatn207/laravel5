@extends('backend::layouts.main')

@section('title')
@endsection

@section('page-heading')
<h3>
    Users Manager
</h3>
<ul class="breadcrumb">
    <li>
        <a href="#">Dashboard</a>
    </li>
    <li class="active"> Users Manager </li>
</ul>
@endsection

@section('content')
<section class="panel">
    <div ng-controller="UserCtrl" class="panel-body">
        <table class="table  table-hover general-table">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
            </tr>
            <tr ng-repeat="x in users">
                <td>@{{ x.id}}</td>
                <td>@{{ x.full_name}}</td>
                <td>@{{ x.email}}</td>
            </tr>
        </table>
    </div>
</section>
@endsection

@section('before_scripts')
{!! Html::script('angularJS/controllers/UserController.js') !!}
@endsection

@section('scripts')

@endsection
