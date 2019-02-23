@extends('main')
@section('title', '| Homepage')
@section('content')
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="jumbotron">
						<h1>Welcome to My Blog!</h1>
						<p class="lead">Thank you so much for visting, This is my test website built with laravel, Please read my popular post!</p>
						<p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
					</div>
				</div>
			</div>

			<div class="col-md-8">
					<div class="post">
						<h3>Post Title</h3>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
						</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
					<hr>

					<div class="post">
						<h3>Post Title</h3>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
						</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
					<hr>

					<div class="post">
						<h3>Post Title</h3>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
						</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
					<hr>

					<div class="post">
						<h3>Post Title</h3>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
						</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
			</div>
			<div class="col-md-3 col-md-offset-1">
				<h2>Sidebar</h2>
			</div>
		</div>
@endsection