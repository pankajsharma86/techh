@extends('layouts.front')
@section('seo')

<title>Blog | Tech Basha</title>
 <meta charset="UTF-8">
  <meta name="description" content="Techbasha Blogs">
  <meta name="keywords" content="Techbasha blog">

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
                        <li>Blog listing</li>
                    </ul>
                </div>

                <!-- *** LEFT COLUMN ***
         _________________________________________________________ -->

                <div class="col-sm-9" id="blog-listing">
                  
                   
                    
                     @foreach($blog_posts as $blog_post)

                    <div class="post">

                        <h2>{{$blog_post->title}}</h2>
                        <p class="author-category">By <a href="#">Tech Basha</a> 
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="{{route('blog.detail', ['slug' => $blog_post->slug ])}}"><i class="fa fa-calendar-o"></i> {{$blog_post->created_at}}</a>
                            
                        </p>
                        <div class="image">
                            <a href="{{route('blog.detail', ['slug' => $blog_post->slug ])}}">
                                <img src="{{$blog_post->image}}" alt="{{$blog_post->image}}"  style=" width:700px; height:300px;">
                            </a>
                        </div>
                        <p class="intro">{{$blog_post->shortdescription}}</p>
                        <p class="read-more"><a href="{{route('blog.detail', ['slug' => $blog_post->slug ])}}" data-toggle="tooltip" title="Edit"  class="btn btn-primary">Continue reading</a>
                        </p>
                           @endforeach

                    </div>
                    <div class="col-lg-12">{{ $blog_posts->links() }}</div>
                </div>
               
                <!-- /.col-md-9 -->

                <!-- *** LEFT COLUMN END *** -->
                <div class="col-md-3">
                    <!-- *** BLOG MENU ***
 _________________________________________________________ -->
@endsection