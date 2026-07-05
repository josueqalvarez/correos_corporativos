<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>

    <!-- Content Body -->
    <div class="max-w-container-max mx-auto px-margin-x py-12">
        <!-- Page Heading -->
        <div class="mb-stack-lg">
            <h2 class="font-display-xl text-headline-lg font-black text-primary mb-2">Actividad reciente</h2>
            <p class="text-on-surface-variant font-subheading">Consulta tus comentarios y participación en el blog
                oficial de MailCore Peru.</p>
        </div>
        <!-- Bento Layout for Stats (Micro-context) -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter mb-stack-lg">
            <div class="glass-card p-6 rounded-3xl shadow-sm">
                <p class="text-label-mono uppercase text-on-tertiary-container mb-1">Total Comentarios</p>
                <p class="text-headline-lg font-bold text-primary">124</p>
            </div>
            <div class="glass-card p-6 rounded-3xl shadow-sm">
                <p class="text-label-mono uppercase text-on-tertiary-container mb-1">Artículos Seguidos</p>
                <p class="text-headline-lg font-bold text-primary">18</p>
            </div>
            <div class="glass-card p-6 rounded-3xl shadow-sm border-l-4 border-mint-container">
                <p class="text-label-mono uppercase text-on-tertiary-container mb-1">Reputación</p>
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-success-teal"
                        style="font-variation-settings: 'FILL' 1;">stars</span>
                    <p class="text-headline-lg font-bold text-primary">Elite</p>
                </div>
            </div>
            <div class="glass-card p-6 rounded-3xl shadow-sm bg-primary text-on-primary">
                <p class="text-label-mono uppercase opacity-70 mb-1">Última Actividad</p>
                <p class="text-subheading font-bold">Hace 2 horas</p>
            </div>
        </div>
        <!-- Activity Table Container -->
        <div class="bg-white rounded-[2rem] shadow-sm overflow-hidden border border-outline-variant/20">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-surface-container-low border-b border-outline-variant/30">
                            <th class="px-8 py-5 font-bold text-on-surface-variant text-sm">COMENTARIO</th>
                            <th class="px-8 py-5 font-bold text-on-surface-variant text-sm">ARTÍCULO DEL BLOG</th>
                            <th class="px-8 py-5 font-bold text-on-surface-variant text-sm">FECHA Y HORA</th>
                            <th class="px-8 py-5 font-bold text-on-surface-variant text-sm">ESTADO</th>
                            <th class="px-8 py-5 font-bold text-on-surface-variant text-sm text-right">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/10">
                        <!-- Row 1 -->
                        <tr class="hover:bg-surface-container-lowest transition-colors group">
                            <td class="px-8 py-6">
                                <p class="text-primary font-medium line-clamp-1 italic">"Excelente guía para
                                    configurar SPF, me ahorró horas de soporte."</p>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary text-sm"
                                        data-icon="article">article</span>
                                    <span class="text-on-surface font-bold">Guía completa de Zoho Mail</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 text-on-surface-variant text-sm">
                                24 Oct, 2023 • 14:20
                            </td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-mono text-[11px] font-bold uppercase tracking-wider">
                                    Publicado
                                </span>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <a class="text-secondary font-bold text-sm hover:underline flex items-center justify-end gap-1"
                                    href="#">
                                    Ver en el blog <span class="material-symbols-outlined text-xs"
                                        data-icon="open_in_new">open_in_new</span>
                                </a>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-surface-container-lowest transition-colors group">
                            <td class="px-8 py-6">
                                <p class="text-primary font-medium line-clamp-1 italic">"¿Es compatible esta
                                    configuración con servidores on-premise?"</p>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary text-sm"
                                        data-icon="article">article</span>
                                    <span class="text-on-surface font-bold">Seguridad Avanzada en MailCore</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 text-on-surface-variant text-sm">
                                22 Oct, 2023 • 09:15
                            </td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-mono text-[11px] font-bold uppercase tracking-wider">
                                    Publicado
                                </span>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <a class="text-secondary font-bold text-sm hover:underline flex items-center justify-end gap-1"
                                    href="#">
                                    Ver en el blog <span class="material-symbols-outlined text-xs"
                                        data-icon="open_in_new">open_in_new</span>
                                </a>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-surface-container-lowest transition-colors group">
                            <td class="px-8 py-6">
                                <p class="text-primary font-medium line-clamp-1 italic">"Gracias por el aporte
                                    sobre DKIM, muy útil."</p>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary text-sm"
                                        data-icon="article">article</span>
                                    <span class="text-on-surface font-bold">Entregabilidad de Correos 2024</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 text-on-surface-variant text-sm">
                                20 Oct, 2023 • 18:45
                            </td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-mono text-[11px] font-bold uppercase tracking-wider">
                                    En revisión
                                </span>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <a class="text-on-tertiary-container font-bold text-sm cursor-not-allowed flex items-center justify-end gap-1"
                                    href="#">
                                    Pendiente <span class="material-symbols-outlined text-xs"
                                        data-icon="timer">timer</span>
                                </a>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-surface-container-lowest transition-colors group">
                            <td class="px-8 py-6">
                                <p class="text-primary font-medium line-clamp-1 italic">"He tenido problemas con la
                                    latencia en Lima."</p>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary text-sm"
                                        data-icon="article">article</span>
                                    <span class="text-on-surface font-bold">Optimización de Nodos en Latam</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 text-on-surface-variant text-sm">
                                15 Oct, 2023 • 11:30
                            </td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-mono text-[11px] font-bold uppercase tracking-wider">
                                    Publicado
                                </span>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <a class="text-secondary font-bold text-sm hover:underline flex items-center justify-end gap-1"
                                    href="#">
                                    Ver en el blog <span class="material-symbols-outlined text-xs"
                                        data-icon="open_in_new">open_in_new</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="px-8 py-6 bg-surface-container-low flex justify-between items-center">
                <span class="text-sm text-on-surface-variant">Mostrando 4 de 124 comentarios</span>
                <div class="flex gap-2">
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant/30 text-on-surface hover:bg-white transition-colors">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-xl bg-primary text-on-primary font-bold shadow-sm">1</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant/30 text-on-surface hover:bg-white transition-colors">2</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant/30 text-on-surface hover:bg-white transition-colors">3</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant/30 text-on-surface hover:bg-white transition-colors">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
