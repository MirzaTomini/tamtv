<div class="row">
	<?php echo form_open(current_url()); ?>
	<div class="col-md-8">
		<div class="form-group">
			<div class="col-md-10 col-md-offset-2">
				<?php echo $this->session->flashdata('alert'); ?>
			</div>
		</div>
		<legend>Edit Kategori</legend>
		<div class="form-group">
			<label class="col-md-2">Nama</label>
			<div class="col-md-10">
				<input type="text" name="nama" class="form-control" value="<?php echo (set_value('nama')) ? set_value('nama') : $category->name; ?>">
				<p class="help-block"><?php echo form_error('nama', '<small class="text-red">', '</small>'); ?></p>
				<p class="help-block"><small><i>Nama ini mencerminkan bagaimana tampil di situs Anda.</i></small></p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2">Slug</label>
			<div class="col-md-10">
				<input type="text" name="slug" class="form-control" value="<?php echo (set_value('slug')) ? set_value('slug') : $category->slug; ?>">
				<p class="help-block"><?php echo form_error('slug', '<small class="text-red">', '</small>'); ?></p>
				<p class="help-block"><small><i>"Slug" ialah versi ramah-URL dari nama. Biasanya seluruhnya merupakan huruf kecil dan hanya mengandung huruf, angka, dan tanda strip.</i></small></p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2">Kategori Induk</label>
			<div class="col-md-10">
				<select name="parent" id="input" class="form-control">
					<option value="0"> -- Tidak ada --</option>
				<?php foreach( $this->category->get_parent() as $row)    
				{
					$selected = ($category->parent== $row->category_id) ? 'selected' : '';
					echo '<option value="'.$row->category_id.'" '.$selected.'>'.$row->name.'</option>';
				}
				?>
				</select>
				<p class="help-block"><?php echo form_error('slug', '<small class="text-red">', '</small>'); ?></p>
				<p class="help-block"><small><i>Anda boleh saja mempuanya kategori Berita dan di bawahnya ada kategori Politik dan Kriminal.</i></small></p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2">Deskripsi</label>
			<div class="col-md-10">
				<textarea name="deskripsi" rows="5" class="form-control"><?php echo (set_value('deskripsi')) ? set_value('deskripsi') : $category->description; ?></textarea>
				<p class="help-block"><?php echo form_error('deskripsi', '<small class="text-red">', '</small>'); ?></p>
				<p class="help-block"><small><i>Deskripsi ini akan tampil pada tema akan beserta nama.</i></small></p>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-5 col-md-offset-2">
				<button type="submit" class="btn btn-primary">Perbarui</button>
				<a href="#" data-action="delete" data-key="category" data-id="<?php echo $category->category_id ?>" class="text-red left2x">Hapus</a>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>

<div class="modal" id="modal-delete-category">
	<div class="modal-dialog modal-sm modal-danger">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-info-circle"></i> Hapus!</h4>
				<span>Hapus data kategori ini dari database?</span>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
				<a href="#" id="btn-delete" class="btn btn-outline">Hapus</a>
			</div>
		</div>
	</div>
</div>