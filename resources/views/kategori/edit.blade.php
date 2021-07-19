@extends('layouts.app') 
 
@section('content') 
<div class="container"> 
 
<h3>Edit Data Kategori</h3> 
<form action="{{ url('/kategori/' . $row->kategori_id) }}" method="POST"> 
<input name="_method" type="hidden" value="PATCH"> 

@csrf  

<div class="form-group">
                <label for="">NAMA</label>
                <input type="text" name="kategori_nama" class=form-control value="{{ $row->kategori_nama }}">
            </div>
            <div class="form-group">
                <label for="">KETERANGAN</label>
                <input type="text" name="kategori_keterangan" class=form-control value="{{ $row->kategori_keterangan }}"> 
            </div>
            <div class=form-group>
            <input type="Submit" value="UPDATE" class="btn btn-primary">
            
            </div>
    </form> 
</div> 

@endsection 