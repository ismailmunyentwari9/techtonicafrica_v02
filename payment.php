<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-[#1E1E1E] min-h-screen flex items-center justify-center p-4">

    <main class="relative w-full max-w-lg md:max-w-3xl bg-[#202931] rounded-lg shadow-2xl p-4 md:p-8">
        <!-- Header -->
        <header class="text-center mb-4 md:mb-6">
            <h1 class="text-xl md:text-2xl font-bold text-[#BA589F] mb-2">Registration Successful!</h1>
            <p class="text-gray-300 text-xs md:text-sm font-bold">
                You're almost there! Just one final step remains on your journey to becoming a Tech Titan. 
                Showcase your skills, finalize your project, and join the ranks of those making an impact in the tech world.
            </p>
        </header>

        <!-- Payment Details -->
        <section class="bg-[#1E1E1E] border border-[#388AEB] rounded-lg p-3 md:p-6">
            <h2 class="text-base md:text-lg font-semibold text-[#388AEB] mb-3">Payment Instructions</h2>
            <div class="bg-[#2D3A45] border border-[#388AEB] rounded-lg p-3">
                <div class="text-center mb-4 md:mb-6">
                    <p class="text-base md:text-lg font-bold text-[#BA589F]">Payment To:</p>
                    <h3 class="text-lg md:text-2xl font-extrabold text-white">KidsOnCodes Innovators Ltd</h3>
                </div>
                <div class="flex items-center justify-between mb-3 md:mb-4">
                    <p class="text-sm md:text-xl font-semibold text-[#388AEB]">MOMO Payment Code:</p>
                    <p class="text-2xl md:text-4xl font-extrabold text-[#BA589F] tracking-wider">975090</p>
                </div>
                <p class="text-gray-300 mb-3 md:mb-4 text-xs md:text-sm font-bold flex items-center">
                    <span class="fa fa-exclamation-circle text-yellow-400 mr-2"></span>
                    Once you've made your payment, reach out for your Payment Confirmation Code to complete your registration.
                </p>
                <div class="bg-[#1E1E1E] border border-[#388AEB] rounded-lg p-3 md:p-4 flex flex-col items-start space-y-2">
                    <p class="text-sm md:text-lg font-semibold text-[#388AEB] mb-1 md:mb-2">Need Help? Contact Us:</p>
                    <div class="flex items-center text-white text-xs md:text-base">
                        <i class="fa fa-phone-alt text-green-400 mr-2"></i>
                        <a href="tel:+250791430175" class="font-bold hover:text-green-400 transition-colors duration-200">+250 791 430 175</a>
                    </div>
                    <div class="flex items-center text-white text-xs md:text-base">
                        <i class="fa fa-phone-alt text-green-400 mr-2"></i>
                        <a href="tel:+250785837748" class="font-bold hover:text-green-400 transition-colors duration-200">+250 785 837 748</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Action Button -->
        <div class="text-center mt-4 md:mt-6">
            <a href="./login.html">
                <button class="bg-gradient-to-r from-[#BA589F] to-[#388AEB] text-white font-bold py-2 px-4 md:py-3 md:px-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out transform hover:scale-105">
                    Login <i class="fa fa-arrow-right ml-2"></i>
                </button>
            </a>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <svg class="absolute w-full h-full" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="40" stroke="rgba(255, 255, 255, 0.1)" stroke-width="4" />
                <circle cx="50" cy="50" r="30" stroke="rgba(255, 255, 255, 0.05)" stroke-width="4" />
            </svg>
        </div>
    </main>

</body>

</html>
  