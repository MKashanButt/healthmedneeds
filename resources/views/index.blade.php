<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/icon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>
    <main>
        <header>
            <a href="/">
                <h1 class="logo">Bargain Medical Supply</h1>
            </a>
            <nav>
                <a href="#contactUs">
                    <button class="headerBtn">Contact Us</button>
                </a>
            </nav>
        </header>
        <section class="hero">
            <div class="stage">
                <div class="content">
                    <h2>Welcome to Bargain Medical Supply</h2>
                    <p>Where your health and comfort are our top priorities. Since our
                        founding in 2020, we've had the privilege of serving over 1,000 patients, offering a wide range
                        of
                        durable medical equipment designed to improve your quality of life.</p>
                    <button>Contact Us</button>
                </div>
                <form action="{{ route('form.store') }}" method="post" id="contactUs">
                    @csrf
                    <h2>Get your desired Medical equipment at little or no cost</h2>
                    <p>Enter your information below in this quick profile to check your eligibility.</p>
                    <div class="stage">
                        <div class="field">
                            <label for="fname">First Name:</label>
                            <input type="text" name="fname" id="fname">
                        </div>
                        <div class="field">
                            <label for="lname">Last Name:</label>
                            <input type="text" name="lname" id="lname">
                        </div>
                    </div>
                    <div class="stage">
                        <div class="field">
                            <label for="zip_code">Zip Code:</label>
                            <input type="text" name="zip_code" id="zip_code">
                        </div>
                        <div class="field">
                            <label for="phone">Phone no:</label>
                            <input type="text" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="stage" style="align-items: first baseline">
                        <div class="field" style="align-items: first baseline">
                            <label for="dob">DOB:</label>
                            <input type="date" name="dob" id="dob">
                        </div>
                        <div class="field" style="align-items: first baseline">
                            <label for="message">Message:</label>
                            <textarea name="message" id="message"></textarea>
                        </div>
                    </div>
                    <div class="field" style="align-items: baseline;width:100%">
                        <input type="checkbox" id="consent">
                        <p>
                            By clicking “Submit”, I give Bargain Medical Supply Inc, a Medicare-accredited supplier of
                            medical equipment, my express written consent to contact me by phone, text message, or
                            prerecorded message at the number I provided. I understand that this contact may relate to
                            Medicare-covered equipment such as diabetic supplies, back or knee braces, or continuous
                            glucose monitors. I understand that my consent is not required as a condition of purchase
                            and that I may revoke it at any time.
                        </p>
                    </div>
                    <button name="submit">See If I Qualify</button>
                </form>
            </div>
            <img src="{{ asset('images/effective-solutions-lower-back-pain-relief-with-professional-medical-image_269655-1121.jpg') }}"
                alt="">
            <div class="overlay"></div>

        </section>
        <section class="promotion" id="topProducts">
            <h2>Our Top 3 Helping Products</h2>
            <div class="stage">
                <div class="item" id="dialogBraces" onmouseover="toggleDialog('braces')">
                    <img src="{{ asset('images/knee-braces.jpg') }}" alt="">
                    <div class="overlay"></div>
                    <h3>Struggling with Joint Pain? Find Relief with Our Orthopedic Braces!</h3>
                </div>
                <div class="item" onmouseover="toggleDialog('braces')">
                    <div class="overlay"></div>
                    <img src="{{ asset('images/cgm-monitors.jpg') }}" alt="">
                    <h3>Fed Up with Finger Pricks? Discover Easy Glucose Monitoring!</h3>
                </div>
                <div class="item" onmouseover="toggleDialog('braces')">
                    <div class="overlay"></div>
                    <img src="{{ asset('images/lymphedema-pump-massagers.jpg') }}" alt="">
                    <h3>Battling Swollen Muscles? Try Our Lymphedema Pump Massagers!</h3>
                </div>
            </div>
        </section>
        <section class="products" id="products">
            <h2>Products</h2>
            <div class="stage">
                <div class="item">
                    <a href="#contactUs">
                        <img src="{{ asset('images/cgm-monitors.jpg') }}" alt="">
                        <h3>CGM Monitors</h3>
                        <p>Stay on top of your health with our continuous glucose monitors, providing real-time blood
                            sugar
                            data for optimal diabetes management. Easy to use and highly accurate.</p>
                    </a>
                </div>
                <div class="item">
                    <a href="#contactUs">
                        <img src="{{ asset('images/knee-braces.jpg') }}" alt="">
                        <h3>Knee Braces</h3>
                        <p>Support and stabilize your joints with our high-quality braces, designed for maximum comfort
                            and
                            effectiveness. Ideal for injury recovery and daily use.</p>
                    </a>
                </div>
                <div class="item">
                    <a href="#contactUs">
                        <img src="{{ asset('images/hip-braces.jpg') }}" alt="">
                        <h3>Hip Braces</h3>
                        <p>Support and stabilize your joints with our high-quality braces, designed for maximum comfort
                            and
                            effectiveness. Ideal for injury recovery and daily use.</p>
                    </a>
                </div>
                <div class="item">
                    <a href="#contactUs">
                        <img src="{{ asset('images/tense-unit.jpg') }}" alt="">
                        <h3>Tense Unit</h3>
                        <p>Relieve pain naturally with our TENS units, delivering targeted electrical stimulation to
                            soothe
                            muscle aches and tension. Compact, portable, and easy to use.</p>
                    </a>
                </div>
                <div class="item">
                    <a href="#contactUs">
                        <img src="{{ asset('images/brace-sleves.jpg') }}" alt="">
                        <h3>Brace Sleeves</h3>
                        <p>Keep your braces comfortable and secure with our premium brace sleeves, designed to prevent
                            irritation and improve wearability. Soft, breathable, and easy to clean.</p>
                    </a>
                </div>
                <div class="item">
                    <a href="#contactUs">
                        <img src="{{ asset('images/lymphedema-pump-massagers.jpg') }}" alt="">
                        <h3>Lymphedema Pump Massagers</h3>
                        <p>Improve circulation and reduce swelling with our lymphedema pump massagers, designed for
                            effective compression therapy. Comfortable, customizable, and easy to use at home.</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="aboutUs" id="aboutUs">
            <div class="image">
                <img src="{{ asset('images/about-us.png') }}" alt="">
            </div>
            <div class="content">
                <h2>About Us</h2>
                <p>At Bargain Medical Supply, our mission is to improve patient lives through innovative and dependable
                    medical solutions.
                    Since 2024, we’ve proudly served over 1,000 patients, providing a comprehensive range of durable
                    medical equipment designed to meet diverse health needs.</p>
                <p>From orthopedic braces to glucose monitors, our products are crafted with a focus on quality,
                    comfort, and effectiveness. We are dedicated to offering the latest advancements in medical
                    technology.We ensure our patients receive the best care and support. Trust us to be your partner in
                    health,
                    guiding you towards a more comfortable and healthier life.</p>

                <a href="tel:19544177926"><button>Contact Us at +1 (954) 417 7926</button></a>
            </div>
        </section>
        <footer>
            <p>Copyright Company &#169 Bargain Medical Supply. All Rights Reserved 2024-2025</p>
        </footer>
    </main>
    <div class="braceDialog" id="braces">
        <div class="content">
            <button class="close" onclick="closeDialog('braces')">X</button>
            <form action="{{ route('form.store') }}" method="post" id="contactUs">
                @csrf
                <h2>Get your desired Medical equipment at little or no cost</h2>
                <p>Enter your information below in this quick profile to check your eligibility.</p>
                <div class="stage">
                    <div class="field">
                        <label for="fname">First Name:</label>
                        <input type="text" name="fname" id="fname">
                    </div>
                    <div class="field">
                        <label for="lname">Last Name:</label>
                        <input type="text" name="lname" id="lname">
                    </div>
                </div>
                <div class="stage">
                    <div class="field">
                        <label for="zip_code">Zip Code:</label>
                        <input type="text" name="zip_code" id="zip_code">
                    </div>
                    <div class="field">
                        <label for="phone">Phone no:</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                </div>
                <div class="stage" style="align-items: first baseline">
                    <div class="field" style="align-items: first baseline">
                        <label for="dob">DOB:</label>
                        <input type="date" name="dob" id="dob">
                    </div>
                    <div class="field" style="align-items: first baseline">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message"></textarea>
                    </div>
                </div>
                <div class="field" style="align-items: baseline;width:100%">
                    <input type="checkbox" id="consent">
                    <p>
                        By clicking “Submit”, I give Bargain Medical Supply Inc, a Medicare-accredited supplier of
                        medical equipment, my express written consent to contact me by phone, text message, or
                        prerecorded message at the number I provided. I understand that this contact may relate to
                        Medicare-covered equipment such as diabetic supplies, back or knee braces, or continuous
                        glucose monitors. I understand that my consent is not required as a condition of purchase
                        and that I may revoke it at any time.
                    </p>
                </div>
                <button name="submit">See If I Qualify</button>
            </form>
        </div>
    </div>
    <script>
        function toggleDialog(id) {
            document.getElementById(id).style.display = " block";
            document.getElementById(id).style.display = "flex";
        }

        function closeDialog(id) {
            document.getElementById(id).style.display = "none";
        }

        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if (session('info'))
            toastr.info("{{ session('info') }}");
        @endif

        @if (session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>

</html>
