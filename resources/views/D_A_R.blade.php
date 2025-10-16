<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Descriptions & Recommendations — GlobeWay</title>
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
        --text: #0f1724;
        --maxw: 1100px;
        --radius: 14px;
        --shadow: 0 10px 30px rgba(11, 20, 40, 0.06);
    }

    * { box-sizing: border-box; }

    html, body {
        height: 100%; margin: 0;
        font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial;
        color: var(--text); background: var(--bg);
        -webkit-font-smoothing: antialiased; line-height: 1.6;
    }

    img { display: block; max-width: 100%; height: auto; }
    a { text-decoration: none; color: var(--accent); transition: color 0.2s ease; }
    a:hover { color: #0056b3; }
    .container { width: 94%; max-width: var(--maxw); margin: 0 auto; }

    /* --------------------------------------
     * Header / Navigation (Estilo Consistente)
     * --------------------------------------*/
    header {
        position: fixed; left: 0; right: 0; top: 0; z-index: 120;
        background: linear-gradient(to right, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.80));
        backdrop-filter: blur(6px); box-shadow: 0 6px 18px rgba(12, 20, 30, 0.04);
    }
    .nav {
        display: flex; align-items: center; justify-content: space-between;
        gap: 16px; padding: 12px 22px;
    }
    .brand { display: flex; gap: 12px; align-items: center; }
    .brand img { width: 48px; height: 48px; object-fit: cover; border-radius: 10px; background: #eee; }
    .brand h1 { font-size: 1.05rem; margin: 0; color: var(--text); }
    nav ul { list-style: none; margin: 0; padding: 0; display: flex; gap: 10px; align-items: center; }
    nav li { padding: 8px 10px; border-radius: 10px; }
    nav li:hover { background: rgba(11, 116, 209, 0.06); }
    .cta {
        background: var(--accent); color: #fff !important; padding: 8px 12px;
        border-radius: 10px; font-weight: 600; box-shadow: 0 6px 18px rgba(11, 116, 209, 0.12);
    }
    .mobile-toggle { display: none; }

    /* --------------------------------------
     * Estilos da Página de Artigo
     * --------------------------------------*/
    main {
        padding: 120px 0 60px 0; /* Espaço para header e antes do rodapé */
    }
    .article-container {
        max-width: 800px; /* Largura ideal para leitura */
        background: var(--card);
        margin: 0 auto;
        padding: 2rem 3rem;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
    }
    .article-container h1 {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 1.5rem;
        color: var(--text);
        line-height: 1.2;
    }
    .article-container h2 {
        font-size: 1.8rem;
        margin-top: 2.5rem;
        margin-bottom: 1rem;
        border-bottom: 2px solid var(--accent);
        padding-bottom: 0.5rem;
        color: var(--accent);
    }
    .article-container p {
        font-size: 1.1rem;
        line-height: 1.8; /* Mais espaçamento para textos longos */
        color: #334155;
        margin-bottom: 1.5rem;
    }

    /* --------------------------------------
     * Footer (Estilo Consistente)
     * --------------------------------------*/
    footer {
        background: #eef3fb; padding: 40px 0;
        border-top: 1px solid #dde5f1; text-align: center; color: var(--muted);
    }
    footer p { margin: 5px 0; }
    
    /* --------------------------------------
     * Responsividade
     * --------------------------------------*/
    @media (max-width: 980px) {
        nav ul { display: none; }
        .mobile-toggle { display: block; cursor: pointer; border: none; background: none; font-size: 24px; }
    }
    @media (max-width: 768px) {
        .article-container { padding: 1.5rem; }
        .article-container h1 { font-size: 2rem; }
        .article-container h2 { font-size: 1.5rem; }
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
    <div class="article-container">
        <h1>A Journey Through Culture and Diversity: Nigeria, India, the Philippines, and Singapore</h1>
        
        <p>Over the past few weeks, we have traveled through four amazing countries — Nigeria, India, the Philippines, and Singapore. Each of them offered us something unique, from ancient traditions and delicious food to modern cities and breathtaking landscapes. This trip has changed the way we see the world, and we have recommended it to anyone who wants to experience true cultural diversity.</p>
        
        <h2>Our First Destination: Nigeria</h2>
        <p>Our first destination was Nigeria, in West Africa. We stayed in Lagos, one of the largest cities on the continent. We visited Victoria Island, a lively area full of shops, restaurants, and beaches. We walked along Tarkwa Bay Beach, where local families relaxed, and we felt the warmth of Nigerian hospitality. We also explored the National Museum of Lagos, where we saw traditional masks and sculptures from the ancient Benin Kingdom. The museum helped us understand how rich and complex Nigerian history was. At night, we went to Yellow Chilli Restaurant and tried jollof rice and suya, two of the most popular dishes in the country. The flavors were strong and unforgettable.</p>
        <p>During our stay in Abuja, the capital, we visited Zuma Rock, known as the “Gateway to Abuja.” The view was spectacular, especially at sunset. We also went to the Abuja National Mosque, one of the most beautiful buildings we have ever seen. We saw that Nigerians loved music and dancing, and we joined a small street celebration where people sang and played drums. Nigeria has always been known for its joyful spirit, and we have truly felt that energy everywhere we went.</p>
        
        <h2>Next Stop: India</h2>
        <p>Next, we flew to India, a land full of colors, traditions, and spirituality. We have always wanted to visit this country, and it was even more impressive than we had imagined. In New Delhi, we visited the India Gate, the Lotus Temple, and Qutub Minar, learning about the country’s rich past. We went to Karim’s Restaurant, one of the most traditional places in Old Delhi, and tasted butter chicken and naan bread. The food was full of spices and flavor — a perfect example of Indian cuisine.</p>
        <p>We also traveled to Agra to see the Taj Mahal, one of the most beautiful monuments in the world. Seeing it at sunrise was magical. We learned about Emperor Shah Jahan and how he had built it for his wife, Mumtaz Mahal. It was a moment we will never forget. Back in Delhi, we explored local markets, bought colorful clothes, and even took a short Bollywood dance class. India has taught us that culture and tradition are part of everyday life.</p>
        
        <h2>The Philippines: Islands of Smiles</h2>
        <p>After that, we continued our journey to the Philippines, a country made of more than 7,000 islands. We stayed in Manila, where we visited Intramuros, the old Spanish district, and the San Agustin Church, a UNESCO World Heritage Site. We learned that the Philippines has a mix of Asian and Spanish influences, which made its culture truly unique. The people were kind and always smiled. For lunch, we ate adobo and lumpia at Barbara’s Heritage Restaurant, and later we tasted halo-halo, a colorful dessert made with fruits and ice.</p>
        <p>In Cebu, we swam in Kawasan Falls, visited Magellan’s Cross, and went island-hopping around Moalboal, where we saw dolphins. The beaches were beautiful, with clear water and white sand. We have visited many beaches before, but none have been as peaceful as those in the Philippines. We have recommended staying at Shangri-La’s Mactan Resort, which has offered great service and a wonderful view of the sea. The Philippines has always been famous for its friendly people and beautiful landscapes — and now we know why.</p>
        
        <h2>Final Destination: Singapore</h2>
        <p>Finally, we traveled to Singapore, a small but modern country in Southeast Asia. Singapore has become one of the cleanest and most advanced cities in the world. We stayed at the Marina Bay Sands Hotel, which had a swimming pool on the top of the building with an incredible view of the city. We visited the Gardens by the Bay, where futuristic trees lit up at night, and the Merlion Park, home to Singapore’s most famous statue.</p>
        <p>We also explored Chinatown, Little India, and Kampong Glam, and learned how different cultures lived together in peace. The food in Singapore was one of the best parts of the trip — we tried chicken rice, laksa, and satay at Lau Pa Sat, a famous open-air food market. We have eaten in many places around the world, but Singapore’s mix of flavors was unforgettable.</p>
        
        <h2>Our Final Thoughts</h2>
        <p>This journey has been one of the most incredible experiences we have ever had. We visited historical monuments, met kind people, and tasted amazing dishes. We have learned that every country has its own story, and each one deserves to be discovered. Traveling through Nigeria, India, the Philippines, and Singapore has taught us to appreciate diversity and respect different ways of life.</p>
        <p>If anyone has planned to take a trip like this, we have strongly recommended staying open to every new experience — try the local food, talk to the people, and learn about their traditions. The world is full of wonders, and this adventure has reminded us that learning never ends.</p>
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; 2025 GlobeWay — All rights reserved.</p>
        <p><a href="/travel-diary">Back to Travel Diary</a></p>
    </div>
</footer>

</body>
</html>