<?php get_header(); ?>
<section class="hero">
  <div class="container hero-grid">
    <div class="card hero-main">
      <img class="hero-top-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/hero/lobirent-header.jpg'); ?>" alt="Lobirent görseli">
      <span class="kicker">Lobirent • Türkiye Gündemi</span>
      <h1>Gündemin içinde kaybolma, Lobirent’te yolunu bul.</h1>
      <p>Güncel haberler, forum tartışmaları, kategori bazlı içerik ve kullanıcı dostu bir ana sayfa.</p>
      <div class="hero-actions">
        <a class="button button-primary" href="/haberler">Haberleri Gör</a>
        <a class="button button-secondary" href="/forum">Forumlara Git</a>
        <a class="button button-secondary" href="/hosting">Hosting Karşılaştır</a>
      </div>
    </div>
    <div class="card hero-side">
      <h3>Bugünün başlıkları</h3>
      <div class="quick-topics">
        <div class="topic-item"><span>Ekonomi</span><strong>12 konu</strong></div>
        <div class="topic-item"><span>Siyaset</span><strong>18 konu</strong></div>
        <div class="topic-item"><span>Teknoloji</span><strong>7 konu</strong></div>
        <div class="topic-item"><span>Spor</span><strong>9 konu</strong></div>
      </div>
    </div>
  </div>
</section>

<section id="gundem" class="section">
  <div class="container grid-3">
    <div class="card block">
      <span class="tag">Teknoloji</span>
      <h3>Hızlı rehberler</h3>
      <p class="meta">Telefonlar, uygulamalar, internet ve dijital dünya için sade içerikler.</p>
    </div>
    <div class="card block">
      <span class="tag">Bilgi</span>
      <h3>Wiki tarzı arşiv</h3>
      <p class="meta">Kısa, net ve kolay okunur bilgi sayfaları.</p>
    </div>
    <div class="card block">
      <span class="tag">Topluluk</span>
      <h3>Yorum ve forum</h3>
      <p class="meta">İnsanların hızlıca okuyup katkı vereceği alan.</p>
    </div>
  </div>
</section>

<section id="haberler" class="section">
  <div class="container grid-2">
    <div class="card block">
      <h2>Öne çıkan haberler</h2>
      <div class="news-list">
        <article class="news-item">
          <span class="tag">Güncel</span>
          <h3>TMSF yönetimindeydi: Türkiye'nin ünlü baklavacısı satışa çıkarıldı</h3>
          <p class="meta">Kaynak: BirGün • 17.03.2026 09:58</p>
        </article>
        <article class="news-item">
          <span class="tag">Ulaşım</span>
          <h3>İstanbul'da bayramda toplu taşıma ücretsiz olacak</h3>
          <p class="meta">Kaynak: Mynet • son dakika akışı</p>
        </article>
        <article class="news-item">
          <span class="tag">Dış Politika</span>
          <h3>Türkiye'den İsrail'e çok sert Mescid-i Aksa tepkisi</h3>
          <p class="meta">Kaynak: Haber7 • 12:27</p>
        </article>
      </div>
    </div>
    <aside class="card block">
      <h2>Hızlı erişim</h2>
      <div class="forum-list">
        <div class="forum-item"><strong>Siyaset Forumu</strong><div class="meta">En aktif tartışmalar</div></div>
        <div class="forum-item"><strong>Gündem Forumu</strong><div class="meta">Bugünün başlıkları</div></div>
        <div class="forum-item"><strong>Teknoloji Forumu</strong><div class="meta">Yeni içerikler</div></div>
      </div>
    </aside>
  </div>
</section>

<section id="forum" class="section">
  <div class="container card block">
    <h2>Forum alanı</h2>
    <div class="grid-3">
      <div class="forum-item"><strong>Genel Tartışma</strong><div class="meta">Günlük konular</div></div>
      <div class="forum-item"><strong>Soru & Cevap</strong><div class="meta">Topluluktan destek</div></div>
      <div class="forum-item"><strong>Analiz</strong><div class="meta">Derin yorumlar</div></div>
    </div>
  </div>
</section>

<section id="kategoriler" class="section">
  <div class="container">
    <div class="stats">
      <div class="card stat"><strong>24</strong>Kategori</div>
      <div class="card stat"><strong>320+</strong>Başlık</div>
      <div class="card stat"><strong>1.2K</strong>Yorum</div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
