@extends('front')

@section('content')

    <div class="wrapper">

        <section id="hruaitute">
            <div class="container">
               <div class="row">
                    <div class="section-heading scrollpoint sp-effect3">
                        <h2>Album</h2>
                        <div class="divider"></div>
                    </div>
                        <div class="about-item scrollpoint sp-effect2">
                           @foreach($albums as $album)
								<div class="col-md-3 text-center">
									<a href="{{ URL::to('galleryphoto?aid='.$album->id) }}"><img src="{{ $album->directory }}{{ $album->cover }}" class="img-thumbnail" ></a><br>
									<strong>{{ $album->name }}</strong>
								</div>
							@endforeach
                        </div>
                </div>
            </div>
        </section>
    </div>
@endsection