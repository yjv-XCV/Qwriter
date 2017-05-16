 <div class="ui tab" data-tab="{{$tabValue}}">
    <div class="ui white visible sidebar inverted vertical menu">
    
    <div class="item" style="font-weight: 900;font-size:16px;background-color:#0C050C">
      {{$book->title}}
    </div>
    @if($display==1)
    @foreach($cards as $card)
    @include('_cardTabButton',['tabText'=>$card->name])
    @endforeach
    @elseif($display==2)
    <div class="item">Synopsis:</div>
    @foreach($cardsA as $card)
    @include('_cardTabButton',['tabText'=>$card->name])
    @endforeach
    <div class="item">Settings:</div>
    @foreach($cardsB as $card)
    @include('_cardTabButton',['tabText'=>$card->name])
    @endforeach
    @elseif($display==3)
    @foreach($cards as $card)
    @include('_cardTabButton',['tabText'=>$card->name,'isCountry'=>1])
    @foreach($card->subcards()->get() as $subcard)
    @include('_cardTabButton',['tabText'=>$subcard->name])
    @endforeach
    @endforeach
    @endif
    <a class="item {{$tabValue}}" style="background-color:#111111;font-style: italic;">Add New {{$tabValue}}</a>

  </div>
    
  <div class="pusher">
    <!-- Site content !-->
    @if($display==1)
    @foreach($cards as $card)
    @include('_cardDescription',['tabValue'=>$card->name])
    @endforeach

    @elseif($display==2)
    @foreach($cardsA as $card)
    @include('_cardDescription',['tabValue'=>$card->name])
    @endforeach
    @foreach($cardsB as $card)
    @include('_cardDescription',['tabValue'=>$card->name])
    @endforeach

    @elseif($display==3)
    @foreach($cards as $card)
    @include('_cardDescription',['tabValue'=>$card->name,'isCountry'=>1])
    @foreach($card->subcards()->get() as $subcard)
    @include('_cardDescription',['tabValue'=>$subcard->name])
    @endforeach
    @endforeach
    @endif

    <div class="ui basic modal {{$tabValue}}">
        <div class="ui icon header">
    <i class="wizard icon"></i>
        Create a new {{$tabValue}}
    <br>
    <div class="content">
<form method="POST" action="\novel\{{$book->id}}" accept-charset="UTF-8">
<input name="_token" type="hidden" value="{{ csrf_token() }}">
<input name="book_id" type="hidden" value="{{$book->id}}">
<div class="ui form">
  <h3 style="text-align:left;">Name:</h3><input type="text" name="name">
</div><br>
@if($tabValue=="Overview")
<div class="ui form">
   <div class="inline fields">
    <div class="field">
      <div class="ui radio checkbox">
        <input name="type" checked="checked" type="radio" value="0">
        <label><font size="+1" color="white">Sypnosis</font></label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input name="type" type="radio" value="1">
        <label><font size="+1" color="white">Setting</font></label>
      </div>
    </div>
    </div>
</div>
@elseif($tabValue=="Locations")
<div class="ui form">
   <div class="inline fields">
    <div class="field">
      <div class="ui radio checkbox">
        <input name="type" checked="checked" type="radio" value="3">
        <label><font size="+1" color="white">Country</font></label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input name="type" type="radio" value="8">
        <label><font size="+1" color="white">Place</font></label>
      </div>
    </div>
    <div class="field">
    <div class="ui fluid selection dropdown">
  <input name="card_id" type="hidden" value="">
  <i class="dropdown icon"></i>
  <div class="default text">Select Country (Ignore if this is a country)</div>
  <div class="menu">
    @foreach($cards as $card)
    <div class="item" data-value="{{$card->id}}">
      {{$card->name}}
    </div>
    @endforeach
    
  </div>
</div>
</div>
    </div>
    
</div>
@elseif($tabValue=="Characters")
<input name="type" type="hidden" value="2">
@elseif($tabValue=="Scenes")
<input name="type" type="hidden" value="4">
@elseif($tabValue=="Histories")
<input name="type" type="hidden" value="5">
@elseif($tabValue=="Items")
<input name="type" type="hidden" value="6">
@elseif($tabValue=="Brainstorms")
<input name="type" type="hidden" value="7">
@endif

 <div class="actions kright"><br>
    <div class="ui black deny button">
      Cancel
    </div>
    <button class="ui positive button" type="submit">
      Create
  </button>
  </div>
</form>
</div>
  </div>
    </div>


  </div>
</div>