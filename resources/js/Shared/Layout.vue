<template>
  <Head>
    <title>SPA</title>
  </Head>

  <section class="p-6 bg-gray-200">
    <header class="flex justify-between">
      <h1 class="text-3xl font-bold">SPA</h1>

      <Nav></Nav>
    </header>
  </section>

  <section class="p-6">
    <div class="max-w-3xl mx-auto">
      <slot></slot>
    </div>
  </section>
</template>

<script setup>
  import Nav from './Nav.vue';
</script>
