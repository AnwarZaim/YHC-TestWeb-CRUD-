<x-app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <a href="{{ url('Materi') }}" class="btn btn-sm btn-default mb-2"
            style="border: 1px solid #696CFF; color:#696CFF"><i class="bx bx-chevron-left "></i>Kembali</a>
        <div class="row">
            <!-- Basic -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Data Materi</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <form action="{{ url('Materi', $materi->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Judul" name="judul"
                                            value="{{ $materi->judul }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Embed Link" name="embed_link"
                                            value="{{ $materi->embed_link }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <select name="kursus_id" class="form-select" aria-label="Default select example">
                                        @foreach ($list_kursus as $kursus)
                                            <option value="{{ $kursus->id }}" {{ $materi->kursus_id == $kursus->id ? 'selected' : '' }}>
                                                {{ $kursus->judul }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="deskripsi" aria-label="With textarea" placeholder="Deskripsi">{{ $materi->deskripsi }}</textarea>
                            </div>
                            <br>
                            <div class="button-group float-end">
                                <a href="{{ url('Kursus') }}" class="btn btn-danger btn-sm" style="margin-right:10px"><i
                                        class="fa fa-trash "></i>Batal</a>
                                <button class="btn btn-dark btn-sm"><i class="fa fa-save "></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
