@extends('index')



@section('content')

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="left-side">
          <div class="post">
            <div class="post-image">
              <img class="img-fluid h-100 w-100" src="{{$post->photo->file}}" alt="">
            </div>
            <div class="post-desc">
              <div class="post-meta">
                <ul class="list-inline">
                  <li><i class="la la-calendar mr-1"></i> {{$post->created_at->diffForHumans()}}</li>
                  <li><i class="la la-user mr-1"></i> نوشته شده توسط {{$post->user->name}}</li>
                </ul>
              </div>
              <div class="post-title">
                <h2>{{$post->title}}</h2>
              </div>
              <p class="lead">{{$post->body}}</p>
              <p class="mb-0">سایت لینک ما  یک سایت فروشگاهی میباشد و برای بهتر شدن سایت از شما کمک میگیرد</p>
              <div class="blog-share d-sm-flex justify-content-between mt-5">
                <div class="social-icons">
                  <h4 class="mb-2">اشتراک: </h4>
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="post-tags text-sm-right xs-mt-3">
                  <h4 class="mb-2">تگ: </h4>
                  <ul class="list-inline">
                    <li><a href="#">اپلیکیشن</a>
                    </li>
                    <li><a href="#">لندینگ</a>
                    </li>
                    <li><a href="#">Css</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="my-5">
            <h3 class="text-black">نرم افزار مبتنی بر عملکرد</h3>
            <p class="mt-3 mb-0">سایت لینک ما  یک سایت فروشگاهی میباشد و برای بهتر شدن سایت از شما کمک میگیرد</p>
            <img class="img-fluid radius box-shadow my-4" src="images/blog/large/03.jpg" alt="">
            <p>سایت لینک ما  یک سایت فروشگاهی میباشد و برای بهتر شدن سایت از شما کمک میگیرد</p>
          </div>
          <div class="owl-carousel owl-theme" data-dots="false" data-items="2" data-sm-items="1" data-autoplay="true">
            <div class="item">
              <div class="post">
                <div class="post-image">
                  <img class="img-fluid h-100 w-100" src="images/blog/01.jpg" alt=""> <a class="post-categories" href="#">Photo</a>
                </div>
                <div class="post-desc">
                  <div class="post-title">
                    <h4><a href="blog-single.html">لینک ما نرم افزار مبتنی بر عملکرد</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="post">
                <div class="post-image">
                  <img class="img-fluid h-100 w-100" src="images/blog/02.jpg" alt=""> <a class="post-categories" href="#">Photo</a>
                </div>
                <div class="post-desc">
                  <div class="post-title">
                    <h4><a href="blog-single.html">آخرین ویژگی های اضافه شده</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="post">
                <div class="post-image">
                  <img class="img-fluid h-100 w-100" src="images/blog/03.jpg" alt=""> <a class="post-categories" href="#">Photo</a>
                </div>
                <div class="post-desc">
                  <div class="post-title">
                    <h4><a href="blog-single.html">تمامی حقوق متعلق به سایت لینک ما میباشد</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="media-holder mt-5">
            <div class="section-title mb-4">
              <h2 class="title">نظرات <span></span></h2>
            </div>
            @foreach ($comments as $comment)
            <br>
            <div class="media">
              <img class="img-center ml-3" alt="image" src="{{$comment->photo ?: 'http://placehold.it/350x350'}}">
              <div class="media-body">
                <h6>{{$comment->author}}</h6> 
                <div class="comment-date">{{$comment->created_at->diffForHumans()}}</div>
                <p>{{$comment->body}}</p>
                <div class="comment-reply"><a class="applyReply">پاسخ</a>
                </div>
                <form id="reply-send" action="/admin/comments/replies">
                  @csrf
                 {!! Form::hidden('comment_id',$comment->id) !!}

                </form>
        
              </div>
            </div>
            @foreach ($comment->replies as $reply)
            <div class="media inner box-shadow">
              <img class="img-center ml-3" alt="image" src="{{$reply->photo}}">
              <div class="media-body">
                <h6>{{$reply->author}}</h6> 
                <div class="comment-date">{{$reply->created_at->diffForHumans()}}</div>
                <p>{{$reply->body}}</p>
                <div class="comment-reply"> <a href="#">پاسخ</a>
                </div>
              </div>
            </div>
            @endforeach <!-- for reply comment -->

            @endforeach <!-- for comment -->

          </div>


          {{-- Comment Form --}}
          <div id="commentForm" class="post-comments mt-5">
            <div class="section-title mb-4">
              <h2 class="title"> نظرتو بنویس </h2>
              <p id="create_comment_message" class="bg-success" style="display: none;color:white;">نظر شما ارسال شد.پس از تایید نمایش داده میشود</p>
            </div>
            {{-- {!! Form::open(['id'=>'contact-form','url'=>"/admin/comments"]) !!} <!-- id=contact-form For ajax--> --}}
            <form id="comment-send" action="/admin/comments">
              @csrf
              {!! Form::hidden('post_id',$post->id) !!}
              <div class="messages"></div>
              @guest

              <div class="form-group">
                <input id="form_name" type="text" name="author" class="form-control" placeholder="نام" required="required" data-error="نام شما الزامی هست.">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input id="form_email" type="email" name="email" class="form-control" placeholder="ایمیل" required="required" data-error="ایمیل نامعتبر است.">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group mb-0">
                <textarea id="form_message" name="body" class="form-control h-100" placeholder="نظر شما..." rows="4" required="required" data-error="لطفا نظر خود را بنویسید."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            
               
              @else
              <div class="form-group mb-0">
                <textarea id="form_message" name="body" class="form-control h-100" placeholder="نظر شما..." rows="4" required="required" data-error="لطفا نظر خود را بنویسید."></textarea>
                <div class="help-block with-errors"></div>
              </div>
              
              @endguest
              
              <button id="create_comment_button" type="submit" class="btn btn-theme mt-5" data-text="ارسال نظر"><span>d</span><span>n</span><span>e</span><span>S</span>
              </button>
            {!! Form::close() !!}
          </div>
          {{-- End Comment Form --}}

        
        </div>
      </div>
      <div class="col-lg-4 col-md-12 sidebar md-mt-5">
        <div class="widget">
          <div class="widget-search">
            <form class="form-inline form">
              <div class="widget-searchbox">
                <button type="submit" class="search-btn"> <i class="fas fa-search"></i>
                </button>
                <input type="text" placeholder="جستجوگر..." class="form-control">
              </div>
            </form>
          </div>
        </div>
        <div class="widget">
          <h5 class="widget-title">دسته بندی</h5>
          <ul class="widget-categories list-unstyled">
            @foreach ($categories as $category)
            <li><a href="/index/category/{{$category->name}}">{{$category->name}}<span>{{$category->posts->count()}}</span></a></li>
            @endforeach
          </ul>
        </div>
        <div class="widget">
          <h5 class="widget-title">مطالب اخیر</h5>
          <div class="recent-post">
            <ul class="list-unstyled">
              @foreach ($latestPosts as $latestPost)
              <li class="mb-3">
                <div class="recent-post-thumb">
                  <img class="img-fluid" src="{{$latestPost->photo->file}}" alt="">
                </div>
                <div class="recent-post-desc"> <a href="/index/{{$latestPost->slug}}">{{$latestPost->title}}</a> 
                  <div class="post-date"><span>{{$latestPost->created_at->diffForHumans()}}</span>
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

@endsection


@section('footer')


 
<script>
$(document).ready(function(){

  $('#comment-send').submit(function(e){
    e.preventDefault();

    
    var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function()
           {
               $('#create_comment_message').slideDown(200);
               document.getElementById('comment-send').reset();

           },
           error: function () {
             alert('Not');
           }
         });
  });

  
  $('#reply-send').submit(function(e){
    e.preventDefault();

    
    var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function()
           {
               alert('work fine'); // show response from the php script.
           },
           error: function () {
             alert('Not fine');
           }
         });
  });

  $('.applyReply').click(function(){
    var form = "<textarea name='body'></textarea><button type='submit' class='btn btn-primary'>Send reply</button>";
    $(this).parent().parent().find("#reply-send").append(form);
  });


});
</script>
@endsection







{{-- 

$('.applyReply').click(function () {
  $('#commentForm').hide();
  $('#replyForm').slideDown('slow');
  var x = document.getElementsByClassName('authorSelector')[2].value;
  console.log(x);
}); --}}