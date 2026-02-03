
<x-app-layout>
    <div class="flex justify-center items-center  py-10 ">
        <div class="bg-white rounded-2xl shadow-xl p-8  max-w-md">
            <div class="mb-6 text-center">
                <h1 class="text-3xl font-bold text-gray-800">Nouveau offre d'emploi</h1>
            </div>

            <form class="space-y-5">
                <div>
                    <label for="company" class="block text-gray-700 font-semibold mb-1">Entreprise</label>
                    <input type="text" id="company" name="company" required
                           class=" border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <!-- Type de contrat -->
                <div>
                    <label for="contract_type" class="block text-gray-700 font-semibold mb-1">Type de contrat</label>
                    <select id="contract_type" name="contract_type" required
                            class=" border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="">-- Choisir --</option>
                        <option>CDI</option>
                        <option>CDD</option>
                        <option>Full-time</option>
                        <option>Stage</option>
                        <option>Freelance</option>
                    </select>
                </div>

                <!-- Titre -->
                <div>
                    <label for="title" class="block text-gray-700 font-semibold mb-1">Titre du poste</label>
                    <input type="text" id="title" name="title" required
                           class=" border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-gray-700 font-semibold mb-1">Description</label>
                    <textarea id="description" name="description" rows="4" required
                              class=" border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>

                <!-- Image -->
                <div>
                    <label for="image" class="block text-gray-700 font-semibold mb-1">Image du poste</label>
                    <input type="file" id="image" name="image" accept="image/*" required
                           class=" border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <!-- Bouton -->
                <button type="submit"
                        class=" bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition">
                    Publier l’offre
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
