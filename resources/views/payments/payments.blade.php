<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event 4 U - Ticket Booking</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff;
            color: #000;
        }
        header {
            background-color: #880e1f;
            color: #fff;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: #fff;
            margin-left: 1rem;
            text-decoration: none;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            padding: 2rem;
            gap: 2rem;
        }
        .card {
            border: 1px solid #ccc;
            padding: 1rem;
            border-radius: 8px;
        }
        .event-image {
            width: 250px;
        }
        .form-section {
            flex: 1;
            min-width: 300px;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.3rem;
        }
        .radio-group {
            display: flex;
            gap: 1rem;
            align-items: center;
        }
        .order-summary {
            margin-top: 1rem;
            border: 1px solid #ccc;
            padding: 1rem;
            border-radius: 8px;
        }
        .order-header {
            background: yellow;
            text-align: center;
            padding: 0.5rem;
            font-weight: bold;
        }
        .order-details {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }
        .email-notif {
            margin-top: 1rem;
        }
        .btn-pay {
            margin-top: 1rem;
            background-color: #880e1f;
            color: #fff;
            padding: 0.7rem 2rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .payment-detail {
            display: none;
        }
        footer {
            background-color: #880e1f;
            color: #fff;
            padding: 2rem;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        footer div {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

<header>
    <div>Event 4 U</div>
    <nav>
        <a href="#">Home</a>
        <a href="#">Category</a>
        <a href="#">Login</a>
        <a href="#">Sign Up</a>
        <a href="#">Contact</a>
    </nav>
</header>

<main class="container">
    <div class="card">
        <img src="be.png" alt="Billie Eilish Poster" class="event-image">
        <h3>Konser Billie Eilish</h3>
        <p><strong>Tanggal:</strong> 23 Oktober - 27 Oktober 2025</p>
        <p><strong>Waktu:</strong> 19:00 - 22:00</p>
        <p><strong>Lokasi:</strong> Stadion Manjá</p>
    </div>

    <div class="form-section">
        <h3>Attendee</h3>
        <form action="/guest/tickets/{{ \$ticket->id }}/order" method="POST">
            @csrf
            <div class="form-group">
                <label>Name*</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Email*</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Date of Birth*</label>
                <input type="date" name="dob" required>
            </div>
            <div class="form-group">
                <label>Phone Number*</label>
                <input type="tel" name="phone" required>
            </div>
            <div class="form-group">
                <label>ID Number (KTP/Driving License/Passport, etc)*</label>
                <input type="text" name="id_number" required>
            </div>
            <div class="form-group">
                <label>Gender*</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                </div>
            </div>

            <div class="form-group">
                <label>Payment Method*</label>
                <select name="payment_method" id="payment_method" required>
                    <option value="">-- Select Payment Method --</option>
                    <option value="credit">Credit Card</option>
                    <option value="va">Virtual Account</option>
                    <option value="wallet">Wallet</option>
                    <option value="paylater">PayLater</option>
                </select>
            </div>

            <div class="form-group payment-detail" id="credit-form">
                <label>Card Number</label>
                <input type="text" name="card_number" maxlength="16">
                <label>Name on Card</label>
                <input type="text" name="card_name">
                <label>Expiry Date</label>
                <input type="month" name="card_expiry">
                <label>CVV</label>
                <input type="text" name="card_cvv" maxlength="4">
            </div>

            <div class="form-group payment-detail" id="va-form">
                <label>Choose Bank</label>
                <select name="va_bank">
                    <option value="">-- Select Bank --</option>
                    <option value="BCA">BCA</option>
                    <option value="BNI">BNI</option>
                    <option value="Mandiri">Mandiri</option>
                    <option value="BRI">BRI</option>
                </select>
            </div>

            <div class="form-group payment-detail" id="wallet-form">
                <label>Choose Wallet</label>
                <select name="wallet_option">
                    <option value="">-- Select Wallet --</option>
                    <option value="Gopay">GoPay</option>
                    <option value="OVO">OVO</option>
                    <option value="DANA">DANA</option>
                    <option value="ShopeePay">ShopeePay</option>
                </select>
            </div>

            <div class="form-group payment-detail" id="paylater-form">
                <label>Choose PayLater Provider</label>
                <select name="paylater_option">
                    <option value="">-- Select Provider --</option>
                    <option value="spaylater">Shopee PayLater</option>
                    <option value="gopaylater">GoPayLater</option>
                    <option value="akulaku">Akulaku</option>
                </select>
            </div>

            <div class="order-summary">
                <div class="order-header">
                    23.59 Remaining booking Time
                </div>
                <div class="order-details">
                    <div>
                        <p>Pre-Sale</p>
                        <p>Admin Fee</p>
                        <p>Local Tax</p>
                    </div>
                    <div style="text-align: right;">
                        <p>Rp 900.000</p>
                        <p>Rp 6.000</p>
                        <p>Rp 25.000</p>
                    </div>
                </div>
                <hr>
                <div class="order-details" style="font-weight: bold;">
                    <div>Total</div>
                    <div>Rp 931.000</div>
                </div>
                <div class="email-notif">
                    <label>
                        <input type="checkbox" name="notif"> I agree to receive ticket booking notifications via Email.
                    </label>
                </div>
                <button type="submit" class="btn-pay">Pay Now</button>
            </div>
        </form>
    </div>
</main>

<footer>
    <div>
        <h4>OUR ADDRESS</h4>
        <p>57125 Surakarta<br>PT Tiket Indonesia<br>Gedung Selatan Lantai 8</p>
    </div>
    <div>
        <h4>OUR CONTACT</h4>
        <p>pnonton@tiket.in<br>+62 123456789</p>
    </div>
</footer>

<script>
    const paymentSelect = document.getElementById('payment_method');
    const allForms = document.querySelectorAll('.payment-detail');

    paymentSelect.addEventListener('change', function () {
        allForms.forEach(form => form.style.display = 'none');
        const selected = paymentSelect.value;
        if (selected) {
            const formToShow = document.getElementById(`${selected}-form`);
            if (formToShow) formToShow.style.display = 'block';
        }
    });
</script>

</body>
</html>
`