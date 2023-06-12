@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between mb-2">
        <h3 class="text-primary">Stok</h3>
        <a class="btn btn-sm btn-primary" href="/stok-ekle">Yeni Stok Ekle</a>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Stok Ara" aria-label="Stok Ara">
            <div class="input-group-append">
                <button class="btn btn-sm btn-primary" type="button">Ara</button>
            </div>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Malzeme Adı</th>
                    <th scope="col">Kodu</th>
                    <th scope="col">Raf grup</th>
                    <th scope="col">Raf No</th>
                    <th scope="col">Stok</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Test Ürün</th>
                    <th>Test123</th>
                    <th>Raf Grup 1</th>
                    <th>Raf Numarası 1</th>
                    <th>552</th>
                    <td>
                        <button onclick="changeCount('decrease')" class="btn btn-sm btn-light btn-icon-text">
                            <i class="mdi mdi-minus"></i>
                        </button>
                        <button onclick="changeCount('increase')" class="btn btn-sm btn-primary btn-icon-text">
                            <i class="mdi mdi-plus"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<script src="/js/stock/changeCount.js"></script>
</div>
@endsection
