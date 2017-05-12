@extends('_share')
@section('style')
html, body {
        height: 100%;
            }

body {
    margin: 0;
    padding: 0;
    width: 100%;
    display: table;
}

.container {

    text-align: center;
    display: table-cell;
    vertical-align: middle;
    background-image: url("/img/background.jpg")!important;
}

.container_center {
    text-align: center;
    display: inline-block;
    color: #000000;
}

.description{
  height:380px;
  overflow-y:auto;
}

.image{
  margin-top:-25px;
  padding:15px 0px;
}

.create{
  margin:auto;
}

.kright{
  text-align:right;
}

@stop

@section('content')




<div class="ui bottom thin sidebar menu">
    <a class="item create">
      <i class="write icon"></i>
      Create New Project
    </a>
  </div>

  <!-- <div class="pusher"> -->
    <!-- Site content !-->

 <div class="container pusher">
 <div class="container_center">
   

  <img class="ui top aligned centered tiny image" src="/img/q.png"></img>
 <!-- start of container_center -->
<div class="ui link cards">
@if($books->isEmpty())
 <div class="card create">
    <div class="content">
      <div class="header">Create a new book</div>
      <div class="meta">
        Qwriter present
      </div>
      <p class="description">
       Qwriter is a brilliant web application designed to help writer to write and manage their ideas before their writing.
      </p>
    </div>
    <div class="extra content">
      <span class="right floated">
        <i class="wait icon"></i>
        Created date<br>In Process
      </span>
      <span class="left floated">
        <i class="write icon"></i>
        Last Update<br>In Process
      </span>
    </div>
  </div>
@else
@foreach($books as $book)

  <div class="card editpage" data-id="{{$book->id}}">
    <div class="content">
      <div class="header">{{$book->title}}</div>
      <div class="meta">
        @if($book->type==1)
        Novel
        @elseif($book->type==2)
        Article
        @endif
      </div>
      <p class="description">
        {{$book->description}}
      </p>
    </div>
    <div class="extra content">
      <span class="right floated">
        <i class="wait icon"></i>
        Created date<br>{{date('d M Y', strtotime($book->created_at))}}
      </span>
      <span class="left floated"> 
        <i class="write icon"></i>
        Last Update<br>{{date('d M Y', strtotime($book->updated_at))}}
      </span>
    </div>
  </div>
@endforeach
@endif
</div>
<!-- end of container_center -->         
  </div>
 </div>

 <!-- modal -->
 <div class="ui modal">
<div class="content">
<form method="POST" action="\test" accept-charset="UTF-8">
<h2>Create New Project</h2><input name="_token" type="hidden" value="{{ csrf_token() }}">
<div class="ui form">
  <h4>Name:</h4><input type="text" name="title">
</div><br>
<div class="ui form">
   <div class="inline fields">
    <h4>Please select type of your project:</h4><hr/>
    <div class="field">
      <div class="ui radio checkbox">
        <input name="type" checked="checked" type="radio" value="1">
        <label><font size="+1">Novel</font></label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input name="type" type="radio" value="2">
        <label><font size="+1">Article</font></label>
      </div>
    </div>
    </div>
</div>
<div class="ui form">
 <h4>Description:</h4>
 <textarea rows="10" name="description">
 </textarea>
</div>
 <div class="actions kright"><br>
    <div class="ui black deny button">
      Cancel
    </div>
    <button class="ui positive right labeled icon button" type="submit">
      <i class="checkmark icon"></i>
      Create
  </button>
  </div>
</form>
</div>
 </div>

@stop

@section('js')
$(document).mousemove(function(event){
    if(event.pageY>$('.container').height()-30){
    $('.ui.sidebar').sidebar('setting', 'transition', 'push').sidebar('show');
}
  if(event.pageY<$('.container').height()-70){
    $('.ui.sidebar').sidebar('setting', 'transition', 'push').sidebar('hide');
}
  
});

$('.create').on('click',function(){
  $('.ui.modal').modal('show');
});

$('.editpage').on('click',function(){
  location.href = "/novel/"+ $(this).attr('data-id');
});

$('.dropdown').dropdown();

@stop