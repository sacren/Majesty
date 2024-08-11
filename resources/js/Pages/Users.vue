<template>
  <Head>
    <title>Users</title>
  </Head>

  <div class="text-3xl">
    <h1>Users</h1>
  </div>

  <div>
    <p>The current time is {{ $page.props.time[0] }}</p>

    <Link href="/spa/users" class="text-blue-500 hover:underline">
    Update Time
    </Link>
  </div>
</template>

<script setup>
  import { Head } from '@inertiajs/vue3';
</script>
