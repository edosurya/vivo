@extends('layouts.admin')

@section('title', 'Sort Gallery Order')

@push('css-plugin')
<link href="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.css" rel="stylesheet" />
<style>
    .sortable-item {
        cursor: grab;
        background: #fff;
        padding: 10px;
        border: 1px solid #ccc;
        margin-bottom: 8px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .sortable-item img {
        max-height: 50px;
        margin-right: 15px;
    }
</style>
@endpush

@section('breadcrumb')
<h4>Gallery</h4>
<ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="{{ route('admin.galleries.index') }}">Gallery</a></li>
    <li class="breadcrumb-item active">Sort Order</li>
</ol>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>Sort Gallery by Drag & Drop</h4>
                    <div class="row">
                        <div class="col-md-12 my-2">
                   
                            <div class="row">
                                <div class="col-md-5">
                                    <form method="GET" class="mb-3">
                                        <label for="category">Filter Category:</label>
                                        <select name="category" id="category" class="form-select w-50 d-inline-block" onchange="this.form.submit()">
                                            <option value="">-- All Categories --</option>
                                            <option value="1" {{ $category == 1 ? 'selected' : '' }}>Portrait Photography</option>
                                            <option value="2" {{ $category == 2 ? 'selected' : '' }}>Street Life Photography</option>
                                            <option value="5" {{ $category == 5 ? 'selected' : '' }}>Night Photography</option>
                                            <option value="6" {{ $category == 6 ? 'selected' : '' }}>Nature & Architecture Photography</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <ul id="sortable-list" class="list-unstyled">
                                @foreach ($galleries as $gallery)
                                    <li class="sortable-item" data-id="{{ $gallery->id }}">
                                        <div>
                                            <img src="{{ asset('storage/' . $gallery->path) }}" alt="thumb">
                                            {{ $gallery->title ?? 'Untitled' }}
                                        </div>
                                        <i class="bi bi-list"></i>
                                    </li>
                                @endforeach
                            </ul>
                            @if($category != null)
                            <button id="saveOrder" class="btn btn-primary mt-3">Save Order</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
    const el = document.getElementById('sortable-list');
    const sortable = Sortable.create(el, {
        animation: 150
    });

    document.getElementById('saveOrder').addEventListener('click', function () {
        const order = [];
        const category = '{{ $category }}'; // ambil dari controller

        document.querySelectorAll('.sortable-item').forEach((el, index) => {
            order.push({ id: el.dataset.id, order: index });
        });

        fetch("{{ route('admin.galleries.sort') }}?category=" + category, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ order: order })
        })
        .then(res => res.json())
        .then(data => {
            toastr.success("Order updated successfully.");
        })
        .catch(err => {
            toastr.error("Something went wrong.");
        });
    });
</script>
@endpush
