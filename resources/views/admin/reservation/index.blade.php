@extends('layouts.admin')

@section('title', 'Reservation')

@push('css-plugin')
    <link href="https://cdn.datatables.net/2.1.0/css/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/toastr/toastr.min.css') }}" />
    <link href="{{ asset('admin/assets/css/loading.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/validation.css') }}" rel="stylesheet" type="text/css" />
@endpush


@section('breadcrumb')
    <h4>Reservation</h4>
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.reservation.index') }}">Reservation</a></li>
        <li class="breadcrumb-item active">index</li>
    </ol>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>Reservation list</h4>
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <form action="{{ route('admin.reservation.export') }}" method="post">
                                <div class="row">
                                    @csrf
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Filter Status</label><br>
                                            <select name="status" id="filterStatus" class="form-control filter">
                                                <option value="" selected>-- Choose Status -- </option>
                                                @foreach ($reservation::RESERVATION_STATUS as $key => $status)
                                                    <option value="{{ $key }}">{{ $status }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Filter Attendance</label><br>
                                            <select name="is_confirmed" id="filterAttendance" class="form-control filter">
                                                <option value="" selected>-- Choose Status -- </option>
                                                <option value="confirmed">Confirmed</option>
                                                <option value="not_confirmed">Not Confirmed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Filter Type</label><br>
                                            <select name="type" id="filterType" class="form-control filter">
                                                <option value="" selected>-- Choose Status -- </option>
                                                @foreach ($reservation::TYPE as $key => $status)
                                                    <option value="{{ $key }}">{{ $status }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Filter Start Date</label><br>
                                            <input type="date" name="start_date" id="filterStartDate" class="form-control filter">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Filter End Date</label><br>
                                            <input type="date" name="end_date" id="filterEndDate" class="form-control filter">
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-end">
                                        <div>
                                            <button type="submit" id='export' class="btn btn-success">Export</button>
                                            <button type="button" id='reset' class="btn btn-secondary">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        {{-- take down sementara --}}
                        {{-- <div class="col-md-6 my-2">
                            <label for="">Send Mail</label>
                            <div class="d-flex align-items-center gap-1">
                                <select class="form-select w-50" id="mail_send">
                                    <option value="" selected>-- Choose Mail --</option>
                                    <option value="{{ route('admin.send.welcome_mail','') }}" data-title="Send Welcome Mail">Send Welcome Mail</option>

                                    @switch($reservation->status)
                                        @case($reservation::APPROVED_STATUS)
                                            <option value="{{ route('admin.send.approve_mail') }}" data-title="Send Approve Mail">Send Approve Mail</option>
                                        @break
                                        @case($reservation::REJECTED_STATUS)
                                            <option value="{{ route('admin.send.reject_mail') }}" data-title="Send Reject Mail">Send Reject Mail</option>
                                        @break
                                        @default
                                            <option value="{{ route('admin.send.approve_mail') }}" data-title="Send Approve Mail">Send Approve Mail</option>
                                            <option value="{{ route('admin.send.reject_mail') }}" data-title="Send Reject Mail">Send Reject Mail</option>
                                    @endswitch

                                    <option value="{{ route('admin.send.h14_mail') }}" data-title="Send H-14 Reminder Mail">Send H-14 Reminder Mail</option>
                                    <option value="{{ route('admin.send.h10_mail') }}" data-title="Send H-10 - H-8 Claim QRCode Mail">Send H-10 - H-8 Claim QRCode Mail</option>
                                    <option value="{{ route('admin.send.h7_mail') }}" data-title="Send H-7 Reminder Mail">Send H-7 Reminder Mail</option>
                                    <option value="{{ route('admin.send.qrcode_mail') }}" data-title="Send Ticket Mail">Send Ticket Mail</option>
                                    <option value="{{ route('admin.send.h6_mail') }}" data-title="Send H-6 Approve Mail">Send H-6 Approve Mail</option>
                                </select>
                                <button class="btn btn-success sendMailBtn" type="button">Send Email</button>
                            </div>
                        </div> --}}
                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped" id="reservationTable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="checkAll"></th>
                                        <th>No</th>
                                        <th>Action</th>
                                        <th>Date</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Job Sector</th>
                                        <th>Status</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <div id="footer" style="display:none">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i>
                            This action button will only be active when filtering pending status and has checked data
                        </div>
                        <button class="btn btn-sm btn-success btnApprove btnAction" type="button" style="display: none">Approve</button>
                        <button class="btn btn-sm btn-warning btnWaitingList btnAction" type="button" style="display: none">Waiting List</button>
                        <button class="btn btn-sm btn-danger btnReject btnAction" type="button" style="display: none">Reject</button>
                        <button class="btn btn-sm btn-danger btnReallocated btnAction" type="button" style="display: none">Reallocated Seat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addeditmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form id="addeditform" class="modal-content" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="reservation_id" id="reservation_id" hidden>
                    </div>
                    <div class="modal-footer">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form id="emailForm" class="modal-content" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure to send this email to checked user?</p>
                        <input type="hidden" name="reservation_id" id="reservation_id">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            Submit <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>
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
            let reservationIds = [];
            let table = $('#reservationTable').DataTable({
                searchDelay: 500,
                bFilter: true,
                processing: true,
                serverSide: true,
                lengthChange: true,
                responsive: false,
                ajax: {
                    url: "{{ route('admin.reservation.index') }}",
                    data: function(d) {
                        return $.extend({}, d, {
                            'filter_status': $('#filterStatus').val(),
                            'filter_start_date': $('#filterStartDate').val(),
                            'filter_end_date': $('#filterEndDate').val(),
                            'filter_attendance': $('#filterAttendance').val(),
                            'filter_type': $('#filterType').val(),
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
                        data: 'id',
                        width: "20px",
                        orderable: false,
                        render: function(data, type, row) {
                            return `<input type="checkbox" id="reservation${data}" class="checklist" data-id="${data}">`;
                        },
                    },
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
                        name: "id",
                        data: "id",
                        width: "20px",
                        orderable: true,
                        render: function(data, type, row, meta) {
                            let detailUrl = `{{ route('admin.reservation.show', ':customerId') }}`.replace(':customerId', data);
                            let action = `<a href="${detailUrl}" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-eye"></i></a`;

                            return action;
                        },
                    },
                    {
                        name: "created_at",
                        data: 'created_at',
                        defaultContent: '-',
                    },
                    {
                        name: "reservation_code",
                        data: 'reservation_code',
                        defaultContent: '-',
                    },
                    {
                        name: "fullname",
                        data: 'fullname',
                        defaultContent: '-',
                    },
                    {
                        name: "email",
                        data: 'email',
                        defaultContent: '-'
                    },
                    {
                        name: "type",
                        data: 'reservation_type',
                        defaultContent: '-'
                    },
                    {
                        name: "status",
                        data: 'status',
                        defaultContent: '-',
                        render: function(data, type, row) {
                            return `<span class='badge ${row.status.color}'>${row.status.text}</span>`;
                        }
                    },
                    {
                        name: "is_confirmed",
                        data: 'is_confirmed',
                        defaultContent: '-',
                        render: function(data, type, row) {
                            //  console.log(data);
                            return `<span class='badge ${data == 1 ? 'bg-success' : 'bg-danger'}'>${data ==1 ? 'Confirmed' : 'Not Confirmed'}</span>`;
                        }
                    },
                ],
                aaSorting: [[1,'desc']],
                drawCallback: function() {
                    if (table.data().any()) {
                        $('#footer').show();
                    } else {
                        $('#footer').hide();
                    }
                },
            });

            $('#filterStatus, #filterEndDate, #filterStartDate, #filterAttendance, #filterType').on('change', function(event) {
                table.draw()
            });


            $('#filterStatus').on('change', function(event) {
                $('.btnWaitingList').hide();
                $('.btnApprove').hide();
                $('.btnReject').hide();
                $('.btnReallocated').hide();

                let status = $(this).val();
                if(status == 1) {
                    $('.btnWaitingList').show();
                    $('.btnApprove').show();
                }else if(status==2){
                    $('.btnReallocated').show();
                }else if(status == 4){
                    $('.btnApprove').show();
                $('.btnReject').show();
                };
            });

            $('#reset').on('click', function() {
                $('.filter').val('');
                $('#checkAll, .checklist').prop('checked', false);
                reservationChecklistGetId();
                table.draw()
                
            });

            $(document).on('click', '#checkAll', function() {
                console.log('click');
                $('.checklist').prop('checked', this.checked);
                reservationChecklistGetId();
            });

            $(document).on('click', '.checklist', function() {
                $('#checkAll').prop('checked', $('.checklist:checked').length === $('.checklist').length);
                reservationChecklistGetId();
            });

            function reservationChecklistGetId() {
                reservationIds = $('.checklist:checked').map(function() {
                    return $(this).data('id');
                }).get();

                // $('.btnAction').hide();

                // if (reservationIds.length > 0 && $('#filterStatus').val() == `1`) {
                //     // $('.btnAction').attr('disabled', false);
                // } else {
                //     // $('.btnAction').attr('disabled', true);
                // }
            }

            // console.log(reservationIds);


            // when button waiting list is clicked
            $(document).on('click', '.btnWaitingList', function() {
                $('#addeditmodal').modal('show');
                $('#addeditmodal').find('.modal-title').html('Waiting List All Checked Reservation');
                $('#addeditmodal').find('.modal-body').append('Are you sure to waiting list all checked reservation?');
                $('#addeditmodal').find('.modal-footer').html(`
                        <button type="submit" class="btn btn-warning">
                            Waiting List <i class="fa fa-check"></i>
                        </button>
                `);
                let form = $('#addeditform');
                let url = `{{ route('admin.reservation.bulk.waiting') }}`;
                $('#reservation_id').val(reservationIds);
                form.attr('action', url);
            });

            // when button approve is clicked
            $(document).on('click', '.btnApprove', function() {
                $('#addeditmodal').modal('show');
                $('#addeditmodal').find('.modal-title').html('Approve All Checked Reservation?');
                $('#addeditmodal').find('.modal-body').append('Are you sure to approve all checked reservation?');
                $('#addeditmodal').find('.modal-footer').html(`
                        <button type="submit" class="btn btn-success">
                            Approve <i class="fa fa-check"></i>
                        </button>
                `);
                let form = $('#addeditform');
                let url = `{{ route('admin.reservation.bulk.approve') }}`;
                $('#reservation_id').val(reservationIds);
                form.attr('action', url);
            });

            //when button reject is clicked
            $(document).on('click', '.btnReject', function() {
                $('#addeditmodal').modal('show');
                $('#addeditmodal').find('.modal-title').html('Reject All Checked Reservation?');
                $('#addeditmodal').find('.modal-body').append('Are you sure to reject all checked reservation?');
                $('#addeditmodal').find('.modal-footer').html(`
                        <button type="submit" class="btn btn-danger">
                            Reject <i class="fa fa-times"></i>
                        </button>
                `);
                let form = $('#addeditform');
                let url = `{{ route('admin.reservation.bulk.reject') }}`;
                $('#reservation_id').val(reservationIds);
                form.attr('action', url);
            });

            // when button reallocated reject is clicked
            $(document).on('click', '.btnReallocated', function() {
                $('#addeditmodal').modal('show');
                $('#addeditmodal').find('.modal-title').html('Reallocated All Checked Reservation?');
                $('#addeditmodal').find('.modal-body').append('Are you sure to reallocated all checked reservation?');
                $('#addeditmodal').find('.modal-footer').html(`
                        <button type="submit" class="btn btn-danger">
                            Reject <i class="fa fa-times"></i>
                        </button>
                `);
                let form = $('#addeditform');
                let url = `{{ route('admin.reservation.bulk.reject') }}`;
                $('#reservation_id').val(reservationIds);
                form.attr('action', url);
            });



            $('#addeditform').submit(function(event) {
                event.preventDefault();
                let form = $(this);
                submitForm({
                    form: form,
                    modal: null,
                    datatable: null,
                    customArray: []
                });
            });

            $(document).on('click', '.sendMailBtn', function() {
                if($('#mail_send').val() == '' || reservationIds.length == 0){
                    toastr.error('Select reservation and mail type first');
                    return;
                }
                const title = $('#mail_send option:selected').data('title');
                const url = $('#mail_send').val();
                $('#emailModal').modal('show');
                $('#emailModal').find('.modal-title').html(title);
                $('#emailModal').find('#reservation_id').val(reservationIds)
                let form = $('#emailForm');
                form.attr('action', url);
            });

            $('#emailForm').submit(function(event) {
                event.preventDefault();
                let form = $(this);
                submitForm({
                    form: form,
                    modal: '#emailModal',
                    datatable: table,
                    customArray: []
                }).then(function(resp){
                    if(resp.success) {
                        $('#mail_send').val('').prop('selected');
                        $('#reservation_id').val('');
                        reservationIds = [];
                    };
                });
            });
        });
    </script>
@endpush
