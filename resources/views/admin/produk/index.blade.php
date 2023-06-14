@extends('admin.layout.appadmin')
@section('content')
<h1>Ini adalah Produk</h1>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="{{url('/produk/create')}}" 
                                class="btn btn-sm btn-primary">Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>kode</th>
                                            <th>Nama</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>kode</th>
                                            <th>Nama</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($produk as $p)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$p->kode}}</td>
                                            <td>{{$p->nama}}</td>
                                            <td>{{$p->harga_jual}}</td>
                                            <td>{{$p->harga_beli}}</td>
                                            <td>{{$p->stok}}</td>
                                            <td>{{$p->min_stok}}</td>
                                            <td>{{$p->deskripsi}}</td>
                                            <td>{{$p->nama_kategori}}</td>
                                            <td>
                                                <a href="{{url('produk/edit/'.$p->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                            </td>
                                        </tr>
                                        @php $no++; @endphp
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection