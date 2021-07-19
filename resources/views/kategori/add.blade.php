@extends('layouts.app') 

@section('content') 
 
<div class="container"> 

        <h3>Tambah Data Kategori</h3> 
        <form action="{{ url('/kategori') }}" method="POST"> 
            @csrf 
            <div class="form-group">
                <label for="">NAMA</label>
                <input type="text" name="kategori_nama" class=form-control>
            </div>
            <div class="form-group">
                <label for="">KETERANGAN</label>
                <input type="text" name="kategori_keterangan" class=form-control>
            </div>
            <div class=form-group>
            <input type="Submit" value="SIMPAN" class="btn btn-primary">
            
            </div>

@endsection 