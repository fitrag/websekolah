<div class="mb-3 ps-{{ $comment->parent_id ? '4' : '0' }}">
<div class="row">
  <div class="col-md-2">
    Nama
  </div>
  <div class="col-md-6">
    :&nbsp;<strong>{{ $comment->nama }}</strong>
  </div>
</div> 
<div class="row">
  <div class="col-md-2">
    Komentar
  </div>
  <div class="col-md-6">
    :&nbsp;{{ $comment->komentar }}</>
  </div>
</div> 

  <!-- Tombol Balas -->
  <a href="#" onclick="showReplyForm({{ $comment->id }})" class="btn btn-success btn-sm">Balas</a>

  <!-- Form Balasan -->
  <form action="{{ route('komentar.store', $comment->berita_id) }}" method="POST" id="reply-form-{{ $comment->id }}" style="display: none;" class="mt-2">
    @csrf
    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
    <input type="text" name="nama" class="form-control mb-1" placeholder="Nama Anda" required>
    <textarea name="komentar" class="form-control mb-1" placeholder="Balasan..." rows="2" required></textarea>
    <button type="submit" class="btn btn-sm btn-primary">Kirim</button>
  </form>

  <!-- Rekursif -->
  @foreach($comment->replies as $reply)
      @include('partials.comment', ['comment' => $reply])
  @endforeach
</div>

<script>
  function showReplyForm(id) {
    event.preventDefault();
    document.querySelectorAll('[id^="reply-form-"]').forEach(el => el.style.display = 'none');
    document.getElementById('reply-form-' + id).style.display = 'block';
  }
</script>