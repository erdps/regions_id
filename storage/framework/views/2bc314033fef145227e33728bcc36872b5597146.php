<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DesignCub3</title>
        <!-- Link CSS, Bootstrap, JS -->
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
       
        <!-- JavaScript Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 underline">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php $__env->startSection('content'); ?>
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

                    <!-- Saya menggunakan SVG untuk logo, krn blm paham cara menampilkan "img src" di laravel. Keunggulan SVG, reduce loading speed krn tidak memiliki file size -->
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100.000000pt" height="100.000000pt" viewBox="0 0 200.000000 200.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(50.000000,200.000000) scale(0.100000,-0.100000)" fill="#00000" stroke="none">
                                <path d="M207 663 c-4 -3 -7 -27 -7 -52 0 -35 -3 -42 -12 -33 -22 22 -82 14
                                -109 -14 -19 -20 -24 -36 -24 -79 0 -43 5 -59 24 -79 27 -29 87 -36 110 -13
                                11 10 14 10 18 0 3 -7 16 -13 29 -13 l24 0 0 145 0 145 -23 0 c-13 0 -27 -3
                                -30 -7z m-17 -128 c16 -19 16 -81 0 -100 -16 -19 -54 -19 -70 0 -16 20 -17 80
                                -1 99 17 20 55 21 71 1z"/>
                                <path d="M700 645 c0 -20 5 -25 25 -25 20 0 25 5 25 25 0 20 -5 25 -25 25 -20
                                0 -25 -5 -25 -25z"/>
                                <path d="M309 561 c-42 -42 -42 -110 0 -152 24 -23 38 -29 73 -29 43 0 88 26
                                88 50 0 13 -47 13 -55 0 -11 -18 -64 -11 -75 9 -5 11 -10 22 -10 25 0 3 34 6
                                76 6 l77 0 -6 38 c-13 81 -109 111 -168 53z m110 -30 c14 -24 5 -31 -39 -31
                                -44 0 -53 7 -39 31 6 12 21 19 39 19 18 0 33 -7 39 -19z"/>
                                <path d="M522 574 c-25 -17 -30 -65 -9 -82 7 -6 34 -16 60 -22 53 -14 64 -24
                                47 -45 -17 -21 -47 -19 -67 5 -18 21 -63 28 -63 10 0 -6 11 -22 25 -35 32 -33
                                114 -36 145 -5 41 41 17 92 -51 105 -47 9 -63 20 -56 39 8 20 41 21 61 1 19
                                -19 56 -19 56 -1 0 24 -41 46 -85 46 -22 0 -51 -7 -63 -16z"/>
                                <path d="M700 485 l0 -105 25 0 25 0 0 105 0 105 -25 0 -25 0 0 -105z"/>
                                <path d="M806 559 c-30 -35 -34 -84 -11 -128 21 -41 72 -54 116 -31 16 9 19 7
                                19 -13 0 -12 -5 -28 -12 -35 -17 -17 -53 -15 -68 3 -16 19 -60 20 -60 2 0 -52
                                118 -71 164 -28 25 24 26 29 26 143 l0 118 -25 0 c-16 0 -25 -6 -25 -16 0 -14
                                -1 -14 -16 0 -27 27 -79 20 -108 -15z m112 -21 c16 -16 16 -80 0 -96 -17 -17
                                -53 -15 -68 4 -8 8 -13 28 -13 44 0 16 5 36 13 44 15 19 51 21 68 4z"/>
                                <path d="M1014 577 c-3 -8 -4 -54 -2 -103 3 -89 3 -89 31 -92 l27 -3 0 73 c0
                                79 9 98 46 98 28 0 34 -17 34 -101 l0 -70 28 3 c25 3 27 6 30 58 4 69 -4 115
                                -24 135 -20 20 -78 19 -98 -1 -15 -14 -16 -14 -16 0 0 20 -48 22 -56 3z"/>
                        </g>
                    </svg>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100.000000pt" height="100.000000pt" viewBox="0 0 200.000000 196.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(-55.000000,230.000000) scale(0.100000,-0.100000)"
                                fill="#fcaf17" stroke="none">
                                <path d="M1370 995 l0 -305 40 0 c37 0 40 2 40 27 l0 26 23 -20 c52 -48 110
                                -56 164 -23 46 28 75 91 81 176 6 96 -12 166 -53 209 -28 31 -38 35 -81 35
                                -36 0 -59 -7 -87 -25 l-37 -26 0 116 0 115 -45 0 -45 0 0 -305z m233 -5 c27
                                -52 20 -160 -13 -195 -31 -33 -52 -32 -95 6 -34 30 -35 34 -35 99 0 63 2 71
                                31 100 44 43 87 39 112 -10z"/>
                                <path d="M1873 1257 c-52 -19 -73 -43 -73 -82 0 -41 7 -42 57 -15 76 40 137
                                15 137 -56 0 -51 -30 -76 -98 -82 l-56 -4 0 -38 0 -38 60 -4 c76 -5 110 -33
                                110 -89 0 -70 -80 -100 -167 -64 -51 22 -54 20 -51 -27 3 -36 8 -45 33 -57 42
                                -21 128 -26 180 -11 84 23 139 115 120 200 -8 37 -59 90 -87 90 -18 0 -16 5
                                16 33 82 71 66 196 -31 246 -28 14 -108 13 -150 -2z"/>
                                <path d="M665 1108 c-75 -41 -109 -118 -103 -231 7 -146 81 -216 204 -193 63
                                12 102 72 75 115 -7 11 -14 10 -39 -8 -54 -38 -112 -24 -131 30 -27 77 -6 185
                                40 209 24 13 73 5 90 -16 23 -28 39 -16 39 31 0 39 -4 46 -30 60 -34 17 -116
                                19 -145 3z"/>
                                <path d="M936 1107 c-17 -12 -18 -28 -14 -173 5 -176 15 -211 68 -239 52 -27
                                124 -14 159 29 19 23 31 20 31 -9 0 -22 4 -25 40 -25 l40 0 0 209 0 209 -25 6
                                c-14 4 -36 4 -50 0 l-25 -6 0 -135 c0 -74 -5 -143 -10 -154 -17 -30 -66 -52
                                -91 -39 -32 18 -39 52 -39 195 0 112 -2 134 -16 139 -25 10 -49 7 -68 -7z"/>
                        </g>
                    </svg> 
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Tugas 1</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                
                                <!-- Drop Down -->
                                <a class="btn btn-primary" href="/list" role="button">Find Location</a>
                                
                                <a class="btn btn-primary" href="https://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=wilayah_indonesia" role="button">DB Wilayah Indonesia</a>                                                                   
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Tugas 2</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                
                                <!-- Email Subscription -->
                                <a href="/subscribe"><button type="button" class="btn btn-outline-secondary">Email Subsctiption</button></a>
                                <a href="https://localhost/phpmyadmin/index.php?route=/sql&server=1&db=wilayah_indonesia&table=subscriptions&pos=0ibe"><button type="button" class="btn btn-outline-secondary">Tabel Subscriptions</button></a>                                                               
                                
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Projects, etc</a></div>
                            </div>
                                <!-- Projects -->
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Sebelumnya saya belum pernah mengerjakan project dengan framework laravel.
                                    Project terakhir saya menggunakan framework Wordpress & Drupal (CMS). <a href="https://drive.google.com/drive/folders/1wqI6FYEpupjhD-5mhohqQGjZTm3-0YRW?usp=sharing" class="underline text-gray-900 dark:text-white">Disini</a>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Portofolio</div>
                            </div>
                                <!-- Portofolio -->
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">                                
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Portofolio, etc
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLabel">Portofolio</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <a href="http://localhost:8000/download_local/?file=cv.pdf"><button type="button" class="btn btn-dark">CV</button></a>  
                                    <a href="http://localhost:8000/download_local/?file=jes.pdf"><button type="button" class="btn btn-dark">Web Developer</button></a>
                                    <a href="http://localhost:8000/download_local/?file=mas.pdf"><button type="button" class="btn btn-dark">I.T Support</button></a>                                
                                
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                        
                                    <a href="#" class="ml-1 underline">Erghanadinda Putra (Web Developer - I.T Support)</a>

                                </div>
                             </div>

                             <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


<?php /**PATH C:\xampp\htdocs\designcub3\resources\views/welcome.blade.php ENDPATH**/ ?>