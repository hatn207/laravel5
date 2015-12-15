@extends('backend::layouts.main')

@section('title')
Survey
@endsection

@section('page-heading')
<h3>
    Survey Manager
</h3>
<ul class="breadcrumb">
    <li>
        <a href="#">Dashboard</a>
    </li>
    <li class="active"> Survey Manager </li>
</ul>
@endsection

@section('content')
<div ng-controller="SurveyCtrl">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-body">
                    top
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <section class="panel">
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Survey name</span>
                                <input class="form-control" ng-model="name" placeholder="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Heading</span>
                                <input class="form-control" ng-model="heading" placeholder="heading" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Introduction</span>
                                <input class="form-control" ng-model="introduction" placeholder="introduction" />
                            </div>
                        </div>
                        <div class="form-group">
                            <a ng-click="addQuestion()" href="#">Insert question</a>
                        </div>
                        <div class="form-group" ng-repeat="i in questions">
                            <section class="panel" style="border: 1px solid #65CEA7">
                                <div class="panel-heading">
                                    <div class="input-group">                               
                                        <span class="input-group-addon">@{{questions.indexOf(i) + 1}}</span>
                                        <input class="form-control" style="font-weight: normal" ng-model="i.q_name" placeholder="" />
                                        <span class="input-group-addon">
                                            <a class="fa fa-trash-o" ng-click="removeQuestion(i)" href="#"></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="panel-body well">                            
                                    <section class="panel">
                                        <header class="panel-heading custom-tab">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab-1" data-toggle="tab">
                                                        <i class="fa fa-list-ul"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab-2" data-toggle="tab">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#tab-3" data-toggle="tab">
                                                        <i class="fa fa-list-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#tab-4" data-toggle="tab">
                                                        <i class="fa fa-align-justify"></i>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#tab-5" data-toggle="tab">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </header>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-1">
                                                    <div class="form-group" ng-show="i.type_ml" ng-repeat="n in [] | num_ml:i.num_ml" >
                                                        <input type="text" ng-model="val_txt"/>
                                                        <a>@{{val_txt}}</a>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="checkbox" ng-model="i.type_ml" name=""/><span>&numsp;Multiple choice&numsp;</span>
                                                            <input style="width: 3em" ng-model="i.num_ml" ng-show="i.type_ml" type="number" min="1" max="10" placeholder="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-2">
                                                    tab-2
                                                </div>
                                                <div class="tab-pane " id="tab-3">
                                                    tab-3
                                                </div>
                                                <div class="tab-pane " id="tab-4">
                                                    tab-4
                                                </div>
                                                <div class="tab-pane " id="tab-5">
                                                    tab-5
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="form-group">
                                        <a ng-click="addQuestion()" href="#">Add question</a>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Submit</span>
                                <input class="form-control" ng-model="submit_value" placeholder="submit value" />
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-lg-6">
            <section class="panel">
                <div class="panel-body">
                    <table>
                        <tbody>
                            <tr>
                                <td><h1 ng-bind="heading"></h1></td>
                            </tr>
                            <tr>
                                <td><p ng-bind="introduction"></p></td>
                            </tr>
                        </tbody>
                    </table>
                    <table ng-repeat="i in questions">
                        <tbody>
                            <tr>
                                <td><p>@{{questions.indexOf(i) + 1}}. @{{i.q_name}}</p></td>
                            </tr>
                            <tr ng-show="i.type_ml" ng-repeat="n in [] | num_ml:i.num_ml">
                                <td>
                                    <div class="form-group">
                                        <span>@{{val_txt}}</span>
                                        <input type="checkbox" />
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr>
                                <td style="width: 100%;"></td>
                                <td><button ng-bind="submit_value">@{{submit_value}}</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection

@section('before_scripts')
{!! Html::script('angularJS/controllers/SurveyController.js') !!}
@endsection

@section('scripts')

@endsection
