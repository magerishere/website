<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body {
          margin: 0 auto;
          max-width: 800px;
          padding: 0 20px;
        }
        
        .container {
          border: 2px solid #dedede;
          background-color: #f1f1f1;
          border-radius: 5px;
          padding: 10px;
          margin: 10px 0;
        }   
        
        .darker {
          border-color: #ccc;
          background-color: #ddd;
        }
        
        .container::after {
          content: "";
          clear: both;
          display: table;
        }
        
        .container img {
          float: left;
          max-width: 60px;
          width: 100%;
          margin-right: 20px;
          border-radius: 50%;
        }
        
        .container img.right {
          float: right;
          margin-left: 20px;
          margin-right:0;
        }
        
        .time-right {
          float: right;
          color: #aaa;
        }
        
        .time-left {
          float: left;
          color: #999;
        }
        </style>
        </head>
        <body>
        
        <h2>Chat Messages</h2>

        {{-- @foreach ($chats as $chat)
            
    
        @if ($chat->user_id === $user1->id)
        <div class="container">
            <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
            @foreach ($user1->chat as $chat1)
            <p>{{$chat1->message}}</p>
            <span class="time-right">{{$chat1->created_at}}</span>
            @endforeach

          </div>
        @endif

        @if ($chat->config_id === $user2->id) 
        <div class="container darker">
            <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
            @foreach ($user2->chat as $chat2)
            <p>{{$chat2->message}}</p>
            <span class="time-left">{{$chat2->created_at}}</span>
            @endforeach
          </div>
        @endif
        
        
        @endforeach --}}


        @foreach ($chats as $chat)
          
        <div class="{{$chat->user->id === $user1->id ? 'container' : 'container darker'}}">
            <img src="{{$chat->user->id === $user1->id ? $user1->photo->file : $user2->photo->file}}" alt="Avatar" style="width:100%;">
            <p>{{$chat->message}}</p>
            <span class="{{$chat->user->id === $user1->id ? 'time-right' : 'time-left'}}">{{$chat->created_at->diffForHumans()}}</span>
        </div>

        @endforeach

        <div id="appendLastMessage"></div>
        
{{--     
    {!! Form::open(['method'=>'POST','action'=>'App\Http\Controllers\ChatController@store']) !!}
    {!! Form::hidden('user_id',$user1->id) !!}
    {!! Form::hidden('config_id',$user2->id) !!}
    {!! Form::text('message',null,['placeholder'=>'Type a message...']) !!}
    {!! Form::submit('Send',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!} --}}
    <form>
      @csrf
      <input type="hidden" name="sameChatsId" id="sameChatsId" value="{{$user1->id + $user2->id}}">
      <input type="hidden" name="user_id" id="user_id" value="{{$user1->id}}">
      <input type="hidden" name="config_id" id="config_id" value="{{$user2->id}}">
      <input type="hidden" name="image" id="image" value="{{$user1->photo->file}}" >
      <input type="text" name="message" id="message" placeholder="Type a message...">
      <button type="button" onclick="chat()" class="btn btn-primary" id="sendChat">Send</button>
    </form>

    <script src="/js/admin/main.js"></script>
		<script src="/js/admin/my-script.js"></script>	
</body>
</html>