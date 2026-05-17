<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Project PHP - Kelas X RPL 2</title>
  <!-- Bootstrap 5 & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  
  <style>
    :root {
      --primary: #4361ee;
      --primary-dark: #3a0ca3;
      --accent: #4cc9f0;
      --light-bg: #f8f9fc;
      --card-shadow: 0 8px 25px rgba(0,0,0,0.08);
    }
    * { box-sizing: border-box; }
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #eef2f7 0%, #dfe6f1 100%);
      color: #333;
      line-height: 1.6;
      overflow-x: hidden;
    }
    .header-section {
      background: linear-gradient(120deg, var(--primary), var(--primary-dark));
      color: white;
      padding: 2.5rem 1rem 1.8rem;
      text-align: center;
      border-radius: 0 0 24px 24px;
      box-shadow: 0 10px 30px rgba(67, 97, 238, 0.3);
      margin-bottom: 1.5rem;
    }
    .header-section h1 { font-weight: 700; font-size: 1.8rem; letter-spacing: -0.5px; }
    .badge-kelas { background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 50px; font-size: 0.85rem; backdrop-filter: blur(5px); display: inline-block; margin-top: 8px; }
    
    .rules-card {
      background: white;
      border: none;
      border-radius: 14px;
      box-shadow: var(--card-shadow);
      border-left: 5px solid var(--accent);
      padding: 1.2rem;
    }
    .rules-card ul { padding-left: 0; margin: 0; }
    .rules-card li { margin-bottom: 6px; font-size: 0.95rem; }
    
    .nav-tabs-custom {
      border: none;
      flex-wrap: nowrap;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none;
      padding-bottom: 8px;
    }
    .nav-tabs-custom::-webkit-scrollbar { display: none; }
    .nav-tabs-custom .nav-link {
      background: transparent;
      border: 2px solid transparent;
      color: #555;
      font-weight: 600;
      border-radius: 10px;
      margin: 0 3px;
      padding: 8px 14px;
      font-size: 0.9rem;
      white-space: nowrap;
      transition: all 0.2s;
      min-height: 44px; /* Touch friendly */
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .nav-tabs-custom .nav-link:hover { background: rgba(67, 97, 238, 0.1); color: var(--primary); }
    .nav-tabs-custom .nav-link.active {
      background: var(--primary);
      color: white;
      box-shadow: 0 4px 10px rgba(67, 97, 238, 0.4);
      border-color: var(--primary);
    }
    
    .group-card {
      background: white;
      border-radius: 16px;
      box-shadow: var(--card-shadow);
      overflow: hidden;
      animation: fadeIn 0.4s ease-out;
      margin-bottom: 1rem;
    }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
    
    .group-header {
      background: linear-gradient(90deg, var(--primary), var(--accent));
      color: white;
      padding: 1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 8px;
    }
    .group-header h3 { margin: 0; font-size: 1.1rem; font-weight: 700; }
    .group-header .badge { font-size: 0.8rem; }
    
    .section-title { font-weight: 700; color: var(--primary-dark); margin: 1rem 0 0.5rem; border-bottom: 2px dashed #e2e8f0; padding-bottom: 4px; display: inline-block; font-size: 0.95rem; }
    
    .member-list { list-style: none; padding: 0; margin: 0; }
    .member-list li { padding: 6px 0; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 8px; font-size: 0.9rem; }
    .member-list li:last-child { border: none; }
    .member-list li::before { content: "\f007"; font-family: "Font Awesome 6 Free"; font-weight: 900; color: var(--primary); font-size: 0.85em; }
    
    .badge-pill { background: #e0e7ff; color: #3730a3; padding: 4px 10px; border-radius: 16px; font-size: 0.8rem; margin: 3px; display: inline-block; font-weight: 500; }
    .code-tag { background: #f1f5f9; color: #0f172a; padding: 4px 6px; border-radius: 6px; font-family: 'Courier New', monospace; font-size: 0.8em; word-break: break-all; display: inline-block; margin: 2px; }
    
    .feature-list, .var-list, .func-list { list-style: none; padding: 0; margin: 0; }
    .feature-list li, .var-list li, .func-list li { padding: 5px 0; font-size: 0.9rem; }
    
    .footer { margin-top: 2.5rem; padding: 1.5rem 1rem; text-align: center; color: #6c757d; font-size: 0.85rem; background: white; border-top: 1px solid #eee; }
    
    /* Mobile Optimizations */
    @media (max-width: 768px) {
      .header-section { padding: 2rem 0.8rem 1.5rem; }
      .header-section h1 { font-size: 1.4rem; }
      .header-section .lead { font-size: 0.9rem; }
      .rules-card { padding: 1rem; }
      .group-card .card-body { padding: 0.8rem; }
      .section-title { font-size: 0.9rem; }
      .col-md-4, .col-md-8 { margin-bottom: 0.5rem; }
    }
    @media (max-width: 480px) {
      .group-header { flex-direction: column; align-items: flex-start; }
      .badge-pill { font-size: 0.75rem; padding: 3px 8px; }
      .code-tag { font-size: 0.75rem; }
    }
  </style>
</head>
<body>

  <div class="header-section">
    <div class="container">
      <h1><i class="fas fa-laptop-code me-2"></i> Project Kelompok PHP</h1>
      <p class="lead mb-2">Dasar-Dasar Pemrograman & Perangkat Keras</p>
      <span class="badge-kelas">Kelas X RPL 2 | Semester 2 | TP 2025/2026</span>
    </div>
  </div>

  <div class="container mb-4">
    <!-- Ketentuan Umum -->
    <div class="row mb-3 justify-content-center">
      <div class="col-12 col-md-10">
        <div class="card rules-card">
          <h3 class="mb-2 fs-5"><i class="fas fa-clipboard-check text-primary"></i> Ketentuan Umum</h3>
          <div class="row g-2">
            <div class="col-12 col-sm-6">
              <ul class="list-unstyled mb-0 text-muted">
                <li><i class="fas fa-check-circle text-success me-2"></i> Minimal <strong>3 halaman</strong></li>
                <li><i class="fas fa-check-circle text-success me-2"></i> Stack: <strong>HTML5, CSS, Bootstrap, PHP</strong></li>
                <li><i class="fas fa-check-circle text-success me-2"></i> Minimal <strong>3 function PHP custom</strong></li>
                <li><i class="fas fa-check-circle text-success me-2"></i> Wajib pakai <strong>if-else</strong></li>
              </ul>
            </div>
            <div class="col-12 col-sm-6">
              <ul class="list-unstyled mb-0 text-muted">
                <li><i class="fas fa-check-circle text-success me-2"></i> Data pakai <strong>Array PHP</strong></li>
                <li><i class="fas fa-check-circle text-success me-2"></i> Wajib ada <strong>form input</strong></li>
                <li><i class="fas fa-check-circle text-success me-2"></i> Desain <strong>responsif</strong></li>
                <li><i class="fas fa-star text-warning me-2"></i> Fitur/logika tambahan = <strong>Nilai Bonus</strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h2 class="text-center mb-3 fw-bold fs-4">Pilih Kelompok Anda</h2>
    <ul class="nav nav-tabs-custom justify-content-start mb-3" id="groupTabs" role="tablist">
      <!-- Diisi oleh JS -->
    </ul>

    <div class="tab-content" id="groupTabContent">
      <!-- Diisi oleh JS -->
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <p class="mb-1">&copy; 2026<a href="https://instagram.com/damar.rmdni" target="_blank"> Damar Tri Rahmadhani </a>| X RPL 2 Project PHP | Monitoring Tugas Kelompok</p>
      <!-- <small class="text-muted d-block">Disimpan sebagai <code>tugas_php_xrpl2.html</code> & buka di browser HP/PC.</small> -->
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const groups = [
      { id: 1, title: "Sistem Informasi Jadwal Pelajaran", members: ["SULASTRI", "ALIF MOCHAMAD RIDWAN", "SYAFANA FABRIANA", "TANIA PUTRI", "NAURA SHAKIRA FITRIA"], pages: ["Dashboard Jadwal Mingguan", "Form Input Jadwal Baru", "Pencarian & Filter Jadwal"], features: ["Input jadwal", "Tampilan jadwal", "Filter", "Validasi bentrok jadwal"], vars: ["$hari", "$kelas", "$mapel", "$guru", "$jam_mulai", "$jam_selesai", "$ruangan", "$data_jadwal"], funcs: ["tambahJadwal()", "tampilkanJadwalHari()", "cekBentrokJadwal()"] },
      { id: 2, title: "Aplikasi Absensi Siswa Harian", members: ["FIRMAN TRIANSYAH", "DIVA AMELIA", "NANANG SUDRAJAT", "ZALFA NIDA SALMA", "RISKA ARIANTI"], pages: ["Dashboard Kelas", "Form Input Absensi", "Laporan Absensi"], features: ["Input absensi", "Rekap persentase kehadiran", "Pencarian status siswa"], vars: ["$nis", "$nama", "$tanggal", "$status", "$catatan", "$daftar_absensi"], funcs: ["hitungPersentaseKehadiran()", "simpanAbsensi()", "cariStatusSiswa()"] },
      { id: 3, title: "Sistem Reservasi Ruang Kelas/Lab", members: ["INDAN RAMDANI", "AHMAD ARIP NUR APILAH", "FATHAN SALMAN", "RIDHO ROBIANA"], pages: ["Daftar Ruangan & Jadwal Hari Ini", "Form Booking Ruangan", "Riwayat Booking"], features: ["Cek ketersediaan ruangan", "Validasi bentrok jadwal", "Riwayat booking"], vars: ["$ruangan", "$tanggal", "$jam_mulai", "$jam_selesai", "$pemesan", "$data_booking"], funcs: ["cekKetersediaanRuang()", "buatBooking()", "tampilkanJadwalRuang()"] },
      { id: 4, title: "Manajemen Pengajuan Surat", members: ["NANDA ARIANTO", "NELISTRI NURAINI", "NURIL FATHAN SYA'BAN", "RIVAL MUHAMAD FADILAH"], pages: ["Jenis Surat yang Tersedia", "Form Pengajuan Surat", "Daftar Pengajuan & Status"], features: ["Pengajuan surat", "Update status", "Riwayat pengajuan"], vars: ["$nis", "$jenis_surat", "$alasan", "$tanggal", "$status", "$data_pengajuan"], funcs: ["buatPengajuan()", "updateStatusPengajuan()", "tampilkanPengajuanSiswa()"] },
      { id: 5, title: "Sistem Perpustakaan Sekolah", members: ["FARDHAN ARDIANSYAH", "SYAILA HERDIANA PUTRI", "MAIDA WAROKA", "MUHAMMAD FAJAR MAULANA"], pages: ["Daftar Buku Tersedia", "Form Peminjaman Buku", "Buku yang Sedang Dipinjam"], features: ["Cek stok buku", "Proses peminjaman", "Riwayat peminjaman"], vars: ["$isbn", "$judul_buku", "$nis", "$nama", "$tanggal_pinjam", "$data_buku"], funcs: ["pinjamBuku()", "cekStokBuku()", "tampilkanBukuDipinjam()"] },
      { id: 6, title: "Sistem Manajemen UKS", members: ["NAZWA ZAZQIAH", "RAKA FAIRUZ FERDIANSYAH", "AKBAR MAULANA", "KHARISA AMELIA PUTRI SUDIANA"], pages: ["Dashboard UKS", "Form Pencatatan Kunjungan Siswa", "Riwayat Kunjungan Siswa"], features: ["Pencatatan kunjungan", "Status penanganan", "Rekap harian"], vars: ["$nis", "$nama", "$keluhan", "$tanggal", "$status", "$data_uks"], funcs: ["catatKunjunganUKS()", "cekStatusSiswaUKS()", "tampilkanRekapHarian()"] },
      { id: 7, title: "Sistem Pemesanan Makanan Kantin", members: ["MAHARDIKA RAHMAT", "INA SITI AROFAH", "LINDA RAHMAWATI", "DIAN ANDRIANA"], pages: ["Menu Kantin", "Form Pemesanan", "Daftar Pesanan & Status"], features: ["Pemesanan makanan", "Hitung total", "Update status pesanan"], vars: ["$items", "$nama_menu", "$harga", "$jumlah", "$total", "$data_pesanan"], funcs: ["hitungTotalPesanan()", "buatPesanan()", "updateStatusPesanan()"] },
      { id: 8, title: "Manajemen Tugas & Pengumpulan PR", members: ["IRNA", "MOMON ABDURAHMAN", "YANWAR NUGI NUGRAHA", "MUHAMAD SOFHA RAMDHANI"], pages: ["Dashboard Tugas", "Form Input Tugas Baru", "Form Pengumpulan Tugas & Riwayat"], features: ["Input tugas", "Pengumpulan tugas siswa", "Validasi tenggat waktu"], vars: ["$id_tugas", "$judul", "$deskripsi", "$tenggat_waktu", "$nis", "$file"], funcs: ["tambahTugas()", "kumpulkanTugas()", "cekStatusTenggat()"] }
    ];

    function renderGroups() {
      const tabList = document.getElementById('groupTabs');
      const tabContent = document.getElementById('groupTabContent');

      groups.forEach((g, index) => {
        const isActive = index === 0;
        tabList.innerHTML += `
          <li class="nav-item" role="presentation">
            <button class="nav-link ${isActive ? 'active' : ''}" id="group-${g.id}-tab" data-bs-toggle="pill" data-bs-target="#group-${g.id}" type="button" role="tab" aria-controls="group-${g.id}" aria-selected="${isActive}">
              Kel ${g.id}
            </button>
          </li>`;

        tabContent.innerHTML += `
          <div class="tab-pane fade ${isActive ? 'show active' : ''}" id="group-${g.id}" role="tabpanel" aria-labelledby="group-${g.id}-tab">
            <div class="card group-card">
              <div class="group-header">
                <h3><i class="fas fa-layer-group me-2"></i> ${g.title}</h3>
                <span class="badge bg-white text-primary rounded-pill px-2 py-1">Kelompok ${g.id}</span>
              </div>
              <div class="card-body p-3">
                <div class="row g-3">
                  <div class="col-12 col-md-4">
                    <h5 class="section-title"><i class="fas fa-users me-2"></i> Anggota Tim</h5>
                    <ul class="member-list">
                      ${g.members.map(m => `<li>${m}</li>`).join('')}
                    </ul>
                  </div>
                  <div class="col-12 col-md-8">
                    <h5 class="section-title"><i class="fas fa-file-code me-2"></i> Halaman Wajib</h5>
                    <div class="mb-2 text-break">
                      ${g.pages.map(p => `<span class="badge-pill">${p}</span>`).join('')}
                    </div>
                    
                    <h5 class="section-title"><i class="fas fa-cogs me-2"></i> Fitur Utama</h5>
                    <ul class="feature-list text-muted">
                      ${g.features.map(f => `<li><i class="fas fa-chevron-right text-primary me-2" style="font-size:0.65em"></i> ${f}</li>`).join('')}
                    </ul>

                    <div class="row mt-2">
                      <div class="col-12 col-lg-6">
                        <h5 class="section-title"><i class="fas fa-database me-2"></i> Variabel Wajib</h5>
                        <div>
                          ${g.vars.map(v => `<code class="code-tag">${v}</code>`).join('')}
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <h5 class="section-title"><i class="fas fa-code me-2"></i> Function Wajib</h5>
                        <div>
                          ${g.funcs.map(f => `<code class="code-tag">${f}</code>`).join('')}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>`;
      });
    }

    document.addEventListener('DOMContentLoaded', () => {
      renderGroups();
      // Smooth scroll to active tab on mobile
      const activeTab = document.querySelector('.nav-link.active');
      if(activeTab && window.innerWidth < 768) {
        setTimeout(() => activeTab.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' }), 100);
      }
    });
  </script>
</body>
</html>