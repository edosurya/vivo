@extends('layouts.admin')

@section('title', 'Upload Gallery')

@push('css-plugin')
    <link href="https://cdn.datatables.net/2.1.0/css/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/toastr/toastr.min.css') }}" />
    <link href="{{ asset('admin/assets/css/loading.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/validation.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('breadcrumb')
    <h4>Gallery</h4>
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.galleries.index') }}">Gallery</a></li>
        <li class="breadcrumb-item active">Upload</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-4">Upload Gallery Image</h4>
                <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Thumbnail <span class="text-danger">*</span></label>
                        <input type="file" name="thumbnail" id="thumbnail" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" maxlength="50">
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea name="desc" id="desc" class="form-control" rows="3" maxlength="250"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Creator</label>
                        <input type="text" name="creator" id="creator" class="form-control" maxlength="50">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Location</label>
                        <input type="text" name="location" id="location" class="form-control" maxlength="50">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" id="category" class="form-select">
                            <option value="">-- Choose Category --</option>
                            <option value="1">Portrait Photography</option>
                            <option value="2">Street Life Photography</option>
                            <option value="5">Night Photography</option>
                            <option value="6">Nature & Architecture Photography</option>
                        </select>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
