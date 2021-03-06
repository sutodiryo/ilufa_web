<?php $this->load->view('back/_/header'); ?>

<div class="layout-px-spacing">

	<div class="row layout-top-spacing layout-spacing">
		<div class="col-lg-12">
			<div class="statbox widget box box-shadow">
				<div class="widget-content widget-content-area">

					<div class="widget-header">
						<div class="row">
							<div class="col-md-8 col-12"></div>
							<div class="col-md-4 col-12">
								<form action="#" class="form-horizontal mt-md-0 mt-3 text-md-right text-center">
									<a class="btn btn-danger" href="<?php echo base_url('admin/master/product/list') ?>" onClick="return confirm('Apakah anda ingin meninggalkan halaman ini?');">
										<i class="fa fa-reply"></i> Kembali
									</a>
								</form>
							</div>
						</div>
					</div>
					<br>
					<?php echo form_open_multipart('admin/master/add/product'); ?>
					<div class="row">
						<div class="col-lg-6">
							<div class="card-wrapper">
								<div class="card">
									<div class="card-body">
										<div class="row">

											<div class="col-md-12">
												<div class="form-group">
													<label class="form-control-label" for="nama_produk">Nama Produk</label>
													<input type="text" class="form-control" name="name" id="nama_produk" onkeyup="get_slug()" value="<?php echo set_value('name'); ?>" placeholder="Nama Produk" required>
													<?php echo form_error('name', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
												</div>
												<div class="form-group">
													<label class="form-control-label" for="slug">Slug</label>
													<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" readonly>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<!-- <label class="form-control-label" for="nama_produk">Foto Produk 1x1 <small>(Reomendasi : 1280x1280px)</small></label> -->
													<!-- <input type="file" class="custom-file-input" name="img_1" id="projectCoverUploads"> -->
													<!-- <label class="custom-file-label" for="img_1">Choose file</label> -->
													<!-- <input type="file" name="img_1" class="form-control" id="img_1"> -->
													<div id="fuSingleFile" class="col-lg-12 layout-spacing">
														<div class="statbox widget box box-shadow">
															<div class="widget-content widget-content-area">
																<div class="custom-file-container" data-upload-id="myFirstImage">
																	<label>Foto Produk 1x1 <small>(Resolusi : 1280x1280px)</small> <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
																	<label class="custom-file-container__custom-file">
																		<input type="file" name="image" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
																		<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
																		<span class="custom-file-container__custom-file__custom-file-control">Choose file...<span class="custom-file-container__custom-file__custom-file-control__button"> Browse </span></span>
																	</label>
																	<div class="custom-file-container__image-preview" style="background-image: url();"></div>
																</div>

															</div>
														</div>
													</div>

												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card-wrapper">
								<div class="card">
									<!--
									<div class="card-header">
										<h3 class="mb-0">Dropdowns</h3>
									</div>
									-->
									<div class="card-body">
										<div class="row">

											<!--
										<div class="col-md-12">
											<div class="form-group">
												<label class="form-control-label" for="nama_produk">Kategori</label>
												<select class="form-control" data-toggle="select">
													<option>Alerts</option>
													<option>Badges</option>
													<option>Buttons</option>
													<option>Cards</option>
													<option>Forms</option>
													<option>Modals</option>
												</select>
											</div>
										</div>
										-->

											<div class="col-md-12">
												<div class="form-group">
													<label class="form-control-label" for="satuan">Satuan</label>
													<input type="text" class="form-control" name="satuan" id="satuan" placeholder="Satuan Produk, misal : Botol, Sachet, Pcs, Pack, Box dll" required>
												</div>
												<div class="form-group">
													<label class="form-control-label" for="berat">Berat Satuan (gr)</label>
													<input type="number" min="0" class="form-control" name="berat" id="berat" placeholder="Berat (dalam gram)" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-control-label" for="harga">Harga Konsumen</label>
													<input type="number" min="0" class="form-control" name="harga" id="harga" placeholder="Harga Konsumen" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-control-label" for="nilai">Nilai PV</label>
													<input type="number" min="0" step="any" class="form-control" name="nilai" id="nilai" placeholder="Nilai PV" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-control-label" for="keterangan">Keterangan</label>
													<textarea class="form-control" name="keterangan" id="keterangan" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 114px;"></textarea>
												</div>
											</div>
											<!--
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label" for="exampleDatepicker">Datepicker</label>
										<input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018">
									</div>
								</div>
							-->
											<div class="col-md-12">
												<button class="btn btn-icon btn-primary btn-block" type="submit">Simpan <i class="ni ni-check-bold"></i></button>
											</div>
										</div>
										<!--
							<div class="row input-daterange datepicker align-items-center">
								<div class="col">
									<div class="form-group">
										<label class="form-control-label">Start date</label>
										<input class="form-control" placeholder="Start date" type="text" value="06/18/2018">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label class="form-control-label">End date</label>
										<input class="form-control" placeholder="End date" type="text" value="06/22/2018">
									</div>
								</div>
							</div>
						-->
									</div>
								</div>

							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

<?php $this->load->view('back/_/footer'); ?>


<script>
	window.onload = function() {
		get_slug()
	};

	function get_slug() {

		let nama_produk = document.getElementById('nama_produk').value;

		$.ajax({
			url: "<?php echo base_url('admin/master/get_slug/') ?>",
			method: "POST",
			data: {
				slug: nama_produk
			},
			success: function(data) {

				$('#slug').val(data);
			}
		});
	}
</script>