import { createRouter, createWebHistory } from 'vue-router';
import Dashboard from '../views/dashboard/pages/home/Dashboard.vue';
import Courses from '../views/dashboard/pages/courses/Courses.vue';
import CareerPaths from '../views/dashboard/pages/career-paths/career-paths.vue';
import Settings from '../views/dashboard/pages/settings/Settings.vue';

const routes = [
  { path: '/', component: Dashboard },
  { path: '/courses', component: Courses },
  { path: '/career-paths', component: CareerPaths },
  { path: '/settings', component: Settings },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
