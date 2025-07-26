@extends('layouts.app')

@section('title', $project->title . ' - StartupVitrine')
@section('description', Str::limit($project->description, 160))

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-amber-600 via-orange-600 to-red-600 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
        <div class="text-center">
            <div class="mb-6">
                <a href="{{ route('projects') }}" class="inline-flex items-center text-amber-200 hover:text-white transition-colors mb-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Retour aux projets
                </a>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                {{ $project->title }}
            </h1>
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <span class="px-4 py-2 bg-white bg-opacity-20 rounded-full text-sm font-semibold">
                    {{ $project->category_display_name }}
                </span>
                <span class="px-4 py-2 bg-white bg-opacity-20 rounded-full text-sm">
                    {{ $project->created_at->format('M Y') }}
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Project Details Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Project Image -->
                <div class="mb-8">
                    <div class="h-96 bg-gradient-to-br from-amber-100 to-orange-100 dark:from-amber-900 dark:to-orange-900 rounded-xl overflow-hidden flex items-center justify-center">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="text-6xl font-bold text-amber-600 dark:text-amber-400">
                                {{ strtoupper(substr($project->title, 0, 2)) }}
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Project Description -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Description du Projet</h2>
                    <div class="prose prose-lg dark:prose-invert max-w-none">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {{ $project->description }}
                        </p>
                    </div>
                </div>

                <!-- Project Features -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Fonctionnalités Principales</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-amber-100 dark:bg-amber-900 rounded-full flex items-center justify-center mr-3 mt-1">
                                <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-600 dark:text-gray-300">Interface utilisateur intuitive</span>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-amber-100 dark:bg-amber-900 rounded-full flex items-center justify-center mr-3 mt-1">
                                <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-600 dark:text-gray-300">Performance optimisée</span>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-amber-100 dark:bg-amber-900 rounded-full flex items-center justify-center mr-3 mt-1">
                                <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-600 dark:text-gray-300">Design responsive</span>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-amber-100 dark:bg-amber-900 rounded-full flex items-center justify-center mr-3 mt-1">
                                <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-600 dark:text-gray-300">Sécurité renforcée</span>
                        </div>
                    </div>
                </div>

                <!-- Project Gallery (Placeholder) -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Galerie du Projet</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="h-48 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500 dark:text-gray-400">Capture d'écran 1</span>
                        </div>
                        <div class="h-48 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500 dark:text-gray-400">Capture d'écran 2</span>
                        </div>
                        <div class="h-48 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500 dark:text-gray-400">Capture d'écran 3</span>
                        </div>
                        <div class="h-48 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500 dark:text-gray-400">Capture d'écran 4</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Project Info Card -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 mb-8">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Informations du Projet</h3>

                    <div class="space-y-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Catégorie</span>
                            <p class="text-gray-900 dark:text-white">
                                {{ $project->category_display_name }}
                            </p>
                        </div>

                        <div>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Date de réalisation</span>
                            <p class="text-gray-900 dark:text-white">{{ $project->created_at->format('F Y') }}</p>
                        </div>

                        @if($project->demo_link)
                        <div>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Lien de démonstration</span>
                            <a href="{{ $project->demo_link }}" target="_blank" class="text-amber-600 dark:text-amber-400 hover:text-amber-700 dark:hover:text-amber-300 font-medium">
                                Voir le projet
                                <svg class="w-4 h-4 inline ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Technologies Card -->
                @if($project->technologies)
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 mb-8">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Technologies Utilisées</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(explode(',', $project->technologies) as $tech)
                            <span class="px-3 py-1 text-sm bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full border border-gray-200 dark:border-gray-600">
                                {{ trim($tech) }}
                            </span>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- CTA Card -->
                <div class="bg-gradient-to-br from-amber-600 to-orange-600 rounded-xl p-6 text-white">
                    <h3 class="text-lg font-semibold mb-4">Intéressé par ce type de projet ?</h3>
                    <p class="text-amber-100 mb-6">
                        Contactez-nous pour discuter de votre projet similaire et obtenir un devis personnalisé.
                    </p>
                    <a href="{{ route('quote') }}" class="block w-full bg-white text-amber-600 text-center py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Demander un Devis
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects Section -->
@if($relatedProjects->count() > 0)
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Projets Similaires
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Découvrez d'autres projets dans la même catégorie
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedProjects as $relatedProject)
            <div class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
                <!-- Project Image -->
                <div class="h-48 bg-gradient-to-br from-amber-100 to-orange-100 dark:from-amber-900 dark:to-orange-900 flex items-center justify-center">
                    @if($relatedProject->image)
                        <img src="{{ asset('storage/' . $relatedProject->image) }}" alt="{{ $relatedProject->title }}" class="w-full h-full object-cover">
                    @else
                        <div class="text-4xl font-bold text-amber-600 dark:text-amber-400">
                            {{ strtoupper(substr($relatedProject->title, 0, 2)) }}
                        </div>
                    @endif
                </div>

                <!-- Project Content -->
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $relatedProject->category_color_classes }}">
                            {{ $relatedProject->category_display_name }}
                        </span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">
                            {{ $relatedProject->created_at->format('M Y') }}
                        </span>
                    </div>

                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">
                        {{ $relatedProject->title }}
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300 mb-4 line-clamp-3">
                        {{ Str::limit($relatedProject->description, 120) }}
                    </p>

                    <a href="{{ route('projects.show', $relatedProject) }}" class="inline-flex items-center text-amber-600 dark:text-amber-400 hover:text-amber-700 dark:hover:text-amber-300 font-medium">
                        Voir le projet
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-amber-600 to-orange-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Prêt à Démarrer Votre Projet ?
        </h2>
        <p class="text-xl text-amber-100 mb-8 max-w-2xl mx-auto">
            Inspiré par ce projet ? Contactez-nous pour discuter de votre idée
            et découvrir comment nous pouvons vous aider à la concrétiser.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote') }}" class="bg-white text-amber-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Demander un Devis Gratuit
            </a>
            <a href="{{ route('projects') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-amber-600 transition-colors">
                Voir Tous les Projets
            </a>
        </div>
    </div>
</section>
@endsection
