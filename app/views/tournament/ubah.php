<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Ubah Tournament</h1>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="tournament_name">Tournament Name</label>
            <input type="text" class="form-control" id="tournament_name" name="tournament_name" value="<?= $data['tournament']['tournament_name']; ?>">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control"><?= $data['tournament']['deskripsi']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="penyelenggara">Penyelenggara</label>
            <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" value="<?= $data['tournament']['penyelengggara']; ?>">
        </div>
        <div class="row mb-2">
            <div class="col">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="<?= $data['tournament']['kategori']; ?>">
            </div>
            <div class="col">
                <label for="kategori">Tipe</label>
                <select name="tipe" id="tipe" class="form-control">
                    <option value="offline">Offline</option>
                    <option value="online">Online</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $data['tournament']['lokasi']; ?>">
        </div>
        <div class="form-group">
            <label for="total_peserta">Total Peserta</label>
            <input type="text" class="form-control" id="total_peserta" name="total_peserta" value="<?= $data['tournament']['total_peserta']; ?>">
        </div>
        <div class="form-group">
            <label for="tanggal_penyelenggara">Tanggal Penyelenggaraan</label>
            <input type="text" class="form-control" id="tanggal_penyelenggaraan" name="tanggal_penyelenggaraan" value="<?= $data['tournament']['tanggal_penyelenggaraan']; ?>">
        </div>
        <div class="form-group">
            <label for="total_hadiah">Total Hadiah</label>
            <input type="text" class="form-control" id="total_hadiah" name="total_hadiah" value="<?= $data['tournament']['total_hadiah']; ?>">
        </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" href="<?= BASEURL; ?>/dashboard/tournament">Kembali</a>
            <button type="submit" class="btn btn-primary">Submit data</button>
        </div>
    </div>
</div>