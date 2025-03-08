<?php require_once 'includes/header.php'; ?>


<body>

    <main class="bg-white flex items-center justify-center h-screen">


    <div class="max-w-4xl mx-auto bg-white p-6 shadow-lg rounded-lg w-4/5 max-w-6xl h-screen ">
    <h2 class="text-xl font-semibold mb-4 "> Manage your meals</h2>

    <!-- Search Box -->
        <div class="flex justify-end mb-4">
            <div class="relative">
                <input type="text" id="table-search" class="p-2 pl-10 border border-gray-300 rounded-lg w-64 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search for users...">
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Table -->
        <div class="relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full text-sm text-left text-gray-900 border border-gray-200">
                <thead class="text-xs uppercase bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Role</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">John Doe</td>
                        <td class="px-6 py-4">john@example.com</td>
                        <td class="px-6 py-4">Admin</td>
                        <td class="px-6 py-4">
                            <button onclick="openModal('editModal')" class="text-blue-600 hover:underline">Edit</button>
                            <button class="text-red-600 hover:underline ml-2">Delete</button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Jane Smith</td>
                        <td class="px-6 py-4">jane@example.com</td>
                        <td class="px-6 py-4">User</td>
                        <td class="px-6 py-4">
                            <button onclick="openModal('editModal')" class="text-blue-600 hover:underline">Edit</button>
                            <button class="text-red-600 hover:underline ml-2">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-semibold mb-4">Edit User</h2>
            <label class="block mb-2">Name:</label>
            <input type="text" class="w-full p-2 border border-gray-300 rounded-lg mb-4" placeholder="Enter name">
            <label class="block mb-2">Email:</label>
            <input type="email" class="w-full p-2 border border-gray-300 rounded-lg mb-4" placeholder="Enter email">
            <div class="flex justify-end">
                <button onclick="closeModal('editModal')" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Cancel</button>
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">Save</button>
            </div>
        </div>
    </div>

    <!-- jQuery for Search Function -->
    <script>
        $(document).ready(function(){
            $("#table-search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#table-body tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });

        // JavaScript for Modal
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove("hidden");
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add("hidden");
        }
    </script>

    </main>

</body>

<?php require_once 'includes/footer.php'; ?>