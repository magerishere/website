@extends('index')

@section('content')


<!--body content start-->


<div class="page-content">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12">
            @foreach ($posts as $post)
            <br>
            <br>
                
            <div class="post">
              <div class="post-image">
                <img class="img-fluid h-100 w-100" src="{{$post->photo->file}}" alt=""> <a class="post-categories" href="#">{{$post->category->name}}</a>
              </div>
              <div class="post-desc">
                <div class="post-meta">
                  <ul class="list-inline">
                    <li><i class="la la-calendar mr-1"></i> {{$post->created_at->diffForHumans()}}</li>
                    <li><i class="la la-user mr-1"></i> By {{$post->user->name}}</li>
                  </ul>
                </div>
                <div class="post-title">
                  <h4><a href="/index/{{$post->title}}">{{$post->title}}</a></h4>
                </div>
                <p>{{$post->body}}</p>
                <a class="icon-btn mt-4" href="/index/{{$post->slug}}"> <i class="la la-angle-right"></i>
                </a>
              </div>
            </div>

            @endforeach

            <nav aria-label="Page navigation" class="mt-8">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a>
                </li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-4 col-md-12 sidebar md-mt-5">
            <div class="widget">
              <div class="widget-search">
                <form class="form-inline form">
                  <div class="widget-searchbox">
                    <button type="submit" class="search-btn"> <i class="fas fa-search"></i>
                    </button>
                    <input type="text" placeholder="جستجوگر" class="form-control">
                  </div>
                </form>
              </div>
            </div>
            <div class="widget">
              <h5 class="widget-title">دسته بندی</h5>
              <ul class="widget-categories list-unstyled">
                @foreach ($categories as $category)
                <li> <a href="/index/category/{{$category->name}}"> {{$category->name}}<span>{{$category->posts->count()}}</span></a>
                </li>
                @endforeach
              </ul>
            </div>        
            <div class="widget">
              <h5 class="widget-title">مطالب اخیر </h5>
              <div class="recent-post">
                <ul class="list-unstyled">
                  @foreach ($latestPosts as $latestPost)
                  <li class="mb-3">
                    <div class="recent-post-thumb">
                      <img class="img-fluid" src="{{$latestPost->photo->file}}" alt="">
                    </div>
                    <div class="recent-post-desc"> <a href="/index/{{$latestPost->title}}">{{$latestPost->title}}</a> 
                      <div class="post-date"> <span>{{$latestPost->created_at->diffForHumans()}}</span>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="widget">
              <h5 class="widget-title">تگ</h5>
              <ul class="widget-tags list-inline">
                <li> <a href="#">طراحی</a>
                </li>
                <li> <a href="#">سئو</a>
                </li>
                <li> <a href="#">فروشگاه</a>
                </li>
                <li> <a href="#">تجارت</a>
                </li>
                <li> <a href="#">آنالیز</a>
                </li>
                <li> <a href="#">ایمیل</a>
                </li>
                <li> <a href="#">دیجیتال</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    </div>
    
    <!--body content end--> 
    
    
@endsection