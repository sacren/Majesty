<template>
  <Head>
    <title>Home</title>
    <meta type="description" content="Home" head-key="description">
  </Head>

  <div class="text-3xl">
    <h1>Home</h1>
  </div>

  <div>
    <p>The current time is {{ $page.props.time[0] }}</p>

    <Link href="/spa" class="text-blue-500 hover:underline">
    Update Time
    </Link>
  </div>
</template>
