function my_custom_login() {
  echo '<style>
    body.login {
      background-color: #1B3365;
      font-family: "Roboto", sans-serif;
      position: relative;
      overflow: hidden;
    }
    #loginform {
      background-color: #1B3365;
      border-radius: 10px;
    }
    #loginform label, #loginform input[type="text"], #loginform input[type="password"] {
      color: #FFFFFF;
      font-family: "Roboto", sans-serif;
    }
    .login h1 a {
      background-image: url(https://importland.cl/wp-content/uploads/2021/04/Importland_Web_Logo-1024x231.png);
      background-size: contain;
      width: 100%;
      height: 150px;
    }
    #loginform p a {
      color: #FFFFFF;
    }
    #backtoblog a, #nav a {
      color: #FFFFFF !important;
    }
    /* Estilos de las gotas */
    .droplet {
      position: absolute;
      top: -50px;
      animation: drop 3s linear infinite;
    }
    .droplet img {
      width: 20px;
    }
    /* Animación de caída */
    @keyframes drop {
      0% {
        transform: translateY(-50px);
      }
      100% {
        transform: translateY(100vh);
      }
    }
  </style>';

  echo '<div class="droplet-container"></div>';

  echo '<script>
    function generateDroplet() {
      var droplet = document.createElement("div");
      droplet.className = "droplet";
      droplet.style.left = Math.floor(Math.random() * 100) + "%";
      droplet.style.animationDelay = Math.floor(Math.random() * 10) + "s";
      droplet.innerHTML = \'<img src="https://static.vecteezy.com/system/resources/previews/009/663/451/original/water-drop-icon-transparent-free-png.png">\';

      document.querySelector(".droplet-container").appendChild(droplet);

      // Eliminar la gota cuando llegue al final del fondo del margen
      droplet.addEventListener("animationend", function() {
        droplet.remove();
        generateDroplet();
      });
    }

    // Generar gotas aleatorias sucesivas
    for (var i = 0; i < 100; i++) {
      generateDroplet();
    }
  </script>';
}
add_action('login_head', 'my_custom_login');
