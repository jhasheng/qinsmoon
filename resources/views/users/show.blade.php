@extends('layouts.app')

@section('content')
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10"><h1>User name</h1></div>
            <div class="col-sm-2"><a href="/users" class="pull-right">
                    <img title="profile image" class="img-circle img-responsive"
                         src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item text-muted">Profile</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span>
                        2.13.2014
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Last seen</strong></span>
                        Yesterday
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span>
                        Joseph
                        Doe
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78
                    </li>
                </ul>
                {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Social Media</div>--}}
                {{--<div class="panel-body"><i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i--}}
                {{--class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i--}}
                {{--class="fa fa-google-plus fa-2x"></i></div>--}}
                {{--</div>--}}
            </div>
            <div class="col-sm-9">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Label 1</th>
                                    <th>Label 2</th>
                                    <th>Label 3</th>
                                    <th>Label</th>
                                </tr>
                                </thead>
                                <tbody id="items">
                                <tr>
                                    <td>1</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop