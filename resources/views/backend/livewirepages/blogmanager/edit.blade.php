<?php $page = 'add-property'; ?>
@extends('rentalobj.layout.mainlayout')
@section('content')

<div class="main-content">
    <div class="main-content-inner">
        <h2 class="mb-4">Beitrag bearbeiten</h2>

        <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="title">Titel</label>
            <input type="text" name="title" value="{{ $post->title }}" required>

            <label for="short_title">Kurz-Titel</label>
            <input type="text" name="short_title" value="{{ $post->short_title }}">

            <label for="content">Inhalt</label>
            <textarea name="content" required>{{ $post->content }}</textarea>
            <trix-editor input="content" class="trix-content"></trix-editor>

            <label for="image">Bild</label>
            <input type="file" name="image" accept="image/*">
            @if ($post->image_large)
                <img src="{{ Storage::url($post->image_large) }}" alt="Post Image" style="max-width: 100px;">
            @endif

            <label for="approval_status">Status</label>
            <select name="approval_status" class="form-control">
                <option value="approved" {{ $post->approval_status == 'approved' ? 'selected' : '' }}>Genehmigt</option>
                <option value="limited" {{ $post->approval_status == 'limited' ? 'selected' : '' }}>Begrenzt</option>
                <option value="rejected" {{ $post->approval_status == 'rejected' ? 'selected' : '' }}>Abgelehnt</option>
            </select>

            <label for="start_date">Startdatum</label>
            <input type="date" name="start_date" value="{{ $post->start_date }}">

            <label for="end_date">Enddatum</label>
            <input type="date" name="end_date" value="{{ $post->end_date }}">

<!-- Kategorie Auswahl -->
<fieldset class="box-fieldset">
    <label for="category" class="form-label">Kategorie</label>
    <select name="category" class="form-select">
        @foreach($categories as $category)
            <option value="{{ $category->name }}" {{ $post->category->name == $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
</fieldset>

<!-- Tags als kommagetrennte Liste -->
<fieldset class="box-fieldset">
    <label for="tags" class="form-label">Tags (kommagetrennt)</label>
    <input type="text" name="tags" id="tags-input" class="form-control" value="{{ $post->tags->pluck('name')->implode(', ') }}">
</fieldset>

            <button type="submit" class="btn btn-primary">Beitrag aktualisieren</button>
        </form>


    </div>
</div>

<!-- Tagify CSS und JS -->
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify@latest/dist/tagify.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@latest/dist/tagify.min.js"></script>
<script>
    const tagInput = document.querySelector('#tags-input');
    new Tagify(tagInput, {
        originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
@endpush

<style>
    /* Scoped styles for blog content */
    .blog-content strong {
        font-weight: bold;
        color: #333;
    }

    /* Scoped style for blockquote */
    .blog-content blockquote {
        font-style: italic;
        color: #555;
        border-left: 4px solid #b53717;
        padding-left: 15px;
        margin: 15px 0;
        background-color: #f8f8f8;
        padding: 10px;
        border-radius: 4px;
    }

    /* Scoped style for unordered list */
    .blog-content ul {
        margin-left: 20px;
        list-style-type: disc;
    }

    .blog-content ul li {
        margin-bottom: 5px;
        list-style-type: disc;
    }

    /* Scoped style for ordered list */
    .blog-content ol {
        margin-left: 20px;
        list-style-type: decimal;
    }

    .blog-content ol li {
        margin-bottom: 5px;
        list-style-type: decimal;
    }

    /* Scoped style for preformatted text */
    .blog-content pre {
        background-color: #f4f4f4;
        padding: 10px;
        border-radius: 4px;
        overflow-x: auto;
        color: #333;
        font-family: 'Courier New', Courier, monospace;
        margin: 15px 0;
    }

    /* Scoped styles for gallery or attachment divs */
    .blog-content .attachment-gallery {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }

    .blog-content .attachment-gallery img {
        max-width: 100px;
        border-radius: 4px;
    }
    </style>



@endsection
