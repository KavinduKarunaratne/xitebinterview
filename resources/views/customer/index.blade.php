<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-6">Prescription Orders</h1>
        
        <table class="min-w-full table-auto border-collapse bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="px-4 py-2 text-sm font-medium text-gray-700">#</th>
                    <th class="px-4 py-2 text-sm font-medium text-gray-700">Patient Name</th>
                    <th class="px-4 py-2 text-sm font-medium text-gray-700">Prescription Details</th>
                    <th class="px-4 py-2 text-sm font-medium text-gray-700">Order Date</th>
                    <th class="px-4 py-2 text-sm font-medium text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-b">
                    <td class="px-4 py-2 text-sm text-gray-700">1</td>
                    <td class="px-4 py-2 text-sm text-gray-700">John Doe</td>
                    <td class="px-4 py-2 text-sm text-gray-700">Amoxicillin 500mg</td>
                    <td class="px-4 py-2 text-sm text-gray-700">24-02-2025</td>
                    <td class="px-4 py-2 text-sm text-gray-700">
                        <a href="{{ route('pharmacy.show', 1) }}" class="text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded-lg">View</a>
                    </td>
                </tr>
                <tr class="border-t border-b">
                    <td class="px-4 py-2 text-sm text-gray-700">2</td>
                    <td class="px-4 py-2 text-sm text-gray-700">Jane Smith</td>
                    <td class="px-4 py-2 text-sm text-gray-700">Ibuprofen 200mg</td>
                    <td class="px-4 py-2 text-sm text-gray-700">23-02-2025</td>
                    <td class="px-4 py-2 text-sm text-gray-700">
                        <a href="{{ route('pharmacy.show', 2) }}" class="text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded-lg">View</a>
                    </td>
                </tr>
                <tr class="border-t border-b">
                    <td class="px-4 py-2 text-sm text-gray-700">3</td>
                    <td class="px-4 py-2 text-sm text-gray-700">Alice Brown</td>
                    <td class="px-4 py-2 text-sm text-gray-700">Lisinopril 10mg</td>
                    <td class="px-4 py-2 text-sm text-gray-700">22-02-2025</td>
                    <td class="px-4 py-2 text-sm text-gray-700">
                        <a href="{{ route('pharmacy.show', 3) }}" class="text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded-lg">View</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- <div class="container">
        <h1>Prescription Orders</h1>
        
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Patient Name</th>
                    <th>Prescription Details</th>
                    <th>Order Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prescriptions as $prescription)
                    <tr>
                        <td>{{ $prescription->id }}</td>
                        <td>{{ $prescription->patient_name }}</td>
                        <td>{{ $prescription->details }}</td>
                        <td>{{ $prescription->created_at->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ route('pharmacy.show', $prescription->id) }}" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
</x-app-layout>