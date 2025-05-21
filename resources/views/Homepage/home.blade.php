<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Portal Event</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        .font-quicksand {
            font-family: 'Quicksand', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 font-quicksand text-gray-900 overflow-x-hidden">
    <header id="home" class="bg-gray-900 text-white px-8 py-4 text-center h-200" >
        <nav class="navbar flex justify-between items-center px-4 pb-4 max-w-6x1 mx-auto">
                <a class="logo" href="#">
                    <img src="" alt="logo" class="h-10">
                </a>
                <div class="nav-links space-x-6">
                    <a href="#home" class="font-bold hover:underline">Home</a>
                    <a href="#about" class="font-bold hover:underline">About</a>
                    <a href="#why-us" class="font-bold hover:underline">Why Us?</a>
                    <a href="#contact" class="font-bold hover:underline">Contact</a>

            </div>
        </nav>

        <div class="hero max-w-200 mx-auto py-25">
           <div class="text-6xl font-bold mb-4">
                <span class="bg-gradient-to-r from-blue-500 to-cyan-400 bg-clip-text text-transparent">Manage</span>
                and
                <span class="bg-gradient-to-r from-pink-500 to-fuchsia-500 bg-clip-text text-transparent">Explore</span>
                <div class="h-4 lg:h-4"></div>
                Student Events Easily
            </div>

            <p class="pt-5">Browse exciting competitions, seminars, and workshops<div class="h-1 lg:h-1"></div>or create and manage your own events to share with others.</p>
            <div class="btn pt-8 space-x-2">
                <a href="#" class="px-5 py-3 bg-gradient-to-r from-green-500 to-emerald-400 text-gray-900 font-semibold rounded-3xl shadow-[0_0_15px_rgba(34,197,94,0.7)] transition">View Created Events</a>
                <a href="#" class="px-5 py-3 bg-gradient-to-r from-blue-500 to-sky-400 text-gray-900 font-semibold rounded-3xl shadow-[0_0_15px_rgba(59,130,246,0.7)] transition">Create an Event</a>
            </div>
        </div>

        <div class="flex flex-row flex-nowrap justify-center items-center gap-10 header-image">
            <img src="{{ asset('images/compe.jpg') }}" alt="Kompetisi" class="rounded-3xl shadow-lg h-100">
            <img src="{{ asset('images/semin.jpg') }}" alt="Seminar" class="rounded-3xl shadow-lg h-130">
            <img src="{{ asset('images/ws.jpg') }}" alt="Workshop" class="rounded-3xl shadow-lg h-100">
        </div>
    </header>

    <section class="about mt-100 px-20 flex items-start justify-center gap-20" id="about">
        <div class="about-img w-full md:w-1/2">
            <img src="{{ asset('images/about.jpg') }}"  alt="about" class="w-full h-auto rounded 2xl shadow-2xl">
        </div>
        <div class="about-content w-full md:w-1/2 space-y-4">
            <div class="my-10">
                <div class="sub-title">
                    <span class="bg-gradient-to-r from-pink-500 to-fuchsia-500 bg-clip-text text-transparent font-bold text-2xl">About this Platform</span>
                </div>
                <div class="title">
                    <h2 class="font-bold text-4xl">Empowering Students <br> Through Events</h2>
                </div>
            </div>
            <div class="my-5">
                <p class="paragraph">This platform helps students discover and create off-campus events like competitions, seminars, and workshops. We aim to empower student communities through accessible, easy-to-manage event sharing.</p>
            </div>
            <a href="#" class="px-7 py-3 bg-gray-900 text-white font-semibold rounded-3xl">Read</a>
        </div>
    </section>

    <section class="why-us my-30 px-20" id="why-us">
        <div class="container">
            <div class="sub-title">
                <span class="bg-gradient-to-r from-pink-500 to-fuchsia-500 bg-clip-text text-transparent font-bold text-2xl">Why Choose Us?</span>
            </div>
            <div class="title mb-10">
                <h2 class="font-bold text-4xl">What Makes Us Different?</h2>
            </div>
            <div class="content flex justify-center items-stretch gap-10 mx-10">
                <div class="card flex-1 text-center border-hidden rounded-lg shadow-lg p-10 flex flex-col items-center space-y-4">
                    <img src="{{ asset('images/easy.png') }}" alt="easy" class="w-24 h-24 mx-auto">
                    <h3 class="font-bold text-2xl">Easy to Use</h3>
                    <p>Our platform is user-friendly, making it easy to create events.</p>
                </div>
                <div class="card flex-1 text-center border-hidden rounded-lg shadow-lg p-10 flex flex-col items-center space-y-4">
                    <img src="{{ asset('images/wide.png') }}" alt="wide" class="w-24 h-24 mx-auto">
                    <h3 class="font-bold text-2xl">Wide Range</h3>
                    <p>We offer a diverse selection of events, ensuring there's something for everyone.</p>
                </div>
                <div class="card flex-1 text-center border-hidden rounded-lg shadow-lg p-10 flex flex-col items-center space-y-4">
                    <img src="{{ asset('images/community.png') }}" alt="community" class="w-24 h-24 mx-auto">
                    <h3 class="font-bold text-2xl">Community Driven</h3>
                    <p>Our platform is built by students, for students, fostering a sense of community and collaboration.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="contact my-30 px-20" id="contact">
        <div class="container">
            <div class="sub-title">
                <span class="bg-gradient-to-r from-pink-500 to-fuchsia-500 bg-clip-text text-transparent font-bold text-2xl">Contact Us</span>
            </div>
            <div class="title mb-10">
                <h2 class="font-bold text-4xl">Get in Touch</h2>
            </div>
            <div class="contact-content flex justify-between mx-15 gap-15">
                <form action="" method="POST" class="w-full md:w-1/2 space-y-5 flex-1">
                    <label for="name" class="font-bold">Nama</label> <br>
                    <input type="text" name="name" placeholder="Your Name" required class="border-solid border-2 rounded-lg px-3 w-full"> <br>
                    <label for="email" class="font-bold">Email</label> <br>
                    <input type="email" name="email" placeholder="Your Email" required class="border-solid border-2 rounded-lg px-3 w-full"> <br>
                    <label for="message" class="font-bold">Message</label> <br>
                    <textarea name="message" rows="5" placeholder="Your Message" required class="border-solid border-2 rounded-lg px-3 w-full"></textarea> <br>
                    <button type="submit" class="px-7 py-3 bg-gray-900 text-white font-semibold rounded-3xl">Send Message</button>
                </form>
                <div class="contact-info flex-1 bg-gray-900 text-white rounded-lg p-8 shadow-lg">
                    <h4 class="font-bold text-2xl">Contact Information</h4>
                    <p>If you have any questions or feedback, feel free to reach out to us!</p>
                    <div class="my-10 flex justify-between gap-5">
                        <a class="email flex-1 text-center p-4 flex flex-col items-center space-y-4 bg-[#050505] rounded-2xl" href="#">
                            <img src="{{ asset('images/email.png') }}" alt="Email">
                            <span>Email Us</span>
                        </a>
                        <a class="telp flex-1 text-center p-4 flex flex-col items-center space-y-4 bg-[#66bb6a] rounded-2xl" href="">
                            <img src="{{ asset('images/telp.png') }}" alt="Telp">
                            <span>Call Us</span>
                        </a>
                        <a class="ig flex-1 text-center p-4 flex flex-col items-center space-y-4 bg-[#e4405f] rounded-2xl" href="#">
                            <img src="{{ asset('images/ig.png') }}" alt="Instagram">
                            <span>Follow Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <a href="">
                <img src="" alt="">
            </a>
        </div>
        <div class="footer-content">
            <div class="footer-links">
                <div class="title-f">
                    Platform
                </div>
                <div class="link">
                    <a href="#home">Create Event</a>
                    <a href="#about">Browse Event</a>
                    <a href="#why-us">Support</a>
                </div>
            </div>

            <div class="footer-links">
                <div class="title-f">
                    Company
                </div>
                <div class="link">
                    <a href="#home">About</a>
                    <a href="#about">Contact</a>
                    <a href="#why-us">Terms</a>
                </div>
            </div>

            <div class="footer-links">
                <h4>Location</h4>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63337.65139741951!2d110.3308366!3d-7.7955797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57896162388d%3A0x3027a76e352bd70!2sYogyakarta!5e0!3m2!1sen!2sid!4v1687768899045!5m2!1sen!2sid" 
                        width="200" 
                        height="150" 
                        style="border:0; border-radius:8px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <p>Based in Sleman, Yogyakarta, Indonesia</p>
            </div>
        </div>
        <div class="copy-right">
            &copy; 2025 Eventify. All rights reserved.
        </div>
    </footer>
</body>
</html>