
<!DOCTYPE html>

<html lang="en">
  <head>
  <?php
   include("../php/head.php");
  ?>
  </head>
  <body>

<div class="flex justify-center items-center h-screen">
  <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md  ">
    <div class="px-6 py-4">
        <div class="flex justify-center mx-auto">
            <img class="w-auto h-20 sm:h-2O" src="../images/logo-mode83.webp" alt="">
        </div>

        <h3 class="mt-3 text-xl font-medium text-center text-gray-600 ">Bonjour</h3>

        <p class="mt-1 text-center text-gray-500 ">Connexion</p>

        <form>
            <div class="w-full mt-4">
                <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg  focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="email" placeholder="Adresse Mail" aria-label="Adresse Mail" />
            </div>

            <div class="w-full mt-4">
                <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg  focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="password" placeholder="Mot de passe" aria-label="Mot de passe" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <a href="#" class="text-sm text-gray-600  hover:text-gray-500">Mot de passe oublié ?</a>

                <button class="px-6 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    Connexion
                </button>
            </div>
        </form>
    </div>

    <div class="flex items-center justify-center py-4 text-center bg-gray-50 ">
        <span class="text-sm text-gray-600 ">Vous n'avez pas de compte ? </span>

        <a href="../index.php" class="mx-2 text-sm font-bold text-blue-500  hover:underline">Inscription</a>
    </div>
</div>

</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  </body>
</html>
