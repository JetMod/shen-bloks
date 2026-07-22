<?php
if (!isset($shen_assets_url)) {
    $shen_assets_url = '';
}
$shen_assets_url = rtrim((string)$shen_assets_url, '/') . ($shen_assets_url !== '' ? '/' : '');
?>
<link rel="stylesheet" href="<?php echo htmlspecialchars($shen_assets_url . 'index.css', ENT_QUOTES, 'UTF-8'); ?>" />

<div id="block-about">
<section class="shen-ab-section">
  <div class="shen-ab-container">
    <div class="shen-ab-intro">
      <div>
        <div class="shen-ab-eyebrow">О нас</div>
        <h2 class="shen-ab-h2">Маркетплейс для<br><em>покупателей и продавцов</em></h2>
        <p class="shen-ab-text">Shen — площадка для HoReCa и дома: продавцы размещают товары в едином каталоге, а покупатели заказывают у разных поставщиков без переключения между магазинами.</p>
        <p class="shen-ab-text">Каждый продавец заключает с нами договор и проходит проверку. В каталоге — посуда, барное стекло, столовые приборы, кухонный инвентарь, текстиль, мебель и профессиональное оборудование.</p>
        <div class="shen-ab-tags">
          <span class="shen-ab-tag">Посуда</span>
          <span class="shen-ab-tag">Барное стекло</span>
          <span class="shen-ab-tag">Столовые приборы</span>
          <span class="shen-ab-tag">Кухонный инвентарь</span>
          <span class="shen-ab-tag">Текстиль</span>
          <span class="shen-ab-tag">Мебель</span>
          <span class="shen-ab-tag">Оборудование</span>
        </div>
        <p class="shen-ab-text">Один сайт, одна корзина и доставка по всей России — из Крыма к покупателям по всей стране.</p>
      </div>

      <div class="shen-ab-photo">
        <img
          src="<?php echo htmlspecialchars($shen_assets_url, ENT_QUOTES, 'UTF-8'); ?>images/image.png"
          alt="Профессиональная кухня"
          loading="lazy"
        />
        <div class="shen-ab-photo-tag">Крым · Работаем по всей России</div>
      </div>
    </div>

    
    <div class="shen-ab-stats">
      <div class="shen-ab-stat">
        <div class="shen-ab-stat-num">HoReCa<span>+дом</span></div>
        <div class="shen-ab-stat-label">Один каталог для бизнеса и частных покупателей</div>
      </div>
      <div class="shen-ab-stat">
        <div class="shen-ab-stat-num">100<span>%</span></div>
        <div class="shen-ab-stat-label">Продавцов с договором и проверкой</div>
      </div>
      <div class="shen-ab-stat">
        <div class="shen-ab-stat-num">1 <span>корзина</span></div>
        <div class="shen-ab-stat-label">Покупка у разных продавцов сразу</div>
      </div>
      <div class="shen-ab-stat">
        <div class="shen-ab-stat-num">РФ</div>
        <div class="shen-ab-stat-label">Доставка по всей России</div>
      </div>
    </div>

    
    <div class="shen-ab-features">
      <div class="shen-ab-feature">
        <div class="shen-ab-feature-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        </div>
        <h3 class="shen-ab-feature-title">Проверенные продавцы</h3>
        <p class="shen-ab-feature-text">Перед размещением товаров продавец проходит проверку и заключает договор. Так мы держим качество ассортимента и ответственность за заказы.</p>
      </div>
      <div class="shen-ab-feature">
        <div class="shen-ab-feature-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
        </div>
        <h3 class="shen-ab-feature-title">Единый каталог и корзина</h3>
        <p class="shen-ab-feature-text">Не нужно обходить десятки сайтов. Собирайте заказ у разных продавцов в одной корзине — удобно и для дома, и для бизнеса.</p>
      </div>
      <div class="shen-ab-feature">
        <div class="shen-ab-feature-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
        </div>
        <h3 class="shen-ab-feature-title">Доставка по России</h3>
        <p class="shen-ab-feature-text">Работаем из Крыма и отправляем заказы по всей стране. Частным покупателям и заведениям HoReCa — с понятной логистикой.</p>
      </div>
    </div>

  </div>

</section>
  </div>

  

  

  <div id="block-reviews">

