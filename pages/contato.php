<?php

    session_start();
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/icons/favicon.ico" type="image/x-icon">
    <title>Contato - Swift Parking</title>
    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/contato/style.css">
    <link rel="stylesheet" href="../assets/css/contato/media.css">
</head>
<body>
    <!-- HEADER -->
    
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-10 w-auto" src="../assets/img/icons/logo_swift_parking.png"
                        alt="">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                    id="open-menu">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="../index.php" class="text-sm font-semibold leading-6 text-gray-900">Início</a>
                <a href="./institucional.php" class="text-sm font-semibold leading-6 text-gray-900">Institucional</a>
                <a href="./blog.php" class="text-sm font-semibold leading-6 text-gray-900">Blog</a>
                <a href="./localizacao.php" class="text-sm font-semibold leading-6 text-gray-900">Encontre-nos</a>
                <a href="./contato.php" class="text-sm font-semibold leading-6 text-gray-900">Contato</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <?php

                    if (isset($_SESSION['admin'])) {
                        echo('<a href="..\admin_pages\control_panel.php" class="text-sm font-semibold leading-6 text-gray-900">Painel de controle<span aria-hidden="true">&rarr;</span></a>');
                    } else {
                        echo('<a href="..\admin_pages\login.php" class="text-sm font-semibold leading-6 text-gray-900">Log in<span aria-hidden="true">&rarr;</span></a>');
                    }
                ?>
            </div>
        </nav>

        <!-- Mobile menu, show/hide based on menu open state. -->

        <div class="lg:hidden hidden" role="dialog" aria-modal="true" id="mobile-menu">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-10 w-auto" src="../assets/img/icons/logo_swift_parking.png"
                            alt="">
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="close-menu">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                        <a href="../index.php" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Início</a>
                        <a href="./institucional.php" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Institucional</a>
                        <a href="./blog.php" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Blog</a>
                        <a href="./localizacao.php" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Encontre-nos</a>
                        <a href="./contato.php" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contato</a>
                        </div>
                        <div class="py-6">
                            <?php

                                if (isset($_SESSION['admin'])) {
                                    echo('<a href="..\admin_pages\control_panel.php" class="text-sm font-semibold leading-6 text-gray-900">Painel de controle<span aria-hidden="true">&rarr;</span></a>');
                                } else {
                                    echo('<a href="..\admin_pages\login.php" class="text-sm font-semibold leading-6 text-gray-900">Log in<span aria-hidden="true">&rarr;</span></a>');
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN -->

    <main>
        <section class="contact-form">
            <form>
                <div class="input-control">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Seu nome" required>
                </div>
                <div class="input-control">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Seu E-mail" required>
                </div>
                <div class="input-control">
                    <label for="subject">Assunto</label>
                    <input type="text" name="subject" id="subject" placeholder="Motivo do contato" required>
                </div>
                <div class="input-control">
                    <label for="message">Mensagem</label>
                    <textarea name="message" id="message" cols="30" rows="5" placeholder="Informações adicionais"></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </section>

        <section class="contact-information">
            <h2>Informações de contato</h2>
            <div class="information">
                <p class="information-title">Endereço</p>
                <p class="information-content">Rua, ------------------------</p>
            </div>
            <div class="information">
                <p class="information-title">SAC</p>
                <p class="information-content">0800 0105 560</p>
            </div>
            <div class="information">
                <p class="information-title">E-mail de contato</p>
                <p class="information-content"><a href="mailto:contato@swiftparking.com">contato@swiftparking.com</a></p>
            </div>
            <div class="information">
                <p class="information-title">Nosso site</p>
                <p class="information-content"><a href="../index.html">https://www.swiftparking.com</a></p>
            </div>
        </section>
    </main>

    <!-- FOOTER -->

    <?php

    include_once '../assets/components/footer.php';

    ?>   
</body>
</html>
