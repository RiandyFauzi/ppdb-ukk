<div class="form-group">
<label for="nis">nis</label>
     <input type="text" name="nis" id="nis"  class="form-control">
    @error('nis')
    <div class="text-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="nama">nama</label>
    <input type="text" name="nama" id="nama" class="form-control">
    @error('nama')
    <div class="text-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="jenis_kelamin">jenis_kelamin</label>
    <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
    @error('jenis_kelamin')
    <div class="text-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>


<div class="form-group">
    <label for="tempat_lahir">tempat_lahir</label>
    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
    @error('tempat_lahir')
    <div class="text-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>


<div class="form-group">
    <label for="tgl_lahir">tgl_lahir</label>
    <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control">
    @error('tgl_lahir')
    <div class="text-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>


<div class="form-group">
    <label for="alamat">alamat</label>
    <input type="text" name="alamat" id="alamat" class="form-control">
    @error('alamat')
    <div class="text-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>


<div class="form-group">
    <label for="asal_sekolah">asal_sekolah</label>
    <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control">
    @error('asal_sekolah')
    <div class="text-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>


<div class="form-group">
    <label for="kelas">kelas</label>
    <input type="text" name="kelas" id="kelas" class="form-control">
    @error('kelas')
    <div class="text-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>


<div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" name="jurusan" id="jurusan" class="form-control">
    @error('jurusan')
    <div class="text-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $submit ?? 'Update'}}</button>
<button type="reset" class="btn btn-primary">Reset</button> 