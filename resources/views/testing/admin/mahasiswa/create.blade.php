<h2>Tambah Mahasiswa</h2>

<form action="{{ route('admin.mahasiswa.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Nama">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="nim" placeholder="NIM">
    <input type="text" name="alamat" placeholder="Alamat">
    <input type="number" name="no_hp" placeholder="No Telp">
    <input type="password" name="password" placeholder="Password" required>

    <select name="kelas_id">
        @foreach($kelas as $k)
            <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
        @endforeach
    </select>

    <button type="submit">Simpan</button>
</form>
