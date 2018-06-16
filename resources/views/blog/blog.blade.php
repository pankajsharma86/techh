@extends('layouts.front')
@section('seo')

<title>{{$seo->title}}</title>
 <meta charset="UTF-8">
  <meta name="description" content="{{$seo->description}}">
  <meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')

<br><br><br><br><br><br><br>

 <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-sm-12">

                    <ul class="breadcrumb">

                        <li><a href="index.html">Home</a>
                        </li>
                        <li><a href="blog.html">Blog</a>
                        </li>
                       
                        <li>{{$post->title}}</li>
                       
                    </ul>
                </div>

                <div class="col-sm-12" id="blog-post">


                    <div class="box">

                        <h1>{{$post->title}}</h1>
                        <p class="author-date">By <a href="#">Tech Basha</a> | {{$post->created_at}}</p>
                        <p >{!! $post->shortdescription !!}</p>

                        <div id="post-content">
                           

                            <p>
                                <img src= "../{{$post->image}}" class="img-responsive" alt=" gkj" style=" width:700px; height:300px;">
                            </p>

                            <h2>{{$post->title}}</h2>

                           
                          
                                <p> {!! $post->description !!} </p>
                      

                             
                        </div>
                  

         
           

       




@endsection