<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./styles/app.css" rel="stylesheet">
</head>

<body class="font-Vazir">
  <nav class="bg-primary h-[70px] flex items-center mb-12">
    <div class="container">
      <!-- Wrapper -->
      <div class="flex justify-between items-center">
        <!-- Logo -->
        <h3 class="text-white font-bold text-3xl">بلاگ من</h3>
        <!-- Navbars menu -->
        <div class="flex items-center justify-center gap-5">
          <ul class="flex items-center justify-center gap-5 text-white">
            <li><a href="index.php" class="hover:opacity-80 transition-opacity">خانه</a></li>
            <li><a href="#" class="hover:opacity-80 transition-opacity">آموزش</a></li>
            <li><a href="#" class="hover:opacity-80 transition-opacity">برنامه نویسی</a></li>
            <li><a href="#" class="hover:opacity-80 transition-opacity">تکنولوژی</a></li>
          </ul>
          <!-- Search -->
          <form action="">
            <input type="search" name="search" id=""
              class="bg-white border-0 rounded-sm">
          </form>
        </div>
      </div>
    </div>
  </nav>

  <!-- banner and side bar -->

  <div class="container">
    <section class="grid grid-cols-6 gap-6">
      <!-- side bar -->
      <section class="col-span-2 min-h-40 flex flex-col justify-between max-h-[396px]">
        <div class="min-h-12 bg-primary rounded-xl flex items-center justify-center">
          <h3 class="text-xl font-bold text-white">محبوب ترین ها</h3>
        </div>
        <!-- blog-boxes -->
        <div class="h-24 shadow-md border border-gray-100 bg-white rounded-xl flex items-center justify-start p-2 gap-3">
          <!-- content -->
          <img src="./images/banner.jpg" alt="" class="w-[132px] h-20 rounded-xl">
          <div class="self-start">
            <h4 class="text-black text-lg font-bold">تایتل بلاگ</h4>
            <p class="text-gray-500">این یک کپشن هست</p>
          </div>
        </div>
        <div class="h-24 shadow-md border border-gray-100 bg-white rounded-xl flex items-center justify-start p-2 gap-3">
          <!-- content -->
          <img src="./images/banner.jpg" alt="" class="w-[132px] h-20 rounded-xl">
          <div class="self-start">
            <h4 class="text-black text-lg font-bold">تایتل بلاگ</h4>
            <p class="text-gray-500">این یک کپشن هست</p>
          </div>
        </div>
        <div class="h-24 shadow-md border border-gray-100 bg-white rounded-xl flex items-center justify-start p-2 gap-3">
          <!-- content -->
          <img src="./images/banner.jpg" alt="" class="w-[132px] h-20 rounded-xl">
          <div class="self-start">
            <h4 class="text-black text-lg font-bold">تایتل بلاگ</h4>
            <p class="text-gray-500">این یک کپشن هست</p>
          </div>
        </div>
      </section>
      <!-- banner -->
      <div class="col-span-4 min-h-[396px] rounded-xl overflow-hidden bg-center bg-cover"
        style="background-image: url(./images/banner.jpg);"></div>
  </div>
  </section>
  </div>

</body>

</html>