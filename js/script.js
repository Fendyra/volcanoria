const apiUrl = "URL_API_GUNUNG_BERAPI"; // Ganti dengan URL API yang sesuai

// Inisialisasi peta
const map = L.map("map").setView([-5.0, 120.0], 5); // Koordinat tengah Indonesia

// Tambahkan layer peta dari OpenStreetMap
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
}).addTo(map);

// Ambil data gunung berapi dari API
fetch(apiUrl)
  .then((response) => response.json())
  .then((data) => {
    displayVolcanoes(data);
  })
  .catch((error) => console.error("Error fetching data:", error));

function displayVolcanoes(volcanoes) {
  volcanoes.forEach((volcano) => {
    // Asumsikan data gunung berapi memiliki properti 'latitude', 'longitude', dan 'name'
    const { latitude, longitude, name } = volcano;

    // Buat marker untuk gunung berapi
    const marker = L.marker([latitude, longitude]).addTo(map);
    marker.bindPopup(`<b>${name}</b>`); // Menampilkan nama gunung berapi saat marker diklik
  });
}

// JavaScript to loop through videos and content
const videoSlides = document.querySelectorAll(".video-slide");
const contentSlides = document.querySelectorAll(".content");
const navButtons = document.querySelectorAll(".nav-btn");
let currentSlide = 0;

function changeSlide() {
  videoSlides[currentSlide].classList.remove("active");
  contentSlides[currentSlide].classList.remove("active");
  navButtons[currentSlide].classList.remove("active");

  currentSlide = (currentSlide + 1) % videoSlides.length;

  videoSlides[currentSlide].classList.add("active");
  contentSlides[currentSlide].classList.add("active");
  navButtons[currentSlide].classList.add("active");
}

navButtons.forEach((button, index) => {
  button.addEventListener("click", () => {
    videoSlides[currentSlide].classList.remove("active");
    contentSlides[currentSlide].classList.remove("active");
    navButtons[currentSlide].classList.remove("active");

    currentSlide = index;

    videoSlides[currentSlide].classList.add("active");
    contentSlides[currentSlide].classList.add("active");
    navButtons[currentSlide].classList.add("active");
  });
});

setInterval(changeSlide, 5000); // Change slide every 5 seconds

