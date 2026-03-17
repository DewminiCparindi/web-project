<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Green NFlora - Contact Us</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .contact-hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                        url('contactimg/contact-banner.jpg') center/cover no-repeat;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .contact-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            padding: 50px;
            margin-top: -80px;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
        }

        .btn-modern {
            background: linear-gradient(45deg, #198754, #145c32);
            border: none;
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .info-box {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: 0.3s;
        }

        .info-box:hover {
            transform: translateY(-5px);
        }

        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 25px;
            right: 25px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #1ebe5d;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index.html">
        <img src="logo.jpeg" alt="Logo" width="50" height="50" class="rounded-circle me-2">
        Green NFlora
    </a>

    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link mx-3" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link mx-3 active" href="contact.php">Contact Us</a></li>
    </ul>
  </div>
</nav>


<div class="container mt-3">
<?php if(isset($_GET['status']) && $_GET['status'] == 'success') { ?>
    <div class="alert alert-success text-center">
         Your message has been sent successfully!
    </div>
<?php } ?>

<?php if(isset($_GET['status']) && $_GET['status'] == 'error') { ?>
    <div class="alert alert-danger text-center">
         Something went wrong. Please try again.
    </div>
<?php } ?>
</div>


<section class="contact-hero">
    <div>
        <h1 class="display-5 fw-bold">How can we help you?</h1>
        <p class="lead">Have a question, custom request, or need help choosing the perfect bouquet?<br>
             Our floral specialists are here to assist you.</p>
    </div>
</section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="contact-card">
                <h3 class="text-center text-success mb-4">Send Us a Message</h3>
                <form action="contact_submit.php" method="POST">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                    </div>

                    <div class="mb-4">
                        <textarea class="form-control" name="message" rows="5" placeholder="Your Message..." required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-modern text-white">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row text-center g-4">
        <div class="col-md-4">
            <div class="info-box">
                <h5 class="text-success"><i class="fa fa-map-marker"></i> Visit Us</h5>
                <p>Pitipana Rd,<br>Homagama, Sri Lanka</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-box">
                <h5 class="text-success"><i class=" fa fa-phone "></i> Call Us</h5>
                <p>+123 456 7890</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-box">
                <h5 class="text-success"><i class="fa fa-envelope "></i> Email Us</h5>
                <p>GreenNFlora@gmail.com</p>
            </div>
        </div>
    </div>
</div>

<footer class="bg-success text-white text-center p-4 mt-5">
    <p>&copy; 2026 Green NFlora | Luxury Floral Boutique</p>
    <p>Follow us on 
        <a href="#" class="text-white">Facebook</a> | 
        <a href="#" class="text-white">Instagram</a>
    </p>
</footer>

<a href="https://wa.me/1234567890" 
   class="whatsapp-float" 
   target="_blank">
   <i class="bi bi-whatsapp"></i>
</a>

</body>
</html>