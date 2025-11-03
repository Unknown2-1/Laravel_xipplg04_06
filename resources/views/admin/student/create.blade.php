@extends('layouts.admin')
@section('title', 'Tambah Siswa')

@section('content')
<div class="container-fluid">
    <h1>Tambah Data Siswa</h1>
    
    {{-- Form akan mengirim data ke fungsi store di controller --}}
    <form action="{{ route('admin.students.store') }}" method="POST">
        @csrf
        
        {{-- Input NIS --}}
        <div class="mb-3">
            <label>NIS</label>
            <input type="text" name="nis" class="form-control" required>
        </div>
        
        {{-- Input Nama Lengkap --}}
        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" required>
        </div>
        
        {{-- Input Jenis Kelamin (Dropdown/Select) --}}
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        
        {{-- Input NISN --}}
        <div class="mb-3">
            <label>NISN</label>
            <input type="text" name="nisn" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection