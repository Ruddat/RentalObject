<?php $page = 'add-property'; ?>
@extends('rentalobj.layout.mainlayout')
@section('content')

<div class="main-content">
    <div class="main-content-inner wrap-dashboard-content">
        <div class="button-show-hide show-mb">
            <span class="body-1">Show Dashboard</span>
        </div>

        <!-- Filter Row -->
        <div class="row">
            <div class="col-md-3">
                <fieldset class="box-fieldset">
                    <label>
                        Post Status:<span>*</span>
                    </label>
                    <div class="nice-select" tabindex="0">
                        <span class="current">Select</span>
                        <ul class="list">
                            <li data-value="1" class="option selected">Select</li>
                            <li data-value="2" class="option">Publish</li>
                            <li data-value="3" class="option">Pending</li>
                            <li data-value="4" class="option">Hidden</li>
                            <li data-value="5" class="option">Sold</li>
                        </ul>
                    </div>
                </fieldset>
            </div>
            <div class="col-md-9">
                <fieldset class="box-fieldset">
                    <label>
                        Search:<span>*</span>
                    </label>
                    <input type="text" class="form-control" placeholder="Search by title">
                </fieldset>
            </div>
        </div>

        <!-- Blog Manager Table -->
        <div class="widget-box-2 wd-listing">
            <h5 class="title">Blog Manager</h5>
            <a href="{{ route('post.create') }}" class="btn btn-primary mb-3">Neuen Beitrag erstellen</a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="wrap-table">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Bild und Inhalt</th>
                                <th>Status</th>
                                <th>Aktionen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <!-- Bild und Inhalt -->
                                <td>
                                    <div class="listing-box">
                                        <div class="images">
                                            @if ($post->image_small)
                                                <img src="{{ Storage::url($post->image_small) }}" alt="Small Image" >


                                            @else
                                                Kein Bild
                                            @endif
                                        </div>
                                        <div class="content">
                                            <div class="title">{{ $post->title }}</div>
                                            <div class="text-date">Kategorie: {{ $post->category->name }}</div>
                                            <div class="text-date">Tags: {{ $post->tags->pluck('name')->join(', ') }}</div>
                                            <div class="text-date">
                                                {!! $post->short_title ?? Str::limit($post->content, 50) !!}
                                            </div>
                                            <div class="text-date">Posting date: {{ $post->created_at->format('d. M Y') }}</div> <!-- Dynamisches Datum -->
                                        </div>
                                    </div>
                                </td>

                                <!-- Status -->
                                <td>
                                    <span class="badge bg-{{ $post->approval_status == 'approved' ? 'success' : ($post->approval_status == 'limited' ? 'warning' : 'danger') }}">
                                        {{ ucfirst($post->approval_status) }}
                                    </span>
                                </td>

                                <!-- Aktionen -->
                                <td>
                                    <ul class="list-action">
                                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info">Bearbeiten</a>
                                        <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Sind Sie sicher?')">Löschen</button>
                                        </form>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Navigation -->
                {{ $posts->links('pagination::bootstrap-5') }}

            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer-dashboard">
        <p>Copyright © 2024 Home Lengo</p>
    </div>
</div>

<div class="overlay-dashboard"></div>

@endsection
