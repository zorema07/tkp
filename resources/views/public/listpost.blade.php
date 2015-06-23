@extends('front')

@section('content')
    <div class="wrapper">
        <div class="container">
           <div class="row" >
                <div class="section-heading scrollpoint sp-effect3" >
                   <h2>{{ $category->name }}</h2>
                </div>
                <div class="about-item scrollpoint sp-effect2">
                    @foreach($postByCat as $post)
                        <div class="text-left col-md-4 pull-left" style="height:150px">
                                	<a style='font-size:20px' href="{{route('public.show', array($post->id))}}">{{$post->title}}</a>
                                	<br><em> {{date('d F,Y',strtotime($post->created_at))}}</em>
                                <br>
                                     {!! substr($post->body,0,200) !!}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="pull-right" style='font-size:20px'> 
           	 <a style='color:red' href='{{URL::to("public/$category->id/list")}}'>Archives <i class="fa fa-archive"></i></a>
           </div>
        </div>
    </div>
@endsection