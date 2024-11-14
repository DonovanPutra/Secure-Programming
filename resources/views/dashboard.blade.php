@extends('layouts.app')

@section('content')
    <!-- New Collection Banner -->
    <div class="bg-gray-100 py-8 px-4 text-center">
        <h1 class="text-4xl font-bold">New Collection</h1>
        <p class="text-lg mt-2">By Shoeringan</p>
        <a href="#" class="inline-block mt-4 bg-black text-white py-2 px-6 rounded hover:bg-gray-800">Buy Now</a>
    </div>

    <!-- All Products Section -->
    <div class="container mx-auto py-12">
        <h2 class="text-2xl font-semibold mb-6">All Products</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Sample Product Card -->
            @for ($i = 1; $i <= 16; $i++)
                <div class="bg-white border rounded-lg shadow-sm hover:shadow-lg transition">
                    <div class="h-48 bg-gray-200 rounded-t-lg"></div> <!-- Placeholder image -->
                    <div class="p-4">
                        <h3 class="text-lg font-medium">Shoe Name {{ $i }}</h3>
                        <p class="text-gray-600 mt-1">by Brand {{ $i }}</p>
                        <p class="text-gray-900 font-semibold mt-2">$100.00</p>
                    </div>
                </div>
            @endfor
        </div>
        <!-- Pagination -->
        <div class="flex justify-between items-center mt-8">
            <span>Page 1 of 4</span>
            <a href="#" class="text-blue-500 hover:underline">Next</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-white py-8 mt-12">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Contact Section -->
            <div>
                <h4 class="font-bold mb-4">Contact Us</h4>
                <p>+62 815-366-1039</p>
                <p>mail@example.com</p>
            </div>
            <!-- Support Section -->
            <div>
                <h4 class="font-bold mb-4">Support</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">Returns and Refunds</a></li>
                    <li><a href="#" class="hover:underline">Shipping</a></li>
                    <li><a href="#" class="hover:underline">Order Status</a></li>
                    <li><a href="#" class="hover:underline">Order Tracker</a></li>
                </ul>
            </div>
            <!-- Company Section -->
            <div>
                <h4 class="font-bold mb-4">Company</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">About Us</a></li>
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Terms and Conditions</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-8 text-sm text-gray-400">
            © 2024 Shoeringan. All Rights Reserved.
        </div>
    </footer>
@endsection
