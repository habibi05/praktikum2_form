<?php

	include_once 'atas.php';
	require_once 'libfungsi.php';

	$proses= $_POST['proses'];
	$nama_siswa = $_POST['nama'];
	$mata_kuliah = $_POST['matkul'];
	$nilai_uts = $_POST['nilai_uts'];
	$nilai_uas = $_POST['nilai_uas'];
	$nilai_tugas = $_POST['nilai_tugas'];

	// Total Nilai
	$total =  (30 * $nilai_uts / 100) + (35 * $nilai_uas / 100) + (35 * $nilai_tugas / 100);
	$status = kelulusan($total);

	// Grade
	$grade = grade($total);

	// Predikat
	$predikat = predikat($grade);

?>
            
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
							<div class="d-flex justify-content-between">
								<h2>Nilai Siswa</h2>
								<?=$status?>
							</div>

							<?php if (!empty($proses)) { ?>
								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Proses</strong>
									</label>
									<div class="col-sm-6">
										<strong class="form-control-plaintext"><?=$proses?></strong>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Nama Lengkap</strong>
									</label>
									<div class="col-sm-6">
									  <input type="text" class="form-control" value="<?=$nama_siswa?>" disabled>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Mata Kuliah</strong>
									</label>
									<div class="col-sm-6">
									  <input type="text" class="form-control" value="<?=$mata_kuliah?>" disabled>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Nilai UTS</strong>
									</label>
									<div class="col-sm-2">
									  <input type="text" class="form-control" value="<?=$nilai_uts?>" disabled>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Nilai UAS</strong>
									</label>
									<div class="col-sm-2">
									  <input type="text" class="form-control" value="<?=$nilai_uas?>" disabled>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Nilai Tugas Praktikum</strong>
									</label>
									<div class="col-sm-2">
									  <input type="text" class="form-control" value="<?=$nilai_tugas?>" disabled>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Grade</strong>
									</label>
									<div class="col-sm-2">
										<strong class="form-control-plaintext"><?=$grade?></strong>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-4 text-right col-form-label">
										<strong>Predikat</strong>
									</label>
									<div class="col-sm-2">
										<strong class="form-control-plaintext"><?=$predikat?></strong>
									</div>
								</div>
							<?php } ?>

						</div>
					</div>
            	</div>

			</div>

        </div>
    </main>
                
<?php include_once 'bawah.php'; ?>