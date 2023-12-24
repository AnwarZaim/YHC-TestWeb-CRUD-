<x-app>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Materi
                        <a href="{{ url('Materi/create') }}" class="btn btn-prmary float-end"><i
                                class="tf-icons bx bx-plus-circle"></i></a>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="10px">no.</th>
                                        <th width="100px">Aksi</th>
                                        <th>Judul</th>
                                        <th>Embed link</th>
                                        <th>Kursus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($list_materi->isEmpty())
                                        <tr>
                                            <td colspan="4">Tidak ada data materi.</td>
                                        </tr>
                                    @else
                                        @foreach ($list_materi as $materi)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group ml-2">
                                                        <div>
                                                            <a href="{{ url('Materi', $materi->id) }}"
                                                                class="btn btn-sm btn-dark">
                                                                <i class="bx bx-info-circle"></i></a>
                                                            <a href="{{ url('Materi', $materi->id) }}/edit"
                                                                class="btn btn-sm btn-warning btn-mat">
                                                                <i class="bx bx-edit"></i></a>
                                                            <x-button.delete id="{{ $materi->id }}"
                                                                path="{{ $materi->path }}" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $materi->judul }}
                                                </td>
                                                <td>
                                                    <a href="{{ $materi->embed_link }}" target="_blank"><i
                                                            class="bx bx-link"></i></a>
                                                </td>
                                                <td>
                                                    {{ $materi->kursus->judul }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->
        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

    </div>

</x-app>
