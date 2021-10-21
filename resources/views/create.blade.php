@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Desc</label>
                        <textarea name="desc" class="my-editor form-control" id="my-editor" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script></script>
    <script>
         CKEDITOR.replace( 'my-editor', {
              filebrowserBrowseUrl: '/larackeditor/public/ckfinder/ckfinder.html',
              filebrowserImageBrowseUrl: '/larackeditor/public/ckfinder/ckfinder.html?type=Images',
              filebrowserFlashBrowseUrl: '/larackeditor/public/ckfinder/ckfinder.html?type=Flash',
              filebrowserUploadUrl: '/larackeditor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&amp;type=Files',
              filebrowserImageUploadUrl: '/larackeditor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&amp;type=Images',
              filebrowserFlashUploadUrl: '/larackeditor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&amp;type=Flash'
            } );
    </script>
    <script>
        CKEDITOR.replace('my-editor', options);
    </script>
@endpush
