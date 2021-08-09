<template>
  <div>
    <router-link v-bind:to="{name:'Create'}">
      <button>新規追加</button>
    </router-link>
    <router-link v-bind:to="{name:'Author'}">
      <button>著者一覧</button>
    </router-link>
    <router-link v-bind:to="{name:'Title'}">
      <button>作品一覧</button>
    </router-link>
  </div>
</template>

<script>
export default {
  
}
</script>