<div class="mb-2">
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $score->name) }}" placeholder="The name of student">
    @error('name')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror

    <input type="text" name="name_subject" class="form-control @error('name_subject') is-invalid @enderror" value="{{ old('name_subject', $score->name_subject) }}" placeholder="The name of subject">
    @error('name_subject')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror

    <input type="text" name="teacher" class="form-control @error('teacher') is-invalid @enderror" value="{{ old('teacher', $score->teacher) }}" placeholder="The name of teacher">
    @error('name')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror

    <input type="text" name="score" class="form-control @error('score') is-invalid @enderror" value="{{ old('score', $score->score) }}" placeholder="The name of teacher">
    @error('score')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror

</div>
<button class="btn btn-primary" type="submit">{{ $submit }}</button>