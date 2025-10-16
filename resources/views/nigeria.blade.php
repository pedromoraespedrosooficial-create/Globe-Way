<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nigeria — GlobeWay</title>
  <meta name="description" content="Explore Nigeria with GlobeWay. Discover Lagos, Abuja, Tarkwa Bay, Lekki Conservation Centre and more. Culture, cuisine, hotels and reviews." />
  <style>
    body{font-family:Arial, sans-serif;margin:0;background:#f6f9fc;color:#0f1724;line-height:1.6}
    header,footer{background:#fff;box-shadow:0 4px 8px rgba(0,0,0,0.06);position:sticky;top:0;z-index:100}
    header nav{display:flex;align-items:center;justify-content:space-between;padding:12px 24px}
    header nav ul{display:flex;gap:12px;list-style:none;margin:0;padding:0}
    header nav a{color:#0b74d1;text-decoration:none;font-weight:500}
    .hero{position:relative;height:60vh;background:url('https://mediaim.expedia.com/destination/1/3e03645318e1352a26f54d50dd828754.jpg') center/cover no-repeat;display:flex;align-items:center;justify-content:center;color:#fff;text-align:center}
    .hero h1{font-size:2.6rem;text-shadow:2px 2px 8px rgba(0,0,0,0.5)}
    section{padding:48px 24px}
    .container{max-width:1100px;margin:0 auto}
    h2{font-size:2rem;color:#0b74d1;margin-bottom:12px}
    h3{font-size:1.4rem;color:#333;margin-top:20px}
    p{margin-bottom:12px}
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px}
    .card{background:#fff;padding:16px;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,0.06)}
    .card img{width:100%;border-radius:10px}
    .hotel-link{color:#0b74d1;font-weight:600;cursor:pointer}
    .badge{display:inline-block;padding:4px 8px;background:#eef7ff;color:#0b74d1;border-radius:6px;font-weight:500;font-size:0.9rem}
    footer{padding:24px;text-align:center;font-size:0.9rem;color:#65707a}
      /* --------------------------------------
       Base / Reset
    ---------------------------------------*/
    :root{
      --accent: #0b74d1;
      --accent-2: #ff8a00;
      --muted: #65707a;
      --bg: #f6f9fc;
      --card: #ffffff;
      --glass: rgba(255,255,255,0.75);
      --maxw: 1200px;
      --radius: 14px;
      --shadow: 0 10px 30px rgba(11,20,40,0.06);
      --text: #0f1724;
    }
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,'Helvetica Neue',Arial;color:var(--text);background:var(--bg);-webkit-font-smoothing:antialiased}
    img{display:block;max-width:100%;height:auto}
    a{text-decoration:none;color:var(--accent)}
    .container{width:94%;max-width:var(--maxw);margin:0 auto;padding:22px}

    /* --------------------------------------
       Header / Navigation
    ---------------------------------------*/
    header{position:fixed;left:0;right:0;top:0;z-index:120;background:linear-gradient(to right, rgba(255,255,255,0.95), rgba(255,255,255,0.80));backdrop-filter: blur(6px);box-shadow:0 6px 18px rgba(12,20,30,0.04)}
    .nav{display:flex;align-items:center;justify-content:space-between;gap:16px;padding:12px 6px}
    .brand{display:flex;gap:12px;align-items:center}
    .brand img{width:48px;height:48px;object-fit:cover;border-radius:10px;background:#eee}
    .brand h1{font-size:1.05rem;margin:0;color:var(--text)}
    nav ul{list-style:none;margin:0;padding:0;display:flex;gap:10px;align-items:center}
    nav li{padding:8px 10px;border-radius:10px}
    nav li:hover{background:rgba(11,116,209,0.06)}
    .cta{background:var(--accent);color:#fff;padding:8px 12px;border-radius:10px;font-weight:600;box-shadow:0 6px 18px rgba(11,116,209,0.12)}
    .mobile-toggle{display:none}

    /* --------------------------------------
       Hero — full screen background
    ---------------------------------------*/
    .hero{
      height:100vh;
      min-height:640px;
      position:relative;
      overflow:hidden;
      display:flex;
      align-items:center;
    }
    .hero .bg{
      position:absolute;
      inset:0;
      background-image: url('https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcSLOsYIjtw3WpkqaH-UIu9S47epZQHF3rtMyfqhfPnN1ByRuv0izRwENqolJTLtxGjRt-T6MrkILFuv-5RjTqC9aLF97n765BU3YQ49_A');
      background-size:cover;
      background-position:center;
      background-repeat:no-repeat;
      filter: contrast(0.95) saturate(1.02);
      transform: scale(1.02);
    }
    .hero .overlay{
      position:absolute;inset:0;
      background: linear-gradient(180deg, rgba(3,6,12,0.18), rgba(3,6,12,0.45));
    }
    .hero .content{position:relative;z-index:2;color:#fff;padding:48px;max-width:1100px;margin-left:6vw}
    .hero h2{font-size:clamp(2rem, 5vw, 3.6rem);line-height:1.02;margin:0 0 12px}
    .hero p{font-size:1.05rem;margin:0 0 18px;max-width:760px;color:rgba(255,255,255,0.92)}
    .hero .actions{display:flex;gap:12px;flex-wrap:wrap}
    .search-card{margin-top:18px;background:rgba(255,255,255,0.09);backdrop-filter:blur(6px);padding:12px;border-radius:12px;display:flex;gap:8px;align-items:center;max-width:720px}
    .search-card input{flex:1;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.12);background:transparent;color:#fff}
    .search-card button{padding:9px 12px;border-radius:8px;border:0;background:var(--accent);color:#fff;font-weight:600}

    /* --------------------------------------
       Sections
    ---------------------------------------*/
    section{padding:70px 0}
    h2.section-title{font-size:1.6rem;margin:0 0 12px}
    .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
    .card{background:var(--card);padding:18px;border-radius:12px;box-shadow:var(--shadow)}
    .card h3{margin-top:0}
    .small{font-size:0.92rem;color:var(--muted)}
    .flag{font-size:1.4rem;margin-right:8px}

    /* Destination card visuals */
    .dest-card{border-radius:12px;overflow:hidden;position:relative}
    .dest-card .thumb{height:220px;background-image:url('');background-size:cover;background-position:center}
    .dest-card .meta{padding:12px}

    /* Testimonials */
    .testimonial{background:linear-gradient(180deg,#fff,#fbfdff);border-left:4px solid var(--accent);padding:12px;border-radius:10px}

    /* Hotels list */
    .hotel{display:flex;gap:12px;align-items:center;padding:10px;border-radius:10px;background:#fff;box-shadow:0 6px 18px rgba(12,20,30,0.04)}
    .hotel img{width:110px;height:72px;object-fit:cover;border-radius:8px}
    .badge{display:inline-block;padding:6px 8px;border-radius:8px;background:#eef7ff;color:var(--accent);font-weight:700;margin-top:6px}

    /* Footer */
    footer{background:linear-gradient(180deg,#f6f8fb,#eef3fb);padding:36px 0;border-top:1px solid rgba(15,23,36,0.03)}
    .footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr;gap:18px;align-items:start}
    .socials{display:flex;gap:10px;align-items:center}

    /* Modal */
    .modal{position:fixed;inset:0;display:none;align-items:center;justify-content:center;background:rgba(4,8,16,0.45);padding:20px;z-index:200}
    .modal.active{display:flex}
    .modal-card{background:#fff;border-radius:12px;padding:18px;max-width:880px;width:96%;box-shadow:0 20px 60px rgba(11,20,40,0.2);max-height:92vh;overflow:auto}
    .close-modal{float:right;border:0;background:none;font-size:18px;padding:6px;cursor:pointer}

    /* Responsive */
    @media (max-width:980px){
      nav ul{display:none}
      .mobile-toggle{display:block}
      .grid-3{grid-template-columns:1fr}
      .hero{min-height:60vh}
      .hero .content{padding:28px;margin-left:3vw}
      .dest-card .thumb{height:180px}
      .footer-grid{grid-template-columns:1fr}
    }
    @media (max-width:420px){
      .hero h2{font-size:1.8rem}
      .hero p{font-size:0.98rem}
    }
    /* ========================================= */
/* CSS PARA PADRONIZAÇÃO DE IMAGENS          */
/* ========================================= */

/* --- Estilo Base (Boa Prática) --- */
/* Aplica a todas as imagens para que sejam responsivas por padrão */
img {
    max-width: 100%; /* Garante que a imagem nunca ultrapasse o contêiner pai */
    height: auto;    /* Mantém a proporção da imagem ao redimensionar a largura */
    display: block;  /* Remove espaços extras que podem aparecer abaixo da imagem */
}

/* --- CLASSE PEQUENA --- */
/* Ideal para avatares, ícones, ou thumbnails de uma galeria. */
.img-pequena {
    width: 150px;       /* Largura fixa desejada */
    height: 150px;      /* Altura fixa desejada */
    object-fit: cover;  /* A MÁGICA ACONTECE AQUI! */
    border-radius: 12px;/* Opcional: para bordas arredondadas */
    background-color: #eee; /* Opcional: cor de fundo enquanto a imagem carrega */
}

/* --- CLASSE GRANDE --- */
/* Ideal para banners, imagens de destaque em artigos ou capas. */
.img-grande {
    width: 100%;        /* Ocupa toda a largura do seu contêiner */
    height: 450px;      /* Altura fixa desejada */
    object-fit: cover;  /* Preenche o espaço sem distorcer, cortando o excesso */
    border-radius: 14px;/* Opcional: bordas arredondadas suaves */
    background-color: #ddd; /* Opcional: cor de fundo */
}

/* --- (BÔNUS) Classe para avatares circulares --- */
.img-avatar {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 50%; /* Deixa a imagem perfeitamente redonda */
}
  </style>
</head>
<body>

<!-- HEADER -->
ooo0  <header>
    <div class="container nav" role="navigation" aria-label="Main Navigation">
      <div class="brand" aria-hidden="false">
        <img src="{{ asset('imagens/globeway_logo.png') }}" alt="GlobeWay logo placeholder">
        <div>
          <h1>GlobeWay</h1>
          <div style="font-size:0.82rem;color:var(--muted)">Curated Journeys • Authentic Experiences</div>
        </div>
      </div>

      <nav aria-label="Primary">
        <ul>
          <li><a href="/index">Home</a></li>
          <li><a href="/nigeria">Nigeria</a></li>
          <li><a href="/india">India</a></li>
          <li><a href="/philippines">Philippines</a></li>
          <li><a href="/singapore">Singapore</a></li>
          <li><a class="cta" href="/travel-diary">Travel Diary</a></li>
        </ul>
      </nav>

      <button class="mobile-toggle" aria-expanded="false" aria-controls="mobileMenu" onclick="toggleMobileMenu()">☰</button>
    </div>
  </header>


<!-- HERO -->
<section class="hero">
  <div>
    <h1>Nigeria — The Heart of Africa</h1>
    <p>Discover Lagos, Abuja, Tarkwa Bay Beach, Lekki Conservation Centre and vibrant Nigerian culture.</p>
  </div>
</section>

<!-- INTRO -->
<section>
  <div class="container">
    <h2>About Nigeria</h2>
    <p>Nigeria is a land of contrasts — bustling cities, stunning coastlines, rich cultural heritage and warm hospitality. Known as “The Giant of Africa,” Nigeria offers vibrant music, flavorful cuisine, dynamic art scenes and diverse traditions.</p>
  </div>
</section>

<!-- CULTURE -->
<section>
  <div class="container">
    <h2>Culture & Traditions</h2>
    <p>Nigerian culture is rich and varied, shaped by more than 250 ethnic groups, with Yoruba, Hausa and Igbo being the largest. Festivals such as the Eyo Festival and Durbar Festival are spectacular displays of heritage, art, music, and dance. Storytelling, colorful fabrics, and traditional crafts are at the heart of Nigeria’s cultural life.</p>
  </div>
</section>

<!-- TOURIST SPOTS -->
<section>
  <div class="container">
    <h2>Top Tourist Spots</h2>
    <div class="grid">
      <div class="card">
        <img class="img-pequena" src="https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcQsUjnwG6Q03s0Re6osbt1pgde2mNuTVW04hQMlQ3Ki8LQYFXt5N6XXNNuwOMkokQNT_J7jGeSEvMizIPtoFpE_kBQgQipdtPvFzsArsSs" alt="Victoria Island Lagos">
        <h3>Victoria Island, Lagos</h3>
        <p>Vibrant nightlife, modern shopping centers and stunning beaches make Victoria Island a must-visit destination.</p>
      </div>
      <div class="card">
        <img class="img-pequena" src="https://pub-c3c5765215d14e3d882d51123be2ba44.r2.dev/media/images/diary/2025-07-20%2022%3A36%3A08.202396%2B00%3A00/.jpg" alt="Tarkwa Bay Beach">
        <h3>Tarkwa Bay Beach</h3>
        <p>Peaceful beach perfect for swimming, relaxing and enjoying beach sports with scenic coastal views.</p>
      </div>
      <div class="card">
        <img class="img-pequena"src="https://upload.wikimedia.org/wikipedia/commons/d/d5/A_pathway_in_the_Lekki_Convention_Center.jpg" alt="Lekki Conservation Centre">
        <h3>Lekki Conservation Centre</h3>
        <p>Walk across Africa’s longest canopy bridge and enjoy nature in a tranquil forest setting.</p>
      </div>
      <div class="card">
        <img class="img-pequena" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/09/2d/c9/c2/the-national-museum.jpg?w=1200&h=-1&s=1" alt="National Museum Lagos">
        <h3>National Museum, Lagos</h3>
        <p>Explore Nigeria’s heritage through masks, sculptures, traditional instruments and royal artifacts.</p>
      </div>
      <div class="card">
        <img class="img-pequena" src="https://upload.wikimedia.org/wikipedia/commons/b/b0/Abuja_National_Mosque.jpg" alt="Abuja National Mosque">
        <h3>Abuja National Mosque</h3>
        <p>A stunning architectural marvel and center for Islamic culture in Nigeria’s capital city.</p>
      </div>
    </div>
  </div>
</section>

<!-- HOTELS -->
<section>
  <div class="container">
    <h2>Recommended Hotels</h2>
    <div class="grid">
      <div class="card">
        <img class="img-grande"src="https://ik.imgkit.net/3vlqs5axxjf/external/https://www.cfmedia.vfmleonardo.com/imageRepo/7/0/168/253/971/eh-classic-superior-room-2_O.jpg?tr=w-940%2Ch-529%2Cfo-auto%2Cdi-mit-fallback.png" alt="Eko Hotels & Suites">
        <h3><span class="hotel-link" data-hotel='{"name":"Eko Hotels & Suites","city":"Lagos","price":"$120 - $280","rating":4.2,"desc":"Beachfront hotel with multiple restaurants and pool","image":"https://ik.imgkit.net/3vlqs5axxjf/external/https://www.cfmedia.vfmleonardo.com/imageRepo/7/0/168/253/971/eh-classic-superior-room-2_O.jpg?tr=w-940%2Ch-529%2Cfo-auto%2Cdi-mit-fallback.png"}'>Eko Hotels & Suites</span></h3>
        <p class="badge">4.2 ★</p>
        <p>Victoria Island, Lagos</p>
      </div>
      <div class="card">
        <img class="img-grande"src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/f0/4a/57/hotel-exterior.jpg?w=900&h=-1&s=1" alt="Transcorp Hilton Hotel">
        <h3><span class="hotel-link" data-hotel='{"name":"Transcorp Hilton Hotel","city":"Abuja","price":"$150 - $320","rating":4.5,"desc":"Luxury hotel in the heart of Abuja with modern amenities","image":"https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/f0/4a/57/hotel-exterior.jpg?w=900&h=-1&s=1"}'>Transcorp Hilton Hotel</span></h3>
        <p class="badge">4.5 ★</p>
        <p>Abuja</p>
      </div>
    </div>
  </div>
</section>

<!-- FOOD -->
<section>
  <div class="container">
    <h2>Food & Cuisine</h2>
    <p>Nigeria’s cuisine is as diverse as its culture. Popular dishes include Jollof rice, Suya (spiced grilled meat), Pounded yam with Egusi soup, and Pepper soup. Street food culture is vibrant and part of the true Nigerian experience.</p>
  </div>
</section>

<!-- REVIEWS -->
<section>
  <div class="container">
    <h2>Traveler Reviews</h2>
    <div class="grid">
      <div class="card">
        <p><strong>Maria R.</strong></p>
        <p>"Lagos surprised me with its energy — vibrant markets and delicious food. Tarkwa Bay Beach was breathtaking."</p>
        <p style="font-size:0.9rem;color:#65707a">Visited November 2024</p>
      </div>
      <div class="card">
        <p><strong>Daniel K.</strong></p>
        <p>"Lekki Conservation Centre is a hidden gem — the canopy bridge gave an unforgettable view."</p>
        <p style="font-size:0.9rem;color:#65707a">Visited December 2024</p>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 GlobeWay — Nigeria. All rights reserved.</p>
  <p><a href="/index">Back to Home</a></p>
</footer>

<!-- HOTEL MODAL -->
<div id="hotelModal" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.6);align-items:center;justify-content:center;padding:20px;z-index:200">
  <div style="background:#fff;border-radius:12px;padding:20px;max-width:800px;width:100%;position:relative">
    <button style="position:absolute;top:12px;right:12px;font-size:18px;border:none;background:none;cursor:pointer" onclick="document.getElementById('hotelModal').style.display='none'">✕</button>
    <div id="hotelContent"></div>
  </div>
</div>

<script>
document.addEventListener('click',function(e){
  const target=e.target.closest('.hotel-link');
  if(!target) return;
  const data=JSON.parse(target.getAttribute('data-hotel'));
  const content=document.getElementById('hotelContent');
  content.innerHTML=`<h2>${data.name}</h2><p><strong>City:</strong> ${data.city}</p><p><strong>Price:</strong> ${data.price}</p><p><strong>Rating:</strong> ${data.rating} ★</p><p>${data.desc}</p><img src="${data.image}" style="max-width:100%;margin-top:10px">`;
  document.getElementById('hotelModal').style.display='flex';
});
</script>

</body>
</html>
