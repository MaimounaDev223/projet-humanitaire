<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADECNA - Cercle de Nara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --emerald-green: #047857;
            --emerald-dark: #065f46;
            --emerald-light: #ecfdf5;
        }
        .bg-emerald { background-color: var(--emerald-green); }
        .text-emerald { color: var(--emerald-green); }
        .btn-emerald {
            background-color: var(--emerald-green);
            color: white;
            border: none;
        }
        .btn-emerald:hover {
            background-color: var(--emerald-dark);
            color: white;
        }
        .hero-section {
            background: linear-gradient(rgba(4, 120, 87, 0.85), rgba(6, 95, 70, 0.9)), url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=1200') no-repeat center center/cover;
            color: white;
            padding: 100px 0;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-emerald shadow">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#">
                <i class="fa-solid fa-hand-holding-heart me-2"></i>ADECNA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projets">Nos Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="#benevole">Devenir Bénévole</a></li>
                    <li class="nav-item"><a class="btn btn-light text-emerald fw-bold ms-2" href="#">Faire un Don</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Faisons de grandes choses ensemble</h1>
            <p class="lead mb-4">Association Pour Le Développement Du Cercle De Nara. Unissons nos forces pour un avenir meilleur.</p>
            <a href="#benevole" class="btn btn-light text-emerald btn-lg fw-bold px-4 me-2">Rejoignez-nous</a>
            <a href="#" class="btn btn-outline-light btn-lg px-4">Découvrir nos actions</a>
        </div>
    </header>

    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
    </div>

    <section id="projets" class="container py-5">
        <h2 class="text-center fw-bold mb-5 text-emerald">Nos Actions Prioritaires</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?q=80&w=600" class="card-img-top" alt="Éducation">
                    <div class="card-body">
                        <span class="badge bg-emerald mb-2">Éducation</span>
                        <h5 class="card-title fw-bold">Soutien aux Écoles de Nara</h5>
                        <p class="card-text text-muted">Fourniture de kits scolaires et réhabilitation de salles de classe pour les enfants du cercle.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1541544741938-0af808871cc0?q=80&w=600" class="card-img-top" alt="Eau">
                    <div class="card-body">
                        <span class="badge bg-emerald mb-2">Santé & Eau</span>
                        <h5 class="card-title fw-bold">Accès à l'Eau Potable</h5>
                        <p class="card-text text-muted">Forage de puits et mise en place de systèmes hydrauliques dans les villages prioritaires.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?q=80&w=600" class="card-img-top" alt="Développement">
                    <div class="card-body">
                        <span class="badge bg-emerald mb-2">Agriculture</span>
                        <h5 class="card-title fw-bold">Développement Maraîcher</h5>
                        <p class="card-text text-muted">Accompagnement des groupements de femmes pour l'autonomie alimentaire et économique.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benevole" class="py-5" style="background-color: var(--emerald-light);">
        <div class="container" style="max-width: 600px;">
            <div class="card shadow border-0 p-4">
                <h3 class="text-center fw-bold text-emerald mb-4">Devenir Bénévole pour ADECNA</h3>
                
                <form action="{{ route('volunteer.store') }}" method="POST">
                    @csrf <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Nom</label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Prénom</label>
                            <input type="text" name="prenom" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Adresse Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Téléphone</label>
                            <input type="text" name="telephone" class="form-control" placeholder="+223..." required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Disponibilité</label>
                            <select name="disponibilite" class="form-select" required>
                                <option value="Week-end">Week-end uniquement</option>
                                <option value="Soirée">En soirée en semaine</option>
                                <option value="Plein temps">Plein temps</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Vos Compétences / Motivations (Optionnel)</label>
                            <textarea name="competences" class="form-control" rows="3" placeholder="Ex: Logistique, Santé, Enseignement..."></textarea>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button type="submit" class="btn btn-emerald w-100 fw-bold py-2 fs-5">Envoyer ma candidature</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <p class="mb-0">&copy; 2026 ADECNA - Tous droits réservés. Développé par MaimounaDev223</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>