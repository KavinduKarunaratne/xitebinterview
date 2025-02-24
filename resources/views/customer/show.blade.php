<x-app-layout>
    <div class="p-8 bg-gray-100">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <div class="grid grid-cols-3 gap-4">
                <!-- Prescription Image Section -->
                <div class="col-span-1">
                    <div class="border p-4 flex flex-col items-center">
                        <div class="w-64 h-64 bg-gray-200 flex items-center justify-center mb-4">
                            <span>Prescription (Image)</span>
                        </div>
                    </div>
                </div>
                
                <!-- Quotation & Drug Input Section -->
                <div class="col-span-2">
                    <div class="border p-4">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr>
                                    <th class="border-b pb-2">Drug</th>
                                    <th class="border-b pb-2">Quantity</th>
                                    <th class="border-b pb-2">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Amoxicillin 250mg</td>
                                    <td>10.00 x 5</td>
                                    <td>$50.00</td>
                                </tr>
                                <tr>
                                    <td>Paracetamol 500mg</td>
                                    <td>5.00 x 5</td>
                                    <td>$25.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-4 text-right font-bold">Total: $75.00</div>
                    </div>
                    
                    <!-- Drug Input Section -->
                    <div class="mt-4">
                        <label class="block">Drug</label>
                        <input type="text" class="w-full border p-2 rounded" />
                        
                        <label class="block mt-2">Quantity</label>
                        <input type="text" class="w-full border p-2 rounded" />
                        
                        <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Add</button>
                    </div>
                    
                    <hr class="my-4" />
                    
                    <button class="w-full bg-green-500 text-white px-4 py-2 rounded">Send Quotation</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>