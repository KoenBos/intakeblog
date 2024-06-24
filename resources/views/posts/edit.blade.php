@extends('main')

@section('title', '| Edit Post')

@section('content')

<div class="row">
    <form data-parsley-validate method="POST" action="{{ route('posts.update', $post->id) }}">
        @method('PUT')
        <div class="col-md-8 from-group">  
        
            <label name="title">Title:</label>
            <input id="title" name="title" class="form-control" maxlength='255' required value="{{ $post->title }}">

            <label name="slug" class="form-spacing-top">Slug:</label>
            <input id="slug" name="slug" class="form-control" maxlength='255' minlength='5' required value="{{ $post->slug }}">

            <label name="body" class="form-spacing-top">Message:</label>
            <textarea id="body" name="body" rows="10" class="form-control" required>{{ $post->body }}</textarea>
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date( 'M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date( 'M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger btn-block">Cancel</a>
                    </div>
                    <div class="col-sm-6">
                        <input type="submit" value="Save Changes" class="btn btn-success btn-block">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        
                    </div>
                </div>
            </div>
        </div>
    </form><!-- end of form -->
</div>

@endsection