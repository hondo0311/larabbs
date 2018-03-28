<form method="post" name="showform" action="{{url('/postinfo')}}" class="w3-container" id="showinfo" enctype="multipart/form-data">
  {{ csrf_field()}}
  <div class='w3-padding w3-left'>
    <p>
      <label>Photo:</label>
    </p>
    @if(isset($photos)
      <img src="{{uel('../storage/app/'.$photo->path)}}" width="300px" heigh="200px" style="border:5px solid; border-radius:12px">
    @else
      <p>尚未設定圖片</p>
      )
    @endif
  </div>
  <input type="hidden" name="user_id" value="{{ $users->id}}">
  <button form="showinfo" class="w3-btn" >送出</button>    
</form>
