@extends('front')

@section('content')
    <div class="wrapper">
        <div class="container">
           <div class="row">
                
                <div class="scrollpoint sp-effect2" >
                                	<div style="font-size:35px">{{$post->title}}<br>
                                	<em style="font-size:20px"> {{date('dS F, Y',strtotime($post->created_at))}}</em>
                                    </div>
                                    <br> {!! $post->body !!} <br>
                </div>
            </div>
        </div>
    </div>
@endsection