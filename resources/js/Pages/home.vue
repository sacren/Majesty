<template>
  <div>
    <h1>Hello, {{ name }}!</h1>
  </div>
  <p>These are the available sizes: </p>
  <ul>
    <li v-for="i in sizes" v-text="i"></li>
  </ul>
</template>

<script>
  export default {
    props: {
      name: String,
      sizes: Array,
    },
  };
</script>
