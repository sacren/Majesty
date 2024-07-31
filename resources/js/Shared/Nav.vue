<template>
  <nav class="p-4">
    <ul class="list-disc">
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
