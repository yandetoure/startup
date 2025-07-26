@extends('layouts.app')

@section('title', 'La Startup - StartupVitrine')
@section('description', 'Découvrez notre histoire, nos valeurs et notre expertise dans le développement de solutions digitales innovantes.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Notre <span class="text-indigo-200">Startup</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-indigo-100 max-w-3xl mx-auto">
                Une équipe passionnée par l'innovation technologique, 
                dédiée à transformer vos idées en solutions digitales exceptionnelles.
            </p>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                    Qui Sommes-Nous ?
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    StartupVitrine est née de la passion pour l'innovation technologique et du désir 
                    d'accompagner les entreprises dans leur transformation digitale. Notre équipe 
                    d'experts combine créativité, expertise technique et vision stratégique pour 
                    créer des solutions qui font la différence.
                </p>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">
                    Depuis notre création, nous avons accompagné plus de 30 entreprises dans 
                    leurs projets digitaux, en leur apportant des solutions sur mesure qui 
                    répondent parfaitement à leurs besoins spécifiques.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('startup.adn') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors text-center">
                        Découvrir notre ADN
                    </a>
                    <a href="{{ route('startup.vision') }}" class="border-2 border-blue-600 text-blue-600 dark:text-blue-400 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition-colors text-center">
                        Notre Vision
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-blue-900 dark:to-indigo-900 rounded-2xl p-8">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">5+</div>
                            <div class="text-gray-600 dark:text-gray-300">Années d'expérience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">15+</div>
                            <div class="text-gray-600 dark:text-gray-300">Experts passionnés</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">50+</div>
                            <div class="text-gray-600 dark:text-gray-300">Projets réalisés</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">100%</div>
                            <div class="text-gray-600 dark:text-gray-300">Satisfaction client</div>
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
                Les principes qui guident chacune de nos actions et décisions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Innovation -->
            <div class="text-center">
                <div class="w-20 h-20 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Innovation</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Nous repoussons constamment les limites technologiques pour créer des solutions 
                    innovantes qui anticipent les besoins futurs de nos clients.
                </p>
            </div>

            <!-- Excellence -->
            <div class="text-center">
                <div class="w-20 h-20 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Excellence</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Chaque projet est une opportunité de démontrer notre excellence technique 
                    et notre engagement envers la qualité dans tous nos livrables.
                </p>
            </div>

            <!-- Collaboration -->
            <div class="text-center">
                <div class="w-20 h-20 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Collaboration</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Nous croyons en la puissance de la collaboration et travaillons en étroite 
                    relation avec nos clients pour créer des solutions qui dépassent leurs attentes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Notre Équipe
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Des experts passionnés qui partagent votre vision et votre ambition
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-3xl font-bold text-white">JD</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Jean Dupont</h3>
                <p class="text-blue-600 dark:text-blue-400 mb-4">CEO & Fondateur</p>
                <p class="text-gray-600 dark:text-gray-300">
                    Visionnaire et entrepreneur passionné, Jean guide notre startup 
                    vers l'excellence et l'innovation.
                </p>
            </div>

            <!-- Team Member 2 -->
            <div class="text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-teal-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-3xl font-bold text-white">MS</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Marie Smith</h3>
                <p class="text-blue-600 dark:text-blue-400 mb-4">CTO</p>
                <p class="text-gray-600 dark:text-gray-300">
                    Experte en architecture logicielle, Marie assure l'excellence 
                    technique de tous nos projets.
                </p>
            </div>

            <!-- Team Member 3 -->
            <div class="text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-3xl font-bold text-white">PL</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Pierre Laurent</h3>
                <p class="text-blue-600 dark:text-blue-400 mb-4">Lead Designer</p>
                <p class="text-gray-600 dark:text-gray-300">
                    Créatif et innovant, Pierre transforme vos idées en expériences 
                    utilisateur exceptionnelles.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection 