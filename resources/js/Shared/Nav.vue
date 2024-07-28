<template>
  <nav>
    <ul>
      <li><Link href="/spa">Home</Link></li>
      <li><Link href="/spa/users">Users</Link></li>
      <li><Link href="/spa/settings">Settings</Link></li>
    </ul>
  </nav>
</template>

<script>
  import { Link } from '@inertiajs/inertia-vue3';

  export default {
    components: {
      Link,
    },
  };
</script>
