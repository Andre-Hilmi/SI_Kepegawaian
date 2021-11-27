<div class="container-fluid">
<div class="edit">
<div class="card">
  <h5 class="card-header">Edit Data Personil</h5>
  <div class="card-body">

    <?php foreach($personil as $psn): ?>
      <form method="post" action="<?php echo base_url(). 'admin/home/update'?>">
    <div class="row">
        <div class="col-md-4">
          <img src="<?= base_url('assets/images/profil.png'); ?>">
        </div>
        <div class="col-md-8">
        
        <div class="for-group">  
        <table class="table">
              <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" class="form-control" value="<?php echo $psn->NAMA; ?>"></td>
              <tr>
              <tr>
                <td>NRP / NIP </td>
                <td><input type="text" name="nip" class="form-control" value="<?php echo $psn->NRP_NIP; ?>"></td>
              <tr>
              <tr>
                <td>Pangkat </td>
                <td><input type="text" name="pangkat" class="form-control" value="<?php echo $psn->PANGKAT; ?>"></td>
              <tr>
              <tr>
                <td>Jabatan </td>
                <td><input type="text" name="jabatan" class="form-control" value="<?php echo $psn->JABATAN; ?>"></td>
              <tr>
              <tr>
                <td>Riwayat Jabatan </td>
                <td><input type="text" name="riwayat" class="form-control" value="<?php echo $psn->Riwayat_Jabatan; ?>"></strong></td>
                <td><input type="hidden" name="id" class="form-control" value="<?php echo $psn->id; ?>"></td>
              <tr>
            </table>
            <div class="edit">
                <button type="submit" class="simpan btn-primary btn-sm">Simpan</button>
                <button type="" class="back btn-success btn-sm">Kembali</button>
            </div>
            </div>
        </div>
    </div>
    </form>
    <?php endforeach; ?>
  </div>
</div>
</div>
</div>
