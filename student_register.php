<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./styles.css" rel="stylesheet">


    <title>Student Register</title>
</head>
<body>
    <main class="w-[90%] mx-auto">
       <section class="w-full h-auto pb-10 mx-auto grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1">
        <div class="col-span-1 order-2 lg:order-1 md:order-1 sm:order-2">
            <h1 class="lg:text-[32px] text-[25px] font-[600] text-[#0582CA] pt-3 ">TechTonicAfrica</h1>

            <div class="form-div">
                <form method="POST" action="./waitList.php" class="max-w-2xl mx-auto bg-white shadow-md rounded px-8  pb-8 mt-40">
                    <h3 class="mx-auto text-gray-700 text:text-2xl md:text-xl mb-6">Register as Student</h3>
                    <div class="mb-4">
                        <input required  name="names" type="text" placeholder="Full Names *" class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700">
                    </div>
        
                    <div class="mb-4">
                        <input required  name="age" type="number" placeholder="Your Age*" class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700">
                    </div>
                    <div class="mb-4">
                        <input required  name="nationality" type="text" placeholder="Nationality *" class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700">
                    </div>
                    <div class="mb-4">
                        <input required  name="school" type="text" placeholder="Which school do you attend?*" class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700">
                    </div>
                    <div class="mb-4">
                        <input required  name="phone" type="text" placeholder="Active Phone Number *" class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700">
                    </div>
                    <div class="mb-4">
                        <input required  name="parentPhone" type="text" placeholder="Parent/Gardian Phone Number *" class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700">
                    </div>
                   
                   
                   

                    <button name="send" type="submit" class="bg-[#0582CA] hover:bg-blue-700 text-white font-bold  py-2 px-4 text-[16px] rounded-[12px] focus:outline-none focus:shadow-outline w-full ">Register</button>
                </form>
                <p class="mx-[4rem]">Back on the WaitList? <a href="./waitingList.php"><span class="text-[#0582CA] cursor-pointer">WaitList</span></a></p>

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