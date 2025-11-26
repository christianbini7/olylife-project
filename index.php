<?php // page_produit_tera_p90.php 
session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>OlyLife THz Tera-P90 – Vente & Location</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Icons & Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --blue-dark: #020617;
      --blue: #0f172a;
      --blue-soft: #1e293b;
      --accent: #f97316;   /* orange */
      --emerald: #10b981;
      --light: #ffffff;
      --gray: #f3f4f6;
      --text-dark: #111827;
      --text-light: #6b7280;
      --radius-xl: 26px;
      --shadow-soft: 0 18px 45px rgba(15, 23, 42, 0.35);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }

    body {
      background: radial-gradient(circle at top left, #1f2937 0, #020617 45%, #000 100%);
      color: var(--text-dark);
      min-height: 100vh;
      padding: 18px;
    }

    /* ===== GRID DE BASE ===== */
    .parent {
      max-width: 100%;
      margin: 0 auto;
      display: grid;
      grid-template-rows: auto repeat(6, minmax(0, 1fr)) auto;
      grid-template-columns: repeat(5, 1fr);
      gap: 14px;
      min-height: calc(100vh - 36px);
    }

    .div1 {
      grid-column: 1 / -1;
      grid-row: 1 / 2;
      position: relative;
      background: radial-gradient(circle at top left, #1d4ed8 0, #0f172a 40%, #020617 100%);
      border-radius: var(--radius-xl);
      color: #f9fafb;
      padding: 22px 28px 20px;
      overflow: hidden;
      box-shadow: var(--shadow-soft);
    }

    .div5 {
      grid-column: 5 / 6;
      grid-row: 2 / 8;
      display: flex;
      flex-direction: column;
      gap: 14px;
      height: 100%;
    }

    .div7 {
      grid-column: 2 / 5;
      grid-row: 2 / 8;
      height: 100%;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .div8 {
      grid-column: 1 / -1;
      grid-row: 8 / 9;
    }

    .div9 {
      grid-column: 1 / 2;
      grid-row: 2 / 8;
      height: 100%;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    /* ===== HEADER / HERO ===== */

    .hero-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 18px;
      position: relative;
      z-index: 2;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .brand-logo {
      width: 180px;              /* largeur du logo */
      height: 48px;              /* hauteur fixe propre */
      border-radius: 999px;      /* effet pill / premium */
      background: rgba(255, 255, 255, 1);
      padding: 4px 10px;         /* respirations autour du logo */
      display: flex;
      align-items: center;
      justify-content: center;
}

    .brand-logo img {
      width: 100%;
      height: 100%;
      object-fit: contain;       /* garde les proportions du logo */
      border-radius: 999px;
      margin: 0;                 /* supprime le margin-bottom qui cassait l’alignement */
      display: block;
    }


    .brand-text {
      display: flex;
      flex-direction: column;
    }

    .brand-text span:first-child {
      font-weight: 700;
      letter-spacing: .08em;
      font-size: .8rem;
      text-transform: uppercase;
      color: #e5e7eb;
    }

    .brand-text span:last-child {
      font-weight: 600;
      font-size: 1.05rem;
      color: #f9fafb;
    }

    .hero-top .badge {
      padding: 6px 12px;
      border-radius: 999px;
      font-size: .78rem;
      font-weight: 500;
      background: rgba(15, 118, 110, .12);
      border: 1px solid rgba(45, 212, 191, .35);
      display: flex;
      align-items: center;
      gap: 6px;
      color: #ccfbf1;
    }

    .hero-main {
      position: relative;
      z-index: 2;
      display: grid;
      grid-template-columns: 1.1fr 1fr;
      gap: 26px;
      align-items: center;
    }

    .hero-copy h1 {
      font-size: clamp(1.9rem, 3vw, 2.4rem);
      line-height: 1.15;
      margin-bottom: 8px;
    }

    .hero-copy h1 span {
      color: var(--accent);
    }

    .hero-copy p {
      font-size: .96rem;
      color: #e5e7eb;
      margin-bottom: 14px;
      max-width: 520px;
    }

    .hero-badges {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 18px;
      font-size: .8rem;
    }

    .hero-badge {
      padding: 6px 10px;
      border-radius: 999px;
      backdrop-filter: blur(12px);
      background: rgba(15, 23, 42, .75);
      border: 1px solid rgba(148, 163, 184, .5);
      display: flex;
      gap: 6px;
      align-items: center;
      color: #e5e7eb;
    }

    .hero-cta {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items: center;
    }

    .btn-primary,
    .btn-ghost {
      border-radius: 999px;
      border: none;
      cursor: pointer;
      padding: 11px 20px;
      font-size: .9rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all .22s ease;
      text-decoration: none;
      white-space: nowrap;
    }

    .btn-primary {
      background: linear-gradient(135deg, #f97316, #fb923c);
      color: #0b1120;
      box-shadow: 0 12px 30px rgba(248, 150, 69, .6);
    }

    .btn-primary:hover {
      transform: translateY(-2px) scale(1.01);
      box-shadow: 0 18px 40px rgba(248, 150, 69, .8);
    }

    .btn-ghost {
      background: rgba(15, 23, 42, .75);
      color: #e5e7eb;
      border: 1px solid rgba(148, 163, 184, .6);
    }

    .btn-ghost:hover {
      background: rgba(15, 23, 42, .95);
    }

    .hero-visual {
      position: relative;
      display: flex;
      justify-content: flex-end;
    }

    .hero-card {
      position: relative;
      background: radial-gradient(circle at top, #1f2937 0, #020617 70%);
      border-radius: 30px;
      padding: 16px;
      border: 1px solid rgba(148, 163, 184, .35);
      box-shadow: var(--shadow-soft);
      max-width: 320px;
      width: 100%;
    }

    .hero-card::before {
      content: "";
      position: absolute;
      inset: -1px;
      border-radius: inherit;
      padding: 1px;
      background: linear-gradient(135deg, rgba(248, 250, 252, .2), rgba(249, 115, 22, .35), rgba(45, 212, 191, .3));
      -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
    }

    .hero-product-img {
      width: 100%;
      border-radius: 22px;
      overflow: hidden;
      background: radial-gradient(circle at top, #111827, #020617);
      margin-bottom: 10px;
    }

    .hero-product-img img {
      width: 100%;
      display: block;
      object-fit: contain;
      transform: translateY(4px);
    }

    .hero-card-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: .78rem;
      color: #e5e7eb;
    }

    .hero-card-footer span.price {
      font-size: 1.1rem;
      font-weight: 700;
      color: #fbbf24;
    }

    .hero-glow {
      position: absolute;
      width: 320px;
      height: 320px;
      border-radius: 999px;
      background: radial-gradient(circle, rgba(250, 204, 21, .18), transparent 60%);
      filter: blur(4px);
      right: 0;
      top: 5%;
      z-index: 1;
      pointer-events: none;
    }

    /* ===== COLONNE GAUCHE – AVANTAGES ===== */

    .benefit-card {
      background: rgba(15, 23, 42, .92);
      border-radius: 22px;
      padding: 16px 16px 14px;
      color: #e5e7eb;
      border: 1px solid rgba(55, 65, 81, .9);
      box-shadow: 0 18px 40px rgba(15, 23, 42, .8);
    }

    .benefit-card h3 {
      font-size: .95rem;
      margin-bottom: 6px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .benefit-card p {
      font-size: .78rem;
      color: #d1d5db;
    }

    .benefit-chip-row {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-top: 8px;
    }

    .benefit-chip {
      font-size: .72rem;
      padding: 4px 9px;
      border-radius: 999px;
      background: rgba(31, 41, 55, .9);
      border: 1px solid rgba(75, 85, 99, .9);
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: #e5e7eb;
    }

    /* Petites listes pour compléter les cartes */
    .benefit-list,
    .offer-list {
      list-style: none;
      margin: 6px 0 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .benefit-list li,
    .offer-list li {
      display: flex;
      align-items: flex-start;
      gap: 6px;
      font-size: .74rem;
      color: var(--text-light);
    }

    .benefit-list li i,
    .offer-list li i {
      margin-top: 2px;
      font-size: .7rem;
      color: #22c55e;
    }

    /* ===== COLONNE CENTRALE – FICHE PRODUIT ===== */

    .div7-inner {
      flex: 1 1 auto;
      background: #f9fafb;
      border-radius: var(--radius-xl);
      padding: 20px 22px;
      box-shadow: 0 18px 40px rgba(15, 23, 42, .25);
      display: flex;
      flex-direction: column;
      gap: 18px;
      overflow-y: auto;
    }

    .section-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 10px;
      flex-shrink: 0;
    }

    .section-header h2 {
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--text-dark);
    }

    .section-header span {
      font-size: .8rem;
      color: var(--text-light);
    }

    .specs-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 10px;
      font-size: .78rem;
      color: var(--text-light);
      flex-shrink: 0;
    }

    .spec-item {
      background: #ffffff;
      border-radius: 14px;
      padding: 9px 10px;
      border: 1px solid #e5e7eb;
      display: flex;
      flex-direction: column;
      gap: 2px;
    }

    .spec-item span.label {
      font-size: .72rem;
      text-transform: uppercase;
      letter-spacing: .12em;
      color: #9ca3af;
    }

    .spec-item span.value {
      font-size: .82rem;
      font-weight: 600;
      color: #111827;
    }

    .highlight-strip {
      margin-top: 4px;
      padding: 10px 11px;
      border-radius: 14px;
      background: linear-gradient(90deg, rgba(16, 185, 129, .09), rgba(59, 130, 246, .06));
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: .78rem;
      color: #065f46;
      border: 1px dashed rgba(16, 185, 129, .6);
      flex-shrink: 0;
    }

    .highlight-strip i {
      color: #10b981;
    }

    /* ==== DÉMO VIDÉO ==== */

    .video-card {
      margin-top: 6px;
      border-radius: 18px;
      padding: 10px 12px 12px;
      background: #0b1120;
      color: #e5e7eb;
      display: flex;
      flex-direction: column;
      gap: 10px;
      flex-shrink: 0;
    }

    .video-wrapper {
      width: 100%;
      border-radius: 16px;
      overflow: hidden;
    }

    .video-wrapper video {
      width: 100%;
      height: auto;
      display: block;
    }

    .video-meta {
      font-size: .78rem;
    }

    .video-meta span {
      display: block;
      font-size: .7rem;
      color: #9ca3af;
    }

    /* ===== COLONNE DROITE – VENTE / LOCATION ===== */

    .div5-card {
      background: #f9fafb;
      border-radius: 22px;
      padding: 16px 16px 14px;
      box-shadow: 0 18px 36px rgba(15, 23, 42, .45);
      border: 1px solid rgba(148, 163, 184, .45);
    }

    .div5-card h3 {
      font-size: .98rem;
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .pricing-row {
      display: flex;
      flex-direction: column;
      gap: 8px;
      margin-bottom: 10px;
    }

    .price-line {
      display: flex;
      justify-content: space-between;
      align-items: baseline;
      font-size: .86rem;
    }

    .price-line strong {
      font-size: 1rem;
      color: var(--text-dark);
    }

    .price-line span.badge-inline {
      font-size: .72rem;
      padding: 3px 8px;
      border-radius: 999px;
      background: rgba(16, 185, 129, .08);
      color: #047857;
    }

    .finance-info {
      font-size: .74rem;
      color: var(--text-light);
      margin-bottom: 6px;
    }

    .div5-card .btn-primary,
    .div5-card .btn-ghost {
      width: 100%;
      justify-content: center;
    }

    .divider {
      height: 1px;
      background: #e5e7eb;
      margin: 10px 0;
    }

    .trust-row {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      font-size: .72rem;
      color: var(--text-light);
      align-items: center;
    }

    .trust-row i {
      color: #22c55e;
    }

    /* ===== BAS DE PAGE ===== */

    .div8 {
      background: rgba(15, 23, 42, .98);
      border-radius: 22px;
      padding: 14px 18px;
      box-shadow: 0 16px 36px rgba(0, 0, 0, .85);
      color: #e5e7eb;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 14px;
      font-size: .8rem;
    }

    .div8-col {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .div8-col h4 {
      font-size: .86rem;
    }

    .div8-col p {
      color: #9ca3af;
    }

    .div8-col a {
      color: #a5b4fc;
      text-decoration: none;
      font-weight: 500;
    }

    .div8-col a:hover {
      text-decoration: underline;
    }

    .div8-legal {
      text-align: right;
      color: #6b7280;
    }

    /* Harmonisation hauteur des 3 colonnes */
.div9, .div7, .div5 {
  height: 100%;
  display: flex;
  flex-direction: column;
}

/* Permet d'étendre les contenus internes */
.div7-inner,
.div5-card,
.benefit-card {
  flex: 1;
  display: flex;
  flex-direction: column;
}

/* Pour la colonne centre : le contenu doit occuper tout l'espace */
.div7-inner {
  overflow-y: auto;
}

/* Pour les colonnes gauche et droite : espace uniforme */
.div5 {
  gap: 14px;
}

.div9 {
  gap: 14px;
}


    /* ===== RESPONSIVE ===== */

    @media (max-width: 1024px) {
      body {
        padding: 14px;
      }

      .parent {
        display: flex;
        flex-direction: column;
        gap: 14px;
        min-height: auto;
      }

      .div1,
      .div5,
      .div7,
      .div8,
      .div9 {
        grid-column: auto;
        grid-row: auto;
        height: auto;
      }

      .div7 {
        overflow: visible;
      }

      .hero-main {
        grid-template-columns: 1fr;
      }

      .hero-visual {
        justify-content: center;
      }

      .div5 {
        flex-direction: column;
      }

      .div8 {
        flex-direction: column;
        align-items: flex-start;
      }
      .div8-legal {
        text-align: left;
      }
    }

    @media (max-width: 640px) {
      .hero-top {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
      }

      .hero-cta {
        flex-direction: column;
        align-items: stretch;
      }

      .btn-primary,
      .btn-ghost {
        width: 100%;
        justify-content: center;
      }
    }
  </style>
</head>
<body>

<div class="parent">

  <!-- HERO -->
  <header class="div1">
    <div class="hero-top">
      <div class="brand">
        <div class="badge">
        <div class="brand-logo">
          <img src="images/logo.webp" alt="OlyLife THz Tera-P90">
        </div>
        </div>
        <div class="brand-text">
          <span>OlyLife • THz Therapy</span>
          <span>THz Tera-P90</span>
        </div>
      </div>
      <div class="badge">
        <i class="fa-solid fa-bolt"></i>
        Technologie THz & infrarouge • Edition 2025
      </div>
    </div>

    <div class="hero-main">
      <div class="hero-copy">
        <h1>Votre bien-être, <span>réinventé</span> avec le THz Tera-P90</h1>
        <p>Un dispositif premium pour la relaxation, la récupération et le confort au quotidien. Disponible en <strong>achat</strong> ou en <strong>location</strong> selon vos besoins.</p>

        <div class="hero-badges">
          <div class="hero-badge">
            <i class="fa-solid fa-shield-heart"></i> Session de démonstration possible
          </div>
          <div class="hero-badge">
            <i class="fa-solid fa-truck-fast"></i> Livraison rapide & installation guidée
          </div>
        </div>

        <div class="hero-cta">
          <a href="#achat" class="btn-primary">
            <i class="fa-solid fa-cart-shopping"></i>
            Acheter maintenant
          </a>
          <a href="#location" class="btn-ghost">
            <i class="fa-solid fa-calendar-check"></i>
            Louer pour essayer
          </a>
        </div>
      </div>

      <div class="hero-visual">
        <div class="hero-glow"></div>
        <div class="hero-card">
          <div class="hero-product-img">
            <img src="images/IMG-20251106-WA0009.jpg" alt="OlyLife THz Tera-P90">
          </div>
          <div class="hero-card-footer">
            <div>
              <div style="font-size:.76rem;color:#9ca3af;">OlyLife THz Tera-P90</div>
              <div style="font-size:.74rem;color:#d1d5db;">Plateforme de thérapie & relaxation</div>
            </div>
            <span class="price">à partir de  / <small>mois</small></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- COLONNE GAUCHE : AVANTAGES -->
  <aside class="div9">
    <div class="benefit-card">
      <h3><i class="fa-solid fa-wave-square"></i> Technologie THz ciblée</h3>
      <p>Combine ondes térahertz, chaleur douce et vibrations pour une sensation de détente globale.</p>
      <div class="benefit-chip-row">
        <div class="benefit-chip"><i class="fa-solid fa-circle-dot"></i> Stimulation ciblée</div>
        <div class="benefit-chip"><i class="fa-solid fa-temperature-three-quarters"></i> Chaleur contrôlée</div>
      </div>
      <ul class="benefit-list">
        <li><i class="fa-solid fa-check"></i><span>Fréquence et intensité ajustables selon la sensibilité de chacun.</span></li>
        <li><i class="fa-solid fa-check"></i><span>Séances courtes de 10–20 minutes faciles à intégrer dans la journée.</span></li>
      </ul>
    </div>

    <div class="benefit-card">
      <h3><i class="fa-solid fa-person-rays"></i> Confort & récupération</h3>
      <p>Idéal après une longue journée de travail, une séance de sport ou en complément d’un suivi bien-être.</p>
      <div class="benefit-chip-row">
        <div class="benefit-chip"><i class="fa-solid fa-heart-pulse"></i> Relaxation</div>
        <div class="benefit-chip"><i class="fa-solid fa-bed"></i> Qualité du sommeil</div>
      </div>
      <ul class="benefit-list">
        <li><i class="fa-solid fa-check"></i><span>Utilisation possible assis, debout ou en position relax sur fauteuil.</span></li>
        <li><i class="fa-solid fa-check"></i><span>Accompagne la récupération musculaire après l’effort ou les longues stations debout.</span></li>
      </ul>
    </div>

    <div class="benefit-card">
      <h3><i class="fa-solid fa-house-chimney-medical"></i> Pensé pour la maison & le cabinet</h3>
      <p>Format compact et design premium pour un usage domestique, spa, cabinet ou centre de bien-être.</p>
      <div class="benefit-chip-row">
        <div class="benefit-chip"><i class="fa-solid fa-volume-xmark"></i> Ultra silencieux</div>
        <div class="benefit-chip"><i class="fa-solid fa-shoe-prints"></i> Surface antidérapante</div>
      </div>
      <ul class="benefit-list">
        <li><i class="fa-solid fa-check"></i><span>Se déplace facilement d’une pièce à l’autre ou d’un cabinet à un autre.</span></li>
        <li><i class="fa-solid fa-check"></i><span>Nettoyage rapide de la surface après chaque séance pour un usage partagé.</span></li>
      </ul>
    </div>

    <div class="benefit-card">
      <h3><i class="fa-solid fa-circle-play"></i> Séances guidées & accompagnement</h3>
      <p>Pas besoin d’être expert : le Tera-P90 a été pensé pour être simple à prendre en main.</p>
      <ul class="benefit-list">
        <li><i class="fa-solid fa-check"></i><span>Programmes pré-enregistrés pour les premières séances.</span></li>
        <li><i class="fa-solid fa-check"></i><span>Possibilité d’être accompagné à distance pour optimiser l’utilisation.</span></li>
      </ul>
    </div>
  </aside>

  <!-- COLONNE CENTRALE : FICHE TECHNIQUE / DETAILS -->
  <main class="div7">
    <div class="div7-inner">
      <div class="section-header">
        <div>
          <h2>Détails & caractéristiques techniques</h2>
          <span>Une plateforme complète pour vos séances de bien-être.</span>
        </div>
        <span><i class="fa-solid fa-circle-info"></i> Fiche produit</span>
      </div>

      <div class="specs-grid">
        <div class="spec-item">
          <span class="label">Modèle</span>
          <span class="value">OlyLife THz Tera-P90</span>
        </div>
        <div class="spec-item">
          <span class="label">Modes</span>
          <span class="value">Plusieurs programmes automatiques</span>
        </div>
        <div class="spec-item">
          <span class="label">Surface</span>
          <span class="value">Plaques métalliques haute conductivité</span>
        </div>
        <div class="spec-item">
          <span class="label">Utilisation</span>
          <span class="value">Pieds, jambes & zones ciblées</span>
        </div>
        <div class="spec-item">
          <span class="label">Alimentation</span>
          <span class="value">220–240V • Basse consommation</span>
        </div>
        <div class="spec-item">
          <span class="label">Poids</span>
          <span class="value">Compact & facilement transportable</span>
        </div>
      </div>

      <div class="highlight-strip">
        <i class="fa-solid fa-leaf"></i>
        <div>
          Solution non invasive, silencieuse et simple d’utilisation. Une séance se lance en quelques secondes, sans préparation compliquée.
        </div>
      </div>

      <!-- DEMONSTRATION VIDEO -->
      <div class="video-card">
        <div class="video-wrapper">
          <video controls>
            <source src="images/VID-20251106-WA0003.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la lecture vidéo.
          </video>
        </div>
        <div class="video-meta">
          Démonstration THz Tera-P90
          <span>Découvrez le fonctionnement réel de l’appareil pendant une séance, de la mise en route jusqu’à la fin du programme.</span>
        </div>
      </div>
    </div>
  </main>

  <!-- COLONNE DROITE : OFFRES VENTE / LOCATION -->
  <section class="div5">

    <div class="div5-card" id="achat">
      <h3><i class="fa-solid fa-cart-shopping"></i> Offre d’achat</h3>

      <div class="pricing-row">
        <div class="price-line">
          <span>Prix unitaire conseillé</span>
          <strong>… F CFA</strong>
        </div>
        <div class="price-line">
          <span>Paiement en plusieurs fois</span>
          <span class="badge-inline"><i class="fa-solid fa-credit-card"></i> options disponibles</span>
        </div>
      </div>

      <p class="finance-info">
        Livraison premium, formation rapide à l’utilisation et support en ligne inclus. Garantie fabricant selon votre stock.
      </p>

      <ul class="offer-list">
        <li><i class="fa-solid fa-check"></i><span>Appareil neuf THz Tera-P90 avec accessoires complets.</span></li>
        <li><i class="fa-solid fa-check"></i><span>Câble d’alimentation, manuel d’utilisation en français et conseils de mise en route.</span></li>
        <li><i class="fa-solid fa-check"></i><span>Session d’installation et de prise en main (en visio ou sur place selon votre zone).</span></li>
        <li><i class="fa-solid fa-check"></i><span>Support WhatsApp / téléphone pour répondre à vos questions au quotidien.</span></li>
      </ul>

      <a href="commande_achat.php" class="btn-primary" style="margin-top:10px;">
        <i class="fa-solid fa-bag-shopping"></i> Commander le produit
      </a>

      <div class="divider"></div>

      <div class="trust-row">
        <i class="fa-solid fa-shield-halved"></i>
        <span>Garantie, facture & suivi personnalisés.</span>
      </div>
    </div>

    <div class="div5-card" id="location">
      <h3><i class="fa-solid fa-calendar-days"></i> Offre de location</h3>

      <div class="pricing-row">
        <div class="price-line">
          <span>À partir de</span>
          <strong>… F CFA / mois</strong>
        </div>
        <div class="price-line">
          <span>Durée minimale</span>
          <span class="badge-inline"><i class="fa-solid fa-clock-rotate-left"></i> ex : 1 à 3 mois</span>
        </div>
      </div>

      <p class="finance-info">
        Parfait pour tester l’appareil dans votre centre ou à domicile. Installation accompagnée et option d’achat en fin de contrat.
      </p>

      <ul class="offer-list">
        <li><i class="fa-solid fa-check"></i><span>Appareil contrôlé, testé et désinfecté avant chaque nouvelle location.</span></li>
        <li><i class="fa-solid fa-check"></i><span>Assistance à distance pendant toute la durée de la location.</span></li>
        <li><i class="fa-solid fa-check"></i><span>Possibilité de renouveler la location ou de basculer vers l’achat à tarif préférentiel.</span></li>
        <li><i class="fa-solid fa-check"></i><span>Idéal pour centres de bien-être qui souhaitent mesurer l’intérêt de leur clientèle.</span></li>
      </ul>

      <a href="demande_location.php" class="btn-ghost" style="margin-top:10px;">
        <i class="fa-solid fa-pen-to-square"></i> Demander une location
      </a>

      <div class="divider"></div>

      <div class="trust-row">
        <i class="fa-solid fa-users"></i>
        <span>Solution idéale pour spas, cabinets, studios et particuliers curieux.</span>
      </div>
    </div>

  </section>

  <!-- BAS DE PAGE / INFO RAPIDE -->
  <footer class="div8">
    <div class="div8-col">
      <h4>Pour qui est fait le THz Tera-P90 ?</h4>
      <p>Pour les particuliers, centres de bien-être, spas, salons, thérapeutes ou coachs qui souhaitent proposer une expérience premium.</p>
    </div>
    <div class="div8-col">
      <h4>Livraison & support</h4>
      <p>Livraison sur rendez-vous, assistance vidéo et accompagnement à distance après installation.</p>
    </div>
    <div class="div8-col div8-legal">
      <p>&copy; <?php echo date("Y"); ?> OlyLife – THz Tera-P90.</p>
      <p>Infos & commandes : <a href="mailto:contact@votre-boutique.com">contact@votre-boutique.com</a></p>
    </div>
  </footer>

</div>

</body>
</html>
