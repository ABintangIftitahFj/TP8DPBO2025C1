<?php include $_SERVER['DOCUMENT_ROOT'] . '/tp_9/templates/header.php'; ?>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Student List</h3>
        <a href="/tp_9/index.php?page=student&action=create" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Student
        </a>
    </div>
    
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Enrollment Date</th>
                    <th>Ethnic Group</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $index => $student): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($student['nim']) ?></td>
                    <td><?= htmlspecialchars($student['nama']) ?></td>
                    <td><?= htmlspecialchars($student['no_telp']) ?></td>
                    <td><?= date('d M Y', strtotime($student['tanggal_masuk'])) ?></td>
                    <td>
                        <?= htmlspecialchars($student['nama_suku'] ?? 'N/A') ?>
                        <?php if (isset($student['asal_daerah'])): ?>
                            <br><small>(<?= htmlspecialchars($student['asal_daerah']) ?>)</small>
                        <?php endif; ?>
                    </td>
                    <td>
                    <a href="/tp_9/index.php?page=student&action=edit&id=<?= $student['id'] ?>" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="/tp_9/index.php?page=student&action=delete" method="POST" novalidate>
                            <input type="hidden" name="id" value="<?= $student['id'] ?>">
                            <button type="submit" class="btn btn-sm btn-danger" 
                                onclick="return confirm('Delete this student?')">
                                <i class="fas fa-trash"></i>
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