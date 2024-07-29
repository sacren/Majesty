<template>
  <div class="text-4xl font-bold">
    <h1>Home</h1>
  </div>

  <Nav />
    <div>
      <p>The current time is {{ time }}</p>
    </div>
</template>

<script>
  import Nav from '../Shared/Nav.vue';

  export default {
    components: {
      Nav,
    },
    props: {
      time: String,
    },
  };
</script>
