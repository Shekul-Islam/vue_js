<script setup>
import { ref } from 'vue'
import { RouterLink, useRoute } from 'vue-router'
import {
  HomeIcon,
  UserIcon,
  AcademicCapIcon,
  BriefcaseIcon,
  BookOpenIcon,
  EnvelopeIcon,
  ChevronLeftIcon,
  ChevronRightIcon,
} from '@heroicons/vue/24/outline'

const isExpanded = ref(false)
const route = useRoute()

const menuItems = [
  { path: '/', icon: HomeIcon },
  { path: '/about', icon: UserIcon },
  { path: '/about', icon: AcademicCapIcon },
  { path: '/about', icon: BriefcaseIcon },
  { path: '/about', icon: BookOpenIcon },
  { path: '/about', icon: EnvelopeIcon },
]

const toggleSidebar = () => {
  isExpanded.value = !isExpanded.value
}
</script>

<template>
  <div class="fixed left-0 top-0 h-screen flex flex-col items-center bg-blue-500">
    <!-- Sidebar Container -->
    <div
      :class="[
        'bg-gray-800 text-white rounded-2xl flex flex-col p-2 transition-all h-3/4',
        isExpanded ? 'w-20' : 'w-12',
      ]"
    >
      <RouterLink
        v-for="(item, index) in menuItems"
        :key="index"
        :to="item.path"
        class="sidebar-icon group"
        :class="{ 'text-blue-400': route.path === item.path }"
      >
        <component :is="item.icon" class="h-5 w-5" />
      </RouterLink>
    </div>

    <!-- Expand/Collapse Button -->
    <button
      @click="toggleSidebar"
      class="mt-4 bg-gray-800 text-white rounded-full p-2 transition-all w-12 h-12 flex items-center justify-center"
    >
      <ChevronLeftIcon v-if="isExpanded" class="h-5 w-5" />
      <ChevronRightIcon v-else class="h-5 w-5" />
    </button>
  </div>
</template>

<style scoped>
.sidebar-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0.5rem 0;
  padding: 0.75rem;
  border-radius: 9999px;
  transition: background-color 0.2s;
}

.sidebar-icon:hover {
  background-color: #374151; /* Equivalent to bg-gray-700 */
}
</style>
