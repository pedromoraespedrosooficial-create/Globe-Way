<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Travel Diary — GlobeWay</title>
<style>
    /* --------------------------------------
     * Base / Reset & Variáveis
     * --------------------------------------*/
    :root {
        --accent: #0b74d1;
        --accent-2: #ff8a00;
        --muted: #65707a;
        --bg: #f6f9fc;
        --card: #ffffff;
        --glass: rgba(255, 255, 255, 0.75);
        --maxw: 1100px;
        --radius: 14px;
        --shadow: 0 10px 30px rgba(11, 20, 40, 0.06);
        --text: #0f1724;
    }

    * {
        box-sizing: border-box;
    }

    html, body {
        height: 100%;
        margin: 0;
        font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial;
        color: var(--text);
        background: var(--bg);
        -webkit-font-smoothing: antialiased;
        line-height: 1.6;
    }

    img {
        display: block;
        max-width: 100%;
        height: auto;
    }

    a {
        text-decoration: none;
        color: var(--accent);
        transition: color 0.2s ease;
    }
    a:hover {
        color: #0056b3;
    }

    .container {
        width: 94%;
        max-width: var(--maxw);
        margin: 0 auto;
    }

    /* --------------------------------------
     * Header / Navigation (INTOCADO, COMO PEDIDO)
     * --------------------------------------*/
    header {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        z-index: 120;
        background: linear-gradient(to right, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.80));
        backdrop-filter: blur(6px);
        box-shadow: 0 6px 18px rgba(12, 20, 30, 0.04);
    }
    .nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        padding: 12px 22px;
    }
    .brand {
        display: flex;
        gap: 12px;
        align-items: center;
    }
    .brand img {
        width: 48px;
        height: 48px;
        object-fit: cover;
        border-radius: 10px;
        background: #eee;
    }
    .brand h1 {
        font-size: 1.05rem;
        margin: 0;
        color: var(--text);
    }
    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 10px;
        align-items: center;
    }
    nav li {
        padding: 8px 10px;
        border-radius: 10px;
    }
    nav li:hover {
        background: rgba(11, 116, 209, 0.06);
    }
    .cta {
        background: var(--accent);
        color: #fff !important; /* Garante que o texto do CTA seja branco */
        padding: 8px 12px;
        border-radius: 10px;
        font-weight: 600;
        box-shadow: 0 6px 18px rgba(11, 116, 209, 0.12);
    }
    .mobile-toggle {
        display: none;
    }

    /* --------------------------------------
     * Conteúdo Principal
     * --------------------------------------*/
    main {
        padding-top: 100px; /* Espaço para o header fixo */
    }
    
    .page-title {
        font-size: clamp(2.2rem, 5vw, 3rem);
        text-align: center;
        margin: 40px 20px;
        color: var(--text);
    }

    .travel-section {
        margin-bottom: 60px;
    }

    .country-banner {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: var(--radius);
        margin-bottom: 20px;
        box-shadow: var(--shadow);
    }

    .travel-section h2 {
        font-size: 2.2rem;
        border-bottom: 2px solid var(--accent);
        padding-bottom: 10px;
        margin-top: 40px;
        margin-bottom: 30px;
    }
    
    .day {
        background: var(--card);
        padding: 24px;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        margin-bottom: 25px;
        border-left: 5px solid var(--accent);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .day:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(11, 20, 40, 0.1);
    }

    .day h3 {
        font-size: 1.5rem;
        margin-top: 0;
        margin-bottom: 10px;
    }

    .day p {
        margin-bottom: 0;
        color: var(--muted);
    }

    .hotel-link {
        color: var(--accent);
        font-weight: 600;
        cursor: pointer;
        text-decoration: underline;
        text-decoration-style: dotted;
    }

    /* --------------------------------------
     * Footer
     * --------------------------------------*/
    footer {
        background: #eef3fb;
        padding: 40px 0;
        border-top: 1px solid #dde5f1;
        text-align: center;
        color: var(--muted);
    }
    footer p {
        margin: 5px 0;
    }

    /* --------------------------------------
     * Modal do Hotel
     * --------------------------------------*/
    #hotelModal {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.7);
        justify-content: center;
        align-items: center;
        padding: 20px;
        z-index: 200;
        backdrop-filter: blur(5px);
    }
    .modal-content {
        background: var(--card);
        border-radius: var(--radius);
        padding: 24px;
        max-width: 700px;
        width: 100%;
        position: relative;
        box-shadow: 0 20px 60px rgba(11, 20, 40, 0.2);
        max-height: 90vh;
        overflow-y: auto;
    }
    .close-btn {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 24px;
        border: none;
        background: none;
        cursor: pointer;
        color: var(--muted);
        transition: transform 0.2s ease;
    }
    .close-btn:hover {
        transform: scale(1.2);
    }
    #hotelContent {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        align-items: flex-start;
    }
    .hotel-info {
        flex: 1;
        min-width: 250px;
    }
    .hotel-image-container {
        flex: 1;
        min-width: 250px;
    }
    #hotelContent img {
        width: 100%;
        border-radius: 10px;
    }
    #hotelContent a {
        font-weight: bold;
    }

    /* --------------------------------------
     * Responsividade
     * --------------------------------------*/
    @media (max-width: 980px) {
        nav ul { display: none; }
        .mobile-toggle { display: block; cursor: pointer; }
        .page-title { font-size: 2rem; }
    }
    @media (max-width: 768px) {
        .travel-section h2 { font-size: 1.8rem; }
        .day h3 { font-size: 1.3rem; }
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

<header>
    <div class="nav">
      <div class="brand">
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
      <button class="mobile-toggle" aria-expanded="false" aria-controls="mobileMenu">☰</button>
    </div>
</header>

<main>
    <div class="container">
        <h1 class="page-title">Travel Diary – Our 20-Day Journey Through Nigeria, India, the Philippines, and Singapore</h1>

        <section class="travel-section">
            <img src="https://mediaim.expedia.com/destination/1/eddbc3d33931b058ead86a488334f0fc.jpg" alt="Vibrant cityscape of Lagos, Nigeria" class="country-banner">
            <h2>Days 1–5 – Nigeria: The Heart of Africa</h2>
            
            <div class="day">
                <h3>Day 1</h3>
                <p>We arrived in Lagos, Nigeria, after a long flight. We checked in at the <span class="hotel-link" data-hotel='{"name":"Eko Hotels & Suites","city":"Lagos","price":"$150 - $300","rating":4.5,"desc":"Beachfront hotel with luxury amenities and cultural charm","image":"https://www.ekohotels.com/assets/img/slider/eko-slide1.jpg","website":"https://www.ekohotels.com/"}'>Eko Hotels & Suites</span>, a beautiful hotel near the beach. In the afternoon, we walked around Victoria Island and visited Tarkwa Bay Beach, where local children were playing football. For dinner, we went to Yellow Chilli Restaurant and tried jollof rice and suya. The food was spicy but delicious.
</p>
            </div>
            <div class="day">
                <h3>Day 2</h3>
                <p>We visited the National Museum of Lagos, which showed us the rich history of the Yoruba and Benin kingdoms. We saw old masks, bronze sculptures, and royal crowns. Later, we went to Nike Art Gallery, one of the biggest art galleries in West Africa. We have never seen so many colorful paintings in one place before!
</p>
            </div>
            <div class="day">
                <h3>Day 3</h3>
                <p>We explored the Lekki Conservation Centre, where we walked across the longest canopy bridge in Africa. The view of the forest was amazing! In the evening, we ate at Terra Kulture, where we watched a short theater play and learned a few Yoruba words.
</p>
            </div>
            <div class="day">
                <h3>Day 4</h3>
                <p>We took a short flight to Abuja, the capital. We stayed at <span class="hotel-link" data-hotel='{"name":"Transcorp Hilton Hotel","city":"Abuja","price":"$200 - $400","rating":4.6,"desc":"Luxury hotel with exceptional service and city views","image":"https://www.hilton.com/im/en/ABUHITW/3149698/abuhitw-74491.jpg?impolicy=crop&cw=4880&ch=2732&gravity=NorthWest&xposition=0&yposition=334&rw=768&rh=430","website":"https://www.hilton.com/pt/hotels/abuhitw-transcorp-hilton-abuja/"}'>Transcorp Hilton Hotel</span>. We visited the Abuja National Mosque and Aso Rock, the giant rock formation that overlooks the city. For dinner, we had pounded yam with egusi soup at a restaurant called Nkoyo.
</p>
            </div>
            <div class="day">
                <h3>Day 5</h3>
                <p>Before leaving Nigeria, we went to a local market called Wuse Market, where we bought souvenirs and handmade jewelry. Nigeria has taught us how joyful and creative its people are. We have loved every moment here.
</p>
            </div>
        </section>

        <section class="travel-section">
            <img src="https://www.pettitts.co.uk/img/containers/assets/destinations/1-indian-subcontinent/1-india/2-northern-india/agra-taj-mahal-banner-2.webp/d883ae1d97c8ff2b23c8ba9519ed4bf2/agra-taj-mahal-banner-2.webp" alt="The majestic Taj Mahal in India" class="country-banner">
            <h2>Days 6–10 – India: Land of History and Colors</h2>
            
            <div class="day">
                <h3>Day 6</h3>
                <p>We landed in New Delhi, India, and checked in at <span class="hotel-link" data-hotel='{"name":"The Imperial Hotel","city":"New Delhi","price":"$180 - $350","rating":4.8,"desc":"Elegant colonial hotel blending luxury and history","image":"https://theimperialindia.com/wp-content/uploads/slider/cache/987969e212a7ecad8457e8f41adf3c91/the-imperial-india-home.jpg","website":"https://theimperialindia.com/"}'>The Imperial Hotel</span>, one of the most traditional in the city. We visited the India Gate and the Lotus Temple, symbols of peace and unity. In the evening, we ate butter chicken with naan bread at Karim’s Restaurant, a famous spot near Jama Masjid.</p>
            </div>
            <div class="day">
                <h3>Day 7</h3>
                <p>We visited Humayun’s Tomb and the Qutub Minar, both UNESCO World Heritage Sites. We have seen many ancient monuments before, but these were truly special. At night, we joined a Bollywood dance class — it was so fun and full of energy!
</p>
            </div>
            <div class="day">
                <h3>Day 8</h3>
                <p>We took a train to Agra and stayed at <span class="hotel-link" data-hotel='{"name":"The Oberoi Amarvilas","city":"Agra","price":"$400 - $700","rating":4.9,"desc":"Luxury hotel with unmatched Taj Mahal views","image":"https://www.oberoihotels.com/-/media/oberoi-hotel/amarvillas-resized/Amarvilas/Overview/welcome/desktop1024x706/banner-1.jpg","website":"https://www.oberoihotels.com/hotels-in-agra-amarvilas-resort/"}'>The Oberoi Amarvilas</span>. , a hotel with a view of the Taj Mahal. We visited the Taj at sunrise, and it was breathtaking. We learned about Emperor Shah Jahan and the love story behind this monument. Later, we went to Agra Fort, another impressive historical site.</p>
            </div>
            <div class="day">
                <h3>Day 9</h3>
                <p>We returned to Delhi and visited Chandni Chowk Market, one of the oldest in the city. We tried samosas, lassi, and paneer tikka. The smells, sounds, and colors were unforgettable. India has always been full of life and culture, and we have truly felt that.</p>
            </div>
            <div class="day">
                <h3>Day 10</h3>
                <p>On our last day in India, we visited the Akshardham Temple and watched a traditional dance performance. At night, we saw fireworks because people were celebrating Diwali, the Festival of Lights. We have learned that Indian traditions are full of meaning and joy.</p>
            </div>
        </section>

        <section class="travel-section">
            <img src="https://deih43ym53wif.cloudfront.net/Cresta%20de%20Gallo-Philippines-shutterstock_1395690737.jpg_ec8f3983f5.jpg" alt="Pristine beach in the Philippines" class="country-banner">
            <h2>Days 11–15 – The Philippines: Islands of Smiles</h2>
            
            <div class="day">
                <h3>Day 11</h3>
                <p>We arrived in Manila and checked in at <span class="hotel-link" data-hotel='{"name":"The Manila Hotel","city":"Manila","price":"$120 - $250","rating":4.4,"desc":"Historic luxury hotel with ocean views","image":"https://manilahotel.b-cdn.net/wp-content/uploads/2024/11/award-DOT-Seal-Facade-1080.jpg","website":"https://www.manila-hotel.com.ph/"}'>The Manila Hotel</span>, near the sea. We visited Intramuros, the old Spanish city, and San Agustin Church, one of the oldest in the country. For lunch, we went to Barbara’s Heritage Restaurant and ate adobo and lumpia.</p>
            </div>
            <div class="day">
                <h3>Day 12</h3>
                <p>We went to the National Museum of Fine Arts, where we saw artworks by famous Filipino artists. In the afternoon, we shopped at Greenbelt Mall and watched a cultural dance performance. The people have been so friendly and welcoming since we arrived.</p>
            </div>
            <div class="day">
                <h3>Day 13</h3>
                <p>We took a flight to Cebu and stayed at <span class="hotel-link" data-hotel='{"name":"Shangri-La’s Mactan Resort","city":"Cebu","price":"$180 - $400","rating":4.7,"desc":"Luxury resort with private beaches, spa and diving spots","image":"https://cf.bstatic.com/xdata/images/hotel/max1024x768/680939450.jpg?k=15763e1a8746d102675985da74a8c851f1541ae6d28ab3fd4b3e883d88075241&o=&hp=1","website":"https://www.shangri-la.com/cebu/mactanresort/"}'>Shangri-La’s Mactan Resort</span>. We visited Magellan’s Cross and learned about the arrival of Christianity in the Philippines. Later, we went swimming at Kawasan Falls, surrounded by clear blue water.</p>
            </div>
            <div class="day">
                <h3>Day 14</h3>
                <p>We went island-hopping around Moalboal and saw dolphins swimming near our boat. We had lunch at Lantaw Floating Restaurant and tasted kinilaw, a Filipino-style ceviche. We have loved every meal here — Filipino food is full of flavor.</p>
            </div>
            <div class="day">
                <h3>Day 15</h3>
                <p>We returned to Manila for our flight to Singapore. Before leaving, we tried halo-halo, a dessert with shaved ice, fruits, and milk. The Philippines has always been known for its kind people and tropical beauty.</p>
            </div>
        </section>

        <section class="travel-section">
            <img src="https://images.lifestyleasia.com/wp-content/uploads/2016/12/09102636/14081106139_821425f7d1_o.jpg" alt="Futuristic skyline of Singapore" class="country-banner">
            <h2>Days 16–20 – Singapore: A City of the Future</h2>
            
            <div class="day">
                <h3>Day 16</h3>
                <p>We arrived in Singapore and checked in at <span class="hotel-link" data-hotel='{"name":"Marina Bay Sands Hotel","city":"Singapore","price":"$400 - $800","rating":4.8,"desc":"Iconic hotel with rooftop infinity pool and city view","image":"https://cf.bstatic.com/xdata/images/hotel/max1024x768/611676302.jpg?k=f7da568223801ba901ea5ded323f55346bcb1484a6e8dd9202ee63ebe1197990&o=","website":"https://www.booking.com/hotel/sg/marina-bay-sands.pt-br.html?chal_t=1760020010480&force_referer=https%3A%2F%2Fwww.google.com%2F"}'>Marina Bay Sands Hotel</span>. The view from the rooftop pool was incredible! We visited the Merlion Park and took pictures of the famous half-lion statue. For dinner, we went to Satay by the Bay and ate chicken satay and laksa.
</p>
            </div>
            <div class="day">
                <h3>Day 17</h3>
                <p> We spent the morning at Gardens by the Bay, walking under the giant Supertrees. Later, we visited the Singapore Art Museum and learned how the city mixes tradition and technology. We have never seen such a clean and organized place.
</p>
            </div>
            <div class="day">
                <h3>Day 18</h3>
                <p>We explored Chinatown, Little India, and Kampong Glam, discovering how many cultures live together in harmony. We ate roti prata and nasi lemak at a local hawker center. Everyone has been so respectful and polite.</p>
            </div>
            <div class="day">
                <h3>Day 19</h3>
                <p>We went to Sentosa Island, where we visited Universal Studios Singapore. We rode roller coasters, took many photos, and had a lot of fun. In the evening, we watched the sunset from Palawan Beach and had dinner at Coastes Restaurant.</p>
            </div>
            <div class="day">
                <h3>Day 20</h3>
                <p>On our last day, we went shopping at Orchard Road and visited the Singapore Botanic Gardens, a UNESCO site. At night, we reflected on our journey while having our final dinner at Lau Pa Sat, a traditional open-air market. This trip has been unforgettable. We have learned so much about the world and about ourselves.</p>
            </div>
            <div><a class="cta" href="/D_A_R"> Go to Descriptions and recommendations</a></div>
        </section>
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; 2025 GlobeWay — Travel Diary. All rights reserved.</p>
        <p><a href="/index">Back to Home</a></p>
    </div>
</footer>

<div id="hotelModal">
    <div class="modal-content">
        <button class="close-btn" onclick="closeHotelModal()">✕</button>
        <div id="hotelContent"></div>
    </div>
</div>

<script>
    function closeHotelModal() {
        document.getElementById('hotelModal').style.display = 'none';
    }

    document.addEventListener('click', function (e) {
        const target = e.target.closest('.hotel-link');
        if (!target) return;

        const data = JSON.parse(target.getAttribute('data-hotel'));
        const content = document.getElementById('hotelContent');

        content.innerHTML = `
            <div class="hotel-info">
                <h2>${data.name}</h2>
                <p><strong>City:</strong> ${data.city}</p>
                <p><strong>Price:</strong> ${data.price}</p>
                <p><strong>Rating:</strong> ${"★".repeat(Math.round(data.rating))} <span style="color:#ccc;">${"☆".repeat(5 - Math.round(data.rating))}</span></p>
                <p>${data.desc}</p>
                <p><a href="${data.website}" target="_blank">Visit Official Website →</a></p>
            </div>
            <div class="hotel-image-container">
                 <img src="${data.image}" alt="Photo of ${data.name}">
            </div>
        `;

        document.getElementById('hotelModal').style.display = 'flex';
    });

    // Fecha o modal se clicar fora do conteúdo
    window.addEventListener('click', function(e) {
        if (e.target == document.getElementById('hotelModal')) {
            closeHotelModal();
        }
    });
</script>

</body>
</html>