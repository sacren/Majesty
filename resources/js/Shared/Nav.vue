<template>
  <nav class="p-4">
    <ul class="list-disc">
      <li>
        <Link href="/spa"
              class="text-blue-500 hover:underline"
              :class="{ 'font-bold underline': $page.component === 'Home' }">
        Home
        </Link>
      </li>

      <li><Link href="/spa/users"
                class="text-blue-500 hover:underline"
                :class="{ 'font-bold underline': $page.component === 'Users' }">
        Users
        </Link>
      </li>

      <li>
        <Link href="/spa/settings"
              class="text-blue-500 hover:underline"
              :class="{ 'font-bold underline': $page.component === 'Settings' }">
        Settings
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
