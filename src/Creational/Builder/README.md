Anglais

✨ Why use the Builder Pattern?
🧼 1. Clean, readable code
Instead of calling a constructor with many arguments (which is hard to read and maintain):

        $car = new Car("V6", "Black", 4);

You can build the same object step-by-step with clear, fluent method calls:

        $car = $builder
            ->setEngine("V6")
            ->setColor("Black")
            ->setDoors(4)
            ->build();
✅ This makes your code:

Easier to read

Easier to maintain

Easier to extend (adding new features or optional parts)

🧩 2. Separation of Concerns
The construction process is separated from the actual object. This means you can:

Reuse the same builder logic for different car types (like FamilyCar or SportsCar)

Centralize complex build logic in a Director

🔁 3. Flexibility via Dependency Injection
You inject the car object (FamilyCar or SportsCar) into the builder. This promotes:

Flexibility (you can inject different variants)

Testability (you can inject mock objects in tests)

Open/Closed principle (easily extendable without modifying the builder)



Français



✨ Pourquoi utiliser le Builder Pattern ?
🧼 1. Un code plus propre et plus lisible
Au lieu d'appeler un constructeur avec plusieurs paramètres (ce qui devient vite difficile à lire et à maintenir) :

        $car = new Car("V6", "Noir", 4);

Tu peux construire le même objet étape par étape avec des appels de méthodes fluides :

        $car = $builder
            ->setEngine("V6")
            ->setColor("Noir")
            ->setDoors(4)
            ->build();

✅ Ce style rend le code :

plus lisible

plus facile à maintenir

plus évolutif (ajout de nouveaux éléments ou options sans casser le code existant)

🧩 2. Séparation des responsabilités
Le processus de construction est séparé de la structure de l'objet lui-même.

Cela permet de :

Réutiliser la même logique de construction pour plusieurs types de voitures (FamilyCar, SportsCar)

Centraliser la logique complexe dans un Director

🔁 3. Flexibilité grâce à l’injection de dépendances
En injectant l’objet à construire (comme FamilyCar ou SportsCar) dans le CarBuilder, tu gagnes :

en flexibilité (tu choisis dynamiquement quel type d'objet construire)

en testabilité (tu peux injecter des objets simulés dans tes tests)

en respect du principe Open/Closed (tu peux ajouter de nouveaux types sans modifier les anciens)
