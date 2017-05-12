 <div class="ui basic modal">
  <div class="ui icon header">
    <i class="trash icon"></i>
    <br>
    <h2>Are you sure you want to delete this book?</h2>
  </div>
  <div class="actions">
 <form action="\home" method="POST"><input name="_token" type="hidden" value="{{ csrf_token() }}">
  <input name="id" type="hidden" value="{{$book->id}}">
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
