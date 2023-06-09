<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Fjalla+One&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />

</head>

<body>
    <!-- <header class="bg-slate-300 absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">

                    <a href="#home" class="font-bold text-lg text-black py-6 flex items-center">
                        <img src="{{URL('assets/logo-1.svg')}}" alt="" width=" 40px" class="pr-2" />
                        UKM Insight</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="profile" name="profile" type="button" class="absolute flex items-center right-2.5">
                        <img src="public\assets\user-1.svg" alt="" class="w-10 pr-2" />
                        Halo, Member!
                    </button>
                </div>
            </div>
        </div>
    </header> -->
    <!-- Header End -->

    <!-- Global Container -->

    <div class="flex items-center justify-center min-h-screen bg-gray-50">
        <!-- Card Container -->

        <div
            class="relative flex flex-col m-6 space-y-10 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0 md:m-0">
            <!-- Left Side -->
            <div class="p-6 md:p-20 ">
                <!-- Top Content -->
                <h2 class="font-mono mb-5 text-4xl font-bold">Login</h2>
                <p class="max-w-sm mb-12 font-sans font-light text-gray-600">Login untuk mengakses data UKM kamu.</p>

                <input type="text"
                    class="w-full p-6 border border-gray-300 rounded-md mb-2 placeholder:font-sans placeholder:font-light"
                    placeholder="Enter your email address" />
                <input type="password"
                    class="w-full p-6 border border-gray-300 rounded-md placeholder:font-sans placeholder:font-light"
                    placeholder="Enter your password address" />

                <!-- Middle Content -->
                <div class="flex flex-col items-center justify-between mt-6 space-y-6 md:flex-row md:space-y-0">
                    <div class="font-thin text-cyan-700">Forgot password</div>

                    <button
                        class="w-full md:w-auto flex justify-center items-center p-6 space-x-4 font-sans font-bold text-white rounded-mmd shadow-lg px-9 bg-cyan-700 shadow-cyan-100 hover:bg-opacity-90 shadow-sm hover:shadow-lg border transition hover:-translate-y-0.5 duration-150">
                        <span>Login</span>
                    </button>
                </div>

                <!-- Border -->
                <div class="mt-12 border-b border-b-gray-300"></div>
                <!-- Bottom Content -->
                <p class="py-6 text-sm font-thin text-center text-gray-400">or login with</p>
                <!-- Bottom Buttons Container -->
                <div class="flex flex-col space-x-0 space-y-6 md:flex-row md:space-x-4 md:space-y-0">
                    <button
                        class="flex items-center justify-center py-2 space-x-3 border border-gray-300 rounded shadow-sm hover:bg-opacity-30 hover:shadow-lg hover:-translate-y-0.5 transition duration-150 md:w-1/2">
                        <img src="{{URL('assets/google.svg')}}" alt="" class="w-9" />
                        <span class="font-thin">Google</span>
                    </button>
                    <button
                        class="flex items-center justify-center py-2 space-x-3 border border-gray-300 rounded shadow-sm hover:bg-opacity-30 hover:shadow-lg hover:-translate-y-0.5 transition duration-150 md:w-1/2">
                        <img src="{{URL('assets/facebook.svg')}}" alt="" class="w-9" />
                        <span class="font-thin">Facebook</span>
                    </button>
                </div>
            </div>
            <!-- Right Side -->
            <img src="{{URL('assets/corporate.jpg')}}" alt="Organization photo"
                class="w-[430px] h-[300px] hidden md:block" />

            <!-- Close Button -->
            <div
                class="group absolute -top-5 right-4 flex items-center justify-center w-10 h-10 bg-gray-200 rounded-full md:bg-white md:top-4 hover:cursor-pointer hover:-translate-y-0.5 transition duration-150">
                <img src="{{URL('assets/close.png')}}" alt="" class="w-5 h-5" />
            </div>
        </div>
    </div>
</body>

</html>