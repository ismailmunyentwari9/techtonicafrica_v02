<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Production version, optimized for size and performance -->
    <link href="https://unpkg.com/tailwindcss@3.4.3/dist/tailwind.min.css" rel="stylesheet">
    <link href="./styles.css" rel="stylesheet">


    <title>Login</title>
</head>

<body>
    <main class="w-[90%] mx-auto">
        <section class="w-full h-auto mx-auto pb-10 grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1">
            <div class="col-span-1  order-2 lg:order-1 md:order-1 sm:order-2">
                <a href="./index.html"><h1 class="text-[32px] font-[600] text-[#0582CA] pt-3 ">TechTonicAfrica</h1></a>

                <div class="form-div">
                    <form method="POST"  action="./login_codes.php" class="max-w-2xl mx-auto bg-white shadow-md rounded px-8  pb-8 mt-40">
                        <h3 class="mx-auto text-gray-700 text-2xl mb-6">Login</h3>
                        <div class="mb-4">
                            <input required name="names" type="text" placeholder="Username *"
                                class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700">
                        </div>

                        <div class="mb-4">
                            <input required name="password" type="password" placeholder="Password *"
                                class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700">
                        </div>
                        <div class="mb-4">
                            <input required name="pin" type="password" placeholder="Payment confirmation code *"
                                class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700">
                        </div>
                        <button type="submit" name="send"
                            class="bg-[#0582CA] hover:bg-blue-700 text-white font-bold  py-2 px-4 text-[16px] rounded-[12px] focus:outline-none focus:shadow-outline w-full ">Login</button>
                    </form>
                    <p class="mx-[4rem]">Don’t have an account? <a href="./waitingList.php"><span
                                class="text-[#0582CA] cursor-pointer">WaitList</span></a></p>

                </div>
            </div>
            <div
                class=" slide-right col-span-1  order-1 lg:order-2 md:order-2 sm:order-1 bg-[#0582CA]  lg:h-[100vh] md:h-[100vh] h-[50vh] rounded-[16px] flex items-center">
                <p class="w-10/12 mx-auto  font-500 lg:text-[48px] md:text-[40px] text-[35px] text-[#FFFFFF]">
                    Unlock Creativity, Ignite Curiosity: Where <span class="font-700 text-black">TechTitans </span>Code
                    Their Dreams!
                </p>
            </div>
        </section>
    </main>
</body>

</html>