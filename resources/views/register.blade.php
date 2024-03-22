<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="min-h-screen bg-white">
    <main class="relative flex flex-col items-center justify-center w-full h-full">
      <div class="absolute top-0 left-0 w-full h-full bg-white"></div>
      <div class="absolute top-0 left-0 w-full h-full bg-cdccfe"></div>
      <div class="absolute inset-0 bg-black opacity-25 backdrop-blur-4"></div>

      <section class="absolute top-24 left-1/4 w-3/5 h-3/4 bg-white rounded-3xl shadow-md">
        <div class="flex flex-col gap-4 w-full">
          <div class="flex flex-col gap-4">
            <h1 class="text-4xl font-medium text-gray-700 mb-4">REGISTER</h1>
            <form class="flex flex-col gap-4">
              <label for="name" class="text-gray-600 mb-1">Full Name</label>
              <input type="text" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:ring-1">
              <label for="email" class="text-gray-600 mb-1">Email</label>
              <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:ring-1">
              <label for="reg_password" class="text-gray-600 mb-1">Password</label>
              <input type="password" id="reg_password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:ring-1">
              <button type="submit" class="w-full py-2 rounded-lg bg-green-500 text-white font-medium hover:bg-green-600">Register</button>
            </form>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
