 <div class="ui tab" data-tab="{{$tabValue}}">
     <div class="delete_button">
     	<button class="ui red delCard button"><i class="trash icon"></i>Delete {{$tabValue}}</button>
     	</div>

    <div class="descriptions">
      <textarea class="description" model="100">
      </textarea>
      <div class="description">
      </div>
    </div>


     	<div class="ui basic del_Card modal">
  <div class="ui icon header">
    <i class="trash icon"></i>
    <br>
    <h2>Are you sure you want to delete {{$tabValue}}?</h2>
  </div>
  <div class="actions">
 <form action="\novel\{{$book_id}}\delete" method="POST"><input name="_token" type="hidden" value="{{ csrf_token() }}">
  <input name="id" type="hidden" value="{{$card_id}}">
    <div class="ui red basic cancel inverted button">
      <i class="remove icon"></i>
      Cancel
    </div>
    <button class="ui red ok inverted button" type="submit">
      <i class="trash icon"></i>
      Delete
      </button>
  </form>
  </div>
</div>
</div>