@section('title', $post->title)
@extends('layout')

@section('content')

    @include('partials.summary')
    <div class="row">
        <div class="col-md-6">
            @include('partials.addratings')
        </div>
        <div class="col-md-6">
            <h1 class="title">Rate this post</h1>

            <form method="post" action="/rate">
                @csrf
                <div class="field">
                    <label class="label">Rating</label>
                    <div class="control">
                        <div class="select">
                            <select name="rating" required>
                                <option value="" disabled selected>Give a Rating</option>
                                <option value="1" {{ old('rating') === '1' ? 'selected' : null }}>1</option>
                                <option value="2" {{ old('rating') === '2' ? 'selected' : null }}>2</option>
                                <option value="3" {{ old('rating') === '3' ? 'selected' : null }}>3</option>
                                <option value="4" {{ old('rating') === '4' ? 'selected' : null }}>4</option>
                                <option value="5" {{ old('rating') === '4' ? 'selected' : null }}>5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input type="hidden" name="post_id" value="{{ $post->id }}" class="input" />
                        <input type="hidden" name="post_slug" value="{{ $post->slug }}" class="input" />
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link is-outlined">Submit Rating</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
