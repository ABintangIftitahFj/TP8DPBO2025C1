// Form Validation Enhancement
document.addEventListener('DOMContentLoaded', function() {
    // Bootstrap Form Validation
    const forms = document.querySelectorAll('.needs-validation');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            if(!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    // Delete Confirmation
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function(e) {
            if(!confirm('Are you sure you want to delete this item?')) {
                e.preventDefault();
            }
        });
    });

    // Date Input Formatting
    const dateInputs = document.querySelectorAll('input[type="date"]');
    dateInputs.forEach(input => {
        if(!input.value) {
            input.value = new Date().toISOString().split('T')[0];
        }
    });

    // Tooltip Initialization
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});