<!-- DASHBOARD LINK -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<link rel="stylesheet" href="custom/css/custom.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/sidebar.css">
<script defer src="script.js"></script>
<script src="https://cdn.tailwindcss.com"></script>


<aside :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
    class="sidebar fixed top-0 left-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-auto border-r border-gray-200 bg-white px-5 transition-all duration-300 lg:static lg:translate-x-0 -translate-x-full shadow-lg"
    @click.outside="sidebarToggle = false">

    <!-- SIDEBAR LOGO -->
    <div class="flex items-center gap-4 p-2 mb-2 mt-2">
        <a href="dashboard.php" class="flex items-center gap-1 logo-hover">
            <img src="photos/plan.png" class="h-10 w-auto" alt="BiteTrack Logo">
            <span class="text-lg font-bold text-gray-900">BiteTrack</span>
        </a>
    </div>

    <hr class="border-gray-300 w-full mx-0">


    <div class="container mx-auto p-6 pt-2">
        <h1 class="text-3xl font-semibold text-gray-800"><span
                class="text-2xl font-semibold text-gray-800">Welcome to your</span> Dashboard</h1>
        <p class="text-gray-600 mt-2">Manage your Goals, Progress, and other features.</p>
    </div>
    <hr class="border-gray-300 w-full mx-0">
    <!-- SIDEBAR HEADER -->

    <div class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar">
        <!-- SIDEBAR Menu -->
        <nav class="mt-4">
            <ul class="flex flex-col gap-4">

                <!-- Menu Item: Dashboard -->
                <li>
                    <a href="goals.php"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path
                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path
                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Edit Goals</span>
                    </a>
                </li>
                <li>
                    <a href="meals.php"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
                        </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Meal Logs</span>
                    </a>
                </li>
<!-- Side Bar: COMMUNITY PAGE -->
                <li>
                    <a href="sns.php"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                        </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Community Page</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">3</span>
                    </a>
                </li>
            </ul>
    </div>
    <section>
        <div id="sb_userprofile" class="absolute bottom-4 right-4 flex items-center gap-4">

            <!-- Logout Button -->
            <a href="logout.php" id="log_out" class="auth-buttons flex items-center gap-2 px-5 py-2 rounded-full text-black font-semibold shadow-md 
               bg-gradient-to-r from-yellow-400 to-red-400 hover:scale-105 hover:opacity-90 
               transition duration-300 ease-in-out">
                Logout
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </a>
        </div>
    </section>


</aside>