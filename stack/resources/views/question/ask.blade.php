@extends('../layouts.dashboard')

@section('title', 'Ask')

@section('content')

<h2>Buatlah Pertanyaan ke publik</h2>
<div class="container">
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="question" class="form-control-label">Inti Pertanyaan</label>
            <input type="text" name="question" id="question" value="{{ old('question') }}" class="form-control @error('question') is-invalid @enderror" placeholder="Masukkan Inti Pertanyaan" />
            <small id="passwordHelpBlock" class="form-text text-muted">
                Harus spesifik, bayangkan kamu bertanya ke orang lain
            </small>
        </div>
        <div class="form-group">
            <label for="description" class="form-control-label">Deskripsi</label>
            <textarea name="description" id="description" rows="5" class="ckeditor form-control">
            {{ old('description') }}</textarea>
            <small id="passwordHelpBlock" class="form-text text-muted">
                Berisi Kode kode yang ingin ditanyakan
            </small>
        </div>
        <div class="form-group">
            <label for="concept" class="form-control-label">Tipe</label>
            <div class="col-md-6" style="margin-left: -14px;">
                <input type="text" name="concept" id="concept" rows="3" class="form-control">
                {{ old('concept') }}</input>
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Bahasa Pemrogramman yang ditanyakan
                </small>
            </div>
        </div>
        <input type="text" value="0" name="isvote" style="display: none;"></input>
        <input type="text" value="{{ $user['id']}}" name="user_id" style="display: none;"></input>
        <button type="submit" class="btn btn-primary">Buat</button>
    </form>
</div>

@endsection