<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('CSS/home.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Noto+Sans+Telugu:wght@100..900&family=Poiret+One&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="../JS/model.js"></script>
    <script src="../JS/navbarModel/navbar-model.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1975de5d56.js" crossorigin="anonymous"></script>
    <title>SOMETHING WEBSITE - Home Page</title>
</head>
<body ng-app="myApp">
    <navbar-model></navbar-model>
    <div class="gradient-wrapper">
        <img class="img-fluid full-image" src="<?php echo e(asset('IMG/IMG BG/Image1.jpg')); ?>" alt="Main Image" draggable="false">
        <div class="container">
            <div class="min-container d-flex align-item-center flex-direction-column justify-content-start flex-column">
                <p id="text-1" class="display-1">WE ARE NOT THE BEST</p>
                <p id="text-2" class="display-1">BUT WE'RE PROFESSIONAL</p>
                <h1 class="custom-h1">Welcome To Our Website</h1>
            </div>
        </div>
    </div>

    <div class="container h-auto w-100 p-3 d-flex justify-content-center align-item-center">
        <div class="card-map">
            <div class="card p-5">
                <img src="<?php echo e(asset("IMG/IMG CARD/Image1.png")); ?>" alt="">
                <h2 class="custom-h1">Clothes</h2>
                <p class="display-custom">A section offering a variety of high-quality clothes for different styles and occasions.</p>
            </div>
            <div class="card p-5">
                <img src="<?php echo e(asset("IMG/IMG CARD/Image2.png")); ?>" alt="">
                <h2 class="custom-h1">Trousers</h2>
                <p class="display-custom">Specializing in comfortable and stylish trousers suitable for various settings.</p>
            </div>
            <div class="card p-5">
                <img src="<?php echo e(asset("IMG/IMG CARD/Image3.png")); ?>" alt="">
                <h2 class="custom-h1">Socks</h2>
                <p class="display-custom">A collection of cozy and fashionable socks to complement any outfit.</p>
            </div>
            <div class="card p-5">
                <img src="<?php echo e(asset("IMG/IMG CARD/Image4.png")); ?>" alt="">
                <h2 class="custom-h1">Shoes</h2>
                <p class="display-custom">Providing top-notch shoes for all types of footwear needs, from casual to formal.</p>
            </div>
            <div class="card p-5">
                <img src="<?php echo e(asset("IMG/IMG CARD/Image5.png")); ?>" alt="">
                <h2 class="custom-h1">Idea</h2>
                <p class="display-custom">A section dedicated to showcasing creative clothing ideas and inspirations.</p>
            </div>
            <div class="card p-5">
                <img src="<?php echo e(asset("IMG/IMG CARD/Image6.png")); ?>" alt="">
                <h2 class="custom-h1">Consultation</h2>
                <p class="display-custom">Offering expert consultation services for fashion and clothing advice.</p>
            </div>
            <div class="card p-5">
                <img src="<?php echo e(asset("IMG/IMG CARD/Image7.png")); ?>" alt="">
                <h2 class="custom-h1">Combination</h2>
                <p class="display-custom">A place to explore stylish clothing combinations and accessories for a complete look.</p>
            </div>
            <div class="card p-5">
                <img src="<?php echo e(asset("IMG/IMG CARD/Image8.png")); ?>" alt="">
                <h2 class="custom-h1">Weather</h2>
                <p class="display-custom">Clothing designed to keep you comfortable and stylish no matter the weather conditions.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container h-auto w-100 p-3 d-flex justify-content-center align-item-center flex-column">
            <h1 class="display-6 my-3 text-dark text-center">Our Story</h1>
            <h3 class="custom-h1 h1-small text-dark mx-3 py-3">Background Story</h3>
            <p class="text-start">WebStyle didirikan dengan visi untuk memberikan solusi fashion yang inovatif dan terjangkau. Kami percaya bahwa setiap individu memiliki gaya unik yang perlu diekspresikan dengan percaya diri. Sejak awal, kami berkomitmen untuk menyediakan produk berkualitas tinggi yang memenuhi kebutuhan fashion modern sambil tetap menghormati nilai-nilai keberlanjutan.</p>
            <hr>
            <h3 class="custom-h1 h1-small text-dark text-end mx-3 py-3">Meet Our Team</h3>
            <p class="text-end">Tim kami terdiri dari para ahli di bidang desain, pemasaran, dan produksi yang bersemangat menciptakan pengalaman belanja yang luar biasa. Dengan kerja sama yang kuat dan fokus pada inovasi, kami terus mengembangkan produk baru yang relevan dengan tren terkini, memberikan yang terbaik untuk pelanggan kami.</p>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <div class="container h-auto w-100 p-3 d-flex justify-content-center align-item-center flex-column">
            <div class="container border border-custom rounded p-3 bg-dark">
                <h1 class="display-6 my-3 text-white text-center">Our Bennefit</h1>
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <h2 class="custom-h1 pb-1">Dedicated hiring experts</h2>
                        <p class="content-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus autem nihil at impedit? Dignissimos pariatur eius quisquam, vel, dolor dolore corporis, minima facilis atque placeat beatae dolorum voluptas quam eum.</p>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <h2 class="custom-h1 pb-1">Something Benefit</h2>
                        <p class="content-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus autem nihil at impedit? Dignissimos pariatur eius quisquam, vel, dolor dolore corporis, minima facilis atque placeat beatae dolorum voluptas quam eum.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <h2 class="custom-h1 pb-1">Satisfaction guarantee</h2>
                        <p class="content-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus autem nihil at impedit? Dignissimos pariatur eius quisquam, vel, dolor dolore corporis, minima facilis atque placeat beatae dolorum voluptas quam eum.</p>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <h2 class="custom-h1 pb-1">Flexible payment models</h2>
                        <p class="content-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus autem nihil at impedit? Dignissimos pariatur eius quisquam, vel, dolor dolore corporis, minima facilis atque placeat beatae dolorum voluptas quam eum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container h-auto w-100 p-3 d-flex justify-content-center align-item-center flex-column">
            <h1 class="display-6 my-5 text-dark text-center">Introduction Video</h1>
            <video class="vidio-max rounded-3" controls>
                <source src="<?php echo e(asset("VID/Video1.mp4")); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <!-- <div class="container-fluid">
        <div class="container h-auto w-100 p-3 d-flex justify-content-center align-item-center flex-column">
            <div class="container py-3 d-flex flex-row" id="rating-container">
                <div class="box mx-1">
                    <h2 class="custom-h1 h1-small text-dark mx-3">User 001</h2>
                </div>
                <div class="box mx-1">
                    <h2 class="custom-h1 h1-small text-dark mx-3">User 002</h2>
                </div>
                <div class="box mx-1">
                    <h2 class="custom-h1 h1-small text-dark mx-3">User 003</h2>
                </div>
            </div>
            <div class="btn-container">
                <button id="prev-btn">Previous</button>
                <button id="next-btn">Next</button>
            </div>
        </div>
    </div> -->
    <div class="container-fluid">
        <div class="container h-auto w-100 p-3 d-flex justify-content-center align-item-center flex-column">
            <h1 class="display-6 mx-5 my-4 text-dark text-center">Get Started</h1>
            <div class="container d-flex justify-content-center align-item-center">
                <img class="custom-image" src="../public/IMG/IMG BG/Image2.jpg" alt="">
            </div>
            <div class="container mt-4 w-100">
                <form class="d-flex flex-column align-items-center">
                    <div class="mb-3 w-100">
                        <label for="nameInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nameInput" placeholder="Enter your name">
                    </div>
                    <div class="mb-3 w-100">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                    </div>
                    <div class="mb-3 w-100">
                        <label for="messageInput" class="form-label">Message</label>
                        <textarea class="form-control" id="messageInput" rows="3" placeholder="Write your message here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white pt-4">
        <div class="container">
            <div class="row py-3">
                <!-- About Section -->
                <div class="col-md-4 mb-4">
                    <h5>About Us</h5>
                    <p>
                        We are a passionate community dedicated to delivering high-quality content and services. Join us and be part of something amazing.
                    </p>
                </div>
                <!-- Quick Links Section -->
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="col-md-4 mb-4">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i>123 Main Street, City, Country</li>
                        <li><i class="fas fa-phone-alt me-2"></i>(+123) 456-7890</li>
                        <li><i class="fas fa-envelope me-2"></i>info@example.com</li>
                    </ul>
                </div>
            </div>
            <hr class="bg-light">
            <div class="text-center py-3">
                <p class="mb-0">© 2024 Your Company. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    
    <script>
    //     var app = angular.module('myApp', []);
    //     app.controller('ClockController', function ($scope, $interval) {
    //         function updateClock() {
    //             $scope.currentTime = new Date();
    //         }
    
    //         $interval(updateClock, 1000);
    
    //         updateClock();
    //     });

    //     const apiKey = '4a1be77b2f6b52e7ee8d3f2ae4905f5b';
    //     const city = 'Jakarta'; 
    //     const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}`;

    //     $.getJSON(apiUrl, function(data) {
    //         const weatherCondition = data.weather[0].description;
    //         const temperature = data.main.temp;
    //         const weatherIcon = data.weather[0].icon;
    //         const weatherIconUrl = `https://openweathermap.org/img/wn/${weatherIcon}.png`;

    //         $('#weather-condition').text(weatherCondition);
    //         $('#temperature').text(`Temperature: ${temperature}°C`);
    //         $('#weather-icon').attr('class', 'fas fa-cloud-sun');
    //     });
    // </script>
</body>
</html>
<?php /**PATH D:\DATA1\kuliah\Frnt End\UAS_FRONTEND\ZALORA\UAS_FE\resources\views/home.blade.php ENDPATH**/ ?>