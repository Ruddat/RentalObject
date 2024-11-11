<?php $page = 'add-property'; ?>
@extends('rentalobj.layout.mainlayout')
@section('content')

<div class="main-content">
    <div class="main-content-inner">
        <h2 class="mb-4">Neuen Beitrag erstellen</h2>

        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="form-style">
            @csrf

            <fieldset class="box-fieldset">
                <label for="title" class="form-label">Titel<span>*</span></label>
                <input type="text" name="title" class="form-control" required>
            </fieldset>

            <fieldset class="box-fieldset">
                <label for="short_title" class="form-label">Kurz-Titel (optional)</label>
                <input type="text" name="short_title" class="form-control">
            </fieldset>

            <fieldset class="box-fieldset">
                <label for="content" class="form-label">Inhalt<span>*</span></label>
                <textarea id="content" class="form-control" name="content"></textarea>
            </fieldset>

            <fieldset class="box-fieldset">
                <label for="image" class="form-label">Bild</label>
                <input type="file" name="image" class="form-control-file" accept="image/*">
            </fieldset>

            <fieldset class="box-fieldset">
                <label for="approval_status" class="form-label">Status</label>
                <select name="approval_status" class="form-control">
                    <option value="approved">Genehmigt</option>
                    <option value="limited">Begrenzt</option>
                    <option value="rejected">Abgelehnt</option>
                </select>
            </fieldset>

            <fieldset class="box-fieldset">
                <label for="start_date" class="form-label">Startdatum</label>
                <input type="date" name="start_date" class="form-control">
            </fieldset>

            <fieldset class="box-fieldset">
                <label for="end_date" class="form-label">Enddatum</label>
                <input type="date" name="end_date" class="form-control">
            </fieldset>


<fieldset class="box-fieldset">
    <label for="category" class="form-label">Kategorie<span>*</span></label>
    <input type="text" name="category" class="form-control" placeholder="Neue Kategorie eingeben oder auswählen" required>
</fieldset>

<!-- Tag-Input-Feld -->
<fieldset class="box-fieldset">
    <label for="tags-input" class="form-label">Tags (kommagetrennt)</label>
    <input type="text" name="tags" id="tags-input" class="form-control" placeholder="Tags eingeben, z.B. Laravel, PHP">
</fieldset>



            <button type="submit" class="btn btn-primary mt-3">Beitrag hinzufügen</button>
        </form>
    </div>
</div>
<!-- Tagify CSS und JS -->
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify@latest/dist/tagify.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@latest/dist/tagify.min.js"></script>
<!-- Tagify-Initialisierung -->
<script>
    // Initialisiere Tagify
    const tagInput = document.querySelector('#tags-input');
    new Tagify(tagInput, {
        originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
    });
</script>



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
            },
            image: {
                toolbar: [
                    'imageTextAlternative', '|',
                    'imageStyle:alignLeft', 'imageStyle:alignCenter', 'imageStyle:alignRight', '|',
                    'resizeImage:25', 'resizeImage:50', 'resizeImage:75', 'resizeImage:original'
                ],
                resizeOptions: [
                    {
                        name: 'resizeImage:original',
                        value: null,
                        icon: 'original'
                    },
                    {
                        name: 'resizeImage:25',
                        value: '25',
                        icon: 'small'
                    },
                    {
                        name: 'resizeImage:50',
                        value: '50',
                        icon: 'medium'
                    },
                    {
                        name: 'resizeImage:75',
                        value: '75',
                        icon: 'large'
                    }
                ],
                resizeUnit: '%'
            }
        })
        .then(editor => {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        })
        .catch(error => {
            console.error(error);
        });

    // Custom Upload Adapter to include CSRF token
    class MyUploadAdapter {
        constructor(loader) {
            this.loader = loader;
        }

        upload() {
            return this.loader.file.then(file => new Promise((resolve, reject) => {
                const data = new FormData();
                data.append('upload', file);
                data.append('_token', '{{ csrf_token() }}'); // Laravel CSRF-Token hinzufügen

                fetch('{{ route('upload.image') }}', {
                    method: 'POST',
                    body: data,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(result => {
                    if (result.url) {
                        resolve({
                            default: result.url
                        });
                    } else {
                        reject(result.error && result.error.message ? result.error.message : 'Upload failed');
                    }
                })
                .catch(error => {
                    reject('Network error');
                });
            }));
        }

        abort() {
            // Falls der Upload abgebrochen wird
        }
    }
</script>



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
