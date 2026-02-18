<h2>Halaman Absensi</h2>

<p>
    Kelas: {{ $mahasiswa->kelas->nama_kelas }} 
    (Semester {{ $mahasiswa->kelas->semester }})
</p>

<hr>

@foreach($jadwals as $jadwal)
    <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
        
        <h4>{{ $jadwal->mataKuliah->nama_matkul }}</h4>

        <p>
            Dosen: {{ $jadwal->dosen->user->name }}
        </p>

        <p>
            {{ $jadwal->hari }} 
            | {{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}
        </p>

        <form action="{{ route('mahasiswa.absensi.store') }}" method="POST">
            @csrf
            <input type="hidden" name="jadwal_id" value="{{ $jadwal->id }}">
            <button type="submit">Absen</button>
        </form>

    </div>
@endforeach
