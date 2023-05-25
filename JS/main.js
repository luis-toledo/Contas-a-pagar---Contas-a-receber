document.addEventListener('DOMContentLoaded', function () {
    let deleteButtons = document.querySelectorAll('[data-acao="excluir"]');
    let popup = document.getElementById('popup');
    let confirmDeleteButton = document.getElementById('confirmar-exclusao');
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            let recordId = this.getAttribute('data-id');
            popup.style.display = 'flex';
            confirmDeleteButton.setAttribute('data-id', recordId);
            console.log(recordId);
        });
    });

    document.getElementById('fechar-popup').addEventListener('click', function(e) {
        e.preventDefault();
        popup.style.display = 'none';
    });

    confirmDeleteButton.addEventListener('click', function(e) {
        e.preventDefault();
        let recordId = this.getAttribute('data-id');
        fetch('apagarItem.php?id=' + recordId, { method: 'DELETE' })
        .then(response => response.json())
        .then(data => {
                if (data.success) {
                    popup.style.display = 'none';
                    alert(data.message);
                    window.location.reload();
                } else {
                    alert(data.message);
                }
            });
    });
});
