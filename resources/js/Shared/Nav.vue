<template>
  <nav class="p-4">
    <ul class="list-disc">
      <li><Link href="/spa" class="text-blue-500 hover:underline">Home</Link></li>
      <li><Link href="/spa/users" class="text-blue-500 hover:underline">Users</Link></li>
      <li><Link href="/spa/settings" class="text-blue-500 hover:underline">Settings</Link></li>
      <li>
        <Link href="/spa/logout"
              method="post"
              as="button"
              :data="{ sizes: ['Small', 'Medium', 'Large']}"
              class="text-blue-500 hover:underline">
        Log Out
        </Link>
      </li>
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
