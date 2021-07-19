@extends('layouts.app')

@section('content') 

<div class="container"> 
 
    <h3>
        Daftar Kategori
        <a href="{{ url('/kategori/create') }}"class="btn btn-primary btn-sm float-right">Tambah Data</a>
    

    </h3> 
 
    <table class="table table-bordered"> 
        <tr> 
             
            <th>NAMA</th> 
            <th>Kategori</th> 
            <th>Edit</th>
            <th>Delete</th>
        </tr> 
        @foreach($rows as $row) 
            <tr> 
                <td>{{ $row->kategori_nama }}</td> 
                <td>{{ $row->kategori_keterangan }}</td> 
                <td><a href="{{ url('kategori/' . $row->kategori_id . '/edit') }}"class="btn btn-primary btn-sm ">Edit</a></td>
                <td>
                <form action="{{ url('/kategori/' . $row->kategori_id) }}" method="POST">
                <input name="_method" type="hidden" value="DELETE"> 

                @csrf 
                <button class="class=btn btn-danger btn-sm" >Delete</button> 
                </form>
                
                </td>
            </tr> 
        @endforeach 
    </table> 
</div> 

@endsection