<section class="shen-rv-section">
  

  <div class="shen-rv-container">
    <div class="shen-rv-heading">
      <div>
        <div class="shen-rv-eyebrow">Отзывы клиентов</div>
        <h2>Нам доверяют<br><em>тысячи покупателей</em></h2>
      </div>
      <div class="shen-rv-heading-right">
        <p>Реальные отзывы — от частных покупателей до крупных заведений HoReCa по всему Крыму и России.</p>
        <div class="shen-rv-badge">
          <div class="shen-rv-badge-stars">
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <div class="shen-rv-badge-score">5.0</div>
          <div class="shen-rv-badge-divider"></div>
          <div class="shen-rv-badge-meta">
            <strong>2 089 отзывов</strong>
            Яндекс Карты
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="shen-rv-track">

    
    <div class="shen-rv-row shen-rv-row--left">
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Ходим в этот магазин уже много лет всей семьёй. Особенно нравится турецкая посуда — прочная и долговечная. Персонал всегда вежливый и помогает с выбором.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar">ДИ</div>
          <div><div class="shen-rv-name">Din</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Огромный выбор посуды на любой вкус. Если нужно закупиться для дома или на подарок — отличный вариант. Персонал всегда подскажет и поможет.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar shen-rv-avatar--alt">ЕВ</div>
          <div><div class="shen-rv-name">Евгений</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Это предприятие можно смело назвать маркетом для предпринимателей общепита. Посуда, мебель, оборудование — есть практически всё.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar shen-rv-avatar--alt2">ВА</div>
          <div><div class="shen-rv-name">Вячеслав Андриясов</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Хороший магазин, большой ассортимент посуды и мелочей для дома. Приятная атмосфера, отличный выбор и демократичные цены.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar">ОМ</div>
          <div><div class="shen-rv-name">Ольга М</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Большой выбор: вазы, посуда, столовые приборы. По хозтоварам много всего. Новогодняя продукция уже в октябре — удобно для декораторов.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar shen-rv-avatar--alt">АКЛ</div>
          <div><div class="shen-rv-name">Алёна Куликова</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Очень хороший выбор товаров для дома, посуды и мебели, в том числе уличной. Всегда доброжелательный персонал и приятные цены.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar shen-rv-avatar--alt2">ЛЯ</div>
          <div><div class="shen-rv-name">LerchikYalta</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Если хочется что-то праздничное — посуда тут на любой случай жизни. Также техника и проф-оборудование для кухни. Многое тут есть.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar">АИ</div>
          <div><div class="shen-rv-name">Аркадий Игоревич</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Прекрасный магазин, большой ассортимент, качественная посуда — всегда есть что купить на подарок.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar shen-rv-avatar--alt">ЕЛ</div>
          <div><div class="shen-rv-name">Елена</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
    </div>

    
    <div class="shen-rv-row shen-rv-row--right">
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Как не приеду — на час-полтора выпадаю из внешнего мира. В этом магазине есть ВСЁ! Посуда невероятная, персонал всегда поможет.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar">ДД</div>
          <div><div class="shen-rv-name">Дария Датская</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Лучший магазин с кухонной утварью в Симферополе. Много оборудования для ресторанов и общепита. Всё по хорошим ценам.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar shen-rv-avatar--alt">ГГ</div>
          <div><div class="shen-rv-name">Господин Глеб</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Хорошее обслуживание, отличный ассортимент и адекватные цены. В Москве тяжело найти достойную замену. Посещаю каждый приезд в Симферополь.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar shen-rv-avatar--alt2">АК</div>
          <div><div class="shen-rv-name">Александр Кондиков</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Этот магазин — лучший из тех, что я посещала. Выкладка, цены, персонал, интерьер. Четыре этажа ассортимента. Однозначно 5 звёзд!</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar">АС</div>
          <div><div class="shen-rv-name">Alyona Solodkaya</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Огромный магазин. Посуда, инвентарь, стекло, оборудование, мебель, текстиль — для профессионалов и для дома. Хорошие цены.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar shen-rv-avatar--alt">ИР</div>
          <div><div class="shen-rv-name">Ирина Т.</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Очень нравится этот магазин. Большой ассортимент. Персонал вежливый, всегда поможет с выбором.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar shen-rv-avatar--alt2">НБ</div>
          <div><div class="shen-rv-name">Наталья Брит</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Кроме огромного выбора и замечательных цен здесь работают отзывчивые люди. Подскажут, помогут с выбором и даже донесут покупки до машины.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar">ТК</div>
          <div><div class="shen-rv-name">Татьяна К.</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
      <div class="shen-rv-card">
        <div class="shen-rv-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="shen-rv-quote-mark">"</div>
        <div class="shen-rv-text">Отличный магазин для настоящих профессионалов. Качественный товар, отзывчивый персонал. Всегда находится решение и приятные скидки.</div>
        <div class="shen-rv-author">
          <div class="shen-rv-avatar shen-rv-avatar--alt">ИА</div>
          <div><div class="shen-rv-name">Ильяс Абкелямов</div><div class="shen-rv-sub">Яндекс Карты</div></div>
          <div class="shen-rv-platform"><svg width="20" height="20" viewBox="0 0 24 24" fill="#FC3F1D"><path d="M2.04 12c0-5.523 4.476-10 9.999-10C17.522 2 22 6.477 22 12s-4.478 10-10.001 10C6.516 22 2.04 17.523 2.04 12zm8.193 5h1.55v-4.702l4.174 4.702h2.07l-4.66-5.2L17.6 7H15.63l-3.843 4.252V7h-1.55v10zm-1.896 0V7H6.79v10h1.547z"/></svg></div>
        </div>
      </div>
    </div>

  </div>
