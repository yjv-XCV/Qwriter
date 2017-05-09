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


  <div class="card">
<!--     <div class="image">
      <img src="/images/avatar2/large/matthew.png">
    </div> -->
    <div class="content">
      <div class="header">Title:</div>
      <div class="meta">
        <a>type(novel/article)</a>
      </div>
      <p class="description">
        Desciption of the novel. 
      </p>
    </div>
    <div class="extra content">
      <span class="right floated">
        <i class="wait icon"></i>
        Created date<br>a
      </span>
      <span class="left floated">
        <i class="write icon"></i>
        Last Update<br>a
      </span>
    </div>
  </div>
</div>
<!-- end of container_center -->         
  </div>
 </div>

 <!-- modal -->
 <div class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Create New Project
  </div>
  <div class="content">
    <!-- Form Area begin -->
    <form class="ui form">
  <div class="fields">
  <div class="twelve wide field">
    <label>Title</label>
    <input name="first-name" placeholder="First Name" type="text">
  </div>
  <div class="two wide field">
      <label>Type</label>
      <div class="ui selection dropdown">
          <input name="type" type="hidden">
          <i class="dropdown icon"></i>
          <div class="default text">Type</div>
          <div class="menu">
              <div class="item" data-value="1">Novel</div>
              <div class="item" data-value="0">Article</div>
          </div>
      </div>
  </div>
  </div>
   <div class="sixteen wide field">
    <label>Description</label>
    <textarea></textarea>
  </div>
</form>
    <!-- Form Area end -->
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Cancel
    </div>
    <div class="ui positive right labeled icon button">
      Create
      <i class="checkmark icon"></i>
    </div>
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

$('.dropdown').dropdown();

@stop