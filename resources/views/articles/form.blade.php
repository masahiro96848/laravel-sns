@csrf
<div class="md-form">
  <label for="">タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">
  <label for=""></label>
  <textarea name="body" class="form-control" id="" cols="30" rows="16" placeholder="本文">{{  $article->body ?? old('body') }}</textarea>
</div>