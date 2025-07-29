@extends('layouts.admin')

@section('title', 'Creator')

@push('css-plugin')
    <link href="https://cdn.datatables.net/2.1.0/css/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/toastr/toastr.min.css') }}" />
    <link href="{{ asset('admin/assets/css/loading.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/validation.css') }}" rel="stylesheet" type="text/css" />
@endpush


@section('breadcrumb')
    <h4>Reservation</h4>
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.galleries.index') }}">Gallery</a></li>
        <li class="breadcrumb-item active">index</li>
    </ol>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>Gallery</h4>
                    <div class="row">
                        <div class="col-md-12 my-2">
                   
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Category</label><br>
                                        <select name="category" id="filterCategory" class="form-control filter">
                                            <option value="" selected>-- Choose Category -- </option>
                                            <option value="1">Portrait Photography</option>
                                            <option value="2">Street Life Photography</option>
                                            <!-- <option value="3">Series Photography</option> -->
                                            <!-- <option value="4">Still Life Photography</option> -->
                                            <option value="5">Night Photography</option>
                                            <option value="6">Nature & Architecture Photography</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-end">
                                    <div>
                                        <button type="button" id='reset' class="btn btn-secondary">Reset</button>
                                        <a href="{{ route('admin.galleries.create') }}" class="btn btn-success">Upload</a>
                                        <a href="{{ route('admin.galleries.sort') }}" class="btn btn-warning">Set Up Order</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped" id="GalleryTable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Desc</th>
                                        <th>Image</th>
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('js-plugin')
    <script src="https://cdn.datatables.net/2.1.0/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.0/js/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('admin/assets/libs/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/helpers/submitForm.js') }}"></script>
@endpush

@push('script')
    <script>
        $(document).ready(function() {
            let table = $('#GalleryTable').DataTable({
                searchDelay: 500,
                bFilter: true,
                processing: true,
                serverSide: true,
                lengthChange: true,
                responsive: false,
                searching: false,
                ordering: false,
                ajax: {
                    url: "{{ route('admin.galleries.index') }}",
                    data: function(d) {
                        return $.extend({}, d, {
                            'filter_category': $('#filterCategory').val(),
                        });
                    }
                },
                language: {
                    "emptyTable": "There is no data",
                },
                bDestroy: true,
                columns: [
                    {
                        name: "id",
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        width: "20px",
                        orderable: true,
                    },
                    {
                        name: "category",
                        data: 'category',
                        defaultContent: '-',
                    },
                    {
                        name: "title",
                        data: 'title',
                        defaultContent: '-',
                    },
                    {
                        name: "desc",
                        data: 'desc',
                        defaultContent: '-',
                    },
                    {
                        name: "galleries",
                        data: 'galleries',
                        defaultContent: '-',
                    },
                    {
                        name: "action",
                        data: 'id',
                        render: function(data, type, row) {
                            let editUrl = "{{ route('admin.galleries.edit', ':id') }}".replace(':id', data);
                            let deleteUrl = "{{ route('admin.galleries.destroy', ':id') }}".replace(':id', data);

                            return `
                                <a href="${editUrl}" class="btn btn-sm btn-primary me-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <button onclick="deleteData('${deleteUrl}')" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            `;
                        },
                        orderable: false,
                        searchable: false,
                        width: '120px'
                    }


                ],
                aaSorting: [[1,'desc']],
            });

            $('#filterCategory').on('change', function(event) {
                table.draw()
            });

            $('#reset').on('click', function() {
                $('.filter').val('');
                table.draw()
                
            });

            $('#filterCategory').on('change', function(event) {
                $('#export').hide();

                let category = $(this).val();
                if(category != '') {
                    $('#export').show();
                }
            });

        });

        function deleteData(url) {
            if (confirm("Are you sure you want to delete this gallery?")) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        '_method': 'DELETE',
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        toastr.success('Gallery deleted successfully.');
                        $('#GalleryTable').DataTable().ajax.reload();
                    },
                    error: function(xhr) {
                        toastr.error('Failed to delete gallery.');
                    }
                });
            }
        }


    </script>
@endpush
