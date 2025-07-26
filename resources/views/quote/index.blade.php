@extends('layouts.app')

@section('title', 'Demander un Devis - StartupVitrine')
@section('description', 'Demandez un devis personnalisé pour votre projet digital. Notre équipe d\'experts vous accompagne dans la réalisation de vos objectifs.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-teal-600 via-cyan-600 to-blue-600 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Demander un <span class="text-teal-200">Devis</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-teal-100 max-w-3xl mx-auto">
                Transformez votre vision en réalité avec nos solutions sur mesure. 
                Obtenez un devis personnalisé pour votre projet digital.
            </p>
        </div>
    </div>
</section>

<!-- Quote Form Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl overflow-hidden">
            <!-- Form Header -->
            <div class="bg-gradient-to-r from-teal-600 to-cyan-600 px-8 py-12 text-center">
                <h2 class="text-3xl font-bold text-white mb-4">
                    Votre Projet, Notre Expertise
                </h2>
                <p class="text-teal-100 text-lg">
                    Remplissez ce formulaire et nous vous répondrons sous 24h avec un devis détaillé
                </p>
            </div>

            <!-- Form Content -->
            <div class="p-8">
                <form action="{{ route('quote.store') }}" method="POST" class="space-y-8">
                    @csrf
                    
                    <!-- Personal Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Prénom <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="first_name" 
                                   name="first_name" 
                                   value="{{ old('first_name') }}"
                                   class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent dark:bg-gray-800 dark:text-white @error('first_name') border-red-500 @enderror"
                                   required>
                            @error('first_name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="last_name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Nom <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="last_name" 
                                   name="last_name" 
                                   value="{{ old('last_name') }}"
                                   class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent dark:bg-gray-800 dark:text-white @error('last_name') border-red-500 @enderror"
                                   required>
                            @error('last_name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{ old('email') }}"
                               class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent dark:bg-gray-800 dark:text-white @error('email') border-red-500 @enderror"
                               required>
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Project Type -->
                    <div>
                        <label for="project_type" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Type de projet <span class="text-red-500">*</span>
                        </label>
                        <select id="project_type" 
                                name="project_type" 
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent dark:bg-gray-800 dark:text-white @error('project_type') border-red-500 @enderror"
                                required>
                            <option value="">Sélectionnez un type de projet</option>
                            <option value="Application Web" {{ old('project_type') == 'Application Web' ? 'selected' : '' }}>Application Web</option>
                            <option value="Application Mobile" {{ old('project_type') == 'Application Mobile' ? 'selected' : '' }}>Application Mobile</option>
                            <option value="Site Web" {{ old('project_type') == 'Site Web' ? 'selected' : '' }}>Site Web</option>
                            <option value="E-commerce" {{ old('project_type') == 'E-commerce' ? 'selected' : '' }}>E-commerce</option>
                            <option value="Intelligence Artificielle" {{ old('project_type') == 'Intelligence Artificielle' ? 'selected' : '' }}>Intelligence Artificielle</option>
                            <option value="Chatbot" {{ old('project_type') == 'Chatbot' ? 'selected' : '' }}>Chatbot</option>
                            <option value="UX/UI Design" {{ old('project_type') == 'UX/UI Design' ? 'selected' : '' }}>UX/UI Design</option>
                            <option value="Community Management" {{ old('project_type') == 'Community Management' ? 'selected' : '' }}>Community Management</option>
                            <option value="Autre" {{ old('project_type') == 'Autre' ? 'selected' : '' }}>Autre</option>
                        </select>
                        @error('project_type')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Project Description -->
                    <div>
                        <label for="description" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Description du besoin <span class="text-red-500">*</span>
                        </label>
                        <textarea id="description" 
                                  name="description" 
                                  rows="6"
                                  class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent dark:bg-gray-800 dark:text-white @error('description') border-red-500 @enderror"
                                  placeholder="Décrivez votre projet en détail : objectifs, fonctionnalités souhaitées, contraintes techniques, etc."
                                  required>{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Budget -->
                    <div>
                        <label for="budget" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Budget estimé (facultatif)
                        </label>
                        <select id="budget" 
                                name="budget" 
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent dark:bg-gray-800 dark:text-white">
                            <option value="">Sélectionnez une fourchette de budget</option>
                            <option value="Moins de 5 000€" {{ old('budget') == 'Moins de 5 000€' ? 'selected' : '' }}>Moins de 5 000€</option>
                            <option value="5 000€ - 10 000€" {{ old('budget') == '5 000€ - 10 000€' ? 'selected' : '' }}>5 000€ - 10 000€</option>
                            <option value="10 000€ - 25 000€" {{ old('budget') == '10 000€ - 25 000€' ? 'selected' : '' }}>10 000€ - 25 000€</option>
                            <option value="25 000€ - 50 000€" {{ old('budget') == '25 000€ - 50 000€' ? 'selected' : '' }}>25 000€ - 50 000€</option>
                            <option value="Plus de 50 000€" {{ old('budget') == 'Plus de 50 000€' ? 'selected' : '' }}>Plus de 50 000€</option>
                            <option value="À définir" {{ old('budget') == 'À définir' ? 'selected' : '' }}>À définir</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-6">
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-teal-600 to-cyan-600 text-white py-4 px-8 rounded-lg font-semibold hover:from-teal-700 hover:to-cyan-700 transition-all duration-200 transform hover:scale-105">
                            Envoyer ma demande de devis
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Notre Processus
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Comment nous travaillons ensemble pour concrétiser votre projet
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-teal-100 dark:bg-teal-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-teal-600 dark:text-teal-400">1</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Demande de Devis</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Vous remplissez notre formulaire détaillé pour nous présenter votre projet.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-cyan-100 dark:bg-cyan-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-cyan-600 dark:text-cyan-400">2</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Analyse & Devis</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Notre équipe analyse votre projet et vous propose un devis personnalisé sous 24h.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">3</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Validation</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Nous discutons ensemble du devis et ajustons les détails selon vos besoins.
                </p>
            </div>

            <!-- Step 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">4</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Développement</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Notre équipe se met au travail pour concrétiser votre vision.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Pourquoi Nous Choisir ?
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Les avantages qui font de nous votre partenaire digital de confiance
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm">
                <div class="w-12 h-12 bg-teal-100 dark:bg-teal-900 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-teal-600 dark:text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Réponse Rapide</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Devis détaillé sous 24h et suivi régulier tout au long du projet.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm">
                <div class="w-12 h-12 bg-cyan-100 dark:bg-cyan-900 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-cyan-600 dark:text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Expertise Reconnue</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    50+ projets réalisés avec succès et une équipe d'experts passionnés.
                </p>
            </div>

            <div class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm">
                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Accompagnement</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Suivi personnalisé et support technique même après la livraison.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection 