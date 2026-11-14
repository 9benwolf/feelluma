<!-- Modal Backdrop & Container -->
<div id="orderModal" class="fixed inset-0 flex items-center justify-center bg-black/50 backdrop-blur-sm z-50 hidden " >
    <!-- Actual Modal Content -->
    <div id="orderModalContent" class="bg-white rounded-lg shadow-xl p-6 w-full max-w-[500px] transform transition-all duration-300 scale-95 opacity-0" >
        <h2 class="text-xl font-semibold mb-4 modal-title"></h2>
        <p class="mb-6 modal-content text-start">
        </p>
        <div class="text-right modal-footer">
            <button id="closeOrderModal" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded">
                Close
            </button>
        </div>
    </div>
</div>