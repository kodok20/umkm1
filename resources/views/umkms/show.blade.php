<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail UMKM</title>
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
        <h1 class="mb-4">Detail UMKM</h1>
        <div class="card">
            @if ($umkm->foto)
                <img src="{{ Storage::url($umkm->foto) }}" alt="Foto UMKM" class="card-img-top">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $umkm->nama_umkm }}</h5>
                <table class="table table-bordered">
                    <tbody>
                            <th>NIB</th>
                            <td>{{ $umkm->nib }}</td>
                        </tr>
                        <tr>
                            <th>Tahun Berdiri</th>
                            <td>{{ $umkm->tahun_berdiri }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Telepon</th>
                            <td>{{ $umkm->nomor_telepon }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $umkm->email }}</td>
                        </tr>
                        <tr>
                            <th>Alamat Usaha</th>
                            <td>{{ $umkm->alamat_usaha }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Usaha</th>
                            <td>{{ $umkm->jenis_usaha }}</td>
                        </tr>
                        <tr>
                            <th>Kategori Usaha</th>
                            <td>{{ $umkm->kategori_usaha }}</td>
                        </tr>
                        <tr>
                            <th>Skala</th>
                            <td>{{ $umkm->skala }}</td>
                        </tr>
                        <tr>
                            <th>Lokasi</th>
                            <td>{{ $umkm->lokasi }}</td>
                        </tr>
                        <tr>
                            <th>Legalitas</th>
                            <td>{{ $umkm->legalitas }}</td>
                        </tr>
                        <tr>
                            <th>Teknologi</th>
                            <td>{{ $umkm->teknologi }}</td>
                        </tr>
                        <tr>
                            <th>Pembiayaan</th>
                            <td>{{ $umkm->pembiayaan }}</td>
                        </tr>
                        <tr>
                            <th>Kemitraan</th>
                            <td>{{ $umkm->kemitraan }}</td>
                        </tr>
                        <tr>
                            <th>ID Pemilik</th>
                            <td>{{ $umkm->id_pemilik }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ $umkm->status }}</td>
                        </tr>
                        <tr>
                            <th>Tantangan</th>
                            <td>{{ $umkm->tantangan }}</td>
                        </tr>
                        <tr>
                            <th>Platform</th>
                            <td>{{ $umkm->platform }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('umkms.index') }}" class="btn btn-primary">Kembali ke Daftar</a>
                <a href="{{ route('umkms.edit', $umkm->id_umkm) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('umkms.destroy', $umkm->id_umkm) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
</body>
</html>
