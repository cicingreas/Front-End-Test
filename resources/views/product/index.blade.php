@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Produk</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
        + Tambah Produk
    </button>
</div>

<table id="productTable" class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Keyboard</td>
            <td>Rp 200.000</td>
            <td>20</td>
            <td>2025-11-12</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Monitor PC</td>
            <td>Rp 899.000</td>
            <td>35</td>
            <td>2025-11-10</td>
        </tr>
    </tbody>
</table>

<!-- Tambah Produk -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProductModalLabel">Tambah Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addProductForm">
          <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="price">
          </div>
          <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stock">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="saveProductBtn">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection
