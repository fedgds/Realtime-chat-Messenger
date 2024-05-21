<div class="flex h-screen">
    <!-- Sidebar: Conversations List -->
    <div class="w-1/4 bg-white border-r overflow-y-auto">
        <div class="p-4 text-lg font-semibold border-b">Cuộc trò chuyện</div>
        <ul>
            <li class="p-4 border-b hover:bg-gray-200 cursor-pointer">Người dùng 1</li>
            <li class="p-4 border-b hover:bg-gray-200 cursor-pointer">Người dùng 2</li>
            <li class="p-4 border-b hover:bg-gray-200 cursor-pointer">Người dùng 3</li>
            <!-- Thêm các cuộc trò chuyện khác ở đây -->
        </ul>
    </div>

    <!-- Chat Area -->
    <div class="flex-1 flex flex-col">
        <!-- Messages -->
        <div class="flex-1 p-4 overflow-y-auto">
            <div class="flex flex-col space-y-4">
                <div class="self-start bg-blue-100 p-4 rounded-lg">Tin nhắn từ người dùng khác</div>
                <div class="self-end bg-green-100 p-4 rounded-lg">Tin nhắn của bạn</div>
                <!-- Thêm các tin nhắn khác ở đây -->
            </div>
        </div>

        <!-- Message Input -->
        <div class="border-t p-4 bg-white">
            <div class="flex">
                <input type="text" placeholder="Nhập tin nhắn..." class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                <button class="ml-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">Gửi</button>
            </div>
        </div>
    </div>
</div>