<template>
  <nav class="mt-2">
    <ul class="flex list-disc list-inside space-x-4">
      <li>
        <NavLink href="/spa" :active="$page.component === 'Home'">Home</NavLink>
      </li>

      <li>
        <NavLink href="/spa/users" :active="$page.component === 'Users'">Users</NavLink>
      </li>

      <li>
        <NavLink href="/spa/settings" :active="$page.component === 'Settings'">Settings</NavLink>
      </li>
    </ul>
  </nav>
</template>

<script>
  import NavLink from './NavLink.vue';

  export default {
    components: {
      NavLink,
    },
  };
</script>
