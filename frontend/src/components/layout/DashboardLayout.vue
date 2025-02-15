<template>
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="fixed top-0 left-0 w-64 h-screen bg-blue-800 text-white p-5 z-50">
      <h2 class="text-4xl font-bold mb-5 pb-5">EduCareer</h2>
      <ul class="text-white">
        <li class="mb-3">
          <router-link to="/" class="block p-2 hover:bg-blue-500 rounded">Dashboard</router-link>
        </li>
        <li class="mb-3">
          <router-link to="/courses" class="block p-2 hover:bg-blue-500 rounded">Courses</router-link>
        </li>
        <li class="mb-3">
          <router-link to="/career-paths" class="block p-2 hover:bg-blue-500 rounded">Career Paths</router-link>
        </li>
        <li class="mb-3">
          <router-link to="/skill-analysis" class="block p-2 hover:bg-blue-500 rounded">Skill Analysis</router-link>
        </li>
        <li class="mb-3">
          <router-link to="/settings" class="block p-2 hover:bg-blue-500 rounded">Settings</router-link>
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 ml-64 p-5 bg-white">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
export default {
  name: "DashboardLayout",
};
</script>


<style scoped>
a{
  color:white;
}
.main{
  margin-left: 180px;
}
</style>