@extends('layouts.admin')

@section('title', 'Contact Us')

@section('css-plugin')
    <link href="https://cdn.datatables.net/2.1.0/css/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
@endsection


@section('breadcrumb')
    <h4>Contact Us</h4>
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.contact_us.index') }}">Contact Us</a></li>
        <li class="breadcrumb-item active">index</li>
    </ol>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>Contact Us list</h4>
                    <form action="{{ route('admin.contact_us.export') }}" method="post">
                        <div class="row">
                            @csrf
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Filter Start Date</label><br>
                                    <input type="date" name="start_date" id="filterStartDate" class="form-control filter">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Filter End Date</label><br>
                                    <input type="date" name="end_date" id="filterEndDate" class="form-control filter">
                                </div>
                            </div>
                            <div class="col-md-3 d-flex align-items-end">
                                <div>
                                    <button type="submit" id='export' class="btn btn-success">Export</button>
                                    <button type="button" id='reset' class="btn btn-secondary">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped" id="contactUsTable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Company Name</th>
                                        <th>Message</th>
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
@endpush

@push('script')
    <script>
        $(document).ready(function() {
            let table = $('#contactUsTable').DataTable({
                searchDelay: 500,
                bFilter: true,
                processing: true,
                serverSide: true,
                lengthChange: true,
                responsive: false,
                ajax: {
                    url: "{{ route('admin.contact_us.index') }}",
                    data: function(d) {
                        return $.extend({}, d, {
                            'filter_start_date': $('#filterStartDate').val(),
                            'filter_end_date': $('#filterEndDate').val(),
                        });
                    }
                },
                language: {
                    "emptyTable": "There is no data",
                },
                bDestroy: true,
                columns: [{
                        name: "id",
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        width: "20px",
                        orderable: true,
                    },
                    {
                        name: "created_at",
                        data: 'created_at',
                        render: function(data, type, row) {
                            return `<div>${data}</div>`;
                        }
                    },
                    {
                        name: "fullname",
                        data: 'fullname',
                        defaultContent: '-'
                    },
                    {
                        name: "email",
                        data: 'email',
                        defaultContent: '-'
                    },
                    {
                        name: "company_name",
                        data: 'company_name',
                        defaultContent: '-'
                    },
                    {
                        name: "message",
                        data: 'message',
                        defaultContent: '-',
                        render: function(data) {
                            return `<div style="width:400px !important">${data}</div>`;
                        }
                    },
                ],
                order: [0, 'desc']
            });

            $('#filterEndDate, #filterStartDate').on('change', function(event) {
                table.draw()
            });

            $('#reset').on('click', function() {
                $('.filter').val('');
                table.draw()
            });
        });
    </script>
@endpush
