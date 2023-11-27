// custom.js
function handleOverStay(idPendaki) {
    // Lakukan AJAX untuk memanggil method handleOverlay di controller
    $.ajax({
        type: "POST",
        url: "<?= base_url('dashboard/handleOverlay') ?>",
        data: { idPendaki: idPendaki },
        dataType: "json",
        success: function(response) {
            if (response.status === 'success') {
                // Refresh halaman setelah berhasil
                location.reload();
            } else {
                // Handle kesalahan jika diperlukan
                console.error('Error handling overstay.');
            }
        },
        error: function(xhr, status, error) {
            // Handle kesalahan AJAX jika diperlukan
            console.error('AJAX Error:', status, error);
        }
    });
}
