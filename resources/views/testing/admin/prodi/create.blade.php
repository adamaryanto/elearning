<h2>Tambah Program Studi</h2>

<form action="{{ route('admin.prodi.store') }}" method="POST">
    @csrf
    <input type="text" name="nama_prodi" placeholder="Nama Prodi">
    <button type="submit">Simpan</button>
</form>
