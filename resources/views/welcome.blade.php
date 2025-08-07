<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoShiftMedia - Sua Loja Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#4F46E5',
                        'primary-dark': '#4338CA',
                        secondary: '#10B981',
                        dark: '#1F2937',
                        light: '#F9FAFB',
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans bg-gray-50">
<!-- Header -->
<header class="bg-white shadow-sm">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white font-bold text-xl">GS</div>
            <span class="text-xl font-semibold text-dark">GoShiftMedia</span>
        </div>
        <nav class="hidden md:flex space-x-8">
            <a href="#" class="text-dark hover:text-primary font-medium">Produtos</a>
            <a href="#" class="text-dark hover:text-primary font-medium">Sobre</a>
            <a href="#" class="text-dark hover:text-primary font-medium">Contato</a>
        </nav>
        <button class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</header>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-primary to-primary-dark text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Soluções Digitais para o Seu Negócio</h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">A GoShiftMedia oferece os melhores produtos digitais para impulsionar sua presença online.</p>
        <button class="bg-white text-primary-dark font-bold px-8 py-3 rounded-lg hover:bg-gray-100 transition duration-300">Explorar Produtos</button>
    </div>
</section>

<!-- Products Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-dark">Nossos Produtos</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Product 1 -->
            <div class="bg-light rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="h-48 bg-primary flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">Curso de Marketing</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-dark">Marketing Digital Masterclass</h3>
                    <p class="text-gray-600 mb-4">Aprenda as estratégias mais eficazes de marketing digital com nossos especialistas.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-dark">R$ 497</span>
                        <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition duration-300">Comprar</button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-light rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="h-48 bg-secondary flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">Template</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-dark">Template de Site Premium</h3>
                    <p class="text-gray-600 mb-4">Template responsivo e altamente personalizável para seu negócio online.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-dark">R$ 297</span>
                        <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition duration-300">Comprar</button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-light rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="h-48 bg-purple-600 flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">Consultoria</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-dark">Consultoria 1:1</h3>
                    <p class="text-gray-600 mb-4">Sessão personalizada com nossos especialistas para alavancar seu negócio.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-dark">R$ 997</span>
                        <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition duration-300">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-dark">Por que Escolher a GoShiftMedia?</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-dark">Qualidade Garantida</h3>
                <p class="text-gray-600">Todos os nossos produtos passam por rigorosos testes de qualidade.</p>
            </div>

            <div class="text-center p-6">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-dark">Segurança</h3>
                <p class="text-gray-600">Processos de pagamento seguros e proteção de dados.</p>
            </div>

            <div class="text-center p-6">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-dark">Suporte 24/7</h3>
                <p class="text-gray-600">Nossa equipe está sempre disponível para ajudar.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-dark">O que Nossos Clientes Dizem</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="bg-light p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                    <div>
                        <h4 class="font-bold text-dark">Carlos Silva</h4>
                        <p class="text-gray-500 text-sm">Empresário</p>
                    </div>
                </div>
                <p class="text-gray-600">"O curso de marketing digital transformou completamente minha abordagem online. Resultados impressionantes em poucas semanas!"</p>
            </div>

            <div class="bg-light p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                    <div>
                        <h4 class="font-bold text-dark">Ana Oliveira</h4>
                        <p class="text-gray-500 text-sm">Empreendedora</p>
                    </div>
                </div>
                <p class="text-gray-600">"O template de site foi exatamente o que eu precisava. Fácil de personalizar e com um design profissional."</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Pronto para Transformar Seu Negócio?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Junte-se a centenas de empreendedores que já estão colhendo os benefícios de nossos produtos.</p>
        <button class="bg-white text-primary-dark font-bold px-8 py-3 rounded-lg hover:bg-gray-100 transition duration-300">Começar Agora</button>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white font-bold text-xl">GS</div>
                    <span class="text-xl font-semibold">GoShiftMedia</span>
                </div>
                <p class="text-gray-400">Soluções digitais de alta qualidade para impulsionar seu negócio.</p>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Produtos</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Cursos</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Templates</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Consultorias</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Links Úteis</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Blog</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">FAQ</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Política de Privacidade</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Contato</h4>
                <ul class="space-y-2">
                    <li class="text-gray-400">contato@goshiftmedia.com</li>
                    <li class="text-gray-400">+55 11 99999-9999</li>
                    <li class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; 2023 GoShiftMedia. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>
</body>
</html>
