<?php declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-commerce Innovant',
                'description' => 'Plateforme e-commerce moderne avec système de paiement intégré, gestion des stocks en temps réel et interface utilisateur intuitive. Le projet inclut un back-office complet pour la gestion des commandes et des produits.',
                'category' => 'web',
                'technologies' => 'Laravel, Vue.js, MySQL, Stripe, Redis',
                'demo_link' => 'https://example-ecommerce.com',
                'created_at' => now()->subMonths(2),
            ],
            [
                'title' => 'Application Mobile de Livraison',
                'description' => 'Application mobile native pour iOS et Android permettant la gestion de livraisons en temps réel. Fonctionnalités : géolocalisation, notifications push, suivi en temps réel et interface driver/customer.',
                'category' => 'mobile',
                'technologies' => 'React Native, Node.js, MongoDB, Socket.io, Google Maps API',
                'demo_link' => 'https://apps.apple.com/app/delivery-app',
                'created_at' => now()->subMonths(3),
            ],
            [
                'title' => 'Chatbot IA pour Support Client',
                'description' => 'Chatbot intelligent utilisant l\'IA pour automatiser le support client. Capable de comprendre les questions en langage naturel et de fournir des réponses pertinentes 24h/24.',
                'category' => 'ai',
                'technologies' => 'Python, TensorFlow, Natural Language Processing, Dialogflow, Node.js',
                'demo_link' => 'https://chatbot-support.com',
                'created_at' => now()->subMonths(1),
            ],
            [
                'title' => 'Dashboard Analytics Avancé',
                'description' => 'Tableau de bord analytique avec visualisations de données en temps réel. Permet aux entreprises de suivre leurs KPIs et de prendre des décisions basées sur les données.',
                'category' => 'web',
                'technologies' => 'React, D3.js, Python, PostgreSQL, Apache Kafka',
                'demo_link' => 'https://analytics-dashboard.com',
                'created_at' => now()->subMonths(4),
            ],
            [
                'title' => 'Application de Fitness Connectée',
                'description' => 'Application mobile de fitness avec suivi d\'activité, plans d\'entraînement personnalisés et intégration avec des wearables. Interface moderne et gamification pour motiver les utilisateurs.',
                'category' => 'mobile',
                'technologies' => 'Flutter, Firebase, HealthKit, Google Fit, Machine Learning',
                'demo_link' => 'https://fitness-app.com',
                'created_at' => now()->subMonths(5),
            ],
            [
                'title' => 'Système de Reconnaissance Faciale',
                'description' => 'Solution de sécurité basée sur l\'IA pour la reconnaissance faciale. Utilisé dans des environnements professionnels pour l\'accès sécurisé et la surveillance.',
                'category' => 'ai',
                'technologies' => 'Python, OpenCV, TensorFlow, Face Recognition, Docker',
                'demo_link' => 'https://face-recognition-system.com',
                'created_at' => now()->subMonths(6),
            ],
            [
                'title' => 'Redesign UX/UI Site Corporate',
                'description' => 'Refonte complète de l\'expérience utilisateur et de l\'interface d\'un site corporate. Focus sur l\'accessibilité, la performance et la conversion des visiteurs.',
                'category' => 'design',
                'technologies' => 'Figma, Adobe XD, HTML5, CSS3, JavaScript, A/B Testing',
                'demo_link' => 'https://corporate-redesign.com',
                'created_at' => now()->subMonths(7),
            ],
            [
                'title' => 'Plateforme de Formation en Ligne',
                'description' => 'LMS (Learning Management System) moderne avec vidéos interactives, quiz automatisés et suivi des progrès. Interface adaptative pour tous les appareils.',
                'category' => 'web',
                'technologies' => 'Laravel, Vue.js, MySQL, AWS S3, WebRTC',
                'demo_link' => 'https://learning-platform.com',
                'created_at' => now()->subMonths(8),
            ],
            [
                'title' => 'Application de Gestion de Projet',
                'description' => 'Outil collaboratif pour la gestion de projets avec tableaux Kanban, suivi du temps, gestion des tâches et reporting avancé. Interface intuitive pour équipes distribuées.',
                'category' => 'web',
                'technologies' => 'React, Node.js, MongoDB, Socket.io, JWT',
                'demo_link' => 'https://project-management-app.com',
                'created_at' => now()->subMonths(9),
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
