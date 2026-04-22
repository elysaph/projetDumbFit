<?php
$cards = [
    ['tone' => 'tone-red', 'icon' => 'TM', 'title' => 'Tempsaaaaa de sport', 'range' => 'Plage : 50-150 minutes/semaine'],
    ['tone' => 'tone-pink', 'icon' => 'HY', 'title' => 'Hydratation', 'range' => 'Plage : 2-3L/jour'],
    ['tone' => 'tone-blue', 'icon' => 'SL', 'title' => 'Sommeil', 'range' => 'Plage : 7-9h/nuit'],
    ['tone' => 'tone-violet', 'icon' => 'PD', 'title' => 'Poids', 'range' => 'Plage : 0-999 kg'],
    ['tone' => 'tone-orange', 'icon' => 'FR', 'title' => 'Frequence cardiaque', 'range' => 'Plage : 60-100 bpm'],
    ['tone' => 'tone-cyan', 'icon' => 'TA', 'title' => 'Tension arterielle', 'range' => 'Plage : 90/60-120/80'],
];
?>

<section class="hero">
    <div>
        <h1>Tableau de bord sante</h1>
        <p>Suivez vos indicateurs de sante en un coup d'oeil.</p>
    </div>
    <a class="btn hero-btn" href="index.php?page=objectif">Ajouter des donnees sante</a>
</section>

<section class="cards" aria-label="Indicateurs de sante">
    <?php foreach ($cards as $card): ?>
        <article class="card <?php echo $card['tone']; ?>">
            <h2><span class="metric-icon"><?php echo $card['icon']; ?></span><?php echo htmlspecialchars($card['title']); ?></h2>
            <p class="status">Aucune donnee enregistree</p>
            <p class="range"><?php echo htmlspecialchars($card['range']); ?></p>
        </article>
    <?php endforeach; ?>
</section>

<section class="summary" aria-label="Resume de sante">
    <h2>Resume de sante</h2>
    <p>Vue d'ensemble de votre suivi de sante.</p>
    <div class="stats">
        <article class="stat stat-blue">
            <p class="value">0</p>
            <p class="label">Mesures totales</p>
        </article>
        <article class="stat stat-green">
            <p class="value">0</p>
            <p class="label">Indicateurs suivis</p>
        </article>
        <article class="stat stat-amber">
            <p class="value">0</p>
            <p class="label">Alertes actives</p>
        </article>
    </div>
</section>