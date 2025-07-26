@extends('layouts.app')

@section('title', 'Nos Projets - StartupVitrine')
@section('description', 'Découvrez nos réalisations : applications web et mobile, solutions IA, et projets innovants qui témoignent de notre expertise.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-amber-600 via-orange-600 to-red-600 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Nos <span class="text-amber-200">Projets</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-amber-100 max-w-3xl mx-auto">
                Découvrez nos réalisations qui témoignent de notre expertise
                et de notre capacité à transformer vos idées en solutions concrètes.
            </p>
        </div>
    </div>
</section>

<!-- Filters Section -->
<section class="py-12 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('projects') }}" class="px-6 py-2 rounded-full {{ !$category ? 'bg-amber-600 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700' }} transition-colors">
                Tous
            </a>
            <a href="{{ route('projects', ['category' => 'web']) }}" class="px-6 py-2 rounded-full {{ $category === 'web' ? 'bg-amber-600 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700' }} transition-colors">
                Applications Web
            </a>
            <a href="{{ route('projects', ['category' => 'mobile']) }}" class="px-6 py-2 rounded-full {{ $category === 'mobile' ? 'bg-amber-600 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700' }} transition-colors">
                Applications Mobile
            </a>
            <a href="{{ route('projects', ['category' => 'ai']) }}" class="px-6 py-2 rounded-full {{ $category === 'ai' ? 'bg-amber-600 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700' }} transition-colors">
                Intelligence Artificielle
            </a>
            <a href="{{ route('projects', ['category' => 'design']) }}" class="px-6 py-2 rounded-full {{ $category === 'design' ? 'bg-amber-600 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700' }} transition-colors">
                UX/UI Design
            </a>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($projects->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
                    <!-- Project Image -->
                    <div class="h-48 bg-gradient-to-br from-amber-100 to-orange-100 dark:from-amber-900 dark:to-orange-900 flex items-center justify-center">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="text-4xl font-bold text-amber-600 dark:text-amber-400">
                                {{ strtoupper(substr($project->title, 0, 2)) }}
                            </div>
                        @endif
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $project->category_color_classes }}">
                                {{ $project->category_display_name }}
                            </span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">
                                {{ $project->created_at->format('M Y') }}
                            </span>
                        </div>

                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">
                            <a href="{{ route('projects.show', $project) }}" class="hover:text-amber-600 dark:hover:text-amber-400 transition-colors">
                                {{ $project->title }}
                            </a>
                        </h3>

                        <p class="text-gray-600 dark:text-gray-300 mb-4 line-clamp-3">
                            {{ Str::limit($project->description, 120) }}
                        </p>

                        @if($project->technologies)
                        <div class="mb-4">
                            <h4 class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Technologies utilisées :</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach(explode(',', $project->technologies) as $tech)
                                    <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">
                                        {{ trim($tech) }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <div class="flex items-center gap-3">
                            <a href="{{ route('projects.show', $project) }}" class="inline-flex items-center text-amber-600 dark:text-amber-400 hover:text-amber-700 dark:hover:text-amber-300 font-medium">
                                Voir les détails
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            @if($project->demo_link)
                            <a href="{{ $project->demo_link }}" target="_blank" class="inline-flex items-center text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 font-medium">
                                Démo
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <!-- No Projects Found -->
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
                    Aucun projet trouvé
                </h3>
                <p class="text-gray-600 dark:text-gray-300 mb-6">
                    {{ $category ? "Aucun projet dans la catégorie '$category' pour le moment." : "Aucun projet disponible pour le moment." }}
                </p>
                <a href="{{ route('projects') }}" class="bg-amber-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-amber-700 transition-colors">
                    Voir tous les projets
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Nos Chiffres Clés
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Des statistiques qui témoignent de notre expertise et de notre engagement
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold text-amber-600 dark:text-amber-400 mb-2">50+</div>
                <div class="text-gray-600 dark:text-gray-300">Projets Réalisés</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-amber-600 dark:text-amber-400 mb-2">30+</div>
                <div class="text-gray-600 dark:text-gray-300">Clients Satisfaits</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-amber-600 dark:text-amber-400 mb-2">15+</div>
                <div class="text-gray-600 dark:text-gray-300">Technologies Maîtrisées</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-amber-600 dark:text-amber-400 mb-2">100%</div>
                <div class="text-gray-600 dark:text-gray-300">Taux de Réussite</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-amber-600 to-orange-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Prêt à Démarrer Votre Projet ?
        </h2>
        <p class="text-xl text-amber-100 mb-8 max-w-2xl mx-auto">
            Inspiré par nos réalisations ? Contactez-nous pour discuter de votre projet
            et découvrir comment nous pouvons vous aider à le concrétiser.
        </p>
        <a href="{{ route('quote') }}" class="bg-white text-amber-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors inline-block">
            Demander un Devis Gratuit
        </a>
    </div>
</section>
@endsection
