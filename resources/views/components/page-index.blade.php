@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendors/datatables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/datatables/dataTable-select/css/select.bootstrap4.min.css') }}">
@endpush
<x-alert/>
<section class="section">
    <div class="section-header">
        <h1>{{$title}}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            {{-- <div class="breadcrumb-item"><a href="#">Layout</a></div> --}}
            <div class="breadcrumb-item">Daftar {{$title}}</div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>{{ 'Daftar '.$title }}</h4>
                <div class="card-header-action">
                    <div>
                        <a href="{{ route($routeCreate) }}" class="btn btn-primary create-button"
                            style="border-radius: 0px !important">
                            {{ $buttonLabel }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')

<!-- Datatable -->
<script src="{{ asset('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables/dataTable.button.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables/dataTable.button.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables/dataTable-select/js/select.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
<script>
    $(document).ready(function () {
        $(".create-button").click(function () {
            $('#loading').show();
        });

        $('#dataTable').DataTable({
            responsive: true
        });

        $(document).on('click', '.delete-btn', function () {
            var sid = $(this).val();
            $('#deleteModal').modal('show')
            $('#delete_id').val(sid)
            // alert(sid)
        });

        $(document).on('click', '.reset-btn', function () {
            var rid = $(this).val();
            $('#resetModal').modal('show')
            $('#reset_id').val(rid)
            // alert(sid)
        });
    });
</script>
@endpush
