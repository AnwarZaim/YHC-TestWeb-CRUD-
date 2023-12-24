<x-app>
    <div class="container mt-3">
        <a href="{{ url('Materi') }}" class="btn btn-sm btn-default mb-2"
            style="border: 1px solid #696CFF; color:#696CFF"><i class="bx bx-chevron-left "></i>Kembali</a>

        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            DETAIL MATERI
                            <hr>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-4">Kursus</dt>
                                    <dd class="col-md-8">: {{ $materi->kursus->judul }}</dd>
                                    <dt class="col-md-4">Judul Materi</dt>
                                    <dd class="col-md-8">: {{ $materi->judul }}</dd>
                                    <dt class="col-md-4">Embed Link</dt>
                                    <dd class="col-md-8">: <a href="{{ $materi->embed_link }}">{{ $materi->embed_link }}</a> </dd>
                                    <dt class="col-md-4">Desc</dt>
                                    <dd class="col-md-8">: {{ $materi->deskripsi }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app>
