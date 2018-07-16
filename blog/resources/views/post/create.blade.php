<!-- createPost.blade.php -->
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog - Create Post</title>

        <!-- Styles -->
        

	    @include('bulmaTempHead')
    </head>
    <body>
	    	@include('header')

	    	<div class="hero-body">

            	<div class="container has-text-centered">
	                <div class="columns is-vcentered">
	                	<div class="column is-2"></div>
	                    <div class="column is-8">
	                    	<h1 style= "font-size: 125%">New Post</h1>
            				<br>
	                    	<form method="POST" action="/posts" enctype="multipart/form-data" style="text-align: left;">

	                    		{{csrf_field()}}

						    	<!--Field Title-->
								<div class="field">
								  <label class="label" >Title:</label>
								  <div class="control">
								    <input class="input" type="text" placeholder="Insert the Post's title here" name="title">
								  </div>
								</div>

								<!--Field Body-->
								<div class="field">
								  <label class="label" >Body:</label>
								  <div class="control">
								    <textarea class="textarea" placeholder="Insert the Post's body here" name="body"></textarea> 
								  </div>
								</div>

								<div class="field is-grouped">
								  <div class="control">
								    <button class="button">Publish</button>
								  </div>
								  <!--<div class="control">
								    <button class="button">Cancel</button>
								  </div>-->
								</div>
							</form>
						</div>
						<div class="column is-2"></div>
					</div>		
				</div>
			</div>
		</section>
    </body>
		