document.addEventListener("DOMContentLoaded", function () {
    // Pencarian pada tabel (dipakai di halaman kue, bahan baku, dan pegawai)
    function pasangPencarian(idInput, idTabel) {
        const searchInput = document.getElementById(idInput);
        const rows = document.querySelectorAll("#" + idTabel + " tr[data-nama]");

        if (searchInput) {
            searchInput.addEventListener("input", function () {
                const keyword = this.value.toLowerCase().trim();

                rows.forEach(function (row) {
                    const nama = row.dataset.nama.toLowerCase();

                    row.hidden = !nama.includes(keyword);
                });
            });
        }
    }

    pasangPencarian("searchKue", "daftarKue");
    pasangPencarian("searchBahan", "daftarBahan");
    pasangPencarian("searchPegawai", "daftarPegawai");
});
