<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Casa de la Cultura Yoreme</title>

  <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#3b82f6",
            "background-light": "#f8fafc",
            "background-dark": "#1e293b",
            "card-light": "#ffffff",
            "card-dark": "#334155",
            "text-light": "#1e293b",
            "text-dark": "#e2e8f0",
            "text-muted-light": "#64748b",
            "text-muted-dark": "#94a3b8",
          },
          fontFamily: {
            display: ["Roboto", "sans-serif"],
          },
          borderRadius: {
            DEFAULT: "1rem",
          },
        },
      },
    };
  </script>

  <style>
    .material-icons {
      font-size: inherit;
    }
  </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">

  <!-- HEADER FULL WIDTH -->
  <header class="relative w-full">
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
    <div class="absolute inset-x-0 top-0 h-2 bg-primary"></div>

    <img
      src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYkDNLpiQGKqz4PKku4P7ql0TIv2cmlz2BSu9Nhgdevcd2ukWGWLoYqg35v6ITj7Xsc05qLCvGzFvEkWTYpLDjw3yNt4JMp4CBVvVV3yA9IOv3SCNauoAJ4o5pQpdAcpxowoesNTghOLM4HtzUwttPopXaza1rxjnYQrn_ab8JcK8qPG_H0yJCJeq57YWL2YBzjEvyUx0gE0hHwESeJIWjxiD1jkcn89RFCRpjRwS0XhDASfwUPdM2kCXeBtSxvdqe9HV5VIaEAlZD"
      alt="Casa de la Cultura Yoreme"
      class="w-full h-64 md:h-96 object-cover"
    />

    <div class="absolute inset-x-0 bottom-0 h-2 bg-primary"></div>

    <div class="absolute top-4 left-4 flex gap-2">
      <button class="bg-white/30 backdrop-blur-sm text-white p-2 rounded-full hover:bg-white/50 transition">
        <span class="material-icons text-xl">arrow_back</span>
      </button>
      <button class="bg-white/30 backdrop-blur-sm text-white p-2 rounded-full hover:bg-white/50 transition">
        <span class="material-icons text-xl">home</span>
      </button>
    </div>

    <h1 class="absolute bottom-8 inset-x-0 text-center text-white text-4xl md:text-5xl font-bold drop-shadow-lg">
      Casa de la Cultura Yoreme
    </h1>
  </header>

  <!-- MAIN CONTENT CENTRADO -->
  <main class="max-w-5xl mx-auto py-12 px-4 md:px-8">

    <section class="text-center max-w-2xl mx-auto mb-16">
      <p class="text-lg text-text-muted-light dark:text-text-muted-dark">
        La Casa de la Cultura Yoreme es el punto cultural principal y más importante
        de la comunidad de San Miguel Zapotitlán.
      </p>
    </section>

    <section class="mb-16">
      <div class="bg-card-light dark:bg-card-dark p-6 md:p-8 rounded-2xl shadow-lg flex flex-col items-center">

        <div class="relative w-full max-w-xl">
          <img
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKwIf-6hV9ooB-ZBfZRKPVEZIOLHvyYmvDo4OFoA4aT18BcrxzDBAQEVJ-4J7PlLqFLa-hpBpk-eQJ8nKQPCokl_Kk_s378lAM6jr40KbWbSZ9DaDkJVUEBm34HTB0UBGFiAjI1rGxSjsAw_7PCvAUX-b-6E3PZg65fWs1lWOk2fvCtzVbUZDL5WNVkCnwirN4MZNyyHhOmWOlc-fpW-1ld3TQf9g4lp-J3S1V_aAtdhXQRBF47gq6D3D4ayRviKjOPcoZk6qjuuoQ"
            alt="Altar Yoreme"
            class="rounded-lg w-full"
          />

          <button class="absolute top-1/2 left-2 -translate-y-1/2 bg-gray-200/50 dark:bg-gray-800/50 p-2 rounded-full">
            <span class="material-icons text-2xl">chevron_left</span>
          </button>

          <button class="absolute top-1/2 right-2 -translate-y-1/2 bg-gray-200/50 dark:bg-gray-800/50 p-2 rounded-full">
            <span class="material-icons text-2xl">chevron_right</span>
          </button>
        </div>

        <div class="text-center mt-6 max-w-2xl">
          <h2 class="text-xl font-semibold mb-2">
            La historia de San Miguel Arcángel
          </h2>
          <p class="text-text-muted-light dark:text-text-muted-dark leading-relaxed">
            La Casa de la Cultura es hogar de una gran variedad de eventos culturales,
            tradiciones y expresiones del pueblo Yoreme.
          </p>
        </div>

      </div>
    </section>

<section class="flex flex-col items-center">

  <!-- MAPA CON PIN -->
  <div class="w-full max-w-3xl aspect-video rounded-2xl overflow-hidden shadow-lg mb-8">
    <iframe
      src="https://www.google.com/maps?q=Casa+de+la+Cultura+Yoreme,+San+Miguel+Zapotitlán,+Sinaloa&z=17&output=embed"
      class="w-full h-full border-0"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

  <!-- BOTÓN A GOOGLE MAPS -->
  <a
    href="https://www.google.com/maps/search/?api=1&query=Casa+de+la+Cultura+Yoreme,+San+Miguel+Zapotitlán,+Sinaloa"
    target="_blank"
    class="bg-card-light dark:bg-card-dark py-3 px-8 rounded-full shadow
           hover:shadow-lg transition border text-center font-medium"
  >
    Abrir en Google Maps
  </a>

</section>


  </main>

</body>
</html>
