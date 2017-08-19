<div class="row">
	<?php echo form_open(current_url()); ?>
	<div class="col-md-9">
		<div class="form-group">
			<div class="col-md-10 col-md-offset-2">
				<?php echo $this->session->flashdata('alert'); ?>
			</div>
		</div>
		<div class="form-group">
			<label>Judul</label>
			<input type="text" name="nama" class="form-control" value="<?php echo set_value('nama') ?>" placeholder="Masukkan Judul Disini ..." autofocus>
			<p class="help-block"><?php echo form_error('nama', '<small class="text-red">', '</small>'); ?></p>
		</div>
		<div class="form-group">
			<label>Slug</label>
			<input type="text" name="slug" class="form-control" value="<?php echo set_value('slug') ?>">
			<p class="help-block"><?php echo form_error('slug', '<small class="text-red">', '</small>'); ?></p>
			<p class="help-block"><small><i>"Slug" ialah versi ramah-URL dari nama. Biasanya seluruhnya merupakan huruf kecil dan hanya mengandung huruf, angka, dan tanda strip.</i></small></p>
		</div>
		<div class="form-group">
			<label>Konten</label>
			<textarea name="deskripsi" rows="8" class="form-control"><?php echo set_value('deskripsi'); ?></textarea>
			<p class="help-block"><?php echo form_error('deskripsi', '<small class="text-red">', '</small>'); ?></p>
		</div>
		<div class="form-group">
			<label>Kutipan</label>
			<textarea name="deskripsi" rows="3" class="form-control"><?php echo set_value('deskripsi'); ?></textarea>
			<p class="help-block"><?php echo form_error('deskripsi', '<small class="text-red">', '</small>'); ?></p>
			<p class="help-block"><small><i>Ringkasan adalah tulisan ringkas buatan tangan opsional dari konten yang bisa Anda gunakan dalam tema.</i></small></p>
		</div>
		<div class="form-group">
			 <div class="checkbox">
			     <input id="checkbox1" type="checkbox"> <label for="checkbox1"><strong>Izinkan Komentar</strong></label>
			 </div>
			 <div class="checkbox">
			     <input id="checkbox1" type="checkbox"> <label for="checkbox1"><strong>Izinkan Pengambilan Polling</strong></label>
			 </div>
			<p class="help-block"><?php echo form_error('deskripsi', '<small class="text-red">', '</small>'); ?></p>
		</div>
		<div class="form-group">
			<label>Pertanyaan Polling</label>
			<select name="pollingquestion" id="inputPollingquestion" class="form-control" style="width:50%">
				<option value="">-- PILIH --</option>
			</select>
			<p class="help-block"><?php echo form_error('deskripsi', '<small class="text-red">', '</small>'); ?></p>
			<p class="help-block"><small><i>Jika anda mengaktifkan pengambilan poliing, silahkan pilih pertanyaan berikut.</i></small></p>
		</div>
	</div>
	<div class="col-md-3 top4x">
		<div class="form-group text-center">
			<a href="<?php echo base_url("administrator/post"); ?>" class="btn btn-app bg-red"><i class="fa fa-times"></i> Batal</a>
			<button class="btn btn-app bg-blue"><i class="fa fa-save"></i> Simpan</button>
		</div>
		<div class="box box-default">
			<div class="box-header with-border">
				<strong class="box-heading">Pengelompokkkan</strong>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label>Status</label>
					<select name="status" id="inputStatus" class="form-control" required="required">
						<option value="publish">Terbit</option>
					</select>
				</div>	
				<div class="form-group">
					<label>Kategori</label>
					<div class="box-select-category">
					<?php for($i=1; $i<=20; $i++) : ?>
						<div class="checkbox <?php if(($i%3) == 0) echo 'left3x' ?>">
						    <input type="checkbox"> <label>Izinkan Komentar</label>
						</div>
					<?php endfor; ?>
					</div>
				</div>	
				<div class="form-group">
					<label>Topik</label>
					<textarea name="" class="form-control" rows="4"></textarea>
				</div>	
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="box box-default">
			<div class="box-header with-border">
				<strong class="box-heading">Gambar Utama</strong>
			</div>
			<div class="box-body">
				<div class="form-group">
					<input type="file" class="form-control">
				</div>	
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>
