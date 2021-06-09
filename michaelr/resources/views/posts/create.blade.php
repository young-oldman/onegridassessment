@section('title', 'New Post')
@extends('layout')

@section('content')

    <h1 class="title">Create a new post</h1>

    <form method="post" action="{{ route('posts.store') }}">

        @csrf
        @include('partials.errors')

        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input type="text" name="title" value="{{ old('title') }}" class="input" placeholder="Title" minlength="5" maxlength="100" required />
            </div>
        </div>

        <div class="field">
            <label class="label">Content</label>
            <div class="control">
                <textarea name="content" class="textarea" placeholder="Content" minlength="5" maxlength="2000" required rows="10">{{ old('content') }}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Category</label>
            <div class="control">
                <div class="select">
                    <select name="category" required>
                        <option value="" disabled selected>Choose a Category</option>
                        <option value="article" {{ old('category') === 'article' ? 'selected' : null }}>Article</option>
                        <option value="recipe" {{ old('category') === 'recipe' ? 'selected' : null }}>Recipe</option>
                        <option value="tutorial" {{ old('category') === 'tutorial' ? 'selected' : null }}>Tutorial</option>
                        <option value="documentation" {{ old('category') === 'documentation' ? 'selected' : null }}>Documentation</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="hidden" name="author_id" value="{{ Auth::user()->id }}" class="input" />
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link is-outlined">Publish</button>
            </div>
        </div>

    </form>

@endsection
