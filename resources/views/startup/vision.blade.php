@extends('layouts.app')

@section('title', 'Notre Vision - StartupVitrine')
@section('description', 'Découvrez notre vision du futur : nos objectifs à long terme et l\'impact que nous souhaitons avoir sur le monde digital.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-violet-600 via-purple-600 to-fuchsia-600 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Notre <span class="text-violet-200">Vision</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-violet-100 max-w-3xl mx-auto">
                Transformer le monde digital en créant des solutions innovantes 
                qui améliorent la vie des gens et des entreprises.
            </p>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                    Notre Mission
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    Chez StartupVitrine, notre mission est de démocratiser l'accès aux technologies 
                    de pointe en créant des solutions digitales innovantes, accessibles et durables. 
                    Nous croyons que la technologie doit servir l'humain et contribuer à un monde meilleur.
                </p>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    Nous nous engageons à accompagner nos clients dans leur transformation digitale 
                    en leur fournissant des outils et des solutions qui non seulement répondent 
                    à leurs besoins actuels, mais anticipent également leurs défis futurs.
                </p>
                <p class="text-lg text-gray-600 dark:text-gray-300">
                    Notre approche centrée sur l'utilisateur et notre expertise technique nous 
                    permettent de créer des expériences digitales exceptionnelles qui transforment 
                    la façon dont les entreprises interagissent avec leurs clients.
                </p>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-violet-100 to-purple-100 dark:from-violet-900 dark:to-purple-900 rounded-2xl p-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-violet-600 dark:text-violet-400 mb-4">
                            "Innovation au service de l'humain"
                        </div>
                        <p class="text-gray-600 dark:text-gray-300">
                            Notre mantra guide chacune de nos décisions et de nos créations
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision 2030 Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Notre Vision 2030
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Les objectifs ambitieux que nous nous fixons pour les prochaines années
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Innovation Technologique -->
            <div class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">
                    Innovation Technologique
                </h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Devenir un leader dans le développement de solutions IA et d'applications 
                    intelligentes qui révolutionnent les industries traditionnelles.
                </p>
                <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-1">
                    <li>• Développement de solutions IA avancées</li>
                    <li>• Applications intelligentes et autonomes</li>
                    <li>• Technologies émergentes (AR/VR, IoT)</li>
                </ul>
            </div>

            <!-- Impact Social -->
            <div class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">
                    Impact Social
                </h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Contribuer à un monde plus inclusif et durable en développant des solutions 
                    qui améliorent l'accès à l'éducation, la santé et les services essentiels.
                </p>
                <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-1">
                    <li>• Solutions pour l'éducation numérique</li>
                    <li>• Applications de santé connectée</li>
                    <li>• Technologies pour l'inclusion</li>
                </ul>
            </div>

            <!-- Expansion Internationale -->
            <div class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">
                    Expansion Internationale
                </h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Étendre notre présence à l'international et devenir un acteur reconnu 
                    dans le développement de solutions digitales innovantes à l'échelle mondiale.
                </p>
                <ul class="text-sm text-gray-500 dark:text-gray-400 space-y-1">
                    <li>• Bureaux dans 5 pays</li>
                    <li>• Équipe de 100+ experts</li>
                    <li>• Clients internationaux</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Notre Roadmap
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Les étapes clés de notre développement et de notre croissance
            </p>
        </div>

        <div class="relative">
            <!-- Timeline line -->
            <div class="absolute left-1/2 transform -translate-x-px h-full w-0.5 bg-gray-200 dark:bg-gray-700"></div>

            <!-- Timeline items -->
            <div class="space-y-12">
                <!-- 2024 -->
                <div class="relative flex items-center">
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-blue-500 rounded-full border-4 border-white dark:border-gray-900"></div>
                    <div class="w-5/12 pr-8 text-right">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">2024</h3>
                        <p class="text-gray-600 dark:text-gray-300">Expansion de l'équipe et développement de nouvelles technologies IA</p>
                    </div>
                    <div class="w-5/12 pl-8">
                        <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Objectifs</h4>
                            <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                                <li>• Équipe de 25 experts</li>
                                <li>• 100 projets réalisés</li>
                                <li>• Lancement de solutions IA</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 2025 -->
                <div class="relative flex items-center">
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-green-500 rounded-full border-4 border-white dark:border-gray-900"></div>
                    <div class="w-5/12 pr-8 text-right">
                        <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Objectifs</h4>
                            <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                                <li>• Ouverture bureau international</li>
                                <li>• 200 projets réalisés</li>
                                <li>• Solutions durables</li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-5/12 pl-8">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">2025</h3>
                        <p class="text-gray-600 dark:text-gray-300">Ouverture de notre premier bureau international et développement de solutions durables</p>
                    </div>
                </div>

                <!-- 2026 -->
                <div class="relative flex items-center">
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-purple-500 rounded-full border-4 border-white dark:border-gray-900"></div>
                    <div class="w-5/12 pr-8 text-right">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">2026</h3>
                        <p class="text-gray-600 dark:text-gray-300">Leadership dans l'innovation technologique et impact social significatif</p>
                    </div>
                    <div class="w-5/12 pl-8">
                        <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Objectifs</h4>
                            <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                                <li>• Leader européen</li>
                                <li>• 500 projets réalisés</li>
                                <li>• Impact social reconnu</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 2030 -->
                <div class="relative flex items-center">
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-orange-500 rounded-full border-4 border-white dark:border-gray-900"></div>
                    <div class="w-5/12 pr-8 text-right">
                        <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Objectifs</h4>
                            <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                                <li>• Présence mondiale</li>
                                <li>• 1000+ projets</li>
                                <li>• Innovation reconnue</li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-5/12 pl-8">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">2030</h3>
                        <p class="text-gray-600 dark:text-gray-300">Devenir un acteur majeur du développement digital à l'échelle mondiale</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Notre Impact
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Les changements positifs que nous souhaitons apporter au monde
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Innovation</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Développer des technologies qui révolutionnent les industries et améliorent la vie quotidienne.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Durabilité</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Créer des solutions respectueuses de l'environnement et durables pour les générations futures.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Inclusion</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Rendre la technologie accessible à tous et favoriser l'inclusion numérique.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-orange-100 dark:bg-orange-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Bien-être</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Améliorer la qualité de vie des utilisateurs grâce à des technologies centrées sur l'humain.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-violet-600 to-purple-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Rejoignez Notre Vision
        </h2>
        <p class="text-xl text-violet-100 mb-8 max-w-2xl mx-auto">
            Ensemble, créons un avenir digital innovant et inclusif. 
            Découvrez comment nous pouvons transformer votre vision en réalité.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('projects') }}" class="bg-white text-violet-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Voir nos réalisations
            </a>
            <a href="{{ route('quote') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-violet-600 transition-colors">
                Démarrer un projet
            </a>
        </div>
    </div>
</section>
@endsection 