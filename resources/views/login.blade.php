<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="min-h-screen bg-white">
    <main class="relative flex flex-col items-center justify-center w-full h-full">
      <div class="absolute top-0 left-0 w-full h-full bg-white"></div>
      <div class="absolute top-0 left-0 w-full h-full bg-cdccfe"></div>
      <div class="absolute inset-0 bg-black opacity-25 backdrop-blur-4"></div>

      <section class="absolute top-24 left-1/4 w-3/5 h-3/4 bg-white rounded-3xl shadow-md">
        <h1 class="text-4xl font-medium text-gray-700 mb-4">LOG IN</h1>
        <form class="flex flex-col gap-4">
          <label for="username" class="text-gray-600 mb-1">Username</label>
          <input type="text" id="username" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:ring-1">
          <label for="password" class="text-gray-600 mb-1">Password</label>
          <input type="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-blue-500 focus:ring-1">
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input type="checkbox" class="mr-2">
              <p class="text-gray-700 text-sm">Remember Me</p>
            </div>
            <a href="#" class="text-blue-500 text-sm hover:underline">Forgot password?</a>
          </div>
          <button type="submit" class="w-full py-2 rounded-lg bg-blue-600 text-white font-medium hover:bg-blue-700">Log in</button>
          <p class="text-center text-gray-500 text-sm mt-4">Don't have an account? <a href="register" class="text-blue-500 hover:underline">Sign Up</a></p>
        </form>
      </section>

    </main>
  </div>
</body>
</html>
