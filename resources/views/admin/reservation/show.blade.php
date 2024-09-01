@extends('layouts.admin')

@section('title', 'Reservation')

@push('css-plugin')
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/toastr/toastr.min.css') }}" />
    <link href="{{ asset('admin/assets/css/loading.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/validation.css') }}" rel="stylesheet" type="text/css" />
@endpush


@section('breadcrumb')
    <h4>Reservation</h4>
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.reservation.index') }}">Reservation</a></li>
        <li class="breadcrumb-item active">show</li>
    </ol>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>Reservation Detail</h4>
                    @php
                        $color = $reservation::RESERVATION_STATUS_COLOR[$reservation->status];
                        $text = $reservation::RESERVATION_STATUS[$reservation->status];
                    @endphp
                    <span class='badge {{ $color }}'>Status : {{ $text }}</span>
                    <span
                        class='badge {{ $reservation->is_confirmed ? 'bg-success' : 'bg-danger' }}'>Attendance : {!! $reservation->is_confirmed
                            ? 'Confirmed'
                            : 'Not Confirmed' !!}</span>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-6 table-responsive">
                            <h6 class="text-muted fw-bold">User Information</h6>
                            <hr>
                            <table class="table table-borderless table-striped table-hover">
                                <tr>
                                    <th style="width:200px !important">Reservation Date</th>
                                    <td>{{ $reservation?->created_at->translatedFormat('d-m-Y H:i:s') ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th style="width:200px !important">No. Registration</th>
                                    <td>{{ $reservation?->reservation_code ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th style="width:200px !important">Fullname</th>
                                    <td>{{ ucwords($reservation?->fullname ?? '-') }}</td>
                                </tr>
                                <tr>
                                    <th style="width:200px !important">Business Email</th>
                                    <td>{{ $reservation?->email ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th style="width:200px !important">Business Phone</th>
                                    <td>{{ $reservation?->phone ?? '-' }}</td>
                                </tr>
                            </table>
                        </div>
                        @if (in_array($reservation->job_title, $is_university_jobs))
                            <div class="col-md-6 table-responsive">
                                <h6 class="text-muted fw-bold">University Information</h6>
                                <hr>
                                <table class="table table-borderless table-striped table-hover">
                                    <tr>
                                        <th style="width:200px !important">Job Sector</th>
                                        <td>{{ $reservation::TYPE[$reservation->type] }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px !important">Job Title</th>
                                        <td>{{ \App\Enums\JobTitleEnum::getNameByValue($reservation?->job_title) }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px !important">University Name</th>
                                        <td>{{ ucwords($reservation?->university_name ?? '-') }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px !important">Major</th>
                                        <td>{{ \App\Enums\MajorEnum::getNameByValue($reservation?->major) }}</td>
                                    </tr>
                                </table>
                            </div>
                        @else
                            <div class="col-md-6 table-responsive">
                                <h6 class="text-muted fw-bold">Company Information</h6>
                                <hr>
                                <table class="table table-hover table-borderless table-striped">
                                    <tr>
                                        <th style="width:200px !important">Type</th>
                                        <td>{{ $reservation::TYPE[$reservation->type] }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px !important">Job Title</th>
                                        <td>{{ \App\Enums\JobTitleEnum::getNameByValue($reservation?->job_title) }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px !important">Company Name</th>
                                        <td>{{ ucwords($reservation?->company_name ?? '-') }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px !important">Company Industry</th>
                                        <td>{{ \App\Enums\IndustryNameEnum::getNameByValue($reservation?->company_industry) }}</td>
                                    </tr>
                                </table>
                            </div>
                        @endif
                    </div>
                    <br> 
                    <div class="row">
                        <div class="col-md-6">
                            @if ($reservation->status == $reservation::PENDING_STATUS)
                                <button class="btn btn-success btnApprove" type="button">Approve</button>&nbsp;
                                <button class="btn btn-warning btnWaiting" type="button">Waiting List</button>&nbsp;
                            @elseif($reservation->status == $reservation::WAITING_STATUS)
                                <button class="btn btn-danger btnReject" type="button">Reject</button>
                                <button class="btn btn-success btnApprove" type="button">Approve</button>
                            @elseif($reservation->status == $reservation::APPROVED_STATUS)
                                <button class="btn btn-danger btnReject" type="button">Reallocated Seat</button>
                            @endif
                        </div>
                        <div class="col-md-6  d-flex justify-content-end gap-1">
                            <select class="form-select w-50" id="mail_send">
                                <option value="" selected>-- Choose Mail --</option>
                                <option value="{{ route('admin.send.welcome_mail') }}" data-title="Send Welcome Mail">Send Welcome Mail</option>
                                <option value="{{ route('admin.send.waiting_mail') }}" data-title="Send Waiting Mail">Send Waiting Email</option>
                                <option value="{{ route('admin.send.approve_mail') }}" data-title="Send Approve Mail">Send Approve Mail</option>
                                
                                <option value="{{ route('admin.send.reject_mail') }}" data-title="Send Reject Mail">Send Reject Mail</option>

                                <option value="{{ route('admin.send.h14_mail') }}" data-title="Send H-14 Reminder Mail">Send H-14 Reminder Mail</option>
                                <option value="{{ route('admin.send.h10_mail') }}" data-title="Send H-10 - H-8 Claim QRCode Mail">Send H-10 - H-8 Claim QRCode Mail</option>
                                <option value="{{ route('admin.send.h7_mail') }}" data-title="Send H-7 Reminder Mail">Send H-7 Reminder Mail</option>
                                <option value="{{ route('admin.send.qrcode_mail') }}" data-title="Send Ticket Mail">Send Ticket Mail</option>
                                <option value="{{ route('admin.send.h6_mail') }}" data-title="Send H-6 Approve Mail">Send H-6 Approve Mail</option>


                                {{-- @if() --}}




                                {{-- @switch($reservation->status)
                                    @case($resercation::WAITING_STATUS)
                                        <option value="" data-title="Send Waiting Mail">Send Waiting Email</option>
                                    @break
                                
                                    @case($reservation::APPROVED_STATUS)
                                        <option value="" data-title="Send Waiting Mail">Send Waiting Email</option>

                                    @break


                                    @case($reservation::REJECTED_STATUS)

                                    @break
                                    {{-- @default
                                        <option value="{{ route('admin.send.approve_mail') }}" data-title="Send Approve Mail">Send Approve Mail</option>
                                        <option value="{{ route('admin.send.reject_mail') }}" data-title="Send Reject Mail">Send Reject Mail</option> --}}
                                {{-- @endswitch --}} 

                             
                            </select>
                            <button class="btn btn-success sendMailBtn" type="button">Send Email</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4>Qr Code Data</h4>
                    <div class="col-md-12">
                        @if($reservation->relatedQrcode)
                        <table class="table table-hover">
                            {{-- <tr>
                                <td style="width:200px !important"><strong>Attendace Url</strong></td>
                                <td>
                                    <a href="{{ route('reservation.confirmation', ['code' => $reservation->code]) }}" target="_blank">{{ route('reservation.confirmation', ['code' => $reservation->code]) }}</a>
                                </td>
                            </tr> --}}
                            
                            <tr>
                                <td style="width:200px !important"><strong>Qr Code Url</strong></td>
                                <td>
                                    <a href="{{ route('scan.qrcode') }}?code={{ $reservation->code }}" target="_blank">Url QrCode</a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong> Qr Code</strong>
                                 </td>
                                <td>
                                   <img src=" {{$reservation->relatedQrcode->full_path_url ?? ''}}" alt="Qr Code">
                                </td>
                            </tr>
                        </table>

                        @else
                        <h6>No Qr Code ..</h6>
                        @endif
                    </div>


                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>History Reminder Email</h4>
                    <div class="col-md-12">
                        @forelse ($reservation?->relatedHistories as $history)
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="badge bg-success my-1">
                                        <i class="fas fa-calendar-day"></i>&nbsp;
                                        {{ $history->created_at?->translatedFormat('d M Y H:i:s') ?? '-' }}
                                    </span>
                                    <p>{{ $history->description }}</p>
                                    <hr>
                                </div>
                            </div>

                            @empty
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>No History</h6>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div>
        <a href="{{ route('admin.reservation.index') }}" class="btn btn-outline-dark" type="button">Back <i
                class="mdi mdi-close-circle-outline"></i></a>
    </div>

    <div class="modal fade" id="addeditmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form id="addeditform" class="modal-content" enctype="multipart/form-data">
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title mt-0"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
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
                        <input type="hidden" name="reservation_id" id="reservation_id" value="{{ $reservation->id }}" dont-clear="true">
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
    <script src="{{ asset('admin/assets/libs/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/helpers/submitForm.js') }}"></script>
@endpush

@push('script')
    <script>
        $(document).ready(function() {

            $(document).on('click', '.btnApprove', function() {
                $('#addeditmodal').modal('show');
                $('#addeditmodal').find('.modal-title').html('Approve This Reservation?');
                $('#addeditmodal').find('.modal-body').html(
                    'Are you sure to approve data this reservation?');
                $('#addeditmodal').find('.modal-footer').html(`
                        <button type="submit" class="btn btn-success">
                            Approve Reservation
                        </button>
                `);
                let form = $('#addeditform');
                let url = `{{ route('admin.reservation.approve', $reservation->id) }}`;
                form.attr('action', url);
            });

            $(document).on('click', '.btnReject', function() {
                $('#addeditmodal').modal('show');
                $('#addeditmodal').find('.modal-title').html('Reject This Reservation?');
                $('#addeditmodal').find('.modal-body').html(
                    'Are you sure to reject data this reservation?');

                $('#addeditmodal').find('.modal-footer').html(`
                        <button type="submit" class="btn btn-danger">
                            Reject Reservation
                        </button>
                `);
                let form = $('#addeditform');
                let url = `{{ route('admin.reservation.reject', $reservation->id) }}`;
                form.attr('action', url);
            });

            $(document).on('click', '.btnWaiting', function() {
                $('#addeditmodal').modal('show');
                $('#addeditmodal').find('.modal-title').html('Set As Waiting List?');
                $('#addeditmodal').find('.modal-body').html(
                    'Are you sure to set this reservation as waiting list?');

                $('#addeditmodal').find('.modal-footer').html(`
                        <button type="submit" class="btn btn-warning">
                            Set As Waiting
                        </button>
                `);
                let form = $('#addeditform');
                let url = `{{ route('admin.reservation.waiting', $reservation->id) }}`;
                form.attr('action', url);
            });



            $(document).on('click', '.sendMailBtn', function() {
                if($('#mail_send').val() == ''){
                    toastr.error('Select mail type first');
                    return;
                }
                const title = $('#mail_send option:selected').data('title');
                const url = $('#mail_send').val();
                $('#emailModal').modal('show');
                $('#emailModal').find('.modal-title').html(title);
                let form = $('#emailForm');
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
            
            $('#emailForm').submit(function(event) {
                event.preventDefault();
                let form = $(this);
                submitForm({
                    form: form,
                    modal: null,
                    datatable: null,
                    customArray: []
                });
            });
        });
    </script>
@endpush
