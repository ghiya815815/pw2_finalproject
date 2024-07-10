<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR QUEEN RENT</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-8 py-8">
            <div class="flex items-center">
                <img src="src/images/logo/logoo.png" alt="Car Queen Rent Logo" class="h-10">
                <div class="text-3xl font-bold text-gray-900 ml-2">CAR QUEEN RENT</div>
            </div>
            <nav>
                <ul class="flex space-x-8 ">
  
                    <!-- User Area -->
                    @guest
                        <a href="/login"
                            class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">Login</a>
                        <a href="/register"
                            class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">Register</a>
                    @endguest

                    
                </ul>
            </nav>

        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 py-20 text-center">
            <h1 class="text-4xl font-bold">Cheap and Reliable Car Rental Solutions</h1>
            <p class="mt-4">Remember, at Car Queen Rental, we don’t just rent cars we ignite dreams.</p>
            <p>So, fasten your
                seatbelt, adjust your mirrors, and let’s cruise into the extraordinary.

                Ready? Set? Vroom!</p>
            <a href="{{ route('cars.index') }}"
                class="mt-6 inline-block bg-yellow-500 hover:bg-yellow-600 text-black px-6 py-3 rounded">Select
                Car</a>
        </div>
    </section>

    <!-- Car Rental Services -->
    <section class="container mx-auto px-4 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="bg-gray-800 text-white p-10 rounded-lg shadow">
                <section class="bg-white-100 py-30">
                    <h2 class="text-3xl font-bold text-white-900 mb-10 text-center">Why Choose Car Queen Rental?</h2>
                    <div class="max-w-4xl mx-auto">
                        <ul class="list-disc list-inside text-lg">
                            <li class="mb-5">
                                <span class="font-bold">Wide Selection of Vehicles:</span> Choose from a variety of
                                cars to match your needs and preferences.
                            </li>
                            <li class="mb-4">
                                <span class="font-bold">Easy Online Booking:</span> Our user-friendly website makes
                                it simple to reserve your vehicle in just a few clicks.
                            </li>
                            <li class="mb-4">
                                <span class="font-bold">Flexible Rental Options:</span> Whether you need a car for a
                                day, a week, or longer, we offer flexible rental periods to suit your schedule.
                            </li>
                        </ul>
                    </div>
                </section>

            </div>
            <section class="bg-white py-20">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">About Car Queen Rental</h2>
                    <div class="max-w-3xl mx-auto text-center">
                        <p class="mb-6">
                            Welcome to Car Queen Rental, your go-to destination for affordable and reliable car rentals.
                            We pride ourselves on offering a wide selection of vehicles to suit all your travel needs.
                            Whether you're planning a weekend getaway, a business trip, or just need a temporary ride,
                            we've got you covered.
                        </p>
                        <p class="mb-6">
                            At Car Queen Rental, customer satisfaction is our top priority. Our user-friendly website
                            makes booking a car quick and easy, and our friendly staff is always here to help. Plus, our
                            competitive prices ensure you're getting the best value for your money.
                        </p>
                        <p>
                            Thank you for choosing Car Queen Rental. We look forward to serving you and making your
                            journey as smooth and enjoyable as possible!
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Exclusive Cars Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Exclusive Car Rental - Best Choice</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Car Cards -->
                <div class="bg-gray-200 p-6 rounded-lg shadow">
                    <img src="src/images/cars/01m.jpg" alt="Car 1" class="w-full h-48 object-cover rounded">
                    <h3 class="text-xl font-bold mt-4">Car Model 1</h3>
                </div>
                <div class="bg-gray-200 p-6 rounded-lg shadow">
                    <img src="src/images/cars/hotmut.jpg" alt="Car 2" class="w-full h-48 object-cover rounded">
                    <h3 class="text-xl font-bold mt-4">Car Model 2</h3>
                </div>
                <div class="bg-gray-200 p-6 rounded-lg shadow">
                    <img src="src/images/cars/ijopetit.jpg" alt="Car 3" class="w-full h-48 object-cover rounded">
                    <h3 class="text-xl font-bold mt-4">Car Model 3</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <div>&copy; 2024 CAR QUEEN RENT</div>
                <div class="space-x-6">
                    <a href="#" class="hover:text-gray-400">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-400">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>