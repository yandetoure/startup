@extends('layouts.app')

@section('title', 'Notre ADN - StartupVitrine')
@section('description', 'Découvrez l\'identité unique de StartupVitrine : notre histoire, nos valeurs et notre expertise qui nous distinguent.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-600 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Notre <span class="text-emerald-200">ADN</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-emerald-100 max-w-3xl mx-auto">
                L'identité qui nous définit et les valeurs qui nous animent
                dans chaque projet que nous entreprenons.
            </p>
        </div>
    </div>
</section>

<!-- Story Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                    Notre Histoire
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    StartupVitrine est née en 2019 de la vision partagée par trois passionnés
                    de technologie. Jean Dupont, Marie Smith et Pierre Laurent se sont rencontrés
                    lors d'un hackathon et ont rapidement réalisé qu'ils partageaient la même
                    ambition : démocratiser l'accès aux solutions digitales innovantes.
                </p>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    Ce qui a commencé comme un projet étudiant s'est transformé en une startup
                    florissante, reconnue pour son approche innovante et sa capacité à transformer
                    les idées en solutions concrètes.
                </p>
                <p class="text-lg text-gray-600 dark:text-gray-300">
                    Aujourd'hui, notre équipe de 15 experts continue de porter cette vision
                    initiale, en s'adaptant constamment aux nouvelles technologies et aux
                    besoins émergents du marché.
                </p>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900 dark:to-teal-900 rounded-2xl p-8">
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-emerald-500 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold">2019</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Fondation</h4>
                                <p class="text-gray-600 dark:text-gray-300">Création de StartupVitrine</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-teal-500 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold">2020</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Premiers Projets</h4>
                                <p class="text-gray-600 dark:text-gray-300">10 projets réalisés</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold">2023</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Expansion</h4>
                                <p class="text-gray-600 dark:text-gray-300">50+ projets, 30+ clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Nos Valeurs Fondamentales
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Les principes qui guident chacune de nos décisions et actions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Innovation -->
            <div class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Innovation</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Nous repoussons constamment les limites technologiques pour créer des solutions
                    qui anticipent les besoins futurs.
                </p>
            </div>

            <!-- Excellence -->
            <div class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Excellence</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Chaque projet est une opportunité de démontrer notre excellence technique
                    et notre engagement envers la qualité.
                </p>
            </div>

            <!-- Collaboration -->
            <div class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Collaboration</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Nous croyons en la puissance de la collaboration et travaillons en étroite
                    relation avec nos clients.
                </p>
            </div>

            <!-- Transparence -->
            <div class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Transparence</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Nous maintenons une communication ouverte et transparente avec nos clients
                    à chaque étape du projet.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Notre Expertise
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Des compétences techniques pointues et une expérience reconnue
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Technical Skills -->
            <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-xl">
                <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Compétences Techniques</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 dark:text-gray-300">Développement Web</span>
                        <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 dark:text-gray-300">Applications Mobile</span>
                        <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 dark:text-gray-300">Intelligence Artificielle</span>
                        <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                            <div class="bg-purple-600 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 dark:text-gray-300">UX/UI Design</span>
                        <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                            <div class="bg-orange-600 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technologies -->
            <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-xl">
                <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Technologies Maîtrisées</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                        <span class="text-gray-700 dark:text-gray-300">React & Vue.js</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        <span class="text-gray-700 dark:text-gray-300">Laravel & Node.js</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                        <span class="text-gray-700 dark:text-gray-300">Python & TensorFlow</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-orange-500 rounded-full"></div>
                        <span class="text-gray-700 dark:text-gray-300">Flutter & React Native</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                        <span class="text-gray-700 dark:text-gray-300">AWS & Docker</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-indigo-500 rounded-full"></div>
                        <span class="text-gray-700 dark:text-gray-300">Figma & Adobe XD</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Culture Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Notre Culture
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Un environnement de travail qui favorise la créativité et l'innovation
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Flexibilité</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Horaires flexibles et télétravail pour favoriser l'équilibre vie professionnelle-personnelle.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Formation Continue</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Budget formation et participation aux conférences pour rester à la pointe de la technologie.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Bien-être</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Activités de team building et environnement de travail agréable pour favoriser la cohésion d'équipe.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
