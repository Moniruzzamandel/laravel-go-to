@extends('layouts.app')

@section('content')
<!-- Begin Site Title
================================================== -->
	<div class="mainheading">
		<h1 class="sitetitle"></h1>
		<p class="lead">
			 
		</p>
	</div>
<!-- End Site Title
================================================== -->

<div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-md-offset-2">
                <div class="mainheading">
                    <div class="row post-top-meta authorpage">
                        <div class="col-md-10 col-xs-12">
                            <h1>{{'@'.$user->username}}</h1>
                            <span class="author-description">{{$user->bio}}</span>
                            <div class="sociallinks"><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a> <span class="dot"></span> <a target="_blank" href="https://plus.google.com/s/wowthemesnet/top"><i class="fa fa-google-plus"></i></a></div>
                            @if(Auth::user()->id != $user->id) <a target="_blank" href="https://twitter.com/" class="btn follow">Follow</a> @endif
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <img class="author-thumb" src="@if($user->provider == null) {{ url($user->image)}} @else {{$user->image}} @endif" alt="{{$user->username}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="graybg authorpage">
            <div class="container">
                <div class="listrecent listrelated">
        
                        <!-- begin post -->
                        <div class="authorpostbox">
                            <div class="card">
                                <a href="{{ url('/user/'.$user->username) }}">
                                <img class="img-fluid img-thumb" src="{{url('img/demopic/8.jpg')}}" alt="">
                                </a>
                                <div class="card-block">
                                    <h2 class="card-title"><a href="post.html">Life is worth living forever and ever</a></h2>
                      <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                                        <div class="wrapfooter">
                                            <span class="meta-footer-thumb">
                                            <a href="{{ url('/user/'.$user->username) }}"><img class="author-thumb" src="@if($user->provider == null) {{ url($user->image)}} @else {{$user->image}} @endif" alt="{{ $user->username }}"></a>
                                            </span>
                                            <span class="author-meta">
                                            <span class="post-name"><a href="{{ url('/user/'.$user->username) }}">{{ $user->username }}</a></span><br>
                                            <span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
                                            </span>
                                            <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post -->
        
                        <!-- begin post -->
                    <div class="authorpostbox">
                            <div class="card">
                        <a href="{{ url('/user/'.$user->username) }}">
                        <img class="img-fluid img-thumb" src="{{url('img/demopic/10.jpg')}}" alt="">
                        </a>
                        <div class="card-block">
                          <h2 class="card-title"><a href="post.html">Best European capitals to visit and the costs implied</a></h2>
                      <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
                      <div class="metafooter">
                            <div class="wrapfooter">
                              <span class="meta-footer-thumb">
                              <a href="{{ url('/user/'.$user->username) }}"><img class="author-thumb" src="@if($user->provider == null) {{ url($user->image)}} @else {{$user->image}} @endif" alt="{{ $user->username }}"></a>
                              </span>
                              <span class="author-meta">
                              <span class="post-name"><a href="{{ url('/user/'.$user->username) }}">{{ $user->username }}</a></span><br>
                              <span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
                              </span>
                              <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                            </div>
                          </div>
                        </div>
                            </div>
                    </div>
                        <!-- end post -->
        
                        <!-- begin post -->
                    <div class="authorpostbox">
                            <div class="card">
                        <a href="{{ url('/user/'.$user->username) }}">
                        <img class="img-fluid img-thumb" src="{{url('img/demopic/9.jpg')}}" alt="">
                        </a>
                        <div class="card-block">
                          <h2 class="card-title"><a href="post.html">10 Things you should learn before visiting</a></h2>
                      <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
                      <div class="metafooter">
                            <div class="wrapfooter">
                              <span class="meta-footer-thumb">
                              <a href="{{ url('/user/'.$user->username) }}"><img class="author-thumb" src="@if($user->provider == null) {{ url($user->image)}} @else {{$user->image}} @endif" alt="{{ $user->username }}"></a>
                              </span>
                              <span class="author-meta">
                              <span class="post-name"><a href="{{ url('/user/'.$user->username) }}">{{ $user->username }}</a></span><br>
                              <span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
                              </span>
                              <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                            </div>
                          </div>
                        </div>
                            </div>
                    </div>
                        <!-- end post -->
        
                </div>
            </div>
        </div>

@endsection