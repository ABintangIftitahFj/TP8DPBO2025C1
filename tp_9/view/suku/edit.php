<?php include $_SERVER['DOCUMENT_ROOT'] . '/tp_9/templates/header.php'; ?>
<div class="card">
    <div class="card-header">
        <h3>Edit Ethnic Group</h3>
    </div>
    
    <div class="card-body">
    <form action="/tp_9/index.php?page=suku&action=update" method="POST" novalidate>
            <input type="hidden" name="id_suku" value="<?= $suku['id_suku'] ?>">
            
            <div class="mb-3">
                <label class="form-label">Ethnic Name</label>
                <input type="text" name="nama_suku" class="form-control"
                    value="<?= htmlspecialchars($suku['nama_suku']) ?>" required>
                <div class="invalid-feedback">Please enter ethnic name</div>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Origin Area</label>
                <input type="text" name="asal_daerah" class="form-control"
                    value="<?= htmlspecialchars($suku['asal_daerah']) ?>" required>
                <div class="invalid-feedback">Please enter origin area</div>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update Group
            </button>
        </form>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/tp_9/templates/footer.php'; ?>