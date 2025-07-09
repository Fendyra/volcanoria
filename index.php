<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width"/>
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/leaflet.css" />
    <link rel="stylesheet" href="css/qgis2web.css" />
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css" />
    <link rel="stylesheet" href="css/leaflet.css" />
    <link rel="stylesheet" href="css/qgis2web.css" />
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Libre+Barcode+128+Text&display=swap");
    </style>
    <link rel="stylesheet" href="./main.css" />
    <title></title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
       <a class="navbar-brand" href="#index.php">
          <img src="assets\footage\volcanoria.png" alt="logo" width="70" height="70" />
          Volcanoria
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" style="color: #ff8c32" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="informasi.php">Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="berita.php">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data-korban.php">Pencarian Orang</a>
            </li>
          </ul>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <main>
        <section class="home">
          <video
            src="assets/footage/vid-carousel1.mp4"
            class="video-slide active"
            autoplay
            muted
            loop></video>
  
          <video
            src="assets/footage/vid-carousel2.mp4"
            class="video-slide"
            autoplay
            muted
            loop></video>
  
          <video
            src="assets/footage/vid-carousel3.mp4"
            class="video-slide"
            autoplay
            muted
            loop></video>
  
          <div class="content">
            <h1>Menjelajahi Fenomena<br /><span>Vulkanik</span></h1>Pelajari lebih dalam tentang penyebab, jenis letusan, dampak, dan panduan penanggulangan gunung berapi. Temukan semua informasi penting yang Anda butuhkan di sini.</p>
            <a href="index.html">read more</a>
          </div>
          <div class="content">
            <h1>Berita Vulkanik <br /><span>Terkini</span></h1>
            <p>Tetap terinformasi dengan berita terbaru tentang aktivitas gunung berapi di seluruh dunia. Dari laporan letusan terbaru hingga peringatan penting bagi wilayah rawan.</p>
            <a href="berita.html">read more</a>
          </div>
          <div class="content">
            <h1>Letusan Vulkanik <br /><span>yang Mengubah Dunia</span></h1>
            <p>Menelusuri jejak letusan-letusan bersejarah yang paling dahsyat, dari Tambora hingga Krakatau. Ketahui bagaimana letusan besar ini berdampak pada kehidupan dan iklim bumi.</p>
            <a href="informasi.html">read more</a>
          </div>
  
          <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
          </div>
        </section>
        </main>
      <!-- END OF CAROUSEL -->
       
   <!-- ABOUT -->
   <section id="about" class="section-padding">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Ketahui Lebih Lanjut Mengenai Pesebaran Gunung Berapi di Indonesia</h1>
                    <div class="line"></div>
                    <p> Jelajahi peta interaktif gunung berapi di Indonesia dan temukan informasi lengkap tentang lokasi, status aktivitas, serta sejarah letusannya. Indonesia, dengan ratusan gunung berapi aktif, menyimpan kekayaan geologi yang menakjubkan sekaligus tantangan alam yang perlu kita pahami bersama.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4 me-5">
              <div id="map">
              </div>
              <footer>
                <p>&copy; 2024 Vulcanic Eruption Project</p>
              </footer>
            </div>
            <div class="col-lg-5">
                <h1 class="display-4 fw-semibold"> Sebaran Gunung Api di Indonesia</h1>
                <p>Gunung api di Indonesia adalah yang terbanyak bahkan menduduki peringkat pertama dengan jumlah korban jiwa akibat bencana letusan terbanyak. Saat ini, gunung api aktif di Indonesia berjumlah 127 gunung.</p>
                </div>
          </div>
        </div>
   

    <div id="map"></div>
    <script src="js/qgis2web_expressions.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/leaflet-svg-shape-markers.min.js"></script>
    <script src="js/leaflet.rotatedMarker.js"></script>
    <script src="js/leaflet.pattern.js"></script>
    <script src="js/leaflet-hash.js"></script>
    <script src="js/Autolinker.min.js"></script>
    <script src="js/rbush.min.js"></script>
    <script src="js/labelgun.min.js"></script>
    <script src="js/labels.js"></script>
    <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
    <script src="data/gunungapi_indonesia2_1.js"></script>
    <script>
      var highlightLayer;
      function highlightFeature(e) {
        highlightLayer = e.target;
        highlightLayer.openPopup();
      }
      var map = L.map("map", {
        zoomControl: true,
        maxZoom: 28,
        minZoom: 1,
      });
      var hash = new L.Hash(map);
      map.attributionControl.setPrefix(
        '<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>'
      );
      var autolinker = new Autolinker({
        truncate: { length: 30, location: "smart" },
      });
      var bounds_group = new L.featureGroup([]);
      function setBounds() {
        if (bounds_group.getLayers().length) {
          map.fitBounds(bounds_group.getBounds());
        }
      }
      map.createPane("pane_OSMStandard_0");
      map.getPane("pane_OSMStandard_0").style.zIndex = 400;
      var layer_OSMStandard_0 = L.tileLayer(
        "http://tile.openstreetmap.org/{z}/{x}/{y}.png",
        {
          pane: "pane_OSMStandard_0",
          opacity: 1.0,
          attribution:
            '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors, CC-BY-SA</a>',
          minZoom: 1,
          maxZoom: 28,
          minNativeZoom: 0,
          maxNativeZoom: 19,
        }
      );
      layer_OSMStandard_0;
      map.addLayer(layer_OSMStandard_0);
      function pop_gunungapi_indonesia2_1(feature, layer) {
        layer.on({
          mouseout: function (e) {
            if (typeof layer.closePopup == "function") {
              layer.closePopup();
            } else {
              layer.eachLayer(function (feature) {
                feature.closePopup();
              });
            }
          },
          mouseover: highlightFeature,
        });
        var popupContent =
          '<table>\
                    <tr>\
                        <th scope="row">ID</th>\
                        <td>' +
          (feature.properties["ID"] !== null
            ? autolinker.link(feature.properties["ID"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">GUNUNGAPI</th>\
                        <td>' +
          (feature.properties["GUNUNGAPI"] !== null
            ? autolinker.link(feature.properties["GUNUNGAPI"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">CATATAN</th>\
                        <td>' +
          (feature.properties["CATATAN"] !== null
            ? autolinker.link(feature.properties["CATATAN"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["letusan gunung api_ID"] !== null
            ? autolinker.link(
                feature.properties["letusan gunung api_ID"].toLocaleString()
              )
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">letusan gunung api_Lokasi adm</th>\
                        <td>' +
          (feature.properties["letusan gunung api_Lokasi adm"] !== null
            ? autolinker.link(
                feature.properties[
                  "letusan gunung api_Lokasi adm"
                ].toLocaleString()
              )
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">letusan gunung api_tipe gunung</th>\
                        <td>' +
          (feature.properties["letusan gunung api_tipe gunung"] !== null
            ? autolinker.link(
                feature.properties[
                  "letusan gunung api_tipe gunung"
                ].toLocaleString()
              )
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["letusan gunung api_Ketinggian"] !== null
            ? autolinker.link(
                feature.properties[
                  "letusan gunung api_Ketinggian"
                ].toLocaleString()
              )
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>letusan gunung api_Tingkat Aktivitas</strong><br />' +
          (feature.properties["letusan gunung api_Tingkat Aktivitas"] !== null
            ? autolinker.link(
                feature.properties[
                  "letusan gunung api_Tingkat Aktivitas"
                ].toLocaleString()
              )
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">letusan gunung api_Tektonik setting</th>\
                        <td>' +
          (feature.properties["letusan gunung api_Tektonik setting"] !== null
            ? autolinker.link(
                feature.properties[
                  "letusan gunung api_Tektonik setting"
                ].toLocaleString()
              )
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">letusan gunung api_Rekomendasi</th>\
                        <td>' +
          (feature.properties["letusan gunung api_Rekomendasi"] !== null
            ? autolinker.link(
                feature.properties[
                  "letusan gunung api_Rekomendasi"
                ].toLocaleString()
              )
            : "") +
          "</td>\
                    </tr>\
                </table>";
        layer.bindPopup(popupContent, { maxHeight: 400 });
      }

      function style_gunungapi_indonesia2_1_0() {
        return {
          pane: "pane_gunungapi_indonesia2_1",
          shape: "triangle",
          radius: 8.0,
          opacity: 1,
          color: "rgba(128,17,25,1.0)",
          dashArray: "",
          lineCap: "butt",
          lineJoin: "miter",
          weight: 2.0,
          fill: true,
          fillOpacity: 1,
          fillColor: "rgba(219,30,42,1.0)",
          interactive: true,
        };
      }
      map.createPane("pane_gunungapi_indonesia2_1");
      map.getPane("pane_gunungapi_indonesia2_1").style.zIndex = 401;
      map.getPane("pane_gunungapi_indonesia2_1").style["mix-blend-mode"] =
        "normal";
      var layer_gunungapi_indonesia2_1 = new L.geoJson(
        json_gunungapi_indonesia2_1,
        {
          attribution: "",
          interactive: true,
          dataVar: "json_gunungapi_indonesia2_1",
          layerName: "layer_gunungapi_indonesia2_1",
          pane: "pane_gunungapi_indonesia2_1",
          onEachFeature: pop_gunungapi_indonesia2_1,
          pointToLayer: function (feature, latlng) {
            var context = {
              feature: feature,
              variables: {},
            };
            return L.shapeMarker(
              latlng,
              style_gunungapi_indonesia2_1_0(feature)
            );
          },
        }
      );
      bounds_group.addLayer(layer_gunungapi_indonesia2_1);
      map.addLayer(layer_gunungapi_indonesia2_1);
      var osmGeocoder = new L.Control.Geocoder({
        collapsed: true,
        position: "topleft",
        text: "Search",
        title: "Testing",
      }).addTo(map);
      document.getElementsByClassName(
        "leaflet-control-geocoder-icon"
      )[0].className += " fa fa-search";
      document.getElementsByClassName(
        "leaflet-control-geocoder-icon"
      )[0].title += "Search for a place";
      setBounds();
      resetLabels([layer_gunungapi_indonesia2_1]);
      map.on("zoomend", function () {
        resetLabels([layer_gunungapi_indonesia2_1]);
      });
      map.on("layeradd", function () {
        resetLabels([layer_gunungapi_indonesia2_1]);
      });
      map.on("layerremove", function () {
        resetLabels([layer_gunungapi_indonesia2_1]);
      });
    </script>
</section>

    <div class="card-container">
        <div class="card">
        <h3 style="margin-top: 75px;">Jumlah Gunung Api di Indonesia</h3>
        <h1>127</h1>
        </div>
        <div class="card">
        <h3>Presentase Gunung Api di Indonesia</h3>
        <canvas id="pieChart" width="200" height="200"></canvas>
        </div>
    </div>
        <canvas id="barChart" width="700" height="400"></canvas>
        <script src="js/diagram.js"></script>

    <!-- COUNTER -->
    <section id="counter" class="section-padding pt-5">
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <h1 class="text-white display-4">A</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Gunung api yang mempunyai catatan sejarah letusan sejak tahun 1600</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <h1 class="text-white display-4">B</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Gunung api yang mempunyai catatan sejarah letusan sebelum tahun 1600</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <h1 class="text-white display-4">C</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Gunung api yang tidak mempunyai catatan sejarah letusan, tapi masih menunjukkan jejak aktivitas vulkanik</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Jenis Gunung Berapi -->
    <section id="gunung" class="section-padding">
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-12 text-center">
                  <div class="section-title">
                      <h1 class="display-4 fw-semibold">Mengenal Keindahan dan Keunikan Gunung Berapi di Indonesia</h1>
                      <div class="line"></div>
                      <p> Indonesia, negeri dengan sejuta pesona alam, memiliki beragam jenis gunung berapi. Mulai dari gunung aktif yang penuh tantangan hingga gunung tidur yang menyimpan misteri, semuanya menyuguhkan keindahan yang memukau. Temukan fakta menarik tentang gunung berapi di sini!</p>
                  </div>
              </div>
          </div>
    <div class="slide-container swiper">
      <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                         <img src="assets/footage/merapi.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                    <h2 class="name">
                      <marquee behavior="scroll" direction="left">Gunung Merapi</marquee>
                    </h2>
                      <p class="description">Salah satu gunung berapi paling aktif di dunia. Merapi dikenal dengan letusannya yang eksplosif dan aliran awan panasnya. Gunung Merapi terletak di Yogyakarta dengan ketinggian 2.930 mdpl</p>
                      <div class="btn-container">
                      <a href="https://id.wikipedia.org/wiki/Gunung_Merapi"
                                target="_blank" class="btn btn-primary">View More</a>
                      </div>
                  </div>
              </div>
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                             <img src="assets/footage/semeru.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">
                        <marquee behavior="scroll" direction="left">Gunung Semeru</marquee>
                      </h2>
                      <p class="description">Gunung tertinggi di Pulau Jawa yang sering mengalami erupsi kecil setiap tahun, dikenal dengan pemandangan spektakuler puncaknya. Gunung Semeru berlokasi di Lumajang, Jawa Timur dan memiliki ketinggian 3.676 mdpl</p>
                      <a href="https://id.wikipedia.org/wiki/Gunung_Semeru"
                                target="_blank" class="btn btn-primary">View More</a>
                  </div>
              </div>
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>
                      <div class="card-image">
                           <img src="assets/footage/krakatau.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">
                        <marquee behavior="scroll" direction="left">Gunung Krakatau</marquee>
                      </h2>
                      <p class="description"> Krakatau terkenal karena letusan besar tahun 1883. Kini, Anak Krakatau muncul dan terus tumbuh sebagai gunung baru. Gunung Krakatau terletak di Selat Sunda dan memiliki ketinggian 813 mdpl (Anak Krakatau)</p>
                      <a href="https://id.wikipedia.org/wiki/Krakatau"
                                target="_blank" class="btn btn-primary">View More</a>                  
                  </div>
              </div>
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>
                      <div class="card-image">
                              <img src="assets/footage/sinabung.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">
                        <marquee behavior="scroll" direction="left">Gunung Sinabung</marquee>
                      </h2>
                      <p class="description">Setelah tidur selama ratusan tahun, Sinabung kembali aktif sejak 2010 dan sering mengalami letusan besar. Gunung Sinabung berlokasi di Karo, Sumatera Utara dengan ketinggian 2.460 mdpl</p>
                      <a href="https://id.wikipedia.org/wiki/Gunung_Sinabung"
                                target="_blank" class="btn btn-primary">View More</a>                  
                  </div>
              </div>
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                              <img src="assets/footage/rinjani.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">
                        <marquee behavior="scroll" direction="left">Gunung Rinjani</marquee>
                      </h2>
                      <p class="description">Gunung ini menawarkan keindahan alam dengan kawah Segara Anak, namun juga memiliki aktivitas vulkanik yang signifikan. Gunung Rinjani terletak di Lombok, NTB dengan ketinggian 3.726 mdpl</p>
                      <a href="https://id.wikipedia.org/wiki/Gunung_Rinjani"
                                target="_blank" class="btn btn-primary">View More</a>                  
                  </div>
              </div>
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                              <img src="assets/footage/soputan.webp" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">
                        <marquee behavior="scroll" direction="left">Gunung Soputan</marquee>
                      </h2>
                      <p class="description">Gunung ini dikenal dengan aktivitas vulkaniknya yang sering terjadi, terutama letusan eksplosif yang menghasilkan abu tinggi. Gunung Soputan berlokasi di Minahasa, Sulawesi Utara dengan memiliki ketinggian 1.784 mdpl.</p>
                      <a href="https://id.wikipedia.org/wiki/Gunung_Soputan"
                                target="_blank" class="btn btn-primary">View More</a>                  
                  </div>
                </div>
              </div>
          </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div> 
  </section>

      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      <script src="js/swiper-config.js"></script>

            <!--Footer -->
            <footer class="site-footer">
              <div class="row">
                  <div class="col-sm-12 col-md-6">
                      <h6>About</h6>
                      <p class="text-justify">Volcanoria<i> Tentang Kami </i> Volcanoria adalah platform informasi yang didedikasikan untuk meningkatkan kesadaran dan pemahaman tentang bencana alam, khususnya letusan gunung berapi. Kami menyediakan data terkini, edukasi, dan panduan mitigasi guna membantu masyarakat menghadapi potensi risiko dengan lebih baik.</p>
                  </div>
  
                  <div class="col-xs-6 col-md-3">
                      <h6>Contact</h6>
                      <ul class="footer-links">
                          <li>Email: info@volcanoria.com</li>
                          <li>Phone: 123-456-7890</li>
                          <li>Address: Jl. Babarsari No. 10, Yogyakarta</li>
                      </ul>
                  </div>
  
                  <div class="col-xs-6 col-md-3">
                      <h6>Quick Links</h6>
                      <ul class="footer-links">
                          <li><a href="informasi.html">Informasi</a></li>
                          <li><a href="berita.html">Berita</a></li>
                          <li><a href="#">About</a></li>
                          <li><a href="data-korban.html">Pencarian Orang</a></li>
                      </ul>
                  </div>
              </div>
  
              <div class="row">
                  <div class="col-md-8 col-sm-6 col-xs-12">
                      <p class="copyright-text">Copyright © 2024 All Rights Reserved by
                          <a href="#">Volcanoria</a>.
                      </p>
                  </div>
              </div>
          </footer>  

        <!-- Bootstrap JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
        <script>
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
        </script>
  </body>
</html>
