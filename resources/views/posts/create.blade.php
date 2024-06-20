@extends('main')
@section('title', '| Create New Post')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            <form data-parsley-validate method="POST" action="{{ route('posts.store') }}">
                <div class="form-group">
                    <label name="title">Title:</label>
                    <input id="title" name="title" class="form-control" maxlength='255' required>
                </div>
                <div class="form-group">
                    <label name="body">Message:</label>
                    <textarea id="body" name="body" rows="10" class="form-control" required></textarea>
                </div>
                <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="/js/parsley.min.js"></script>
@endsection