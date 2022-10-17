@extends('layout.main')

@section('content')
<div class="content">
  <div class="d-flex justify-content-between mx-5 mt-5 px-5">
    <div>
      <h5 class="fw-bold"><i class="fas fa-arrow-left fa-xs me-2"></i>DAFTAR LOWONGAN PEKERJAAN</h5>
    </div>
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Lowongan</li>
          <li class="breadcrumb-item active" aria-current="page">Daftar Lowongan</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="mx-5 mt-3 px-5">Cari pekerjaan yang cocok dengan anda</div>
  <div class="d-flex mx-5 mt-2 px-5">
    <div class="w-75 me-4">
      <form action="" class="mt-1">
        <div class="form-group">
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" aria-label="search" placeholder="Ketik jenis keahlian / posisi / nama perusahaan">
            <span class="input-group-text">
              <i class="fas fa-magnifying-glass"></i>
            </span>
          </div>
        </div>
      </form>
      <x-jobcard>
      </x-jobcard>
      <x-jobcard>
      </x-jobcard>
      <x-jobcard>
      </x-jobcard>
      <x-jobcard>
      </x-jobcard>
      <div class="bg-light d-flex justify-content-center py-2" role="button">
        Lihat lowongan lainnya
      </div>
    </div>
    <div>
      <button class="rounded-pill px-5 py-3 bg-primary btn text-white" style="width: 350px" data-bs-toggle="modal"
      data-bs-target="#formModal"><i class="fas fa-plus me-2"></i>TAMBAH LOWONGAN</button>
      <div class="mt-5 p-4 bg-light rounded">
        <h5 class="fw-bold">Filter</h5>
        <form action="" class="mt-3">
          <div class="mb-3">
            <label for="relevansi" class="form-label">Urutkan menurut</label>
            <select class="form-select">
              <option selected>Relevansi</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="tipePekerjaan" class="form-label">Tipe pekerjaan</label>
            <select class="form-select">
              <option selected>Purna waktu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="area" class="form-label">Area</label>
            <select class="form-select mb-3">
              <option selected>Indonesia</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <select class="form-select mb-3">
              <option selected>Jawa Barat</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <select class="form-select mb-3">
              <option selected>Semua area</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="Kategori" class="form-label">Kategori</label>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label" for="flexCheckChecked">
                Informasi Teknologi
              </label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label" for="flexCheckChecked">
                Desain & Kreatif
              </label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label" for="flexCheckChecked">
                Penjualan & Pemasaran
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label" for="flexCheckChecked">
                Akuntansi & Keuangan
              </label>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class=""></div>
  </div>
</div>
@endsection

@include('layout.partials.jobform')