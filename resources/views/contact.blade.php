<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Contact Header -->
    <section class="py-16 bg-white text-center">
        <h1 class="text-4xl font-bold text-blue-700 mb-4">Contact Us</h1>
        <p class="text-lg text-gray-600">We’d love to hear from you. Please fill out the form below.</p>
    </section>

    <!-- Contact Form -->
    <section class="py-10">
        <div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-md">
            <form action="#" method="POST" class="space-y-6">
                @csrf <!-- Blade directive for CSRF protection -->

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Send Message
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-center py-6 text-gray-600 border-t mt-12">
        &copy; 2025 YourWebsite. All rights reserved.
    </footer>

</body>
</html>
