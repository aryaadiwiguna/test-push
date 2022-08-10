 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-2">
     <h1 class="h3 mb-0 text-gray-800">Data Tournament</h1>
     <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
 </div>

 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Tambah data </button>

 <div class="card shadow mb-4 mt-3">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">List Data</h6>
     </div>
     <div class="card-body">
         <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                     <tr>
                         <th class="text-center">Aksi</th>
                         <th class="text-center">Nama Tournament</th>
                         <th class="text-center">Nama Penyelenggara</th>
                         <th class="text-center">Deskripsi</th>
                         <th class="text-center">Lokasi</th>
                         <th class="text-center">Total Peserta</th>
                         <th class="text-center">Tipe</th>
                         <th class="text-center">Kategori</th>
                         <th class="text-center">Tanggal Penyelenggaraan</th>
                         <th class="text-center">Total Hadiah</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php foreach ($data['tournament'] as $tour) : ?>
                         <tr>
                             <td class="text-center">
                                 <a href="<?= BASEURL; ?>/dashboard/ubah_tournament/<?= $tour['id_tournament']; ?>" class="btn btn-success mb-1 mx-2">Edit</a>
                                 <a href="" class="btn btn-danger mb-1">Hapus</a>
                             </td>
                             <td class="text-center"><?= $tour['tournament_name'] ?></td>
                             <td class="text-center"><?= $tour['penyelengggara'] ?></td>
                             <td class="text-center"><?= $tour['deskripsi'] ?></td>
                             <td class="text-center"><?= $tour['lokasi'] ?></td>
                             <td class="text-center"><?= $tour['total_peserta'] ?></td>
                             <td class="text-center"><?= $tour['tipe'] ?></td>
                             <td class="text-center"><?= $tour['kategori'] ?></td>
                             <td class="text-center"><?= $tour['tanggal_penyelenggaraan'] ?></td>
                             <td class="text-center"><?= $tour['total_hadiah'] ?></td>
                         </tr>
                     <?php endforeach ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>

 <!-- Modal -->
 <div class=" modal fade" id="formModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="formModalLabel">Tambah data tournament</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= BASEURL; ?>/dashboard/tambah_tournament" method="POST">
                     <div class="form-group">
                         <label for="tournament_name">Tournament Name</label>
                         <input type="text" class="form-control" id="tournament_name" name="tournament_name">
                     </div>
                     <div class="form-group">
                         <label for="deskripsi">Deskripsi</label>
                         <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control"></textarea>
                     </div>
                     <div class="form-group">
                         <label for="penyelenggara">Penyelenggara</label>
                         <input type="text" class="form-control" id="penyelenggara" name="penyelenggara">
                     </div>

                     <div class="row mb-2">
                         <div class="col">
                             <label for="kategori">Kategori</label>
                             <input type="text" name="kategori" id="kategori" class="form-control">
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
                         <input type="text" class="form-control" id="lokasi" name="lokasi">
                     </div>
                     <div class="form-group">
                         <label for="total_peserta">Total Peserta</label>
                         <input type="text" class="form-control" id="total_peserta" name="total_peserta">
                     </div>
                     <div class="form-group">
                         <label for="tanggal_penyelenggara">Tanggal Penyelenggaraan</label>
                         <input type="text" class="form-control" id="tanggal_penyelenggaraan" name="tanggal_penyelenggaraan">
                     </div>
                     <div class="form-group">
                         <label for="total_hadiah">Total Hadiah</label>
                         <input type="text" class="form-control" id="total_hadiah" name="total_hadiah">
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Submit data</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>