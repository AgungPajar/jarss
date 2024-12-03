<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agung Pajar - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero {
            background: url('https://via.placeholder.com/1920x600') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .section-title {
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 2rem;
            font-weight: bold;
        }

        .portfolio-item img {
            width: 100%;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Agung Pajar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container mt-5 mb-5 pt-3 pb-3">
            <h1>Hallo my name Agung pajar</h1>
            <p>Web Developer & Graphic Designer</p>
            {{-- <a href="#portfolio" class="btn btn-primary btn-lg mt-3">View My Work</a> --}}
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container my-5">
        <h2 class="text-center section-title">About Me</h2>
        <p class="text-center">Hi, I'm Agung Pajar, a passionate Web Developer and Graphic Designer with over 4 years of
            experience in creating websites, designs, and digital solutions. Let's create something amazing together!
        </p>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center section-title">My Portfolio</h2>
            <div class="row">
                <div class="col-md-4 portfolio-item">
                    <img src="https://via.placeholder.com/300x200" alt="Portfolio Item">
                    <h5 class="mt-3">Project Title 1</h5>
                    <p>Short description of the project.</p>
                </div>
                <div class="col-md-4 portfolio-item">
                    <img src="https://via.placeholder.com/300x200" alt="Portfolio Item">
                    <h5 class="mt-3">Project Title 2</h5>
                    <p>Short description of the project.</p>
                </div>
                <div class="col-md-4 portfolio-item">
                    <img src="https://via.placeholder.com/300x200" alt="Portfolio Item">
                    <h5 class="mt-3">Project Title 3</h5>
                    <p>Short description of the project.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container my-5">
        <h2 class="text-center section-title">Contact Me</h2>
        <form action="#" method="POST" class="mx-auto" style="max-width: 600px;">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Agung Pajar. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
