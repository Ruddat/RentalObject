@extends('backend.layout.master')
@section('title', 'Blog Manager')
@section('css')
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12">
                <h4 class="main-title">Blog Manager</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li>
                        <a href="#" class="f-s-14 f-w-500">
                            <span>
                                <i class="ph-duotone ph-newspaper f-s-16"></i> Dashboard
                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Blog Manager</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Blog Manager Content start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Blog Manager</h5>
                        <a href="{{ route('post.create') }}" class="btn btn-primary">Neuen Beitrag erstellen</a>
                    </div>
                    <div class="card-body">
                        <!-- Filter Row -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="postStatus" class="form-label">Post Status:</label>
                                <select class="form-select" id="postStatus">
                                    <option value="1" selected>Select</option>
                                    <option value="2">Publish</option>
                                    <option value="3">Pending</option>
                                    <option value="4">Hidden</option>
                                    <option value="5">Sold</option>
                                </select>
                            </div>
                            <div class="col-md-9">
                                <label for="searchInput" class="form-label">Search:</label>
                                <input type="text" class="form-control" id="searchInput" placeholder="Search by title">
                            </div>
                        </div>

                        <!-- Session Message -->
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <!-- Blog Manager Table -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
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
                                            <div class="d-flex align-items-start">
                                                <div class="me-3">
                                                    @if ($post->image_small)
                                                        <img src="{{ Storage::url($post->image_small) }}" alt="Small Image" class="img-thumbnail" style="width: 100px; height: auto;">
                                                    @else
                                                        Kein Bild
                                                    @endif
                                                </div>
                                                <div>
                                                    <strong>{{ $post->title }}</strong>
                                                    <div>Kategorie: {{ $post->category->name }}</div>
                                                    <div>Tags: {{ $post->tags->pluck('name')->join(', ') }}</div>
                                                    <div>{!! $post->short_title ?? Str::limit($post->content, 50) !!}</div>
                                                    <div>Posting date: {{ $post->created_at->format('d. M Y') }}</div>
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
                                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info btn-sm">Bearbeiten</a>
                                            <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Sind Sie sicher?')">Löschen</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination Navigation -->
                        <div class="mt-3">
                            {{ $posts->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Manager Content end -->
    </div>
@endsection

@section('script')
    <!-- Add custom scripts if needed -->
@endsection
