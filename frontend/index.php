<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guardería Pasitos de Ángeles </title>

    <!-- Tailwid & CSS -->
    <script src="./js/tailwind.js"></script>
    <link rel="stylesheet" href="./css/styles.css" />

    <!-- Carousel -->
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.png" type="image/png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/> -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </head>

  <body class="font-[Poppins]">
    <!-- Navbar -->
    <header class="bg-white shadow-navbar xl:fixed sticky w-full top-0 z-40">
      <nav class="flex justify-between items-center w-[92%] mx-auto">
        <div class="flex items-center">
          <img class="w-16 mr-2" src="assets/imgs/logo-nav.png" alt="Logo" />
          <h3 class="text-md font-semibold hidden lg:block">
            Guardería Pasitos de Ángeles
          </h3>
        </div>
        <div
          class="nav-links duration-500 fixed md:sticky bg-white md:min-h-fit min-h-[35vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5"
        >
          <ul
            class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8"
          >
            <li>
              <a class="hover:text-[#4fb7f8]" href="#home">Inicio</a>
            </li>
            <li>
              <a class="hover:text-[#4fb7f8]" href="#about">Sobre Nosotros</a>
            </li>
            <li>
              <a class="hover:text-[#4fb7f8]" href="#services">Servicios</a>
            </li>
            <li>
              <a class="hover:text-[#4fb7f8]" href="#contact">Contactos</a>
            </li>
          </ul>
        </div>
        <div class="flex items-center gap-6 md:gap-0">
          <a href="">
            <button
              class="bg-[#00b5ec] text-white px-4 md:px-5 py-2 rounded-full hover:bg-[#1696e4] text-sm md:text-base font-semibold"
            >
              <a href="pages/forms/login/login.php">Inicia sesión</a><!-- <i class="fa-solid fa-user fa-lg" style="color: #ffffff;"></i>-->
            </button></a
          >
          <ion-icon
            onclick="onToggleMenu(this)"
            name="menu-outline"
            class="text-3xl cursor-pointer block md:hidden"
          ></ion-icon>
        </div>
      </nav>
    </header>

    <!-- Home -->
    <section
      class="hero py-12 xl:p-12 xl:pb-0 overflow-hidden md:mt-7 mx-4"
      id="home"
    >
      <div class="container mx-auto h-full">
        <div
          class="flex flex-col xl:flex-row items-center justify-between h-full"
        >
          <div class="hero__text xl:w-[48%] text-center xl:text-left">
            <!-- Colocar ml-6 en caso de que no se arregle el margen cuando esta en grande-->
            <h1 class="text-4xl font-bold mb-6">
              Guardería Pasitos de Ángeles
            </h1>
            <p class="mb-[42px] md:max-w-xl">
              ¡Bienvenidos <a href="pages/forms/padres/padres.php">aqui</a>a Guardería Pasitos de Ángeles! Un espacio lleno de
              diversión y aprendizaje para tus pequeños.
            </p>
            <a href="#contact"
              ><button
                class="uppercase tracking-[2.20px] bg-[#00b5ec] text-white font-semibold px-4 md:px-5 py-3 rounded-full hover:bg-[#1696e4] text-sm md:text-base"
              >
                Contáctanos!
              </button></a
            >
          </div>
          <div class="hero__img hidden xl:flex max-w-[814px] self-end">
            <img src="./assets/imgs/kids-header.webp" alt="Niños" loading="auto"/>
          </div>
        </div>
      </div>
    </section>

    <!-- About us -->
    <section class="bg-[#ffffb5]" id="about">
      <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
          <div class="mt-12 md:mt-0">
            <img
              src="./assets/imgs/kids-in-daycare.webp"
              alt="About Us Image"
              class="object-cover rounded-lg shadow-md"
              loading="auto"
            />
          </div>
          <div class="max-w-lg">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
              Sobre nosotros
            </h2>
            <p class="mt-4 text-lg">
              En la guardería Pasitos de Ángeles, nuestra dedicación y pasión
              por el cuidado y desarrollo de los más pequeños es el corazón de
              nuestra labor diaria. Con años de experiencia en el cuidado
              infantil, nos enorgullece ser un refugio confiable para padres y
              madres que buscan un entorno seguro y enriquecedor para sus hijos
              mientras cumplen con sus responsabilidades diarias.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="md:h-full flex items-center justify-center">
      <div class="text-center mx-2 sm:mx-10 py-10">
        <div
          class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 mx-auto gap-8"
        >
          <div class="bg-[#b9e2fc] p-8 rounded-xl shadow-card">
            <ion-icon name="rocket-outline" class="text-5xl mx-auto" ></ion-icon>
            <h4 class="uppercase text-xl font-bold">Misión</h4>
            <p class="text-sm leading-7 my-3 font-light">
              Brindar un entorno seguro y enriquecedor donde los niños puedan
              crecer, aprender y desarrollarse plenamente mientras sus padres
              pueden trabajar con tranquilidad, sabiendo que sus hijos están en
              buenas manos.
            </p>
          </div>
          <div class="bg-[#b9e2fc] p-8 rounded-xl shadow-card">
            <ion-icon name="eye-outline" class="text-5xl mx-auto"></ion-icon>
            <h4 class="uppercase text-xl font-bold">Visión</h4>
            <p class="text-sm leading-7 my-3 font-light">
              Ser reconocidos como la mejor guardería en la promoción del
              bienestar y desarrollo integral de los niños, a través de un
              equipo dedicado y un enfoque educativo innovador.
            </p>
          </div>
          <div class="bg-[#b9e2fc] p-8 rounded-xl shadow-card">
            <ion-icon name="heart-outline" class="text-5xl mx-auto"></ion-icon>
            <h4 class="uppercase text-xl font-bold">Valores</h4>
            <p class="text-sm leading-7 my-3 font-light">
              En nuestra guardería, priorizamos el cuidado, la seguridad, la
              empatía y la inclusión, creando un ambiente seguro y estimulante
              donde cada niño pueda crecer y aprender con alegría y respeto.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section id="services">
      <h1
        class="text-3xl font-extrabold text-gray-900 sm:text-4xl text-center mt-14"
      >
        Servicios
      </h1>
      <div
        class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl"
      >
        <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
          <div class="p-6 shadow-card">
            <img
              class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
              src="../frontend/assets/imgs/kindergarden.jpg"
              loading="auto"
              alt="blog"
            />

            <h1
              class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter lg:text-3xl"
            >
              Guardería
            </h1>
            <p class="mx-auto text-base leading-relaxed text-black">
              Nuestra guardería ofrece un entorno seguro y acogedor, con
              atención y cuidado amoroso para niños de todas las edades. Con
              personal altamente calificado, garantizamos a los padres la
              tranquilidad mientras se ocupan de sus responsabilidades diarias.
            </p>
          </div>
          <div class="p-6 shadow-card">
            <img
              class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
              src="../frontend/assets/imgs/little-kids.jpg"
              alt="blog"
              loading="auto"

            />

            <h1
              class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter lg:text-3xl"
            >
              Clases de nivel inicial
            </h1>
            <p class="mx-auto text-base leading-relaxed text-black">
              Nuestros cursos de nivel inicial ofrecen una sólida base educativa
              para niños en sus primeros años de aprendizaje. Desde párvulo
              hasta pre-primario, brindamos un ambiente estimulante y seguro
              donde los niños exploran, aprenden y crecen, preparándolos para el
              éxito académico futuro.
            </p>
          </div>
          <div class="p-6 shadow-card">
            <img
              class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
              src="../frontend/assets/imgs/homework.webp"
              loading="auto"
              alt="blog"
            />

            <h1
              class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter lg:text-3xl"
            >
              Sala de tarea
            </h1>
            <p class="mx-auto text-base leading-relaxed text-black">
              Brindamos un entorno acogedor y productivo donde los niños pueden
              completar sus tareas escolares con la ayuda de tutores
              calificados, fomentando un ambiente de apoyo y aprendizaje.
            </p>
          </div>
          <div class="p-6 shadow-card">
            <img
              class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
              src="../frontend/assets/imgs/teacher-with-kids.jpg"
              loading="auto"

              alt="blog"
            />

            <h1
              class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter lg:text-3xl"
            >
              Cuidado sabatino
            </h1>
            <p class="mx-auto text-base leading-relaxed text-black">
              Los sábados se convierten en días de diversión y cuidado para los
              niños, ofreciendo un ambiente seguro y actividades recreativas
              mientras los padres se ocupan de sus responsabilidades.
            </p>
          </div>
          <div class="p-6 shadow-card">
            <img
              class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl"
              src="../frontend/assets/imgs/kids-camping.webp"
              loading="auto"

              alt="blog"
            />

            <h1
              class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter lg:text-3xl"
            >
              Campamentos
            </h1>
            <p class="mx-auto text-base leading-relaxed text-black">
              ¡Sumérgete en un verano lleno de aventuras! Nuestro campamento
              anual ofrece actividades emocionantes al aire libre, talleres
              creativos y un ambiente seguro para que los niños exploren,
              crezcan y se diviertan durante las vacaciones escolares.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Album -->
    <section class="my-8 md:h-full">
      <h2
        class="text-3xl font-extrabold text-gray-900 sm:text-4xl text-center mt-16"
      >
        Álbum de fotos
      </h2>
      <br />
      <div class="max-w-6xl mx-auto">
        <div id="default-carousel" class="relative" data-carousel="static">
          <div
            class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96"
          >
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <span
                class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl"
                >Primer Slide</span
              >
              <img
                src="./assets/imgs/childs-talking.webp"
                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                alt="..."
                loading="auto"
                />
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img
                src="./assets/imgs/girl-happy.webp"
                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                alt="..."
                loading="auto"
                />
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img
                src="./assets/imgs/kids-playing.webp"
                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                alt="..."
                loading="auto"
                />
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img
                src="./assets/imgs/kids-with-teacher.webp"
                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                alt="..."
                loading="auto"
                />
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img
                src="./assets/imgs/group-diverse-cheerful-kids.webp"
                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                alt="..."
                loading="auto"
                />
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img
                src="./assets/imgs/kid.webp"
                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                alt="..."
                loading="auto"
                />
            </div>
          </div>

          <div
            class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2"
          >
            <button
              type="button"
              class="w-3 h-3 rounded-full"
              aria-current="false"
              aria-label="Slide 1"
              data-carousel-slide-to="0"
            ></button>
            <button
              type="button"
              class="w-3 h-3 rounded-full"
              aria-current="false"
              aria-label="Slide 2"
              data-carousel-slide-to="1"
            ></button>
            <button
              type="button"
              class="w-3 h-3 rounded-full"
              aria-current="false"
              aria-label="Slide 3"
              data-carousel-slide-to="2"
            ></button>
          </div>

          <button
            type="button"
            class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-prev
          >
            <span
              class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-focus:ring-4 group-focus:ring-black group-focus:outline-none"
            >
              <svg
                class="w-5 h-5 text-black sm:w-6 sm:h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 19l-7-7 7-7"
                ></path>
              </svg>
              <span class="hidden">Anterior</span>
            </span>
          </button>
          <button
            type="button"
            class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-next
          >
            <span
              class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-black group-focus:outline-none"
            >
              <svg
                class="w-5 h-5 text-black sm:w-6 sm:h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                ></path>
              </svg>
              <span class="hidden">Siguiente</span>
            </span>
          </button>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section class="text-gray-600 body-font relative" id="contact">
      <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
        <div
          class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative"
        >
          <iframe
            width="100%"
            height="100%"
            class="absolute inset-0"
            frameborder="0"
            title="map"
            marginheight="0"
            marginwidth="0"
            scrolling="no"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.420929277415!2d-70.67912442474064!3d19.43741038184307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf50ea51198b%3A0xf1f7e7a0daf4340c!2sPasitos%20Daycare!5e0!3m2!1ses!2sdo!4v1715188729002!5m2!1ses!2sdo"
            width="600"
            height="450"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
          <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
            <div class="lg:w-1/2 px-6">
              <h2
                class="title-font font-semibold text-gray-900 tracking-widest text-xs"
              >
                Dirección
              </h2>
              <p class="mt-1">
                Calle 22 #3, Embrujo III, Santiago, Dominican Republic
              </p>
            </div>
            <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
              <h2
                class="title-font font-semibold text-gray-900 tracking-widest text-xs"
              >
                Correo
              </h2>
              <a class="text-blue-500 leading-relaxed"
                >pasitosdaycare01021315@gmail.com</a
              >
              <h2
                class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4"
              >
                Teléfono
              </h2>
              <p class="leading-relaxed">(809) 612-6601</p>
              <h2
                class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4"
              >
                Horario
              </h2>
              <p class="leading-relaxed">De 7:00am a 6:30pm</p>
            </div>
          </div>
        </div>
        <div
          class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0"
        >
          <h2 class="text-3xl font-extrabold text-gray-900 sm:text-2xl">
            Contáctanos
          </h2>
          <p class="leading-relaxed mb-5 text-gray-600">
            Cualquier sugerencia o duda que tenga estamos aquí para servirle.
          </p>
          <form action="insertar2.php" method="post">
          <div class="relative mb-4">
            <label for="nombre" class="leading-7 text-sm text-gray-600"
              >Nombre</label
            >
            <input
              type="text"
              id="nombre"
              name="nombre"
              class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            />
          </div>
          <div class="relative mb-4">
            <label for="correo" class="leading-7 text-sm text-gray-600"
              >Correo</label
            >
            <input
              type="email"
              id="correo"
              name="correo"
              class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            />
          </div>

          <div class="relative mb-4">
            <label for="telefono" class="leading-7 text-sm text-gray-600"
              >Teléfono</label
            >
            <input
              type="text"
              id="telefono"
              name="telefono"
              class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            />
          </div>
          <div class="relative mb-4">
            <label for="mensaje" class="leading-7 text-sm text-gray-600"
              >Mensaje</label
            >
            <textarea
              id="mensaje"
              name="mensaje"
              class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
            ></textarea>
          </div>
          <button type="submit"
            class="text-white bg-[#00b5ec] font-semibold border-0 py-2 px-6 focus:outline-none hover:bg-[#1696e4] rounded text-lg"
          >
            Enviar
          </button>
        </div>
      </form>
      </div>
  
    </section>
  

    <!-- Footer -->
    <footer class="text-gray-600 body-font bg-blue-50">
      <div
        class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col"
      >
        <a
          class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900"
        >
          <img class="w-16" src="./assets/imgs/logo-nav.png" alt="Logo" />
          <span class="ml-3 text-xl">Guardería Pasitos de Ángeles</span>
        </a>
        <p
          class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"
        >
          © 2024 Guardería Pasitos de Ángeles | Todos los derechos reservados
        </p>
        <span
          class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start"
        >
          <a
            class="text-black"
            href="https://www.facebook.com/pasitosdaycare010213/"
            target="_blank"
          >
            <svg
              fill="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="w-5 h-5"
              viewBox="0 0 24 24"
            >
              <path
                d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"
              ></path>
            </svg>
          </a>
          <a class="ml-3 text-black" href="#">
            <svg
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="w-5 h-5"
              viewBox="0 0 24 24"
            >
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path
                d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"
              ></path>
            </svg>
          </a>
        </span>
      </div>
    </footer>

    <!-- Scripts -->
    <script>
      const $ = (element) => document.querySelector(element);

      //Shadow menu
      window.addEventListener("scroll", function () {
        const navbar = $(".shadow-navbar");
        const header = $(".shadow-header");
        if (window.scrollY > 0) {
          navbar.classList.add("shadow");
          header.classList.add("shadow");
        } else {
          navbar.classList.remove("shadow");
          header.classList.remove("shadow");
        }
      });

      /**
       * Metodo
       * @param {String} e - String
       *
       */
      function onToggleMenu(e) {
        const navLinks = $(".nav-links");
        const isActive = e.name === "menu-outline" ? "close" : "menu-outline";
        navLinks.classList.toggle("top-[8.2%]");
      }
    </script>
  </body>
</html>