</section>
  </div>

  <div id="block-advantages">

<section class="shen-wc-section">
  

  <div class="shen-wc-container">
    <div class="shen-wc-layout">

      
      <div class="shen-wc-feature">
        <div class="shen-wc-eyebrow">Наши преимущества</div>
        <h2>Почему профессионалы HoReCa выбирают Shen</h2>
        <p>Официальная дистрибуция, собственная марка, широкий ассортимент и персональный сервис — всё для вашего бизнеса.</p>
        <div class="shen-wc-rating">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.85)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0"><path d="M20 7H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
          <div class="shen-wc-rating-score">Широкий</div>
          <div class="shen-wc-rating-sep"></div>
          <div class="shen-wc-rating-meta">
            <strong>ассортимент</strong>
            для HoReCa и дома
          </div>
        </div>
        <a href="become-seller.html" class="shen-wc-link">
          Получить коммерческое предложение
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

      
      <div class="shen-wc-rows">

        <div class="shen-wc-row">
          <span class="shen-wc-row-num">01</span>
          <div class="shen-wc-row-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/>
              <rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>
            </svg>
          </div>
          <div>
            <div class="shen-wc-row-title">Широкий ассортимент</div>
            <div class="shen-wc-row-desc">Посуда, мебель, текстиль, оборудование и хозтовары — полная комплектация заведения из одного источника.</div>
          </div>
          <span class="shen-wc-row-tag">Каталог</span>
        </div>

        <div class="shen-wc-row">
          <span class="shen-wc-row-num">02</span>
          <div class="shen-wc-row-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="8" r="6"/>
              <path d="M9 12l2 2 4-4"/>
              <path d="M3 20a9 9 0 0 1 18 0"/>
            </svg>
          </div>
          <div>
            <div class="shen-wc-row-title">Официальная дистрибуция брендов</div>
            <div class="shen-wc-row-desc">Porland, Korkmaz, Vileda, Siesta, SAREV и другие — прямые поставки от ведущих мировых производителей.</div>
          </div>
          <span class="shen-wc-row-tag">Бренды</span>
        </div>

        <div class="shen-wc-row">
          <span class="shen-wc-row-num">03</span>
          <div class="shen-wc-row-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>
          </div>
          <div>
            <div class="shen-wc-row-title">Собственная марка HoReCa PROFI</div>
            <div class="shen-wc-row-desc">Эксклюзивный ассортимент под собственной торговой маркой — профессиональное качество по оптимальной цене.</div>
          </div>
          <span class="shen-wc-row-tag">Эксклюзив</span>
        </div>

        <div class="shen-wc-row">
          <span class="shen-wc-row-num">04</span>
          <div class="shen-wc-row-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
              <circle cx="12" cy="7" r="4"/>
            </svg>
          </div>
          <div>
            <div class="shen-wc-row-title">Персональный менеджер</div>
            <div class="shen-wc-row-desc">Закреплённый специалист подберёт ассортимент под концепцию вашего заведения и сопроводит сделку.</div>
          </div>
          <span class="shen-wc-row-tag">Сервис</span>
        </div>

        <div class="shen-wc-row">
          <span class="shen-wc-row-num">05</span>
          <div class="shen-wc-row-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="19" y1="5" x2="5" y2="19"/>
              <circle cx="6.5" cy="6.5" r="2.5"/>
              <circle cx="17.5" cy="17.5" r="2.5"/>
            </svg>
          </div>
          <div>
            <div class="shen-wc-row-title">Гибкие скидки по объёму</div>
            <div class="shen-wc-row-desc">Индивидуальные условия сотрудничества и скидки для B2B-клиентов в зависимости от объёма и регулярности закупок.</div>
          </div>
          <span class="shen-wc-row-tag">B2B</span>
        </div>

        <div class="shen-wc-row">
          <span class="shen-wc-row-num">06</span>
          <div class="shen-wc-row-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="1" y="3" width="15" height="13" rx="2"/>
              <path d="M16 8h4l3 5v3h-7V8z"/>
              <circle cx="5.5" cy="18.5" r="2.5"/>
              <circle cx="18.5" cy="18.5" r="2.5"/>
            </svg>
          </div>
          <div>
            <div class="shen-wc-row-title">Доставка по Крыму и России</div>
            <div class="shen-wc-row-desc">Доставляем по всему Крыму и России. Самовывоз со склада в Симферополе — удобно и быстро.</div>
          </div>
          <span class="shen-wc-row-tag">Логистика</span>
        </div>

      </div>
    </div>

    <a href="hotels-horeca.html" class="shen-wc-bottom-link">
      Подробнее об оснащении для гостиниц и HoReCa
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
  </div>
