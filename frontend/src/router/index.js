import { createRouter, createWebHistory } from 'vue-router';
import Dashboard from '../views/dashboard/pages/home/Dashboard.vue';
import Courses from '../views/dashboard/pages/courses/Courses.vue';
import CareerPaths from '../views/dashboard/pages/career-paths/career-paths.vue';
import Settings from '../views/dashboard/pages/settings/Settings.vue';
import SkillAnalysis from '../views/dashboard/pages/skill-analysis/skill-analysis.vue';
import Profile from '../views/dashboard/pages/profile/Profile.vue';

const routes = [
  { path: '/', component: Dashboard },
  { path: '/courses', component: Courses },
  { path: '/career-paths', component: CareerPaths },
  { path: '/settings', component: Settings },
  { path: '/skill-analysis', component: SkillAnalysis },
  { path: '/profile', component: Profile },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
