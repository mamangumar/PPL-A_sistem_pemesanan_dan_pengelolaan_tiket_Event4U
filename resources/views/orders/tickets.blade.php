<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tiket Anda - Konser Billie Eilish</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #fafafa;
      color: #1a1a1a;
    }
    header {
      background-color: #880e1f;
      color: white;
      padding: 1rem 2rem;
      font-weight: bold;
    }
    .ticket-container {
      display: flex;
      flex-wrap: wrap;
      background: white;
      margin: 2rem auto;
      padding: 2rem;
      border-radius: 12px;
      max-width: 1000px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .poster {
      width: 250px;
      height: auto;
      margin-right: 2rem;
      border-radius: 8px;
    }
    .ticket-info {
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    .ticket-info h2 {
      margin-top: 0;
    }
    .info-line {
      margin: 0.5rem 0;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .description {
      margin: 1rem 0;
      line-height: 1.6;
      color: #444;
    }
    .details-box {
      display: flex;
      justify-content: space-between;
      background: #f8f8f8;
      border-radius: 8px;
      padding: 1rem;
      margin-top: auto;
    }
    .details-box div {
      width: 48%;
    }
    .details-box p {
      margin: 0.3rem 0;
    }
    .price-box {
      background: #fff;
      margin-top: 1rem;
      padding: 1rem;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    .price-box strong {
      display: inline-block;
      width: 120px;
    }
    .vip-icon {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-top: 1rem;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <header>Event 4 U</header>

  <main class="ticket-container">
    <img src="{{ asset('be.png') }}" alt="Poster Billie Eilish" class="poster">

    <div class="ticket-info">
      <h2>Konser’e Billie Eilish</h2>
      <div class="info-line">📅 23 Oktober - 27 Oktober 2025</div>
      <div class="info-line">⏰ 19.00 - 22.00</div>
      <div class="info-line">📍 Stadion Manaja</div>

      <div class="description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
      </div>

      <div class="details-box">
        <div>
          <p><em>Kode Pembayaran</em><br><strong>AK810JS-AJKS</strong></p>
          <p><em>Tanggal Pembelian</em><br>17 Maret 2025</p>
        </div>
        <div>
          <p><em>Nama</em><br>Joko Van Harris</p>
        </div>
      </div>

      <div class="vip-icon">🎫 VIP — 2 Tiket</div>

      <div class="price-box">
        <p><strong>Pre-Sale:</strong> Rp 931.000 × 2</p>
        <p><strong>Total:</strong> Rp 1.862.000</p>
      </div>
    </div>
  </main>
</body>
</html>
