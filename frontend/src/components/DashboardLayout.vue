<template>
    <div class="flex h-screen">
      <!-- Sidebar -->
      <div class="w-64 bg-blue-600 text-white p-5">
        <h2 class="text-2xl font-bold mb-5">EduCareer</h2>
        <ul>
          <li class="mb-3"><a href="#" class="block p-2 hover:bg-blue-500 rounded">Home</a></li>
          <li class="mb-3"><a href="#" class="block p-2 hover:bg-blue-500 rounded">Courses</a></li>
          <li class="mb-3"><a href="#" class="block p-2 hover:bg-blue-500 rounded">Career Paths</a></li>
          <li class="mb-3"><a href="#" class="block p-2 hover:bg-blue-500 rounded">Skill Analysis</a></li>
          <li class="mb-3"><a href="#" class="block p-2 hover:bg-blue-500 rounded">Settings</a></li>
        </ul>
      </div>
  
      <!-- Main Content -->
      <div class="flex-1 bg-white p-5">
        <h1 class="text-3xl font-semibold text-gray-800">Dashboard</h1>
        <p class="mt-3 text-gray-600">Welcome to EduCareer! Your personalized career guidance starts here.</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "DashboardLayout",
  };
  </script>
  
  <style scoped>
  /* Add additional styling if needed */
  </style>
  