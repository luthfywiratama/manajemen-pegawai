@extends('admin.layouts.admin')

@section('title', 'Manajemen Pegawai')

@section('content')
<div class="content-header">
    <div>
        <h2 class="content-title card-title">Manajemen Pegawai </h2>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg mb-2" data-bs-toggle="modal" data-bs-target="#modalId">
            Tambah
        </button>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="slider-table" class="table table-hover" style="width: 100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <img src="{{ $item->photo  }}" width="100" alt="">
                                </td>
                                <td>
                                    <button class="btn btnEditDt btn-sm btn-info"
                                            data-nama_lengkap="{{ $item->nama_lengkap }}"
                                            data-alamat="{{ $item->alamat }}"
                                            data-telepon="{{ $item->telepon }}"
                                            data-email="{{ $item->email }}"
                                            data-route="{{ route('pegawai.update', $item->id) }}"
                                            data-bs-target="#modalEdit"
                                            data-bs-toggle="modal"
                                            ><i class="icon material-icons md-visibility"></i></button>
                                    <button class="btn btnDelete btn-sm btn-danger"
                                            data-bs-target="#modalDelete"
                                            data-bs-toggle="modal"
                                            data-route="{{ route('pegawai.destroy', $item->id) }}"><i class="icon material-icons md-delete"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- .col// -->
        </div> <!-- .row // -->
    </div> <!-- card body .// -->
</div>

<!-- Modal trigger button -->


<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Tambah Pegawai
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                            placeholder="Nama Lengkap" />
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="telepon"
                            placeholder="Telepon" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Email" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Photo</label>
                        <input
                            type="file"
                            class="form-control"
                            name="photo"
                            id="photo"
                            placeholder="photo"
                        />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Tambah Pegawai
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                            placeholder="Nama Lengkap" />
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="telepon"
                            placeholder="Telepon" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Email" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Photo</label>
                        <input
                        type="file"
                        class="form-control"
                        name="photo"
                        id="photo"
                        placeholder="photo"
                        />
                        <small>Kosongkan jika tidak ingin merubah</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection

@push('addon-script')
<script>
    $(document).ready(function () {
        var pegawaiTable = $('#slider-table').DataTable()

        $('.btnEditDt').click(function (e) {
            e.preventDefault();
            var nama_lengkap = $(this).data('nama_lengkap');
            var alamat = $(this).data('alamat');
            var telepon = $(this).data('telepon');
            var email = $(this).data('email');
            var route = $(this).data('route');

            $('#modalEdit #nama_lengkap').val(nama_lengkap);
            $('#modalEdit #alamat').val(alamat);
            $('#modalEdit #telepon').val(telepon);
            $('#modalEdit #email').val(email);
            $('#modalEdit form').attr('action', route);
        });
    })


</script>
@endpush
