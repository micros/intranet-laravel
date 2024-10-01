<x-intranet.pages.home>
    <x-slot:name>
        Dashboard
    </x-slot>
    <x-slot:sidebar>
    </x-slot>
    <x-slot:content>
        <!-- resources/views/home.blade.php -->

        <div class="container p-6 mx-auto">

            <!-- Noticias Recientes -->
            <section class="mb-10">
                <h2 class="mb-4 text-2xl font-semibold">Noticias Recientes</h2>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div class="p-4 bg-white rounded-lg shadow">
                        <h3 class="text-lg font-medium">Nueva Ley de Transparencia 2024</h3>
                        <p class="mt-2 text-sm text-gray-600">Se ha aprobado una nueva ley para fortalecer la
                            transparencia en el sector público. <a href="#" class="text-blue-500">Leer más</a></p>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow">
                        <h3 class="text-lg font-medium">Decreto sobre el uso de tecnología en entidades públicas</h3>
                        <p class="mt-2 text-sm text-gray-600">El gobierno ha publicado un nuevo decreto sobre el uso de
                            tecnología en la administración pública. <a href="#" class="text-blue-500">Leer
                                más</a></p>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow">
                        <h3 class="text-lg font-medium">Nueva Circular sobre procedimientos internos</h3>
                        <p class="mt-2 text-sm text-gray-600">Circular 2024-09 sobre los procedimientos de auditoría
                            interna ha sido publicada. <a href="#" class="text-blue-500">Leer más</a></p>
                    </div>
                </div>
            </section>

            <!-- Biblioteca de Documentos -->
            <section class="mb-10">
                <h2 class="mb-4 text-2xl font-semibold">Últimos documentos en nuestra Biblioteca</h2>
                <div class="p-6 bg-white rounded-lg shadow">
                    <ul class="pl-5 text-gray-700 list-disc">
                        <li><a href="#" class="text-blue-500">Ley 1234 de 2024</a></li>
                        <li><a href="#" class="text-blue-500">Decreto 5678 de 2024</a></li>
                        <li><a href="#" class="text-blue-500">Circular 91011 de 2024</a></li>
                    </ul>
                </div>
            </section>

            <!-- Herramientas Útiles para Funcionarios -->
            <section class="mb-10">
                <h2 class="mb-4 text-2xl font-semibold">Herramientas Útiles para Funcionarios</h2>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <div class="p-4 bg-white rounded-lg shadow">
                        <h3 class="text-lg font-medium">Gestión de Documentos</h3>
                        <p class="mt-2 text-sm text-gray-600">Herramienta para la gestión de documentos internos. <a
                                href="#" class="text-blue-500">Acceder</a></p>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow">
                        <h3 class="text-lg font-medium">Solicitudes de Vacaciones</h3>
                        <p class="mt-2 text-sm text-gray-600">Sistema para la gestión de solicitudes de vacaciones. <a
                                href="#" class="text-blue-500">Acceder</a></p>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow">
                        <h3 class="text-lg font-medium">Consultas Jurídicas</h3>
                        <p class="mt-2 text-sm text-gray-600">Accede a la base de datos de normativas legales. <a
                                href="#" class="text-blue-500">Acceder</a></p>
                    </div>
                </div>
            </section>

            <!-- Encuestas y Foros -->
            <section class="mb-10">
                <h2 class="mb-4 text-2xl font-semibold">Encuestas y Foros</h2>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <!-- Encuesta actual -->
                    <div class="p-6 bg-white rounded-lg shadow">
                        <h3 class="text-lg font-medium">Encuesta sobre Teletrabajo</h3>
                        <p class="mt-2 text-sm text-gray-600">Participa en nuestra encuesta sobre la implementación de
                            teletrabajo en entidades gubernamentales. <a href="#"
                                class="text-blue-500">Participar</a></p>
                    </div>
                    <!-- Foro más activo -->
                    <div class="p-6 bg-white rounded-lg shadow">
                        <h3 class="text-lg font-medium">Foro: Uso de Tecnología en Gobierno</h3>
                        <p class="mt-2 text-sm text-gray-600">Discusión abierta sobre la adopción de nuevas tecnologías
                            en el sector público. <a href="#" class="text-blue-500">Ver Foro</a></p>
                    </div>
                </div>
            </section>

            <!-- Últimos Usuarios y Posts -->
            <section class="mb-10">
                <h2 class="mb-4 text-2xl font-semibold">Últimos Usuarios y Publicaciones</h2>
                <div class="p-6 bg-white rounded-lg shadow">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Últimos usuarios -->
                        <div>
                            <h3 class="mb-2 text-lg font-medium">Últimos Usuarios Registrados</h3>
                            <ul class="pl-5 text-gray-700 list-disc">
                                <li>Juan Pérez</li>
                                <li>Ana Gómez</li>
                                <li>Carla Ruiz</li>
                            </ul>
                        </div>
                        <!-- Últimos posts -->
                        <div>
                            <h3 class="mb-2 text-lg font-medium">Últimos Posts en Foros</h3>
                            <ul class="pl-5 text-gray-700 list-disc">
                                <li><a href="#" class="text-blue-500">Impacto del Decreto 5678</a></li>
                                <li><a href="#" class="text-blue-500">Revisión del nuevo procedimiento interno</a>
                                </li>
                                <li><a href="#" class="text-blue-500">Teletrabajo en entidades públicas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Últimas Fotos Publicadas -->
            <section class="mb-10">
                <h2 class="mb-4 text-2xl font-semibold">Últimas Fotos Publicadas</h2>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <!-- Fotos simuladas (usando imágenes de servicios gratuitos) -->
                    <div class="overflow-hidden bg-white rounded-lg shadow">
                        <x-intranet.items.image w="450" h="350" alt="Texto alternativo de la imagen" class="w-full" />
                    </div>
                    <div class="overflow-hidden bg-white rounded-lg shadow">
                        <x-intranet.items.image w="450" h="350" alt="Texto alternativo de la imagen" class="w-full" />
                    </div>
                    <div class="overflow-hidden bg-white rounded-lg shadow">
                        <x-intranet.items.image w="450" h="350" alt="Texto alternativo de la imagen" class="w-full" />
                    </div>
                </div>
            </section>
        </div>
    </x-slot>
</x-intranet.pages.home>
