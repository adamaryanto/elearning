<h2>Tambah Mata Kuliah</h2>

<form action="{{ route('admin.mata-kuliah.store') }}" method="POST">
    @csrf

    <div>
        <label>Kode Mata Kuliah</label>
        <input type="text" name="kode_matkul" required>
    </div>

    <div>
        <label>Nama Mata Kuliah</label>
        <input type="text" name="nama_matkul" required>
    </div>

    <div>
        <label>SKS</label>
        <input type="number" name="sks" min="1" max="6" required>
    </div>

    <div>
        <label>Program Studi</label>
        <select name="prodi_id" required>
            @foreach($prodis as $prodi)
                <option value="{{ $prodi->id }}">
                    {{ $prodi->nama_prodi }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Simpan</button>
</form>
