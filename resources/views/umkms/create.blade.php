<x-layout>
    <x-slot:title>Tambah UMKM Baru</x-slot:title>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                height: 200px;
                object-fit: cover;
                width: 70%;
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
                    height: 11em;
                }
            }
        </style>
    </head>

    <body>
        <div class="container py-5">
            <div class="mb-4">
                <form action="{{ route('umkms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="nama_umkm" class="form-label">Nama UMKM</label>
                        <input type="text" name="nama_umkm" id="nama_umkm" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nib" class="form-label">NIB</label>
                        <input type="text" name="nib" id="nib" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                        <input type="text" name="tahun_berdiri" id="tahun_berdiri" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_usaha" class="form-label">Alamat Usaha</label>
                        <input type="text" name="alamat_usaha" id="alamat_usaha" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_usaha" class="form-label">Jenis Usaha</label>
                        <input type="text" name="jenis_usaha" id="jenis_usaha" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori_usaha" class="form-label">Kategori Usaha</label>
                        <input type="text" name="kategori_usaha" id="kategori_usaha" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</x-layout>
