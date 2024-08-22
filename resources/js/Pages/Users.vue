<template>
  <Head>
    <title>Users</title>
  </Head>

  <div class="text-3xl">
    <h1>Users</h1>
  </div>

  <ul>
    <li
        v-for="user in users"
        :key="user.id"
        v-text="user.first_name + ' ' + user.last_name">
    </li>
  </ul>
</template>

<script setup>
  defineProps({ users: Array });
</script>
