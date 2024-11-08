<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./styles.css" rel="stylesheet">
    <title>Join the Waiting List</title>
</head>
<body>
    <main class="w-[90%] mx-auto">
       <section class="w-full h-auto pb-10 mx-auto grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1">
        <div class="col-span-1 order-2 lg:order-1 md:order-1 sm:order-2">
            <h1 class="lg:text-[32px] text-[25px] font-[600] text-[#0582CA] pt-3">TechTonicAfrica</h1>
            <div class="form-div">
                <div class="max-w-2xl mx-auto bg-white shadow-md rounded px-8 pb-8 mt-40 text-center">
                    <h3 class="text-gray-700 text-2xl mb-6">Join the Waiting List</h3>
                    <p class="text-black mb-6 text-lg">Our next intake will start in September 2024 and will end in May 2025. Please select whether you are a parent or a student to join the waiting list for this period.</p>
                    <div class="mb-4">
                        <button onclick="window.location.href='./student_register.php'" class="bg-[#0582CA] hover:bg-blue-700 text-white font-bold py-2 px-4 text-[16px] rounded-[12px] focus:outline-none focus:shadow-outline w-full mb-4">I am a Student</button>
                        <button onclick="window.location.href='parent_register.php'" class="bg-[#0582CA] hover:bg-blue-700 text-white font-bold py-2 px-4 text-[16px] rounded-[12px] focus:outline-none focus:shadow-outline w-full">I am a Parent</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-right col-span-1 order-1 lg:order-2 md:order-2 sm:order-1 bg-[#0582CA] lg:h-[100vh] md:h-[100vh] h-[50vh] rounded-[16px] flex items-center">
            <p class="w-10/12 mx-auto font-[300] lg:text-[48px] md:text-[40px] text-[25px] text-[#FFFFFF]">
                Unlock Creativity, Ignite Curiosity: Where <span class="font-700 text-black">TechTitans</span> Code Their Dreams!
            </p>
        </div>
       </section>
    </main>
</body>
</html>
