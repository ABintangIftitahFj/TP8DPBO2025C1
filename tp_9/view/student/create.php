<?php include $_SERVER['DOCUMENT_ROOT'] . '/tp_9/templates/header.php'; ?>

<div class="card">
    <div class="card-header">
        <h3>Create New Student</h3>
    </div>
    
    <div class="card-body">
        <form action="/tp_9/index.php?page=student&action=store" method="POST" novalidate>>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="nama" class="form-control" required>
                    <div class="invalid-feedback">Please enter student name</div>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" required>
                    <div class="invalid-feedback">Please enter NIM</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" name="no_telp" class="form-control" required>
                    <div class="invalid-feedback">Please enter phone number</div>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label">Enrollment Date</label>
                    <input type="date" name="tanggal_masuk" class="form-control" required>
                    <div class="invalid-feedback">Please select enrollment date</div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Ethnic Group</label>
                <select name="id_suku" class="form-select" required>
                    <option value="">Select Ethnic Group</option>
                    <?php foreach($sukuList as $suku): ?>
                        <option value="<?= $suku['id_suku'] ?>">
                            <?= htmlspecialchars($suku['nama_suku']) ?> 
                            (<?= htmlspecialchars($suku['asal_daerah']) ?>)
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Please select ethnic group</div>
            </div>

            <button type="submit" class="btn btn-success">
             <i class="fas fa-save"></i> Save Student
             </button>
        </form>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/tp_9/templates/footer.php'; ?>