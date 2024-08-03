<template>
  <Layout>
  <div class="text-3xl">
    <h1>Home</h1>
  </div>

  <div>
    <p>The current time is {{ time }}</p>

    <Link href="/spa" class="text-blue-500 hover:underline">
    Update Time
    </Link>
  </div>
  </Layout>
</template>

<script>
  import Layout from '../Shared/Layout.vue';
  import { Link } from '@inertiajs/inertia-vue3';

  export default {
    components: {
      Layout,
      Link,
    },
    props: {
      time: String,
    },
  };
</script>
