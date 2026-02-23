/* GRAFIK IKM LAYANAN NIKAH (8 BATANG) */
new Chart(document.getElementById("ikmNikah"), {
  type: "bar",
  data: {
    labels: [
      "Prosedur",
      "Persyaratan",
      "Waktu",
      "Biaya",
      "Petugas",
      "Sarana",
      "Informasi",
      "Pengaduan",
    ],
    datasets: [
      {
        label: "Nilai IKM",
        data: [95, 98, 97, 100, 96, 94, 99, 98],
        backgroundColor: "#0d6efd",
        borderRadius: 8,
      },
    ],
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: false },
    },
    animation: {
      duration: 1200,
      easing: "easeOutQuart",
    },
    scales: {
      y: {
        beginAtZero: true,
        max: 100,
      },
    },
  },
});

/* GRAFIK IKM PPID (6 BATANG) */
new Chart(document.getElementById("ikmPPID"), {
  type: "bar",
  data: {
    labels: [
      "Pelayanan",
      "Kecepatan",
      "Akurasi",
      "Akses Informasi",
      "Sikap Petugas",
      "Transparansi",
    ],
    datasets: [
      {
        label: "Nilai IKM",
        data: [96, 95, 97, 98, 99, 97],
        backgroundColor: "#198754",
        borderRadius: 8,
      },
    ],
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: false },
    },
    animation: {
      duration: 1200,
      easing: "easeOutQuart",
    },
    scales: {
      y: {
        beginAtZero: true,
        max: 100,
      },
    },
  },
});
