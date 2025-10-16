<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Singapore — GlobeWay</title>
  <meta name="description" content="Explore Singapore with GlobeWay. Discover Marina Bay Sands, Gardens by the Bay, Sentosa Island, Chinatown and Little India." />
  <style>
    body{font-family:Arial, sans-serif;margin:0;background:#f6f9fc;color:#0f1724;line-height:1.6}
    header,footer{background:#fff;box-shadow:0 4px 8px rgba(0,0,0,0.06);position:sticky;top:0;z-index:100}
    header nav{display:flex;align-items:center;justify-content:space-between;padding:12px 24px}
    header nav ul{display:flex;gap:12px;list-style:none;margin:0;padding:0}
    header nav a{color:#0b74d1;text-decoration:none;font-weight:500}
    .hero{position:relative;height:60vh;background:url('https://a.travel-assets.com/findyours-php/viewfinder/images/res70/542000/542607-singapore.jpg') center/cover no-repeat;display:flex;align-items:center;justify-content:center;color:#fff;text-align:center}
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
      .hero p{font-size:0.98rem}}
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
    <h1>Singapore — A City of the Future</h1>
    <p>Discover Marina Bay Sands, Gardens by the Bay, Sentosa Island, Chinatown, Little India and modern Singapore culture.</p>
  </div>
</section>

<!-- INTRO -->
<section>
  <div class="container">
    <h2>About Singapore</h2>
    <p>Singapore is a dazzling blend of tradition and modernity. A global hub for finance, technology, and tourism, Singapore offers clean streets, beautiful gardens, futuristic architecture, and vibrant cultural districts.</p>
  </div>
</section>

<!-- CULTURE -->
<section>
  <div class="container">
    <h2>Culture & Traditions</h2>
    <p>Singapore is a multicultural melting pot where Chinese, Malay, Indian, and Western traditions merge. Festivals such as Chinese New Year, Deepavali and Hari Raya are celebrated with vibrant ceremonies. Food culture is rich, with hawker centers offering world-famous dishes.</p>
  </div>
</section>

<!-- TOURIST SPOTS -->
<section>
  <div class="container">
    <h2>Top Tourist Spots</h2>
    <div class="grid">
      <div class="card">
        <img class="img-pequena"src="https://www.marinabaysands.com/content/dam/marinabaysands/more/more-masthead-desktop-1920x1080.jpg" alt="Marina Bay Sands">
        <h3>Marina Bay Sands</h3>
        <p>Luxury hotel with the world’s largest rooftop infinity pool and spectacular city views.</p>
      </div>
      <div class="card">
        <img class="img-pequena"src="https://imgcdn.flamingotravels.co.in/Images/PlacesOfInterest/Gardens-By-The-Bay-3.jpg" alt="Gardens by the Bay">
        <h3>Gardens by the Bay</h3>
        <p>Futuristic gardens with towering Supertrees, flower domes and themed landscapes.</p>
      </div>
      <div class="card">
        <img class="img-pequena"src="https://www.trawell.in/admin/images/upload/930772574Sentosa_Island_Singapore.jpg" alt="Sentosa Island">
        <h3>Sentosa Island</h3>
        <p>Island resort with beaches, Universal Studios Singapore, and many attractions.</p>
      </div>
      <div class="card">
        <img class="img-pequena"src="https://static.honeykidsasia.com/wp-content/uploads/2025/01/chinatown-hero-2025.png" alt="Chinatown Singapore">
        <h3>Chinatown</h3>
        <p>Vibrant district with markets, temples and authentic Chinese cuisine.</p>
      </div>
      <div class="card">
        <img class="img-pequena"src="https://cdn.forevervacation.com/uploads/tour/singapore-little-india-4784.jpg" alt="Little India Singapore">
        <h3>Little India</h3>
        <p>Colorful cultural area with temples, spice markets and traditional Indian food.</p>
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
        <img class="img-grande" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/ef/e8/b9/experiences-infinity.jpg?w=900&h=500&s=1" alt="Marina Bay Sands Hotel">
        <h3><span class="hotel-link" data-hotel='{"name":"Marina Bay Sands Hotel","city":"Singapore","price":"$300 - $600","rating":4.9,"desc":"Iconic hotel with rooftop infinity pool, luxury shopping and fine dining","image":""}'>Marina Bay Sands Hotel</span></h3>
        <p class="badge">4.9 ★</p>
        <p>Singapore</p>
      </div>
      <div class="card">
        <img class="img-grande" src="https://stories.forbestravelguide.com/wp-content/uploads/2023/03/HERO-RafflesHotelSingapore-CreditRafflesHotelSingapore.jpg" alt="Raffles Hotel Singapore">
        <h3><span class="hotel-link" data-hotel='{"name":"Raffles Hotel Singapore","city":"Singapore","price":"$250 - $500","rating":4.7,"desc":"Colonial-style luxury hotel with historic charm","image":""}'>Raffles Hotel Singapore</span></h3>
        <p class="badge">4.7 ★</p>
        <p>Singapore</p>
      </div>
    </div>
  </div>
</section>

<!-- FOOD -->
<section>
  <div class="container">
    <h2>Food & Cuisine</h2>
    <p>Singapore’s food scene is diverse and world-renowned. Hawker centers offer delicious and affordable dishes such as chicken rice, laksa, chili crab, satay and kaya toast.</p>
  </div>
</section>

<!-- REVIEWS -->
<section>
  <div class="container">
    <h2>Traveler Reviews</h2>
    <div class="grid">
      <div class="card">
        <p><strong>Lin S.</strong></p>
        <p>"Gardens by the Bay blew my mind — so futuristic and peaceful. Singapore is a city like no other."</p>
        <p style="font-size:0.9rem;color:#65707a">Visited March 2025</p>
      </div>
      <div class="card">
        <p><strong>David R.</strong></p>
        <p>"Marina Bay Sands was unforgettable. Singapore blends modernity and tradition perfectly."</p>
        <p style="font-size:0.9rem;color:#65707a">Visited April 2025</p>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 GlobeWay — Singapore. All rights reserved.</p>
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
