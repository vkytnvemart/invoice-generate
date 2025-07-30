<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">


    <nav class="bg-blue-600 p-4 text-white shadow-md">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-xl font-semibold">Invoice Generator</h1>

        </div>
    </nav>


    <div class="max-w-xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg">


        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded-md shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/invoice" class="space-y-4">
            @csrf

            <div>
                <label class="block font-medium">Client Name</label>
                <input name="client_name" type="text" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div>
                <label class="block font-medium">Email</label>
                <input name="email" type="email" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div>
                <label class="block font-medium">Item Description</label>
                <input name="item_description" type="text" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div>
                <label class="block font-medium">Quantity</label>
                <input name="quantity" type="number" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div>
                <label class="block font-medium">Price per Item</label>
                <input name="price_per_item" type="number" step="0.01" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div>
                <label class="block font-medium">Tax Percentage</label>
                <input name="tax_percentage" type="number" step="0.01" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Submit Invoice</button>
            </div>
        </form>
    </div>

</body>
</html>
