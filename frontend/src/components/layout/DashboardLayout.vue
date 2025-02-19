<template>
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="fixed top-0 left-0 w-64 h-screen bg-blue-800 text-white p-5 z-50">
      <h2 class="text-4xl font-bold mb-5 pb-5">
        <router-link 
          to="/"
        >
          EduCareer
        </router-link>
      </h2>
      <ul>
        <li class="mb-3 flex p-3 items-center group rounded transition-colors duration-200 hover:bg-blue-500 p-2">
          <Home class="w-5 h-5 mr-2" />
          <router-link to="/" class="flex-1">
            Dashboard
          </router-link>
        </li>
        <li class="mb-3 flex  p-3 items-center group rounded transition-colors duration-200 hover:bg-blue-500 p-2">
          <BookCheck class="w-5 h-5 mr-2"/>
          <router-link to="/courses" class="flex-1">
            Courses
          </router-link>
        </li>
        <li class="mb-3 flex p-3 items-center group rounded transition-colors duration-200 hover:bg-blue-500 p-2">
          <CalendarCheck class="w-5 h-5 mr-2"/>
          <router-link to="/career-paths" class="flex-1">
            Career Paths
          </router-link>
        </li>
        <li class="mb-3 flex p-3 items-center group rounded transition-colors duration-200 hover:bg-blue-500 p-2">
          <ChartNoAxesCombined class="w-5 h-5 mr-2"/>
          <router-link to="/skill-analysis" class="flex-1">
            Skill Analysis
          </router-link>
        </li>
        <li class="mb-3 flex p-3 items-center group rounded transition-colors duration-200 hover:bg-blue-500 p-2">
          <Settings class="w-5 h-5 mr-2"/>
          <router-link to="/settings" class="flex-1">
            Settings
          </router-link>
        </li>
        <li class="mb-3 flex p-3 items-center group rounded transition-colors duration-200 hover:bg-blue-500 p-2">
          <UserPen class="w-5 h-5 mr-2"/>
          <router-link to="/profile" class="flex-1">
            Profile
          </router-link>
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
import { Home, BookCheck, CalendarCheck, ChartNoAxesCombined, Settings, UserPen } from "lucide-vue-next";

export default {
  name: "DashboardLayout",
  components: {
    Home,
    BookCheck,
    CalendarCheck,
    ChartNoAxesCombined,
    Settings,
    UserPen,
  },
};
</script>

<style scoped>
a {
  color: white;
  font-weight: bold;
}
</style>
