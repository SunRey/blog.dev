@extends('layouts.angular')

@section('content')
<div class="container" >
    <main ng-controller='DashboardController as dash'>
        <md-content flex>
            <md-list>
                <md-list-item class="md-3-line" ng-repeat="post in dash.posts" ng-click="null">
                    <div class="md-list-item-text" layout="column">
                        <h3><a href="{{{ action('PostsController@index') }}}" >@{{ post.title }}</a></h3>
                        <h4>@{{ post.user.first_name }}</h4>
                        <p>@{{ post.user.updated_at.date }}</p>

                    </div>
                    <md-button class="md-secondary md-warn md-hue-2" ng-click="dash.deletePost(post)"><i class="fa fa-times"></i>&nbsp;Delete</md-button>
                    <md-divider ng-if="!$last"></md-divider>
                </md-list-item>
            </md-list>
        </md-content>
    </main>
</div>
@stop

@section('bottom-script')
    <script src="/js/dashboard.controller.js" type="text/javascript"></script>
@stop

