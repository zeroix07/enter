<form action="<?php echo site_url('home/simpan_daftar');?>" method="post">
    <input type="hidden" value="<?php echo $no_antrian;?>" name="no_antrian" class="form-control" id="name" placeholder="Your No Peserta" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
    <input type="text" class="form-control" name="nama" id="email" placeholder="Your Nama" data-rule="email" data-msg="Please enter a valid email">
    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
    <input type="tel" name="kontak" class="form-control datepicker" id="phone" placeholder="kontak" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
    <div class="text-center"><button type="submit">Daftar</button></div>
</form>