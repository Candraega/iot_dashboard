@extends('layouts.vertical', ['title' => 'Avatars'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Components", "title" => "Avatars"])

<div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Circular Avatars</h4>
        </div>
        <div class="p-6">
            <div class="flex flex-wrap items-center gap-2">
                <img class="inline-block size-8 rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                <img class="inline-block size-[38px] rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                <img class="inline-block size-[46px] rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                <img class="inline-block size-[62px] rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Rounded Avatars</h4>
        </div>
        <div class="p-6">
            <div class="flex flex-wrap items-center gap-2">
                <img class="inline-block size-8 rounded-lg" src="/images/users/avatar-1.jpg" alt="Image Description">
                <img class="inline-block size-[38px] rounded-lg" src="/images/users/avatar-1.jpg" alt="Image Description">
                <img class="inline-block size-[46px] rounded-lg" src="/images/users/avatar-1.jpg" alt="Image Description">
                <img class="inline-block size-[62px] rounded-lg" src="/images/users/avatar-1.jpg" alt="Image Description">
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Circular avatars
                    with top status
                </h5>
                <p class="text-default-600 text-sm font-medium">Circular avatars with all kinds of
                    status indicators.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <div class="relative inline-block">
                    <img class="inline-block size-8 rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute top-0 end-0 block size-1.5 rounded-full ring-2 ring-white bg-default-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block size-[38px] rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute top-0 end-0 block size-2.5 rounded-full ring-2 ring-white bg-red-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block size-[46px] rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute top-0 end-0 block size-3 rounded-full ring-2 ring-white bg-teal-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block size-[62px] rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute top-0 end-0 block size-3.5 rounded-full ring-2 ring-white bg-yellow-400"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Circular avatars
                    with bottom status</h5>
                <p class="text-default-600 text-sm font-medium">Circular avatars with all kinds of
                    status indicators.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <div class="relative inline-block">
                    <img class="inline-block size-8 rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block size-1.5 rounded-full ring-2 ring-white bg-default-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block size-[38px] rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block size-2.5 rounded-full ring-2 ring-white bg-red-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block size-[46px] rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block size-3 rounded-full ring-2 ring-white bg-teal-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block size-[62px] rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block size-3.5 rounded-full ring-2 ring-white bg-yellow-400"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Rounded avatars
                    with bottom status</h5>
                <p class="text-default-600 text-sm font-medium">Rounded avatars with all kinds of
                    status indicators.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <div class="relative inline-block">
                    <img class="inline-block size-8 rounded-lg" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block size-1.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-default-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block size-[38px] rounded-lg" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block size-2.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-red-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block size-[46px] rounded-lg" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block size-3 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-teal-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block size-[62px] rounded-lg" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block size-3.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-yellow-400"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Avatar Example</h5>
                <p class="text-default-600 text-sm font-medium">Avatar examples with brand logos.
                </p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <!-- Avatar -->
                <div class="relative inline-block">
                    <img class="inline-block size-[46px] rounded-lg" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block p-2 rounded-full transform translate-y-1/2 translate-x-1/2 bg-white">
                        <svg class="flex-shrink-0 size-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.7438 0.940745C6.84695 1.30308 2.6841 1.63631 2.48837 1.67533C1.9396 1.77319 1.44038 2.14544 1.20563 2.63537L1 3.06646L1.01982 13.3407L1.04893 23.615L1.36234 24.2517C1.53886 24.6042 2.73365 26.2499 4.0362 27.9439C6.61221 31.2836 6.79802 31.47 7.77726 31.5679C8.06156 31.597 10.1966 31.4991 12.5081 31.3622C14.8295 31.2154 18.5508 30.99 20.7842 30.863C30.3233 30.2839 29.8334 30.3328 30.3815 29.8627C31.0672 29.2947 31.0183 30.2251 31.0474 17.7377C31.0672 7.15003 31.0573 6.45509 30.9006 6.13177C30.7148 5.76943 30.3815 5.51487 26.0329 2.45885C23.1243 0.421704 22.9186 0.313932 21.6155 0.294111C21.0772 0.274911 16.6307 0.568497 11.7438 0.940745ZM22.752 2.28232C23.1633 2.46814 26.1704 4.56412 26.6108 4.9661C26.7284 5.08378 26.7675 5.18164 26.7086 5.24048C26.5717 5.35817 7.96245 6.465 7.42421 6.38634C7.17956 6.34732 6.81722 6.20052 6.61159 6.06302C5.75932 5.48514 3.64413 3.75149 3.64413 3.62452C3.64413 3.29129 3.57538 3.29129 11.8714 2.69421C13.4582 2.58644 16.0633 2.39071 17.6502 2.26312C21.0871 1.98874 22.1159 1.99865 22.752 2.28232ZM28.6677 7.63996C28.8046 7.77685 28.9223 8.04132 28.9613 8.29589C28.9904 8.53125 29.0102 12.9189 28.9904 18.0313C28.9613 26.8067 28.9514 27.3555 28.7848 27.61C28.6869 27.7667 28.4912 27.9333 28.3438 27.9823C27.9331 28.1489 8.43318 29.2557 8.03183 29.138C7.84601 29.0891 7.59083 28.9324 7.45394 28.7955L7.21858 28.541L7.18947 19.0799C7.16965 12.4395 7.18947 9.5012 7.26813 9.23672C7.32697 9.041 7.47376 8.80564 7.60136 8.72759C7.77788 8.60991 8.93364 8.51205 12.9101 8.2773C15.7016 8.1206 20.0206 7.85613 22.4987 7.70933C28.3933 7.34638 28.3741 7.34638 28.6677 7.63996Z" class="fill-black" fill="currentColor"></path>
                            <path d="M23.4277 10.8818C22.3698 10.9506 21.4296 11.0484 21.3218 11.1073C20.9985 11.2739 20.8028 11.5483 20.7638 11.8617C20.7347 12.185 20.8325 12.224 21.8898 12.3516L22.35 12.4104V16.5925C22.35 19.0799 22.311 20.7256 22.2621 20.6767C22.2131 20.6178 20.8226 18.5027 19.167 15.9756C17.512 13.4392 16.1407 11.3525 16.1209 11.3333C16.1011 11.3135 15.024 11.3724 13.7313 11.4609C12.1445 11.5687 11.273 11.6666 11.0965 11.7644C10.8122 11.9112 10.4988 12.4303 10.4988 12.7734C10.4988 12.979 10.871 13.0868 11.6545 13.0868H12.0658V25.1139L11.4 25.3196C10.8809 25.4763 10.7044 25.5741 10.6165 25.7698C10.4598 26.1031 10.4697 26.4066 10.6264 26.4066C10.6852 26.4066 11.792 26.3378 13.0649 26.2598C15.582 26.113 15.8657 26.0442 16.1302 25.5252C16.2088 25.3685 16.277 25.2019 16.277 25.1529C16.277 25.1139 15.9345 24.9962 15.5226 24.8984C15.1014 24.8005 14.6802 24.7027 14.5923 24.6828C14.4257 24.6339 14.4157 24.3304 14.4157 20.1186V15.6033L17.3931 20.2753C20.5173 25.1721 20.9093 25.7308 21.3893 25.9755C21.987 26.2889 23.5051 26.0733 24.2688 25.5741L24.5042 25.4273L24.524 18.7479L24.5531 12.0586L25.0722 11.9608C25.6891 11.8431 25.9734 11.5594 25.9734 11.0695C25.9734 10.7561 25.9536 10.7362 25.66 10.7462C25.4847 10.7542 24.4757 10.813 23.4277 10.8818Z" class="fill-black" fill="currentColor"></path>
                        </svg>
                    </span>
                </div>
                <!-- End Avatar -->

                <!-- Avatar -->
                <div class="relative inline-block">
                    <img class="inline-block size-[46px] rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block p-2 rounded-full transform translate-y-1/2 translate-x-1/2 bg-white">
                        <svg class="flex-shrink-0 size-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7326 0C9.96372 0.00130479 8.53211 1.43397 8.53342 3.19935C8.53211 4.96473 9.96503 6.39739 11.7339 6.39869H14.9345V3.20065C14.9358 1.43527 13.5029 0.00260958 11.7326 0C11.7339 0 11.7339 0 11.7326 0M11.7326 8.53333H3.20053C1.43161 8.53464 -0.00130383 9.9673 3.57297e-06 11.7327C-0.00261123 13.4981 1.4303 14.9307 3.19922 14.9333H11.7326C13.5016 14.932 14.9345 13.4994 14.9332 11.734C14.9345 9.9673 13.5016 8.53464 11.7326 8.53333V8.53333Z" fill="#36C5F0"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M32 11.7327C32.0013 9.9673 30.5684 8.53464 28.7995 8.53333C27.0306 8.53464 25.5976 9.9673 25.5989 11.7327V14.9333H28.7995C30.5684 14.932 32.0013 13.4994 32 11.7327ZM23.4666 11.7327V3.19935C23.4679 1.43527 22.0363 0.00260958 20.2674 0C18.4984 0.00130479 17.0655 1.43397 17.0668 3.19935V11.7327C17.0642 13.4981 18.4971 14.9307 20.2661 14.9333C22.035 14.932 23.4679 13.4994 23.4666 11.7327Z" fill="#2EB67D"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.2661 32C22.035 31.9987 23.4679 30.566 23.4666 28.8007C23.4679 27.0353 22.035 25.6026 20.2661 25.6013H17.0656V28.8007C17.0642 30.5647 18.4972 31.9974 20.2661 32ZM20.2661 23.4654H28.7995C30.5684 23.4641 32.0013 22.0314 32 20.266C32.0026 18.5006 30.5697 17.068 28.8008 17.0654H20.2674C18.4985 17.0667 17.0656 18.4993 17.0669 20.2647C17.0656 22.0314 18.4972 23.4641 20.2661 23.4654V23.4654Z" fill="#ECB22E"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.93953e-07 20.266C-0.00130651 22.0314 1.43161 23.4641 3.20052 23.4654C4.96944 23.4641 6.40235 22.0314 6.40105 20.266V17.0667H3.20052C1.43161 17.068 -0.00130651 18.5006 8.93953e-07 20.266ZM8.53342 20.266V28.7993C8.53081 30.5647 9.96372 31.9974 11.7326 32C13.5016 31.9987 14.9345 30.566 14.9332 28.8007V20.2686C14.9358 18.5032 13.5029 17.0706 11.7339 17.068C9.96372 17.068 8.53211 18.5006 8.53342 20.266C8.53342 20.2673 8.53342 20.266 8.53342 20.266Z" fill="#E01E5A"></path>
                        </svg>
                    </span>
                </div>
                <!-- End Avatar -->
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Avatar Example</h5>
                <p class="text-default-600 text-sm font-medium">Circular avatars with placeholder
                    initials</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center justify-center size-8 rounded-full bg-default-500 text-xs font-semibold text-white leading-none">
                    MT
                </span>

                <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-default-500 text-sm font-semibold text-white leading-none">
                    MT
                </span>

                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-default-500 font-semibold text-white leading-none">
                    MT
                </span>

                <span class="inline-flex items-center justify-center size-[62px] rounded-full bg-default-500 text-lg font-semibold text-white leading-none">
                    MT
                </span>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Placeholder
                    initials</h5>
                <p class="text-default-600 text-sm font-medium">Circular avatars with placeholder
                    initials</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center justify-center size-8 rounded-full bg-default-500 text-xs font-semibold text-white leading-none">
                    MT
                </span>

                <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-default-500 text-sm font-semibold text-white leading-none">
                    MT
                </span>

                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-default-500 font-semibold text-white leading-none">
                    MT
                </span>

                <span class="inline-flex items-center justify-center size-[62px] rounded-full bg-default-500 text-lg font-semibold text-white leading-none">
                    MT
                </span>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">
                    Solid color variants </h5>
                <p class="text-default-600 text-sm font-medium">Predefined solid
                    color avatar styles.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-default-800 font-semibold text-white leading-none">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-default-500 font-semibold text-white leading-none">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-green-500 font-semibold text-white leading-none">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-primary-600 font-semibold text-white leading-none">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-red-500 font-semibold text-white leading-none">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-yellow-500 font-semibold text-white leading-none">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-white font-semibold text-default-800 leading-none">
                    MT
                </span>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">
                    Soft color variants </h5>
                <p class="text-default-600 text-sm font-medium">Predefined solid
                    color avatar styles.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center justify-center size-[46px] text-sm font-semibold leading-none rounded-full bg-default-100 text-default-800">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] text-sm font-semibold leading-none rounded-full bg-default-50 text-default-500">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] text-sm font-semibold leading-none rounded-full bg-teal-100 text-teal-800">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] text-sm font-semibold leading-none rounded-full bg-primary-100 text-primary-800">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] text-sm font-semibold leading-none rounded-full bg-red-100 text-red-800">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] text-sm font-semibold leading-none rounded-full bg-yellow-100 text-yellow-800">
                    MT
                </span>
                <span class="inline-flex items-center justify-center size-[46px] text-sm font-semibold leading-none rounded-full bg-white/10 text-white">
                    MT
                </span>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">
                    Displaying a tooltip</h5>
                <p class="text-default-600 text-sm font-medium">A tooltip can be used with an avatar
                    to be displayed on focus or hover.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="hs-tooltip inline-block">
                <a class="hs-tooltip-toggle relative inline-block" href="#">
                    <img class="inline-block size-[46px] rounded-full" src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block size-3 rounded-full ring-2 ring-white bg-teal-400"></span>
                    <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-default-900 text-xs font-medium text-white rounded-lg shadow-sm" role="tooltip">
                        Mark Wanner is online
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection