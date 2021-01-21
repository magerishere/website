@extends('index')


@section('blog')

      
<section id="blog">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <div class="title-effect">
            <div class="bar bar-top"></div>
            <div class="bar bar-right"></div>
            <div class="bar bar-bottom"></div>
            <div class="bar bar-left"></div>
          </div>
          <h6>مطلب سایت</h6>
          <h2 class="title">آخرین مطالب</h2>
          <p>سایت لینک ما  یک سایت فروشگاهی میباشد و برای بهتر شدن سایت از شما کمک میگیرد</p>
        </div>
      </div>
    </div>
    <div class="row">
@foreach ($posts as $post)
      <div class="col-lg-4 col-md-12">
        <div class="post">
          <div class="post-image">
            <img width="360" height="200" src="{{$post->photo->file}}" alt=""> <a class="post-categories" href="/download{{$post->photo->file}}">{{$post->category->name}}</a>
          </div>
          <div class="post-desc">
            <div class="post-meta">
              <ul class="list-inline">
                <li><i class="la la-calendar mr-1"></i> {{$post->created_at->diffForHumans()}}</li>
                <li><i class="la la-user mr-1"></i> نوشته شده توسط : {{$post->user->name}}</li>
              </ul>
            </div>
            <div class="post-title">
              <h4><a href="/index/{{$post->slug}}">{{$post->title}}</a></h4>
            </div>
            <p>{{Str::limit($post->body,50)}}</p>
            <a class="icon-btn mt-4" href="/index/{{$post->slug}}"> <i class="la la-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
@endforeach
    </div>
  </div>
</section>



@endsection