<?php include $_SERVER['DOCUMENT_ROOT'] . '/tp_9/templates/header.php'; ?>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Ethnic Groups</h3>
        <a href="/tp_9/index.php?page=suku&action=create" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Group
        </a>
    </div>
    
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ethnic Name</th>
                    <th>Origin Area</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($sukuList as $index => $suku): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($suku['nama_suku']) ?></td>
                    <td><?= htmlspecialchars($suku['asal_daerah']) ?></td>
                    <td>
                    <a href="index.php?page=suku&action=edit&id=<?= $suku['id_suku'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="index.php?page=suku&action=delete" method="POST" style="display:inline;">
                        <input type="hidden" name="id_suku" value="<?= $suku['id_suku'] ?>">
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this ethnic group?')">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/tp_9/templates/footer.php'; ?>