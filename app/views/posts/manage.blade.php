@extends('layouts.master')

@section('content')
<div class="container" ng-app='blogIndex'>
    <main ng-controller='IndexController'>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date Posted</th>
                    <th>Date Updated</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat='post in posts'>
                    <td ><a href="{{{ action('PostsController@index') }}}" >@{{ post.title }}</a></td>
                    <td>@{{ post.user.first_name }}</td>
                    <td>@{{ post.user.created_at.date }}</td>
                    <td>@{{ post.user.updated_at.date }}</td>
                    <td>
                        <form action='POST' ></form>
                    </td>
                    </tr>
            </tbody>
        </table>
    </main>
</div>
@stop

@section('bottom-script')
    <script src="/js/angular.min.js"></script>
    <script src="/js/blogIndex.js"></script>
@stop
