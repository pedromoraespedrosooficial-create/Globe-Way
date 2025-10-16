<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GlobeWay — Home</title>
  <meta name="description" content="GlobeWay — curated journeys across Nigeria, India, the Philippines and Singapore. Inspiring, safe and authentic travel experiences." />
  <style>
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
  <main>
    <section class="hero" aria-label="Hero">
      <div class="bg" id="heroBg" style="background-image:url('{{ asset('imagens/backgrond.jpg') }}')"></div>
      <div class="overlay"></div>
      <div class="content container">
        <h2>Discover the World Through Our Eyes</h2>
        <p>Join Leadster Travel on a 20-day curated journey across Nigeria, India, the Philippines and Singapore. We combine authentic local experiences with curated comfort — designed for curious travelers.</p>

        <div class="actions">
          <a class="cta" href="/travel-diary">Read the Travel Diary</a>
          <a class="" href="/nigeria" style="background:rgba(255,255,255,0.10);color:#fff;padding:10px 12px;border-radius:10px">Explore Destinations</a>
        </div>

        <div class="search-card" role="search" aria-label="Site search">
          <input id="siteSearch" placeholder="Search destinations, tips or experiences..." aria-label="Search">
          <button onclick="doSearch()">Search</button>
        </div>
      </div>
    </section>

    <!-- FEATURED DESTINATIONS -->
    <section aria-labelledby="featured">
      <div class="container">
        <h2 id="featured" class="section-title">Featured Destinations</h2>
        <p class="small">Handpicked highlights and starter itineraries to inspire your next journey.</p>
        <div style="height:14px"></div>

        <div class="grid-3">
          <article class="card dest-card" aria-labelledby="nigTitle">
            <div class="thumb" style="background-image:url('https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcSLOsYIjtw3WpkqaH-UIu9S47epZQHF3rtMyfqhfPnN1ByRuv0izRwENqolJTLtxGjRt-T6MrkILFuv-5RjTqC9aLF97n765BU3YQ49_A')"></div>
            <div class="meta">
              <div style="display:flex;align-items:center;gap:8px"><div class="flag">🇳🇬</div><h3 id="nigTitle">Nigeria — Vibrant Culture & Coastline</h3></div>
              <p class="small">From Lagos markets to Abuja’s skyline — music, flavors, and bold colors. <a href="/nigeria">Learn more →</a></p>
            </div>
          </article>

          <article class="card dest-card" aria-labelledby="indTitle">
            <div class="thumb" style="background-image:url('https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcTEHh2kl9t3C-B7Y_0kxcfhyiStK7iN8MGPqMhVSgEeNbR8lRNLpZEHNZV5FWt985h91Kk_3zV5-zYAQVyEqC-bZXCKULZhaOtmQthTMg')"></div>
            <div class="meta">
              <div style="display:flex;align-items:center;gap:8px"><div class="flag">🇮🇳</div><h3 id="indTitle">India — History, Colors & Spirituality</h3></div>
              <p class="small">Taj Mahal, palaces and festivals — a sensory journey through time. <a href="/india">Learn more →</a></p>
            </div>
          </article>

          <article class="card dest-card" aria-labelledby="phiTitle">
            <div class="thumb" style="background-image:url('https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcTbZaZ58ZLRWcADdUK-aQfqfAvSwWb4DLsomjrdOWGtPeYPEeZkX5DqH_ftHMduHHfEsqQEqTk-GEN9iwkuShFwTzEfrfqf-3wfFcPJWw')"></div>
            <div class="meta">
              <div style="display:flex;align-items:center;gap:8px"><div class="flag">🇵🇭</div><h3 id="phiTitle">Philippines — Islands & Warm Hospitality</h3></div>
              <p class="small">Island-hopping, lagoons and incredible seafood. <a href="/philippines">Learn more →</a></p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section aria-labelledby="why">
      <div class="container">
        <h2 id="why" class="section-title">Why Choose GlobeWay?</h2>
        <div style="height:12px"></div>
        <div class="grid-3">
          <div class="card">
            <h3>Curated Local Experiences</h3>
            <p class="small">We partner with trusted guides and local experts to design authentic activities that respect culture and bring deeper understanding.</p>
          </div>
          <div class="card">
            <h3>Comfort & Safety</h3>
            <p class="small">Vetted hotels, secure transfers and 24/7 support ensure your trip is enjoyable and worry-free.</p>
          </div>
          <div class="card">
            <h3>Detailed Travel Diary</h3>
            <p class="small">Read our full 20-day travel diary — daily notes, photos and practical tips to help you plan your own adventure. <a href="/travel-diary">Open diary →</a></p>
          </div>
        </div>
      </div>
    </section>

    <!-- HOTELS HIGHLIGHT -->
    <section aria-labelledby="hotels">
      <div class="container">
        <h2 id="hotels" class="section-title">Featured Hotels</h2>
        <p class="small">Click any hotel to open a quick info card with price range and rating.</p>
        <div style="height:12px"></div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px">
          <div class="hotel card">
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/30/27/8b/82/eko-hotel-hero-image.jpg" alt="Eko Hotels & Suites">
            <div>
              <a href="#" class="hotel-link" data-hotel='{"name":"Eko Hotels & Suites","city":"Lagos","price":"$120 - $280","rating":4.2,"desc":"Beachfront hotel with multiple restaurants and pool","image":"https://media-cdn.tripadvisor.com/media/photo-s/30/27/8b/82/eko-hotel-hero-image.jpg"}'>Eko Hotels & Suites</a>
              <div class="badge">4.2 ★</div>
              <div class="small">Victoria Island, Lagos</div>
            </div>
          </div>

          <div class="hotel card">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2c/1b/0e/01/private-dining-at-the.jpg?w=900&h=500&s=1" alt="The Oberoi Amarvilas">
            <div>
              <a href="#" class="hotel-link" data-hotel='{"name":"The Oberoi Amarvilas","city":"Agra","price":"$250 - $600","rating":4.8,"desc":"Luxury hotel with Taj Mahal views","image":"https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2c/1b/0e/01/private-dining-at-the.jpg?w=900&h=500&s=1"}'>The Oberoi Amarvilas</a>
              <div class="badge">4.8 ★</div>
              <div class="small">Agra, India</div>
            </div>
          </div>

          <div class="hotel card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Marina_Bay_Sands_in_the_evening_-_20101120.jpg/1200px-Marina_Bay_Sands_in_the_evening_-_20101120.jpg" alt="Marina Bay Sands">
            <div>
              <a href="#" class="hotel-link" data-hotel='{"name":"Marina Bay Sands","city":"Singapore","price":"$320 - $900","rating":4.6,"desc":"Iconic hotel with rooftop infinity pool","image":"https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Marina_Bay_Sands_in_the_evening_-_20101120.jpg/1200px-Marina_Bay_Sands_in_the_evening_-_20101120.jpg"}'>Marina Bay Sands</a>
              <div class="badge">4.6 ★</div>
              <div class="small">Marina Bay, Singapore</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section aria-labelledby="testimonials">
      <div class="container">
        <h2 id="testimonials" class="section-title">Traveler Reviews</h2>
        <div style="height:12px"></div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px">
          <div class="testimonial card">
            <strong>Maria R.</strong>
            <p class="small">"Lagos surprised me: music, markets, and food — a true cultural feast."</p>
            <div style="font-size:0.9rem;color:var(--muted)">Visited November 2024</div>
          </div>

          <div class="testimonial card">
            <strong>James P.</strong>
            <p class="small">"Seeing the Taj at sunrise was the most moving moment of my life."</p>
            <div style="font-size:0.9rem;color:var(--muted)">Visited January 2025</div>
          </div>

          <div class="testimonial card">
            <strong>Ella M.</strong>
            <p class="small">"Island-hopping around Palawan was pure magic — crystal waters and hidden lagoons."</p>
            <div style="font-size:0.9rem;color:var(--muted)">Visited March 2025</div>
          </div>
        </div>
      </div>
    </section>

    <!-- NEWSLETTER / CTA -->
    <section aria-labelledby="stay" style="background:linear-gradient(180deg,#fff,#f8fbff);">
      <div class="container" style="display:flex;align-items:center;gap:18px;flex-wrap:wrap">
        <div style="flex:1;min-width:260px">
          <h2 class="section-title" id="stay">Stay Updated</h2>
          <p class="small">Subscribe for curated trip releases, exclusive itineraries and travel tips.</p>
        </div>
        <form id="newsletter" style="display:flex;gap:8px;align-items:center">
          <input type="email" name="email" placeholder="Your email address" required style="padding:10px;border-radius:8px;border:1px solid #e6eef8">
          <button class="cta" type="submit">Subscribe</button>
        </form>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer>
    <div class="container footer-grid">
      <div>
        <strong>GlobeWay</strong>
        <p class="small" style="margin-top:8px">Curated journeys across Nigeria, India, the Philippines and Singapore. We connect you with authentic local experiences and trusted partners.</p>
      </div>

      <div>
        <h4 style="margin:0 0 8px">Explore</h4>
        <ul style="list-style:none;padding:0;margin:0;color:var(--muted)">
          <li><a href="/nigeria">Nigeria</a></li>
          <li><a href="/india">India</a></li>
          <li><a href="/philippines">Philippines</a></li>
          <li><a href="/singapore">Singapore</a></li>
          <li><a href="/travel-diary">Travel Diary</a></li>
          <li><a href="/D_A_R">Descriptions and recommendations</a></li>
        </ul>
      </div>

      <div>
        <h4 style="margin:0 0 8px">Contact</h4>
        <div style="color:var(--muted)">GlobeWay.example<br>+55 11 99999-9999</div>
        <div style="height:8px"></div>
        <div class="socials">
          <a href="#" aria-label="Instagram">IG</a>
          <a href="#" aria-label="Facebook">FB</a>
          <a href="#" aria-label="Twitter">TW</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- HOTEL MODAL -->
  <div id="hotelModal" class="modal" role="dialog" aria-hidden="true">
    <div class="modal-card" role="document">
      <button class="close-modal" aria-label="Close" onclick="closeModal()">✕</button>
      <div id="hotelContent" aria-live="polite"></div>
    </div>
  </div>

  <script>
    /* --------------------------
       Basic Interactions & Helpers
       ---------------------------*/
    function toggleMobileMenu(){
      const nav = document.querySelector('nav ul');
      const btn = document.querySelector('.mobile-toggle');
      if(nav.style.display === 'flex'){ nav.style.display = 'none'; btn.setAttribute('aria-expanded','false');}
      else { nav.style.display = 'flex'; nav.style.flexDirection = 'column'; btn.setAttribute('aria-expanded','true');}
    }

    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', function(e){
        const href = this.getAttribute('href');
        if(href.length>1){
          e.preventDefault();
          const el = document.querySelector(href);
          if(el) el.scrollIntoView({behavior:'smooth',block:'start'});
        }
      });
    });

    // Search action (placeholder)
    function doSearch(){
      const q = document.getElementById('siteSearch').value.trim();
      if(!q) return alert('Please enter a search term.');
      alert('Search feature placeholder — you searched for: ' + q);
    }

    // Newsletter submit (demo)
    document.getElementById('newsletter').addEventListener('submit', function(e){
      e.preventDefault();
      const email = this.querySelector('input[name="email"]').value;
      if(!email.includes('@')) return alert('Please provide a valid email.');
      alert('Thanks — ' + email + ' has been subscribed (demo).');
      this.reset();
    });

    // Hotel modal open/close (reads data-hotel JSON attribute)
    function openHotel(data){
      const modal = document.getElementById('hotelModal');
      const container = document.getElementById('hotelContent');
      container.innerHTML = `
        <h3 style="margin-top:0">${escapeHtml(data.name)} <span style="font-size:0.95rem;color:var(--muted)">— ${escapeHtml(data.city)}</span></h3>
        <div style="display:flex;gap:12px;align-items:flex-start;flex-wrap:wrap">
          <img src="${data.image||''}" alt="${escapeHtml(data.name)}" style="width:260px;height:160px;object-fit:cover;border-radius:10px;flex-shrink:0;background:#f2f4f6">
          <div style="flex:1;min-width:180px">
            <p style="margin-top:0">${escapeHtml(data.desc)}</p>
            <p><strong>Price range:</strong> ${escapeHtml(data.price)}</p>
            <p><strong>Rating:</strong> ${escapeHtml(String(data.rating))} ★</p>
            <div style="margin-top:8px"><a href="#" onclick="alert('Booking flow placeholder')">Book now</a> · <a href="#" onclick="alert('More photos placeholder')">Gallery</a></div>
          </div>
        </div>
        <div style="margin-top:12px;color:var(--muted);font-size:0.95rem">Note: This is a demo info card. Replace placeholders with real links and images.</div>
      `;
      modal.classList.add('active');
      modal.setAttribute('aria-hidden','false');
    }
    function closeModal(){ document.getElementById('hotelModal').classList.remove('active'); document.getElementById('hotelModal').setAttribute('aria-hidden','true'); }

    // Attach handlers for hotel links on page (delegation safe)
    document.addEventListener('click', function(e){
      const el = e.target.closest('.hotel-link');
      if(!el) return;
      e.preventDefault();
      try{
        const data = JSON.parse(el.getAttribute('data-hotel'));
        openHotel(data);
      }catch(err){
        console.error('Invalid hotel data', err);
        alert('Hotel data is missing or invalid.');
      }
    });

    // Simple HTML escape
    function escapeHtml(s){ if(!s) return ''; return String(s).replace(/[&<>\"'`]/g, function(c){ return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',\"'\":\"&#39;\",\"`\":\"&#96;\"}[c]; }); }

    // Accessibility: close modal with Escape
    document.addEventListener('keydown', function(e){ if(e.key === 'Escape'){ closeModal(); } });

    // Set a subtle parallax on hero background while scrolling (lightweight)
    (function(){
      const bg = document.getElementById('heroBg');
      if(!bg) return;
      window.addEventListener('scroll', function(){
        const y = window.scrollY * 0.2;
        bg.style.transform = 'translateY(' + (y) + 'px) scale(1.03)';
      });
    })();
  </script>
</body>
</html>
