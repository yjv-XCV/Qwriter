 <div class="ui tab segment" data-tab="{{$tabValue}}">
    <div class="ui white visible sidebar inverted vertical menu">
    
    <div class="item">
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

  </div>
    
  <div class="pusher">
    <!-- Site content !-->
  </div>
</div>