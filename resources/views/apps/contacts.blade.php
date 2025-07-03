@extends('layouts.vertical', ['title' => 'Contacts'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Apps", "title" => "Contacts"])

<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-7.5">

    <!-- Card 1 -->
    <div class="card overflow-hidden">
        <!-- Cover Image Section -->
        <div class="relative">
            <img class="w-full h-44 object-cover" src="/images/small/img-1.jpg" alt="Cover Image">

            <!-- Profile Image with Status -->
            <div class="absolute -bottom-14 start-1/2 transform -translate-x-1/2">
                <div class="relative">
                    <img class="w-28 h-28 rounded-full border-4 border-white shadow-md" src="/images/users/avatar-8.jpg"
                        alt="Profile Picture">
                    <span
                        class="absolute bottom-1 end-1 w-5 h-5 bg-green-500 border-2 border-white rounded-full"></span>
                </div>
            </div>
        </div>

        <!-- Name, Title, and Location -->
        <div class="pt-16 pb-4 text-center">
            <h2 class="text-xl font-semibold text-default-700 mb-2">Candra Wahyu Perdana</h2>
            <p class="text-default-600 text-sm">Madiun, East Java</p>
            <span class="text-xs text-default-400">Developer</span>
        </div>

        <!-- Social Icons Section -->
        <div class="py-4 px-6">
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-primary hover:text-blue-700 transition-all">
                    <i class="i-ph-facebook-logo text-3xl"></i>
                </a>
                <a href="https://www.instagram.com/candra_two/"
                    class="text-pink-500 hover:text-pink-700 transition-all">
                    <i class="i-ph-instagram-logo text-3xl"></i>
                </a>
                <a href="#" class="text-blue-700 hover:text-blue-900 transition-all">
                    <i class="i-ph-linkedin-logo text-3xl"></i>
                </a>
                <a href="#" class="text-default-700 hover:text-default-900 transition-all">
                    <i class="i-ph-x-logo text-3xl"></i>
                </a>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="pb-4 px-6 flex justify-center space-x-4">
            <button class="btn bg-primary text-white">Follow</button>
            <button class="btn border-primary text-primary hover:bg-primary hover:text-white">Message</button>
        </div>

        <!-- Stats Section -->
        <div class="flex justify-around bg-default-50 py-4 border-t border-dashed border-default-200">
            <div class="text-center">
                <p class="text-lg font-medium text-default-800">385</p>
                <p class="text-sm text-default-500">Followers</p>
            </div>
            <div class="text-center">
                <p class="text-lg font-medium text-default-800">8</p>
                <p class="text-sm text-default-500">Posts</p>
            </div>
            <div class="text-center">
                <p class="text-lg font-medium text-default-800">586</p>
                <p class="text-sm text-default-500">Following</p>
            </div>
        </div>
    </div>

    <!-- Card 1 -->
    <div class="card overflow-hidden">
        <!-- Cover Image Section -->
        <div class="relative">
            <img class="w-full h-44 object-cover" src="/images/small/img-3.jpg" alt="Cover Image">

            <!-- Profile Image with Status -->
            <div class="absolute -bottom-14 start-1/2 transform -translate-x-1/2">
                <div class="relative">
                    <img class="w-28 h-28 rounded-full border-4 border-white shadow-md"
                        src="/images/users/avatar-10.jpg" alt="Profile Picture">
                    <span
                        class="absolute bottom-1 end-1 w-5 h-5 bg-green-500 border-2 border-white rounded-full"></span>
                </div>
            </div>
        </div>

        <!-- Name, Title, and Location -->
        <div class="pt-16 pb-4 text-center">
            <h2 class="text-xl font-semibold text-default-700 mb-2">Andreika Luna Alghivari</h2>
            <p class="text-default-600 text-sm">Malang, East Java</p>
            <span class="text-xs text-default-400">Developer</span>
        </div>

        <!-- Social Icons Section -->
        <div class="py-4 px-6">
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-primary hover:text-blue-700 transition-all">
                    <i class="i-ph-facebook-logo text-3xl"></i>
                </a>
                <a href="https://www.instagram.com/darklunarr/"
                    class="text-pink-500 hover:text-pink-700 transition-all">
                    <i class="i-ph-instagram-logo text-3xl"></i>
                </a>
                <a href="#" class="text-blue-700 hover:text-blue-900 transition-all">
                    <i class="i-ph-linkedin-logo text-3xl"></i>
                </a>
                <a href="#" class="text-default-700 hover:text-default-900 transition-all">
                    <i class="i-ph-x-logo text-3xl"></i>
                </a>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="pb-4 px-6 flex justify-center space-x-4">
            <button class="btn bg-primary text-white">Follow</button>
            <button class="btn border-primary text-primary hover:bg-primary hover:text-white">Message</button>
        </div>

        <!-- Stats Section -->
        <div class="flex justify-around bg-default-50 py-4 border-t border-dashed border-default-200">
            <div class="text-center">
                <p class="text-lg font-medium text-default-800">1,042</p>
                <p class="text-sm text-default-500">Followers</p>
            </div>
            <div class="text-center">
                <p class="text-lg font-medium text-default-800">2</p>
                <p class="text-sm text-default-500">Posts</p>
            </div>
            <div class="text-center">
                <p class="text-lg font-medium text-default-800">823</p>
                <p class="text-sm text-default-500">Following</p>
            </div>
        </div>
    </div>


    <!-- Card 1 -->
    <div class="card overflow-hidden">
        <!-- Cover Image Section -->
        <div class="relative">
            <img class="w-full h-44 object-cover" src="/images/small/img-2.jpg" alt="Cover Image">

            <!-- Profile Image with Status -->
            <div class="absolute -bottom-14 start-1/2 transform -translate-x-1/2">
                <div class="relative">
                    <img class="w-28 h-28 rounded-full border-4 border-white shadow-md" src="/images/users/avatar-9.jpg"
                        alt="Profile Picture">
                    <span
                        class="absolute bottom-1 end-1 w-5 h-5 bg-green-500 border-2 border-white rounded-full"></span>
                </div>
            </div>
        </div>

        <!-- Name, Title, and Location -->
        <div class="pt-16 pb-4 text-center">
            <h2 class="text-xl font-semibold text-default-700 mb-2">Agatha Herma Putra</h2>
            <p class="text-default-600 text-sm">Malang, East Java</p>
            <span class="text-xs text-default-400">Developer</span>
        </div>

        <!-- Social Icons Section -->
        <div class="py-4 px-6">
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-primary hover:text-blue-700 transition-all">
                    <i class="i-ph-facebook-logo text-3xl"></i>
                </a>
                <a href="https://www.instagram.com/agatha_herma/"
                    class="text-pink-500 hover:text-pink-700 transition-all">
                    <i class="i-ph-instagram-logo text-3xl"></i>
                </a>
                <a href="#" class="text-blue-700 hover:text-blue-900 transition-all">
                    <i class="i-ph-linkedin-logo text-3xl"></i>
                </a>
                <a href="#" class="text-default-700 hover:text-default-900 transition-all">
                    <i class="i-ph-x-logo text-3xl"></i>
                </a>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="pb-4 px-6 flex justify-center space-x-4">
            <button class="btn bg-primary text-white">Follow</button>
            <button class="btn border-primary text-primary hover:bg-primary hover:text-white">Message</button>
        </div>

        <!-- Stats Section -->
        <div class="flex justify-around bg-default-50 py-4 border-t border-dashed border-default-200">
            <div class="text-center">
                <p class="text-lg font-medium text-default-800">1,694</p>
                <p class="text-sm text-default-500">Followers</p>
            </div>
            <div class="text-center">
                <p class="text-lg font-medium text-default-800">29</p>
                <p class="text-sm text-default-500">Posts</p>
            </div>
            <div class="text-center">
                <p class="text-lg font-medium text-default-800">1,648</p>
                <p class="text-sm text-default-500">Following</p>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')

@endsection