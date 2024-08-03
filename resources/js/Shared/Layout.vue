<template>
  <section class="p-6 bg-gray-200">
    <header class="flex justify-between">
      <h1 class="text-3xl font-bold">SPA</h1>

      <Nav></Nav>
    </header>
  </section>

  <section class="p-6">
    <slot></slot>
  </section>
</template>

<script>
  import Nav from './Nav.vue';

  export default {
    components: {
      Nav,
    },
  };
</script>
