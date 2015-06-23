@extends('front')

@section('content')
    <div class="wrapper">
        <div class="container">
           <div class="row">
                   <h2 class="text-center">{{ $category->name }}</h2>
                   <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                      <tr>
                        <th height="38" align="center" class="col-md-1 text-center">#</th>
                        <th height="38" align="left" class="col-md-8">Title</th>
                        <th height="38" align="left" class="col-md-3">Date of Published</th>
                      </tr>
                      </thead>
                      <tbody>
                    @foreach($postByCat as $post)
                        <tr bgcolor="">
                        <td height="25" align="center" class="col-md-1 text-center">{{ $index++ }}</td>
                        <td height="25" align="left" class="col-md-3"><a style='font-size:15px' href="{{route('public.show', array($post->id))}}">{{$post->title}}</a></td>
                        <td height="25" align="left" class="col-md-2">{{date('d F,Y',strtotime($post->created_at))}}</td>
                        <td align="left" class="action text-center col-md-2">
                                
                        </div>
                    @endforeach
                    </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>
@endsection