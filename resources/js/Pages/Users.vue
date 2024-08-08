<template>
  <Layout>
  <div class="text-3xl">
    <h1>Users</h1>
  </div>

  <div>
    <p>The current time is {{ $page.props.time[0] }}</p>

    <Link href="/spa/users" class="text-blue-500 hover:underline">
    Update Time
    </Link>
  </div>
  </Layout>
</template>

<script>
  import Layout from '../Shared/Layout.vue';

  export default {
    components: {
      Layout,
    },
  };
</script>
