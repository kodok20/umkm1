<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit UMKM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f9f6f2;
            font-family: 'Arial', sans-serif;
        }

        .card {
            border-radius: 15px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            border-radius: 15px 15px 0 0;
            height: auto;
            width: 100%;
            object-fit: cover;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-primary {
            border-radius: 20px;
        }

        .btn-info, .btn-warning, .btn-danger {
            border-radius: 20px;
        }

        .form-inline .form-control {
            border-radius: 20px;
        }

        .form-inline .btn {
            border-radius: 20px;
        }

        .pagination {
            justify-content: center;
        }

        .pagination .page-item .page-link {
            border-radius: 20px;
        }

        .cards-wrapper {
            display: flex;
            justify-content: center;
        }

        .card img {
            max-width: 100%;
            max-height: 100%;
        }

        .card {
            margin: 0 0.5em;
            box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
            border: none;
            border-radius: 0;
        }

        .carousel-inner {
            padding: 1em;
        }

        .carousel-control-prev,
        .carousel-control-next {
            background-color: #e1e1e1;
            width: 5vh;
            height: 5vh;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }

        @media (min-width: 768px) {
            .card img {
                height: auto;
            }
        }

        .detail-item {
            margin-bottom: 10px;
        }

        .detail-item strong {
            display: inline-block;
            width: 150px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit UMKM</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('umkms.update', $umkm->id_umkm) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_umkm">Nama UMKM</label>
                        <input type="text" name="nama_umkm" id="nama_umkm" class="form-control" value="{{ $umkm->nama_umkm }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nib">Nomor Induk Berusaha (NIB)</label>
                        <input type="text" name="nib" id="nib" class="form-control" value="{{ $umkm->nib }}">
                    </div>
                    <div class="form-group">
                        <label for="tahun_berdiri">Tahun Berdiri</label>
                        <input type="number" name="tahun_berdiri" id="tahun_berdiri" class="form-control" value="{{ $umkm->tahun_berdiri }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon/HP</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" value="{{ $umkm->nomor_telepon }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $umkm->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_usaha">Alamat Usaha</label>
                        <input type="text" name="alamat_usaha" id="alamat_usaha" class="form-control" value="{{ $umkm->alamat_usaha }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_usaha">Jenis Usaha</label>
                        <input type="text" name="jenis_usaha" id="jenis_usaha" class="form-control" value="{{ $umkm->jenis_usaha }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori_usaha">Kategori Usaha</label>
                        <input type="text" name="kategori_usaha" id="kategori_usaha" class="form-control" value="{{ $umkm->kategori_usaha }}" required>
                    </div>
                    <div class="form-group">
                        <label for="skala">Skala</label>
                        <input type="text" name="skala" id="skala" class="form-control" value="{{ $umkm->skala }}">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $umkm->lokasi }}">
                    </div>
                    <div class="form-group">
                        <label for="legalitas">Legalitas</label>
                        <input type="text" name="legalitas" id="legalitas" class="form-control" value="{{ $umkm->legalitas }}">
                    </div>
                    <div class="form-group">
                        <label for="teknologi">Teknologi</label>
                        <input type="text" name="teknologi" id="teknologi" class="form-control" value="{{ $umkm->teknologi }}">
                    </div>
                    <div class="form-group">
                        <label for="pembiayaan">Pembiayaan</label>
                        <input type="text" name="pembiayaan" id="pembiayaan" class="form-control" value="{{ $umkm->pembiayaan }}">
                    </div>
                    <div class="form-group">
                        <label for="kemitraan">Kemitraan</label>
                        <input type="text" name="kemitraan" id="kemitraan" class="form-control" value="{{ $umkm->kemitraan }}">
                    </div>
                    <div class="form-group">
                        <label for="id_pemilik">ID Pemilik</label>
                        <input type="number" name="id_pemilik" id="id_pemilik" class="form-control" value="{{ $umkm->id_pemilik }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" id="status" class="form-control" value="{{ $umkm->status }}">
                    </div>
                    <div class="form-group">
                        <label for="tantangan">Tantangan</label>
                        <textarea name="tantangan" id="tantangan" class="form-control">{{ $umkm->tantangan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control-file">
                        @if ($umkm->foto)
                            <img src="{{ Storage::url($umkm->foto) }}" alt="Foto UMKM" class="img-thumbnail mt-2" style="max-width: 200px;">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="platform">Platform</label>
                        <input type="text" name="platform" id="platform" class="form-control" value="{{ $umkm->platform }}">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
</body>
</html>
