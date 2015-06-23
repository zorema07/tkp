@extends('front')

@section('content')
    <div class="wrapper">
           <section id="hruaitute">
                <div class="container">
                   <div class="row">
                        <div class="section-heading scrollpoint sp-effect3">
                      <a href="{{ url('gallery') }}"> <i class="fa fa-long-arrow-left text pull-left" style="font-size:40px" ></i></a>  
                       <h2>{{ $album->name }}</h2>
                            <div class="divider"></div>
                        </div>

                            @foreach($photos as $photo)
                                <div class="col-md-3">
                                    <a href="{{ asset($photo->directory.$photo->photo_file) }}" data-toggle="modal" data-target=".dapzar_{{ $photo->id }}"><img src="{{ asset($photo->directory.$photo->photo_file.'') }}" class="img-thumbnail"></a><br>
                                    <strong>{{ $photo->name }}</strong>
                                </div>

                        
                                <div class="modal fade bs-example-modal-md dapzar_{{ $photo->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-md ">
                                    <center> 
                                        <img  src="{{ ($photo->directory.$photo->photo_file) }}" class="img-responsive modal-content"><br>
                                         <h2><font color='black'>{{ $photo->name }}</font></h2>
                                    </center>
                                  </div>
                                </div>
                            
                            @endforeach
                                {!! $photos !!}

                            <!-- <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px;">
                                <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
                                    <div><img u="image" src="{{ ($photo->directory.$photo->photo_file) }}" /></div>
                                </div>
                            </div> -->
                    </div>
                </div>
        </section>
    </div>
@endsection