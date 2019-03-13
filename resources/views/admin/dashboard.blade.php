@extends('layouts.admin')
@section('content')
    @include('layouts.dashboard_nav')

<div class="main-content">
    @include('layouts.topbar')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">

            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">

        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">All News</h3>
                            </div>
                            <div class="col text-right">
                                <a href="/posts" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Body</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($posts) > 0) @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">
                                        {{ $post->id }}
                                    </th>
                                    <td>
                                        {{ $post->title }}
                                    </td>
                                    <td>
                                        {!! $post->body !!}
                                    </td>
                                    <td>
                                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit News</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST']) !!} {{ Form::hidden('_method', 'DELETE
                                        ') }}
                                        <div class="uk-margin">
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach @else
                                <tr>

                                    <td>
                                        <h1>No News Yet</h1>
                                    </td>

                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        © 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- NAVIGATION HEADER TOP NAVBAR-->
@endsection
