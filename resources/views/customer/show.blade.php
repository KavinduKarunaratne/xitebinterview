<x-app-layout>
    <div class="p-8 bg-gray-100">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <div class="grid grid-cols-3 gap-4">
                <!-- Prescription Image Section -->
                <div class="col-span-1">
                    <div class="border p-4 flex flex-col items-center">
                        <div class="w-64 h-64 bg-gray-200 flex items-center justify-center mb-4">
                            <span>Prescription (Image)</span>
                            <img src="{{ asset('../storage/app/public/' . $prescription->file_path) }}" alt="Uploaded Image" style="max-width: 500px;">
                        </div>
                    </div>
                </div>
                
                <!-- Quotation & Drug Input Section -->
                <!-- Quotation & Drug Input Section -->
                <div class="col-span-2">
                    <div class="border p-4">
                        <table class="w-full text-left border-collapse" id="quotationTable">
                            <thead>
                                <tr>
                                    <th class="border-b pb-2">Drug</th>
                                    <th class="border-b pb-2">Quantity</th>
                                    <th class="border-b pb-2">Amount</th>
                                </tr>
                            </thead>
                            <tbody id="quotationBody">
                                <!-- Items will be dynamically added here -->
                            </tbody>
                        </table>
                        <div class="mt-4 text-right font-bold" id="totalAmount">Total: $0.00</div>
                    </div>
                    
                    <!-- Drug Input Section -->
                    <div class="mt-4">
                        <label class="block">Drug</label>
                        <input type="text" id="drugName" class="w-full border p-2 rounded" />
                        
                        <label class="block mt-2">Quantity</label>
                        <input type="number" id="drugQuantity" class="w-full border p-2 rounded" />
                        
                        <label class="block mt-2">Amount</label>
                        <input type="number" id="drugAmount" class="w-full border p-2 rounded" />
                        
                        <button onclick="addItem()" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Add</button>
                    </div>
                    
                    <hr class="my-4" />
                    
                    <button onclick="sendQuotation()" class="w-full bg-blue-500 text-white px-4 py-2 rounded">Send Quotation</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    let total = 0;
    function addItem() {
        let drug = document.getElementById('drugName').value;
        let quantity = document.getElementById('drugQuantity').value;
        let amount = document.getElementById('drugAmount').value;
        
        if (!drug || !quantity || !amount) {
            alert("Please fill in all fields.");
            return;
        }
        
        let tbody = document.getElementById('quotationBody');
        let row = `<tr><td>${drug}</td><td>${quantity}</td><td>$${amount}</td></tr>`;
        tbody.innerHTML += row;
        
        total += parseFloat(amount * quantity);
        document.getElementById('totalAmount').innerText = `Total: $${total.toFixed(2)}`;
        
        document.getElementById('drugName').value = '';
        document.getElementById('drugQuantity').value = '';
        document.getElementById('drugAmount').value = '';
    }
    
    function sendQuotation() {
        let tableRows = document.getElementById('quotationBody').innerHTML;
        if (!tableRows) {
            alert("No items to send.");
            return;
        }
        
        let emailBody = `Quotation Details:\n\n`;
        document.querySelectorAll("#quotationBody tr").forEach(row => {
            let cols = row.querySelectorAll("td");
            emailBody += `${cols[0].innerText} - Quantity: ${cols[1].innerText} - Price: ${cols[2].innerText}\n`;
        });
        emailBody += `\nTotal: $${total.toFixed(2)}`;
        
        let mailtoLink = `mailto:customer@example.com?subject=Quotation&body=${encodeURIComponent(emailBody)}`;
        window.location.href = mailtoLink;
    }
</script>