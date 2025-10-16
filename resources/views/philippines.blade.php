<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Philippines — GlobeWay</title>
  <meta name="description" content="Explore the Philippines with GlobeWay. Discover Boracay, Palawan, Cebu, Bohol, Filipino cuisine and cultural tips." />
  <style>
    body{font-family:Arial, sans-serif;margin:0;background:#f6f9fc;color:#0f1724;line-height:1.6}
    header,footer{background:#fff;box-shadow:0 4px 8px rgba(0,0,0,0.06);position:sticky;top:0;z-index:100}
    header nav{display:flex;align-items:center;justify-content:space-between;padding:12px 24px}
    header nav ul{display:flex;gap:12px;list-style:none;margin:0;padding:0}
    header nav a{color:#0b74d1;text-decoration:none;font-weight:500}
    .hero{position:relative;height:60vh;background:url('https://i.natgeofe.com/n/04505c35-858b-4e95-a1a7-d72e5418b7fc/steep-karst-cliffs-of-el-nido-in-palawan.jpg') center/cover no-repeat;display:flex;align-items:center;justify-content:center;color:#fff;text-align:center}
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
      background-image: url('');
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
    <h1>The Philippines — Islands of Smiles</h1>
    <p>Discover Boracay, Palawan, Cebu, Bohol, Filipino culture, tropical beaches and delicious food.</p>
  </div>
</section>

<!-- INTRO -->
<section>
  <div class="container">
    <h2>About the Philippines</h2>
    <p>The Philippines is a tropical paradise of over 7,600 islands, offering stunning beaches, vibrant culture, historic cities and world-class diving spots. Known for its warm hospitality, rich heritage and breathtaking landscapes, the Philippines is truly a dream destination.</p>
  </div>
</section>

<!-- CULTURE -->
<section>
  <div class="container">
    <h2>Culture & Traditions</h2>
    <p>Filipino culture blends indigenous, Spanish and American influences. Celebrations such as Sinulog and Ati-Atihan showcase colorful traditions. Filipinos value family, hospitality, music, and festivals, making every visit a lively experience.</p>
  </div>
</section>

<!-- TOURIST SPOTS -->
<section>
  <div class="container">
    <h2>Top Tourist Spots</h2>
    <div class="grid">
      <div class="card">
        <img class="img-pequena" src="https://cdn.sanity.io/images/nxpteyfv/goguides/e795448cde308c144b5f8eead81b52a5b9a5f4e7-1600x1066.jpg" alt="Boracay White Beach">
        <h3>Boracay — White Beach</h3>
        <p>Crystal-clear waters, powdery white sand and vibrant nightlife make this island world-famous.</p>
      </div>
      <div class="card">
        <img class="img-pequena" src="https://loveandroad.com/wp-content/uploads/2020/03/1-El-Nido.jpg" alt="Palawan El Nido">
        <h3>Palawan — El Nido & Coron</h3>
        <p>Island hopping, hidden lagoons, coral reefs and pristine nature in a tropical paradise.</p>
      </div>
      <div class="card">
        <img class="img-pequena" src="https://cdn.enjoytravel.com/img/Big7Enjoy/en/travel-news/interesting-facts/facts-about-cebu-city/cebu_city_was_the_first_spanish_settlement_in_the_philippines.webp" alt="Cebu">
        <h3>Cebu City</h3>
        <p>Rich history, stunning beaches, whale shark watching, and a vibrant urban life.</p>
      </div>
      <div class="card">
        <img class="img-pequena" src="https://i2.wp.com/www.curiousatlas.com/wp-content/uploads/2017/06/Bohol-Hills.jpg?fit=960%2C640&ssl=1" alt="Chocolate Hills Bohol">
        <h3>Chocolate Hills, Bohol</h3>
        <p>Unique limestone formations and lush landscapes make this a must-see natural wonder.</p>
      </div>
      <div class="card">
        <img class="img-pequena" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/44/da/ac/caption.jpg?w=900&h=500&s=1" alt="Intramuros Manila">
        <h3>Intramuros, Manila</h3>
        <p>The historic walled city showcasing Spanish colonial architecture and heritage.</p>
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
        <img class="img-grande" src="https://manilahotel.b-cdn.net/wp-content/uploads/2020/06/TMH_Facade_1-optimized-e1598429179579.jpg" alt="The Manila Hotel">
        <h3><span class="hotel-link" data-hotel='{"name":"The Manila Hotel","city":"Manila","price":"$120 - $250","rating":4.4,"desc":"Historic luxury hotel with ocean views and traditional charm","image":"https://manilahotel.b-cdn.net/wp-content/uploads/2020/06/TMH_Facade_1-optimized-e1598429179579.jpg"}'>The Manila Hotel</span></h3>
        <p class="badge">4.4 ★</p>
        <p>Manila</p>
      </div>
      <div class="card">
        <img class="img-grande" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/16753919.jpg?k=fa60ce551d0011256231b27c0dd5120564e85e1965312b1e639d144b1b3f17b9&o=&hp=1" alt="Shangri-La’s Mactan Resort">
        <h3><span class="hotel-link" data-hotel='{"name":"Shangri-La’s Mactan Resort","city":"Cebu","price":"$180 - $400","rating":4.7,"desc":"Luxury resort with private beaches, spa and diving spots","image":"https://cf.bstatic.com/xdata/images/hotel/max1024x768/16753919.jpg?k=fa60ce551d0011256231b27c0dd5120564e85e1965312b1e639d144b1b3f17b9&o=&hp=1"}'>Shangri-La’s Mactan Resort</span></h3>
        <p class="badge">4.7 ★</p>
        <p>Cebu</p>
      </div>
    </div>
  </div>
</section>

<!-- FOOD -->
<section>
  <div class="container">
    <h2>Food & Cuisine</h2>
    <p>Filipino cuisine offers a delightful mix of flavors. Must-try dishes include adobo, lechon, sinigang, lumpia, kinilaw and halo-halo. Filipino food is rich, diverse and deeply connected to tradition.</p>
  </div>
</section>

<!-- REVIEWS -->
<section>
  <div class="container">
    <h2>Traveler Reviews</h2>
    <div class="grid">
      <div class="card">
        <p><strong>Ana L.</strong></p>
        <p>"Boracay’s beaches are a dream — soft sand and crystal waters. Filipino hospitality is unmatched."</p>
        <p style="font-size:0.9rem;color:#65707a">Visited January 2025</p>
      </div>
      <div class="card">
        <p><strong>Marco D.</strong></p>
        <p>"Palawan was pure magic. The island hopping and lagoons were unforgettable."</p>
        <p style="font-size:0.9rem;color:#65707a">Visited February 2025</p>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 GlobeWay — Philippines. All rights reserved.</p>
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
