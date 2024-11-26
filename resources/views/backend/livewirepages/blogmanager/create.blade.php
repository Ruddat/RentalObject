@extends('backend.layout.master')
@section('title', 'Neuen Beitrag erstellen')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify@latest/dist/tagify.css" rel="stylesheet">
@endsection

@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12">
                <h4 class="main-title">Neuen Beitrag erstellen</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li>
                        <a href="#" class="f-s-14 f-w-500">
                            <span>
                                <i class="ph-duotone ph-newspaper f-s-16"></i> Dashboard
                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Neuen Beitrag erstellen</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Form start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Beitragsdetails</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Titel -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Titel<span>*</span></label>
                                <input type="text" name="title" class="form-control" required>
                            </div>

                            <!-- Kurz-Titel -->
                            <div class="mb-3">
                                <label for="short_title" class="form-label">Kurz-Titel (optional)</label>
                                <input type="text" name="short_title" class="form-control">
                            </div>

                            <!-- Inhalt -->
                            <div class="mb-3">
                                <label for="content" class="form-label">Inhalt<span>*</span></label>
                                <textarea id="content" class="form-control" name="content"></textarea>
                            </div>

                            <!-- Bild -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Bild</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label for="approval_status" class="form-label">Status</label>
                                <select name="approval_status" class="form-control">
                                    <option value="approved">Genehmigt</option>
                                    <option value="limited">Begrenzt</option>
                                    <option value="rejected">Abgelehnt</option>
                                </select>
                            </div>

                            <!-- Startdatum -->
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Startdatum</label>
                                <input type="date" name="start_date" class="form-control">
                            </div>

                            <!-- Enddatum -->
                            <div class="mb-3">
                                <label for="end_date" class="form-label">Enddatum</label>
                                <input type="date" name="end_date" class="form-control">
                            </div>

                            <!-- Kategorie -->
                            <div class="mb-3">
                                <label for="category" class="form-label">Kategorie<span>*</span></label>
                                <input type="text" name="category" class="form-control" placeholder="Neue Kategorie eingeben oder auswählen" required>
                            </div>

                            <!-- Tags -->
                            <div class="mb-3">
                                <label for="tags-input" class="form-label">Tags (kommagetrennt)</label>
                                <input type="text" name="tags" id="tags-input" class="form-control" placeholder="Tags eingeben, z.B. Laravel, PHP">
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button type="submit" class="btn btn-primary">Beitrag hinzufügen</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form end -->
    </div>
@endsection

@section('script')
    <!-- Tagify -->
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@latest/dist/tagify.min.js"></script>
    <script>
        const tagInput = document.querySelector('#tags-input');
        new Tagify(tagInput, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        });
    </script>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'), {
                toolbar: [
                    'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'blockQuote',
                    'insertTable', 'mediaEmbed', 'undo', 'redo', '|', 'imageUpload'
                ],
                ckfinder: {
                    uploadUrl: '{{ route('upload.image') }}'
                }
            })
            .catch(error => console.error(error));
    </script>
@endsection
