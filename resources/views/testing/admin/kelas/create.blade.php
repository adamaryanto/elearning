<h2>Tambah Kelas</h2>

<form action="{{ route('admin.kelas.store') }}" method="POST">
    @csrf

    <input type="text" name="nama_kelas" placeholder="Nama Kelas">
    <input type="number" name="semester" placeholder="Semester">

    <select name="prodi_id">
        @foreach($prodis as $prodi)
            <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
        @endforeach
    </select>

    <button type="submit">Simpan</button>
</form>