</section>
  </div>

  <div id="block-faq">

<section class="shen-faq-section">
  

  <div class="shen-faq-container">

    <div class="shen-faq-heading">
      <div>
        <div class="shen-faq-eyebrow">FAQ</div>
        <h2>Часто задаваемые <em>вопросы</em></h2>
      </div>
      <div class="shen-faq-heading-right">
        <p>Собрали ответы на самые популярные вопросы наших клиентов. Если не нашли нужный — напишите нам напрямую.</p>
        <a href="#contacts" class="shen-faq-contact-link">Связаться с нами</a>
      </div>
    </div>

    <div class="shen-faq-list" id="shen-faq-list">

      <div class="shen-faq-item">
        <div class="shen-faq-question">
          <span class="shen-faq-q-text">Как оформить заказ?</span>
          <span class="shen-faq-icon" aria-hidden="true"></span>
        </div>
        <div class="shen-faq-answer">
          <div class="shen-faq-answer-inner">Выберите нужный товар в каталоге и нажмите кнопку «Заказать». Укажите контактные данные — менеджер свяжется с вами в ближайшее время, уточнит детали и подтвердит заказ.</div>
        </div>
      </div>

      <div class="shen-faq-item">
        <div class="shen-faq-question">
          <span class="shen-faq-q-text">Какие способы оплаты принимаете?</span>
          <span class="shen-faq-icon" aria-hidden="true"></span>
        </div>
        <div class="shen-faq-answer">
          <div class="shen-faq-answer-inner">Принимаем наличные, банковские карты и безналичный перевод. Для юридических лиц доступна оплата по счёту с оформлением всех необходимых документов — уточните у менеджера.</div>
        </div>
      </div>

      <div class="shen-faq-item">
        <div class="shen-faq-question">
          <span class="shen-faq-q-text">Доставляете ли в мой город?</span>
          <span class="shen-faq-icon" aria-hidden="true"></span>
        </div>
        <div class="shen-faq-answer">
          <div class="shen-faq-answer-inner">Мы доставляем по всему Крыму и России. Уточните свой город при оформлении заказа — менеджер рассчитает стоимость и сроки доставки индивидуально.</div>
        </div>
      </div>

      <div class="shen-faq-item">
        <div class="shen-faq-question">
          <span class="shen-faq-q-text">Можно ли забрать товар самовывозом?</span>
          <span class="shen-faq-icon" aria-hidden="true"></span>
        </div>
        <div class="shen-faq-answer">
          <div class="shen-faq-answer-inner">Да, самовывоз доступен со склада в Симферополе. После подтверждения заказа вам сообщат точный адрес и удобное время для получения.</div>
        </div>
      </div>

      <div class="shen-faq-item">
        <div class="shen-faq-question">
          <span class="shen-faq-q-text">Есть ли гарантия на товары?</span>
          <span class="shen-faq-icon" aria-hidden="true"></span>
        </div>
        <div class="shen-faq-answer">
          <div class="shen-faq-answer-inner">Гарантия на товары предоставляется продавцом в соответствии с законодательством РФ. При возникновении гарантийного случая обратитесь в поддержку Shen — мы поможем связаться с продавцом и решить вопрос.</div>
        </div>
      </div>

      <div class="shen-faq-item">
        <div class="shen-faq-question">
          <span class="shen-faq-q-text">Как вернуть товар?</span>
          <span class="shen-faq-icon" aria-hidden="true"></span>
        </div>
        <div class="shen-faq-answer">
          <div class="shen-faq-answer-inner">Возврат возможен в течение 14 дней с момента получения при условии сохранения товарного вида и упаковки. Свяжитесь с нашим менеджером — мы оформим возврат без лишних формальностей.</div>
        </div>
      </div>

      <div class="shen-faq-item">
        <div class="shen-faq-question">
          <span class="shen-faq-q-text">Работаете ли вы с юридическими лицами?</span>
          <span class="shen-faq-icon" aria-hidden="true"></span>
        </div>
        <div class="shen-faq-answer">
          <div class="shen-faq-answer-inner">Да, мы активно сотрудничаем с организациями в сфере HoReCa, розничной торговли и корпоративного сектора. Оформляем полный пакет закрывающих документов: счёт, товарную накладную, акт выполненных работ. Возможна оплата по безналичному расчёту — для этого оставьте заявку, и менеджер подготовит договор и счёт на оплату.</div>
        </div>
      </div>

      <div class="shen-faq-item">
        <div class="shen-faq-question">
          <span class="shen-faq-q-text">Как стать продавцом на Shen?</span>
          <span class="shen-faq-icon" aria-hidden="true"></span>
        </div>
        <div class="shen-faq-answer">
          <div class="shen-faq-answer-inner">Оставьте <a href="become-seller.html" style="color:#c0392b;font-weight:600;">заявку на странице для продавцов</a> или напишите на zakaz@shen.com.ru. Мы свяжемся с вами, обсудим ассортимент и условия, заключим договор — после этого вы сможете размещать товары в каталоге маркетплейса.</div>
        </div>
      </div>

      <div class="shen-faq-item">
        <div class="shen-faq-question">
          <span class="shen-faq-q-text">Можно ли заказать комплектацию объекта под ключ?</span>
          <span class="shen-faq-icon" aria-hidden="true"></span>
        </div>
        <div class="shen-faq-answer">
          <div class="shen-faq-answer-inner">Да. На маркетплейсе можно собрать заказ для целого объекта — посуда, мебель, текстиль, оборудование — у разных продавцов в одной корзине. Выбирайте товары по категориям и оформляйте единый заказ.</div>
        </div>
      </div>

    </div>
  </div>
