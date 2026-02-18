<h2>Tambah Dosen</h2>

<form action="{{ route('admin.dosen.store') }}" method="POST">
    @csrf

    <div>
        <label>Kode Dosen</label>
        <input type="text" name="kode_dosen" required>
    </div>
    <div>
        <label>nidn</label>
        <input type="number" name="nidn" required>
    </div>

    <div>
        <label>Nama</label>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" required>
    </div>

    <div>
        <label>Password</label>
        <input type="password" name="password" required>
    </div>

    <div>
        <label>No HP</label>
        <input type="text" name="no_hp">
    </div>

    <div>
        <label>Alamat</label>
        <textarea name="alamat"></textarea>
    </div>

    <button type="submit">Simpan</button>
</form>
