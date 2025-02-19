<template>
  <DashboardLayout>
    <router-view />
  </DashboardLayout>
</template>

<script>
import DashboardLayout from "./components/layout/DashboardLayout.vue";

export default {
  components: { DashboardLayout },
};
</script>
