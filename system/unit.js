const unitData = [
  {
    img: "img/foto1.jpg",
    title: "Kepala Kantor Kemenag",
    desc: "Kantor Kementerian Agama merupakan instansi pemerintah yang bertugas menyelenggarakan urusan pemerintahan di bidang keagamaan, pendidikan keagamaan, serta pelayanan kehidupan beragama di tingkat daerah, guna mewujudkan masyarakat yang religius, moderat, dan berakhlak mulia.",
    link: "",
  },

  {
    img: "img/foto2.jpg",
    title: "SEKSI TATA USAHA",
    desc: "Seksi Tata Usaha bertanggung jawab dalam pengelolaan administrasi perkantoran, kepegawaian, keuangan, persuratan, arsip, serta dukungan teknis operasional guna menunjang kelancaran pelaksanaan tugas dan fungsi seluruh unit kerja.",
    link: "#",
  },

  {
    img: "img/foto3.jpg",
    title: "SEKSI PENGAWAS MADRASAH",
    desc: "Seksi Pengawas Madrasah memiliki tugas melakukan pembinaan, pengawasan, dan evaluasi terhadap penyelenggaraan pendidikan madrasah, guna meningkatkan mutu pembelajaran, profesionalisme pendidik, serta kualitas manajemen madrasah.",
    link: "#",
  },

  {
    img: "img/foto4.jpg",
    title: "SEKSI HAJI DAN UMRAH",
    desc: "Seksi Haji dan Umrah melaksanakan pelayanan, pembinaan, dan perlindungan kepada jamaah haji dan umrah, meliputi pendaftaran, bimbingan manasik, administrasi, serta koordinasi penyelenggaraan ibadah haji dan umrah.",
    link: "#",
  },

  {
    img: "img/foto5.jpg",
    title: "SEKSI KERUKUNAN BERAGAMA",
    desc: "Seksi Kerukunan Beragama bertugas memelihara dan meningkatkan kerukunan umat beragama melalui pembinaan, dialog, fasilitasi, serta penguatan nilai toleransi dan moderasi beragama dalam kehidupan bermasyarakat.",
    link: "#",
  },

  {
    img: "img/foto6.jpg",
    title: "SEKSI KANTOR URUSAN AGAMA",
    desc: "Seksi Kantor Urusan Agama membina dan mengoordinasikan pelaksanaan tugas KUA di tingkat kecamatan, khususnya dalam pelayanan pernikahan, rujuk, wakaf, kepenyuluhan agama, serta administrasi keagamaan.",
    link: "#",
  },

  {
    img: "img/foto7.jpg",
    title: "SEKSI PONPES",
    desc: "Seksi Pondok Pesantren bertanggung jawab dalam pembinaan, pengembangan, dan fasilitasi penyelenggaraan pendidikan pondok pesantren, madrasah diniyah, dan lembaga pendidikan keagamaan Islam lainnya.",
    link: "#",
  },

  {
    img: "img/foto8.jpg",
    title: "SEKSI PENDAMPING MADRASAH",
    desc: "Seksi Pendamping Madrasah melaksanakan pendampingan teknis dan akademik terhadap madrasah dalam rangka peningkatan mutu pendidikan, implementasi kebijakan, pemenuhan standar nasional pendidikan, serta penguatan tata kelola madrasah.",
    link: "#",
  },

  {
    img: "img/foto9.jpg",
    title: "SEKSI HUMAS",
    desc: "Seksi Humas berperan dalam pengelolaan informasi dan komunikasi publik, dokumentasi kegiatan, publikasi kebijakan dan program kerja, serta membangun citra positif institusi melalui media internal maupun eksternal.",
    link: "#",
  },
];

const icons = document.querySelectorAll(".unit-icon-card");

const image = document.getElementById("unitImage");
const title = document.getElementById("unitTitle");
const desc = document.getElementById("unitDesc");
const link = document.getElementById("unitLink");

let activeIndex = 0;

/* UPDATE CONTENT */
function updateUnit(index) {
  const elements = [image, title, desc, link];

  /* FADE OUT */
  elements.forEach((el) => {
    el.classList.remove("fade-in");
    el.classList.add("fade-out");
  });

  setTimeout(() => {
    /* UPDATE DATA */
    image.src = unitData[index].img;
    title.textContent = unitData[index].title;
    desc.textContent = unitData[index].desc;

    if (unitData[index].link === "") {
      link.style.display = "none";
    } else {
      link.style.display = "inline-flex";
    }

    /* FADE IN */
    elements.forEach((el) => {
      el.classList.remove("fade-out");
      el.classList.add("fade-in");
    });
  }, 350); // timing sinkron animasi

  /* Active Icon */
  icons.forEach((i) => i.classList.remove("active"));
  icons[index].classList.add("active");

  activeIndex = index;
}

/* CLICK ICON */

icons.forEach((icon) => {
  icon.addEventListener("click", () => {
    updateUnit(parseInt(icon.dataset.index));
  });
});

/* AUTO LOOP */

setInterval(() => {
  activeIndex++;

  if (activeIndex >= unitData.length) {
    activeIndex = 0;
  }

  updateUnit(activeIndex);
}, 4000);
