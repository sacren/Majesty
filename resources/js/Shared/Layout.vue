<template>
  <slot></slot>
  <Nav></Nav>
</template>

<script>
  import Nav from './Nav.vue';

  export default {
    components: {
      Nav,
    },
  };
</script>
