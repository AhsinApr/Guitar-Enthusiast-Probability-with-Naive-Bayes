const hasilGitar = [
  {
    jenis: "Akustik Elektrik",
    ukuran: "Normal",
    warna: "Natural",
    harga: "Terjangkau",
    nama: "Gitar A",
  },
  {
    jenis: "Akustik",
    ukuran: "Sedang",
    warna: "Hitam",
    harga: "Murah",
    nama: "Gitar B",
  },
  {
    jenis: "Lele",
    ukuran: "Kecil",
    warna: "Merah Tua",
    harga: "Super",
    nama: "Gitar C",
  },
  {
    jenis: "Ukulele",
    ukuran: "Normal",
    warna: "Natural Doff",
    harga: "Murah",
    nama: "Gitar D",
  },
];

const form = document.querySelector("form");
const hasilDiv = document.getElementById("hasil-gitar");
const btnCari = document.getElementById("btn-cari");

function cariGitar(e) {
  e.preventDefault();
  const jenis = document.getElementById("Jenis Gitar").value;
  const ukuran = document.getElementById("Ukuran Gitar").value;
  const warna = document.getElementById("Warna Gitar").value;
  const harga = document.getElementById("Harga Gitar").value;

  const hasilPencarian = hasilGitar.filter(function (gitar) {
    return (
      gitar.jenis === jenis &&
      gitar.ukuran === ukuran &&
      gitar.warna === warna &&
      gitar.harga === harga
    );
  });

  if (hasilPencarian.length > 0) {
    hasilDiv.innerHTML = "";
    hasilPencarian.forEach(function (gitar) {
      const gitarDiv = document.createElement("div");
      gitarDiv.classList.add("gitar");
      gitarDiv.innerHTML = `
            <h3>${gitar.nama}</h3>
            <p>Jenis Gitar: ${gitar.jenis}</p>
            <p>Ukuran Gitar: ${gitar.ukuran}</p>
            <p>Warna Gitar: ${gitar.warna}</p>
            <p>Harga Gitar: ${gitar.harga}</p>
          `;
      hasilDiv.appendChild(gitarDiv);
    });
  } else {
    hasilDiv.innerHTML = "<p>Tidak ada hasil yang ditemukan.</p>";
  }
}

form.addEventListener("submit", cariGitar);
btnCari.addEventListener("click", cariGitar);