</section>
  </div>

  <div id="block-contacts">

<section class="shen-ct-section" id="contacts">
  

  <div class="shen-ct-container">
    <div class="shen-ct-heading">
      <div class="shen-ct-eyebrow">Связаться с нами</div>
      <h2>Контакты</h2>
      <p>Поможем с заказом, самовывозом или подключением продавца — ответим быстро в рабочее время.</p>
    </div>

    <div class="shen-ct-grid">
      <div class="shen-ct-card">
        <div class="shen-ct-badges">
          <span class="shen-ct-badge">Офис и склад самовывоза</span>
          <span class="shen-ct-badge shen-ct-badge--live" id="shen-ct-status">
            <span class="shen-ct-dot" aria-hidden="true"></span>
            <span class="shen-ct-status-text">Сейчас работаем</span>
          </span>
        </div>

        <div class="shen-ct-meta">
          <div class="shen-ct-line">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <span>г. Симферополь, ул. Генерала Васильева, 40</span>
          </div>
          <a href="tel:+79780888643" class="shen-ct-phone">+7 (978) 088-86-43</a>
          <a href="mailto:zakaz@shen.com.ru" class="shen-ct-line">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <span>zakaz@shen.com.ru</span>
          </a>
        </div>

        <div class="shen-ct-actions">
          <a href="tel:+79780888643" class="shen-ct-btn shen-ct-btn--primary">Позвонить сейчас</a>
        </div>

        <ul class="shen-ct-benefits">
          <li>Консультация по заказу за 10 минут</li>
          <li>Самовывоз со склада в Симферополе</li>
          <li>Поддержка покупателей и продавцов в рабочее время</li>
        </ul>

        <div class="shen-ct-foot">
          <div class="shen-ct-hours">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            Пн–Пт: 9:00–18:00
          </div>
          <a class="shen-ct-map-link" href="https://yandex.ru/maps/?text=%D0%B3.%20%D0%A1%D0%B8%D0%BC%D1%84%D0%B5%D1%80%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C%2C%20%D1%83%D0%BB.%20%D0%93%D0%B5%D0%BD%D0%B5%D1%80%D0%B0%D0%BB%D0%B0%20%D0%92%D0%B0%D1%81%D0%B8%D0%BB%D1%8C%D0%B5%D0%B2%D0%B0%2C%2040" target="_blank" rel="noopener noreferrer">На карте ↗</a>
        </div>
      </div>

      <div class="shen-ct-map">
        <iframe
          title="Карта — Shen, ул. Генерала Васильева, 40"
          src="https://yandex.ru/map-widget/v1/?ll=34.072829%2C44.931068&z=16&l=map&pt=34.072829,44.931068,pm2rdm"
          loading="lazy"
          allowfullscreen
        ></iframe>
        <div class="shen-ct-map-card">
          <div>
            <strong>Shen</strong>
            <span>г. Симферополь, ул. Генерала Васильева, 40</span>
          </div>
          <a href="https://yandex.ru/maps/?text=%D0%B3.%20%D0%A1%D0%B8%D0%BC%D1%84%D0%B5%D1%80%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C%2C%20%D1%83%D0%BB.%20%D0%93%D0%B5%D0%BD%D0%B5%D1%80%D0%B0%D0%BB%D0%B0%20%D0%92%D0%B0%D1%81%D0%B8%D0%BB%D1%8C%D0%B5%D0%B2%D0%B0%2C%2040" target="_blank" rel="noopener noreferrer">Открыть в Яндекс Картах</a>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>

