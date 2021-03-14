<?php include_once 'atas.php'; ?>
            
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Sistem Penilaian</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Sistem Penilaian</li>
            </ol>

            <div class="row">
            	<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3>Sistem Penilaian</h3>
						</div>

						<div class="card-body">
							<h2>Form Nilai Siswa</h2>

							<form class="form-horizontal" action="nilai_siswa.php" method="POST">
								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Nama Lengkap</strong>
									</label>
									<div class="col-sm-6">
									  <input type="text" name="nama" size="30" placeholder="Nama Lengkap" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Mata Kuliah</strong>
									</label>
									<div class="col-sm-6">
										<select name="matkul" class="custom-select mr-sm-2">
											<option value="DDP">Dasar-Dasar Pemrograman</option>
											<option value="BDI">Basis Data I</option>
											<option value="WEB1">Pemrograman Web</option>
										</select>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Nilai UTS</strong>
									</label>
									<div class="col-sm-2">
									  <input type="text" name="nilai_uts" size="6" placeholder="Nilai UTS" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Nilai UAS</strong>
									</label>
									<div class="col-sm-2">
									  <input type="text" name="nilai_uas" size="6" placeholder="Nilai UAS" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Nilai Tugas/Praktikum</strong>
									</label>
									<div class="col-sm-2">
									  <input type="text" name="nilai_tugas" size="6" placeholder="Nilai Tugas" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-2 offset-sm-4">
									  <input type="submit" value="Simpan" name="proses" class="btn btn-primary" />
									</div>
								</div>
							</form>
						</div>
					</div>
            	</div>

			</div>

        </div>
    </main>
                
<?php include_once 'bawah.php'; ?>