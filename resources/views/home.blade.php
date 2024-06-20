@extends('main')

@section('title', '| Homepage')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to Intake Blog</h1>
                    <p class="lead">Thank you for visiting. This is our Laravel powered blog site.</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
            </div>
        </div><!-- end of header .row -->

        <div class="row">
            <div class="col-md-8"> 
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi, dicta, voluptatem, quidem vero ex inventore iure eaque fugit fugiat. Quisquam, quod, quibusdam, voluptatem quae voluptates quos aperiam quia fugit...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi, dicta, voluptatem, quidem vero ex inventore iure eaque fugit fugiat. Quisquam, quod, quibusdam, voluptatem quae voluptates quos aperiam quia fugit...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi, dicta, voluptatem, quidem vero ex inventore iure eaque fugit fugiat. Quisquam, quod, quibusdam, voluptatem quae voluptates quos aperiam quia fugit...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi, dicta, voluptatem, quidem vero ex inventore iure eaque fugit fugiat. Quisquam, quod, quibusdam, voluptatem quae voluptates quos aperiam quia fugit...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="com-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
@endsection