<script>
  
  (function () {
    var SPEED = 0.06; 

    document.querySelectorAll('.shen-rv-row').forEach(function (row) {
      var isRight = row.classList.contains('shen-rv-row--right');
      var origCards = Array.from(row.querySelectorAll('.shen-rv-card'));
      var setWidth = Math.round(row.scrollWidth);

      
      origCards.forEach(function (c) { row.appendChild(c.cloneNode(true)); });

      
      while (row.scrollWidth < window.innerWidth * 3 + 400) {
        origCards.forEach(function (c) { row.appendChild(c.cloneNode(true)); });
      }

      var pos = isRight ? -setWidth : 0;
      var last = null;
      var paused = false;

      row.addEventListener('mouseenter', function () { paused = true; });
      row.addEventListener('mouseleave', function () { paused = false; });

      function step(ts) {
        if (last !== null && !paused) {
          var delta = Math.min(ts - last, 50);
          pos += isRight ? SPEED * delta : -SPEED * delta;
          if (pos <= -setWidth) pos += setWidth;
          if (pos > 0)          pos -= setWidth;
          row.style.transform = 'translateX(' + pos + 'px)';
        }
        last = ts;
        requestAnimationFrame(step);
      }
      requestAnimationFrame(step);
    });
  })();

  
  (function () {
    const faqList = document.getElementById('shen-faq-list');
    if (!faqList) return;

    faqList.addEventListener('click', function (e) {
      const question = e.target.closest('.shen-faq-question');
      if (!question) return;
      const item = question.closest('.shen-faq-item');
      const answer = item.querySelector('.shen-faq-answer');
      const isOpen = item.classList.contains('is-open');

      faqList.querySelectorAll('.shen-faq-item.is-open').forEach(function (openItem) {
        openItem.classList.remove('is-open');
        openItem.querySelector('.shen-faq-answer').style.maxHeight = '0';
      });

      if (!isOpen) {
        item.classList.add('is-open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  })();

  
  (function () {
    var status = document.getElementById('shen-ct-status');
    if (!status) return;
    var text = status.querySelector('.shen-ct-status-text');
    var now = new Date();
    var utc = now.getTime() + now.getTimezoneOffset() * 60000;
    var msk = new Date(utc + 3 * 3600000);
    var day = msk.getDay();
    var mins = msk.getHours() * 60 + msk.getMinutes();
    var open = day >= 1 && day <= 5 && mins >= 9 * 60 && mins < 18 * 60;
    if (open) {
      status.className = 'shen-ct-badge shen-ct-badge--live';
      text.textContent = 'Сейчас работаем';
    } else {
      status.className = 'shen-ct-badge shen-ct-badge--closed';
      text.textContent = 'Сейчас закрыто';
    }
  })();
</script>
