<template>
  <div class="text-4xl font-bold">
    <h1>Home</h1>
  </div>

  <Nav></Nav>

  <div>
    <p>The current time is {{ time }}</p>

    <Link href="/spa" class="text-blue-500 hover:underline">
    Update Time
    </Link>
  </div>
</template>

<script>
  import Nav from '../Shared/Nav.vue';
  import { Link } from '@inertiajs/inertia-vue3';

  export default {
    components: {
      Nav,
      Link,
    },
    props: {
      time: String,
    },
  };
</script>
